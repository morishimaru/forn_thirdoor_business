// this plugin need https://videojs.com/
/* global videojs: true */
; (function ($, window, undefined) {
  'use strict';

  let pluginName = 'lightbox';

  function Plugin(element, options) {
    this.element = $(element);
    this.options = $.extend({}, $.fn[pluginName].defaults, this.element.data(), options);
    this.init();
  }

  Plugin.prototype = {
    init: function () {
      let that = this,
          el = that.element,
          videoEl, sliderEl,
          html;
      // prepare div modal
      that.modal = $('#lighboxModal'),
          html = $('<div id="lighboxModal" class="modal fade modal"><div class="modal-dialog" role="document">  <div class="modal-content">    <div class="modal-header">      <button class="close" type="button" data-dismiss="modal" aria-label="Close">        <span class="ion ion-md-close" aria-hidden="true"></span>      </button>    </div>  <div class="modal-body"></div>  </div></div></div>');
      if(that.modal.length===0){
        $('body').append(html);
        that.modal = $('#lighboxModal');
      }
      el.attr('data-target','#lighboxModal');
      // create first frame screenshot for lightbox video
      that.getFirstFrameVideo();

      function renderData(element, callback){
        switch (element.data('type')){
          case 'video':
            that.modal.attr('class','modal fade modal-video '+element.data('size'));
            var obj = {
              controlBar: {
                volumePanel: {inline: false}
              }
            };
            let video = '<video id="lightboxVideo" class="video-js"  preload="auto" poster="'+element.data('poster')+'" autoplay controls data-setup='+JSON.stringify(obj)+'><source src="'+element.data('contentUrl')+'" type="video/mp4"></video>';
            if(element.data('contentUrl').indexOf('youtube.com')!==-1){
              obj = {
                techOrder: ['youtube'],
                sources: [{
                    type: 'video/youtube',
                    src: element.data('contentUrl')
                }],
                youtube: {
                  customVars: {
                    wmode: 'transparent'
                  }
                },
                controlBar: {
                  volumePanel: {inline: false}
                }
              };
              video = '<video id="lightboxVideo" class="video-js" preload="auto" poster="'+element.data('poster')+'" autoplay controls data-setup='+JSON.stringify(obj)+'></video>';
            }
            that.modal.find('.modal-body').html(video);
            callback();
            break;
          case 'article':
          case 'speaker':
            that.modal.attr('class','modal fade modal-'+element.data('type'));
            // Site.showLoading(modal.find('.modal-content'));
            callback();

            $.ajax({
              url: Site.getAPIServer() + element.data('contentUrl'),
              success: function(data){
                if(data.result==='OK'){
                  $.when(Site.getTemplate(element.data('template'))).done(function(template) {
                    that.modal.find('.modal-body').html(template(data.data));
                    //callback();
                    Site.hideLoading(that.modal.find('.modal-content'));
                  });
                }
              },
              error: function(){
                $.when(Site.getTemplate(element.data('template'))).done(function(template) {
                  that.modal.find('.modal-body').html(template({}));
                  Site.hideLoading(that.modal.find('.modal-content'));
                  //callback();
                });
              },
              complete: function(){
                //console.log(jqXHR);
              }
            });

            break;
          case 'photo':
            that.modal.attr('class','modal fade modal-'+element.data('type'));
            let photo = '<img src="'+element.data('contentUrl')+'" alt="'+element.attr('title')+'">';
            that.modal.find('.modal-body').html(photo);
            callback();
            break;
          case 'photo-slider':
            that.modal.attr('class','modal fade modal-'+element.data('type'));
            let parent = element.parents('.owl-carousel'),
                img = parent.find('.owl-item:not(.cloned) img'),
                html = '',
                indexActual = element.parents('.owl-item').index(),
                index = parent.find('.owl-item:not(.cloned)').index(element.parents('.owl-item')),
                itemActive = parent.find('.owl-item.active');

            if (element.parents('.owl-item').hasClass('cloned')) {
              if (indexActual <= itemActive.length) {
                index = itemActive.length + 1 + itemActive.index(element.parents('.owl-item'));
              } else {
                index = itemActive.index(element.parents('.owl-item')) - 1;
              }
            }
            if (!that.modal.find('.owl-carousel').length) {
              for (let i=0,len=img.length;i<len;i++) {
                html += img.eq(i)[0].outerHTML;
              }
              that.modal.find('.modal-body').html('<div class="owl-carousel">'+html+'</div>');
              sliderEl = that.modal.find('.owl-carousel');
              sliderEl.owlCarousel({
                singleItem : true,
                items:1,
                slideBy:1,
                nav: true,
                startPosition: index,
                autoplay: false,
                autoplayTimeout: 5000,
                loop: (img.length>1),
                autoHeight: true,
                responsiveRefreshRate : 200,
              });

            } else {
              sliderEl.trigger('to.owl.carousel', index);
            }
            $(document).off('keyup.slider').on('keyup.slider', function (e) {
              if (e.keyCode === 37) {
                sliderEl.find('.owl-prev').click();
              } else if (e.keyCode === 39){
                sliderEl.find('.owl-next').click();
              }
            });
            callback();
            break;
          default:
            return true;
        }
      }

      // event for button open modal
      $('body').off('click.openModal', '[data-' + pluginName + ']').on('click.openModal', '[data-' + pluginName + ']', function (e) {
        e.preventDefault();
        renderData($(this), function(){
          that.modal.modal({show:true});
        });
      });

      if(Site.initLightbox !== true ){
        that.modal.on('show.bs.modal',function(){
          Site.fixPositionWhenOpen();
          var video = document.getElementById('lightboxVideo');
          if(video!==null){
            videoEl = videojs(video, JSON.parse(video.getAttribute('data-setup')), function(){});
          }
        });

        that.modal.on('shown.bs.modal', function(){
          var modalContent = $(this).find('.modal-content'),
              heightView = $(window).innerHeight();
          if(modalContent.outerHeight() > heightView) {
            that.modal.addClass('modal-long-content');
          }
        });

        that.modal.on('hide.bs.modal',function(){
          Site.fixPositionWhenClose();
          var video = document.getElementById('lightboxVideo');
          if(video!==null){
            videoEl.pause();
          }
          that.modal.removeClass('modal-long-content');
          $(document).off('keyup.slider');
        });
        Site.initLightbox = true;
      }
    },
    getFirstFrameVideo: function () {
      let that = this,
          element = that.element,
          options = that.options;

      if (options.type !== 'video') {
        return false;
      }
      if (!options.poster.length && !element.find('img').length) {
        let id = Site.getIdVideoYoutube(options.contentUrl);
        element.html('<img src="https://i.ytimg.com/vi/'+id+'/maxresdefault.jpg" alt="'+element.attr('title')+'">');
      }
    },
    destroy: function () {
      $.removeData(this.element[0], pluginName);
    }
  };

  $.fn[pluginName] = function (options, params) {
    return this.each(function () {
      let instance = $.data(this, pluginName);
      if (!instance) {
        $.data(this, pluginName, new Plugin(this, options));
      } else if (instance[options]) {
        instance[options](params);
      }
    });
  };

  $.fn[pluginName].defaults = {
  };

  $(function () {
    $('[data-' + pluginName + ']')[pluginName]();
  });

}(jQuery, window));
