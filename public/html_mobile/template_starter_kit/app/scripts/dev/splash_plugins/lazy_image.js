; (function ($, window, undefined) {
  'use strict';

  let pluginName = 'lazy';

  function Plugin(element, options) {
    this.element = $(element);
    this.options = $.extend({}, $.fn[pluginName].defaults, this.element.data(), options);
    this.init();
  }

  Plugin.prototype = {
    init: function () {
      let that = this,
          el = that.element,
          w = $(window);

      initLazyImage();

      function initLazyImage() {

        //console.log(allImages);
        const options = {
          rootMargin: '0px',
          threshold: 0.2
        };

        //const observer = new IntersectionObserver(handleIntersection, options);
        var observer;
        if ('IntersectionObserver' in window) {
          // Observer code
          observer = new IntersectionObserver(handleIntersection, options);
          [...el].map(img => {
            observer.observe(img);
            img.classList.add('monitored');
          });
        } else {
          [...el].map(image => loadImage(image));
        }

        function handleIntersection(entries) {
          entries.map(entry => {
            let img = entry.target;

            if (entry.intersectionRatio > 0.2) {
              //console.log(img.getAttribute('data-lazy-src'));
              loadImage(img);
              observer.unobserve(img);
            }
          });
        }

      }

      function loadImage(image) {
        const src = image.getAttribute('data-lazy');
        fetchImage(src).then(() => {
          //console.log('image fetched');
          image.src = src;
          image.classList.add('loaded');
          image.classList.add('shown');

        }).catch(()=>{
          //image.src = '/static/images/no_photo.png';
          image.classList.add('shown','error');
        });
      }

      function fetchImage(url) {
        return new Promise((resolve, reject) => {
          var image = new Image();
          image.src = url;
          image.onload = resolve;
          image.onerror = reject;
        });
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

  // $.fn[pluginName].defaults = {

  // };

  // $(function () {
  //   $('img[data-' + pluginName + ']')[pluginName]();
  // });

}(jQuery, window));
