/**
 *  @name plugin
 *  @description description
 *  @version 1.0
 *  @options
 *    option
 *  @events
 *    event
 *  @methods
 *    init
 *    publicMethod
 *    destroy
 */
; (function ($, window, undefined) {
  'use strict';

  var pluginName = 'detect-character';

  function Plugin(element, options) {
    this.element = $(element);
    this.options = $.extend({}, $.fn[pluginName].defaults, this.element.data(), options);
    this.init();
  }

  Plugin.prototype = {
    init: function () {
      var that = this,
          el = that.element;
      el.find('*').each(function () {
        var ele = $(this);
        if (ele.length > 0 && ele.html().length > 0) {
          if (ele.is('ol') || ele.is('ul')) {
            ele = $(this).find('li');
            if (ele.length > 0 && ele.html().length > 0) {
              ele.each(function() {
                that.wrapCharacter($(this), $(this).html().trim());
              });
            }
          } else if (!ele.is('script') && !ele.is('form')) {
            that.wrapCharacter(ele, ele.html().trim());
          }
        }
      });
    },

    wrapCharacter: function(ele, str) {
      var that = this,
          options = that.options,
          regex,
          htmlTag = options.htmlTag;
      if (str.length > 0) {
        var result,
            arr = [],
            r = Math.random().toString(36);
        
        if ($('html').hasClass('ie') || $('html').hasClass('edge') || $('html').hasClass('firefox')) { // update regex for IE, Edge, Firefox
          regex = /[\u3000-\u303F]|[\u3040-\u309F]|[\u30A0-\u30FF]|[\uFF00-\uFFEF]|[\u4E00-\u9FAF]|[\u2605-\u2606]|[\u2190-\u2195]|\u203B/g; 
        } else {
          regex = new RegExp(options.regexPattern, options.regexFlag);
        }
        while (result = regex.exec(str)) {
          arr.push(result[0]);
        }
        if (arr.length > 0) {
          for (var i = 0; i < arr.length; i++) {
            str = str.replace(arr[i], r + i);
          }
          for (var j = 0; j < arr.length; j++) {
            str = str.replace(r + j,'<'+htmlTag+'>'+arr[j]+'</'+htmlTag+'>');
          }
          ele.html(str);
        }
        if (ele.find('a').length > 0) {
          ele.find('a').each(function () {
            var originHref = $(this).attr('href'),
                originTitle = $(this).attr('title');
            if (originHref !== undefined && originHref.length > 0 && originHref.indexOf('<'+htmlTag+'>') !== -1) {
              var hrefClone = originHref.replace('<'+htmlTag+'>', ''),
                  newHref = hrefClone.replace('</'+htmlTag+'>', '');
              $(this).attr('href', newHref);
            }
            if (originTitle !== undefined && originTitle.length > 0 && originTitle.indexOf('<'+htmlTag+'>') !== -1) {
              var titleClone = originTitle.replace('<'+htmlTag+'>', ''),
                  newTitle = titleClone.replace('</'+htmlTag+'>', '');
              $(this).attr('title', newTitle);
            }
          });
        }
      }
    },

    destroy: function () {
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
    regexPattern: /(\p{Script=Hani})+/,
    regexFlag: 'gu',
    htmlTag: 'chinese'
  };

  $(function () {
    $('[data-' + pluginName + ']').on('customEvent', function () {});

    $('[data-' + pluginName + ']')[pluginName]();
  });

}(jQuery, window));
