; (function ($, window, undefined) {
  'use strict';

  let pluginName = 'truncate-row';

  function Plugin(element, options) {
    this.element = $(element);
    this.options = $.extend({}, $.fn[pluginName].defaults, this.element.data(), options);
    this.init();
  }

  Plugin.prototype = {
    init: function () {
      let that = this,
          $el = that.element,
          line = 1,
          mH = 1,
          rowLimit = null;

      $el.data('original-text',$el.html());

      function getRowLitmitOption(callback) {
        if (typeof that.options.truncateRow === 'number') {
          rowLimit = that.options.truncateRow;
        } else {
          rowLimit = [];
          var arr = that.options.truncateRow.split(',');

          arr.map((x)=>{
            let _a = x.split(':');
            rowLimit.push({screen: _a[0],rows: _a[1]});
          });
        }

        if($.isFunction(callback)) callback();
      }

      function getBackgroundColor(e,callback) {
        var style = getComputedStyle(e);
        var c = tinycolor(style.backgroundColor);
        if (c.getAlpha()!==0){
          if($.isFunction(callback)) callback(c);
        }else{
          if(e.parentNode.tagName!=='HTML')getBackgroundColor(e.parentNode,callback);
        }
      }

      function truncateRow(){
        var rows;
        if($el.children().length) {
          line = $el.find('p').css('line-height');
        }else{
          line = $el.css('line-height');
        }

        if (typeof rowLimit !== 'number') {
          rows = parseInt(rowLimit[0].rows);
          for(let i=1,len=rowLimit.length;i<len;i++){
            if(window.innerWidth>=parseInt(rowLimit[i].screen)){
              rows = parseInt(rowLimit[i].rows);
              // break;
            }
          }
        } else {
          rows = rowLimit;
        }

        mH = parseInt(line) * rows;

        if($el[0].scrollHeight>mH){


          if (that.options.truncateRowType === 'fade') {
            getBackgroundColor($el[0],function(color){

              $el.css({
                'max-height': mH + 'px'
              });

              var c = color.toHex8String();
              var after = $el.find('.after');
              if(after.length===0){
                $el.append($('<span class="after"></span>'));
                after = $el.find('.after');
              }
              after.css({
                'height': line,
                'background-image': '-webkit-linear-gradient(to right, rgba(255, 255, 255, 0), '+c+')',
                'background-image': '-ms-linear-gradient(to right, rgba(255, 255, 255, 0), '+c+')',
                'background-image': '-o-linear-gradient(to right, rgba(255, 255, 255, 0), '+c+')',
                'background-image': '-moz-linear-gradient(to right, rgba(255, 255, 255, 0), '+c+')',
                'background-image': 'linear-gradient(to right, rgba(255, 255, 255, 0), '+c+')',
                // 'filter': 'progid:DXImageTransform.Microsoft.gradient(startColorstr=transparent, endColorstr='+c+')'
              });
            });
          } else {

            $el.ellipsis({
              lines: rows,
              ellipClass: 'ellip',
              responsive: true     // set to true if you want ellipsis to update on window resize. Default is false
            });

          }

        }
      }

      getRowLitmitOption(truncateRow);
      if($.isFunction(that.options.afterInit)) that.options.afterInit(that);

      $(window).on('resize orientationchange', _.debounce(function(){
        $el.html($el.data('original-text'));
        getRowLitmitOption(truncateRow);
        if($.isFunction(that.options.afterResize)) that.options.afterResize(that);
      }, 300));

    },

    destroy: function () {
      $.removeData(this.element[0], pluginName);
    },

    update: function() {
      this.init();
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
    afterInit : function(){}
  };

  $(function () {
    $('[data-' + pluginName + ']')[pluginName]();
  });

}(jQuery, window));
