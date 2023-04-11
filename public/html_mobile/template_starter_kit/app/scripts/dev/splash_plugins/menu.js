; (function ($, window, undefined) {
  'use strict';

  let pluginName = 'toggle-menu',
      $window    = $(window);

  function Plugin(element, options) {
    this.element = $(element);
    this.options = $.extend({}, $.fn[pluginName].defaults, this.element.data(), options);
    this.init();
  }

  Plugin.prototype = {
    init: function () {
      let that = this,
        el = that.element,
        target = $(that.options.toggleTarget),
        ul = target.find('.nav-main__menu'),
        a1 = ul.find('.nav-main__menu-link,.nav-second__menu-link'),
        a2 = ul.find('.nav-main__menu-second-link'),
        sub = target.find('.nav-main__menu-link[href="javascript:void(0)"],.nav-main__menu-link + .ion,.nav-second__menu-link + .ion'),
        sub2 = target.find('.nav-main__menu-second-link + .ion');
      
      target.css('max-height',window.innerHeight-$('#header').height());

      el.on('click',function(){
        $('html').toggleClass('open-menu');
      });
      // var lis_3 = [];
      // for(var i=0,len=lis.length;i<len;i++){
      //   var x = lis[i].querySelector('.nav-main__menu-second');
      //   if(x!==null){
      //     var y = x.querySelector('.nav-main__menu-third');
      //     if(y!==null){
      //       lis_3.push(y);
      //       console.log($(y).css('width'));
      //       console.log($(y).offset());
      //     }
      //   }
      // }

      sub.on('click',function(e){
        e.preventDefault();
        e.stopPropagation();
        if(!Site.isDesktopScreen()){
          var p = $(e.target).parent();
          if(that.options.toggleAccordion!==false){
            if(p.hasClass('active')){
              p.removeClass('active');
            }else{
              sub.parent().removeClass('active');
              p.addClass('active');
            }
          }else{
            p.toggleClass('active');
          }
        }
      });
      
      sub2.on('click',function(e){
        e.preventDefault();
        e.stopPropagation();
        if(!Site.isDesktopScreen()){
          var p = $(e.target).parent();
          if(p.hasClass('active')){
            p.removeClass('active');
          }else{
            sub2.parent().removeClass('active');
            p.addClass('active');
          }
        }
      });

      function touchscreen_hover(el,els,e){
        if(Site.isDesktopScreen()){
          var p = el.parent(),
              ul = p.find('ul');
          if(ul.length){
            if(p.hasClass('hover')){
              p.removeClass('hover');
              return true;
            }else{
              e.preventDefault();
              e.stopPropagation();
              els.parent().removeClass('hover');
              p.addClass('hover');
              var w = ul.width(),
                  w1 = el.width(),
                  l = parseInt(el.offset().left);

              if(w+w1+l>=window.innerWidth-50){
                p.addClass('right');
              }else{
                p.removeClass('right');
              }
            }
          }else{
            return true;
          }
        }
      }

      a1.on('touchstart',function(e){
        var $t = $(this);
        //console.log($t);
        touchscreen_hover($t,sub,e);
      });

      a2.on('touchstart',function(e){
        var $t = $(this);
        //console.log($t.next());
        if($t.next().length){
          touchscreen_hover($t,sub2,e);
        }else{
          if($t.attr('target')==='_blank') {
            window.open($t.attr('href'));
          }else{
            window.location.replace($t.attr('href'));
          }
        }
      });

      a2.on('mouseenter',function(){
        var $t = $(this),
            p = $t.parent(),
            ul = p.find('ul');
        if(ul.length){
          var w = ul.width(),
              w1 = $t.width(),
              l = parseInt($t.offset().left);
          //console.log(w+w1+l);
          if(w+w1+l>=window.innerWidth-50){
            p.addClass('right');
          }else{
            p.removeClass('right');
          }
        }
      });

      $('html').on('touchstart',function(){
        $('#header .hover').removeClass('hover');
      });
      that.resizeStatusMenu(ul);
    },

    resizeStatusMenu: ul => {
      $window.off('resize.' + pluginName).on('resize.' + pluginName, function () {
        if (Site.isDesktopScreen() && $('html').hasClass('touch')) {
          let li = ul.find('li');
          if (li.filter('.active').length) {
            li.filter('.active').removeClass('active').addClass('hover');
          }
        }
      });
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
