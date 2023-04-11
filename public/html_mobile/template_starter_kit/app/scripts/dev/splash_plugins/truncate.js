/*global he:true, */
; (function ($, window, undefined) {
  'use strict';

  let pluginName = 'truncate-text',
      regexCount = /<\S[^>]*>/ig,
      regexAllClosedTag = /<\/[^>]>*>$|<\/[^>]*><\/[^>]*>.*/,
      regexSpace = /\s+/gm;
      // regexLastClosedTag = /<\/[^>]*>$/;

  function Plugin(element, options) {
    this.element = $(element);
    this.options = $.extend({}, $.fn[pluginName].defaults, this.element.data(), options);
    this.init();
  }

  Plugin.prototype = {
    init: function () {
      let that = this;
      that.truncate();
    },
    truncate: function () {
      let that = this,
          el = that.element,
          options = that.options,
          opTruncate = options.truncateText,
          text = el.text().trim(),
          htmlContent = he.decode(el.html().trim()).replace(regexSpace, ' '),
          html, htmlPlus, lastEl='', lastText, result;

      if ( text.length < opTruncate ) return;

      html = that.substring(htmlContent, opTruncate);
      htmlPlus = that.substring(htmlContent, opTruncate+options.lastString);
      if (html.match(regexAllClosedTag)) {
        lastEl = html.match(regexAllClosedTag)[0];
      }
      if (htmlPlus.match(regexCount)===null) {
        lastText = htmlPlus.substring(html.length, htmlPlus.length);
      } else {
        lastText = htmlPlus.substring(html.length-lastEl.length, htmlPlus.length-lastEl.length);
      }
      result = html.replace(regexAllClosedTag,'') + '<span class="truncate-text-fade">'+lastText+'</span>'+lastEl;

      el.data('original-html', htmlContent); //save the first text

      if (!$('html').hasClass('ie')) {
        el.html(text.length > opTruncate ? result : htmlContent);
        if (el.find('.truncate-text-fade').length) {
          that.setColor(el.find('.truncate-text-fade'));
        }
      } else {
        el.html(text.length > opTruncate ? html.replace(regexAllClosedTag,'') + options.delimiter + lastEl: htmlContent);
      }
    },
    setColor: function (el) {
      return el.css({
        'background-image': '-webkit-linear-gradient(to left, transparent, '+el.parent().css('color')+')',
        'background-image': '-ms-linear-gradient(to left, transparent, '+el.parent().css('color')+')',
        'background-image': '-o-linear-gradient(to left, transparent, '+el.parent().css('color')+')',
        'background-image': '-moz-linear-gradient(to left, transparent, '+el.parent().css('color')+')',
        'background-image': 'linear-gradient(to left, transparent, '+el.parent().css('color')+')',

        'filter': 'progid:DXImageTransform.Microsoft.gradient(startColorstr=transparent, endColorstr='+el.parent().css('color')+')'
      });
    },

    substring: function (html, number) {
      let regex = /<([^>\s]*)[^>]*>/g,
          arr = [], lastIndex = 0, arrHtml, result = '';

      while ((arrHtml = regex.exec(html)) && number) {
          let temp = html.substring(lastIndex, arrHtml.index).substr(0, number);
          result += temp;
          number -= temp.length;
          lastIndex = regex.lastIndex;

          if (number) {
              result += arrHtml[0];
              if (arrHtml[1].indexOf('/') === 0) {
                  arr.pop();
              } else if (arrHtml[1].lastIndexOf('/') !== arrHtml[1].length - 1) {
                  arr.push(arrHtml[1]);
              }
          }
      }
      result += html.substr(lastIndex, number);
      while (arr.length) {
          result += '</' + arr.pop() + '>';
      }
      return result;
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
    delimiter: '...',
    lastString: 10
  };

  $(function () {
    $('[data-' + pluginName + ']')[pluginName]();
  });

}(jQuery, window));
