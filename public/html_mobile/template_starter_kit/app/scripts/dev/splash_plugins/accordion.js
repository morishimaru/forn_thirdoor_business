; (function ($, window, undefined) {
  'use strict';

  var pluginName = 'accordion';

  function Plugin(element, options) {
    this.element = $(element);
    this.options = $.extend({}, $.fn[pluginName].defaults, this.element.data(), options);
    this.init();
  }

  function scrollToDiv(ele, duration) {
    var offsetTop = ele.offset().top;

    $('html, body').stop().animate({
      scrollTop: offsetTop
    }, duration);
  }

  Plugin.prototype = {
    init: function () {
      var that = this,
        ele = that.element,
        options = that.options,
        accordionOptions = $.extend({}, options.accordionOptions),
        btnTrigger = ele.find('[data-accordion-trigger]'),
        currentActiveContainer = $();

      function calculateLeft(container, leftOffset) {
        if (accordionOptions.type === 'fullWidth') {
          var windowWidth = $(window).width();
          if (windowWidth >= options.breakpoint) {
            container.css({ 'left': leftOffset, 'width': '100vw' });
          } else {
            container.css({ 'left': '', 'width': 'auto' });
          }
        } else {
          container.css({ 'left': leftOffset, 'width': 'auto' });
        }
      }

      function resizeActive() {
        var item = currentActiveContainer.parent().closest('[data-accordion-item]');
        if (item.length) {
          var leftOffset = -(item.offset().left + parseInt(item.css('paddingLeft')));
          calculateLeft(currentActiveContainer, leftOffset);
        }
      }

      btnTrigger.off('click.' + pluginName).on('click.' + pluginName, function (ev) {
        ev.preventDefault();

        var accordion = $(this),
          item = accordion.closest('[data-accordion-item]'),
          container = accordion.closest('[data-accordion-container]').next(),
          leftOffset = -(item.offset().left + parseInt(item.css('paddingLeft')));
        if (!currentActiveContainer.length) {
          container.stop().slideDown(options.duration, function(){
            container.addClass('show');
          });
          if (item && item.length) {
            scrollToDiv(item, options.duration);
          }
          // calculate left of modal when it open with full width
          calculateLeft(container, leftOffset);
          currentActiveContainer = container;
          $(window).trigger('resize');
        } else {
          currentActiveContainer.stop().slideUp(options.duration, function () {
            currentActiveContainer.removeClass('show');
            if (!currentActiveContainer.is(container)) {
              currentActiveContainer = container;
              container.slideDown(options.duration, function(){
                container.addClass('show');
              });
              if (item && item.length) {
                scrollToDiv(item, options.duration);
              }
              // calculate left of modal when it open with full width
              calculateLeft(container, leftOffset);
              $(window).trigger('resize');

            } else {
              currentActiveContainer = $();
            }
          });
        }
        $(window).on('resize orientationchange', _.debounce(resizeActive, 500));
      });
    },

    destroy: function () {
      this.element.find('[data-accordion-trigger]').off('click.' + pluginName);
      $.removeData(this.element[0], pluginName);
    }
  };

  $.fn[pluginName] = function (options, params) {
    return this.each(function () {
      var instance = $.data(this, pluginName);
      if (!instance) {
        $.data(this, pluginName, new Plugin(this, options));
      } else if (instance[options]) {
        instance[options](params);
      }
    });
  };

  $.fn[pluginName].defaults = {
    duration: 500,
    breakpoint: 768
  };

  $(function () {
    $('[data-' + pluginName + ']')[pluginName]();
  });

}(jQuery, window));
