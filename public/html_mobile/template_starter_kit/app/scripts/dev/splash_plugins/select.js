; (function ($, window, undefined) {
  'use strict';

  let pluginName = 'select';

  function Plugin(element, options) {
    this.element = $(element);
    this.options = $.extend({}, $.fn[pluginName].defaults, this.element.data(), options);
    this.init();
  }

  Plugin.prototype = {
    updateMultiSelect: function(source, target, button){
      var that = this,
          selectedLi = source.find('.selected'),
          arrV = [],
          arr = [];

      if(selectedLi.length){
        selectedLi.each(function(index,item){
          arrV.push(item.getAttribute('data-value'));
          arr.push($(item).text());
        });
      } else {
        arr.push(target.attr('title'));
      }
      target.val(arrV);
      button.attr('data-value',arrV.join('|')).text(arr.join(', '));
      if(that.options.isInited !== null && that.options.isInited){
        if(this.options.afterChange && $.isFunction(this.options.afterChange)) this.options.afterChange(that);
      }
    },
    init: function () {
      let that = this,
          el = that.element,
          pre_classes = el.attr('class')!==undefined?el.attr('class'):'',
          options = el.children('option[value!=""]'),
          numberOfOptions= options.length,
          btnDropdown = '',
          btnDropdownTitle = el.attr('title'),
          flip = el.data('flip'),
          $doc = $(document);

      that.options.isInited = null;
      function intallize() {
        let multipleClass = el.attr('multiple') === null || el.attr('multiple') === undefined ? ' ' : ' multiple';
        el.wrap('<div class="select-custom ' + pre_classes + multipleClass + '"></div>');

        var $select = el.parent();
        $select.addClass('dropdown');

        if (flip === undefined) flip = true;

        btnDropdown = '<button class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>';

        var optionHTML='<ul class="dropdown-menu" data-flip="'+flip+'">';
        for (var i = 0; i < numberOfOptions; i++) {
          var option = $(options[i]);
          if(options[i].getAttribute('selected')!==null){
            btnDropdownTitle = option.text();
            optionHTML+='<li class="selected" data-value="'+option.val()+'">'+option.text()+'<span class="ion ion-md-checkmark"></span></li>';
          }else{
            optionHTML+='<li data-value="'+option.val()+'">'+option.text()+'<span class="ion ion-md-checkmark"></span></li>';
          }
        }
        optionHTML+='</ul>';
        btnDropdown +=  btnDropdownTitle + '</span><i class="ion ion-ios-arrow-down"></i></button>';
        $select.append(btnDropdown);
        $select.append(optionHTML);

        $doc.off('click','.select-custom [data-value]').on('click','.select-custom [data-value]',function(e){
          if(e.target.getAttribute('data-value')!==undefined){
            e.stopPropagation();
            var $this = $(this),
                $root = $this.parents('.select-custom'),
                $btn = $root.find('.btn-link'),
                $sel = $root.children('select'),
                $li = $this.siblings();
            if(!$root.hasClass('multiple')){
              if(!$this.hasClass('selected')){
                $li.removeClass('selected');
                $this.addClass('selected');
                $sel.val($this.attr('data-value'));
                $btn.children('span').text($this.text());
                $btn.click();
                $sel.trigger('change');
              }
            }else{
              if($sel.attr('data-select-all-value')!=='1'){
                $this.toggleClass('selected');
                that.updateMultiSelect($this.parent(),$sel,$btn.children('span'));
              }else{
                if($this.attr('data-value')!=='all'){
                  var li = $li.filter('[data-value="all"]');
                  li.removeClass('selected');
                  $this.toggleClass('selected');
                  that.updateMultiSelect($this.parent(),$sel,$btn.children('span'));
                }else{
                  $li.removeClass('selected');
                  $this.addClass('selected');
                  that.updateMultiSelect($this.parent(),$sel,$btn.children('span'));
                }
              }
            }
          }
        });

        el.on('change',function(){
          if(el.attr('multiple') === null || el.attr('multiple') === undefined){
            var $root = $(this).parent(),
                $li = $root.find('li'),
                $btn = $root.find('.btn-link'),
                $t = $root.find('li[data-value="'+el.val()+'"]');
            if(!$t.hasClass('active')){
              $li.removeClass('active');
              $t.addClass('active');
              $btn.children('span').text($t.text());
            }
            if(!$t.length) {
              $btn.children('span').text(el.attr('title'));
            }
            if(this.options.afterChange && $.isFunction(this.options.afterChange)) this.options.afterChange(that);
          }
        });

        function reFlip(data, dropdownToggle, dropdownMenu) {
          if (data.flipped) {
            var height = -dropdownMenu.outerHeight(true) - that.options.marginTop;
            dropdownToggle.addClass('drop-up');
            dropdownMenu.css('transform', 'translate3d(0px, '+height+'px, 0px)');
            el.closest('.widget').css('z-index', 99999);
          } else {
            dropdownToggle.removeClass('drop-up');
            el.closest('.widget').css('z-index', 3);
          }
        }

        $select.on('shown.bs.dropdown',function(){
          el.parent().addClass('open');
          var dropdownToggle  = $select.find('.dropdown-toggle'),
              dropdownMenu    = $select.find('.dropdown-menu'),
              flip = true,
              escapeWithReference = false,
              maxHeight = $(window).height() - ($select.offset().top - $(window).scrollTop() + 50);

          if (!dropdownMenu.data('flip')) {
            flip = false;
            escapeWithReference = true;
          }
          var popper = new Popper(dropdownToggle, dropdownMenu, {
            modifiers: {
              flip: {
                enabled: flip
              },
              preventOverflow: {
                escapeWithReference: escapeWithReference
              }
            },
            onCreate: function (data) {
              reFlip(data, dropdownToggle, dropdownMenu);
            },
            onUpdate: function (data) {
              reFlip(data, dropdownToggle, dropdownMenu);
            }
          });
          dropdownMenu.removeAttr('style');
          if ($('.modal.show').is(':visible') && maxHeight < parseInt(dropdownMenu.css('maxHeight'))) {
            dropdownMenu.css('maxHeight', maxHeight);
          }
        });

        $select.on('hidden.bs.dropdown',function(){
          el.parent().removeClass('open');
          var dropdownMenu    = $select.find('.dropdown-menu');
          dropdownMenu.css('maxHeight', 0);
        });

        // set default value label for multiple
        if(el.attr('multiple')!==null&&el.attr('multiple')!==undefined){
          var $btn = $select.find('.btn-link'),
              $sel = $select.children('select');
          that.updateMultiSelect($select.find('.dropdown-menu'),$sel,$btn.children('span'));
        }
      }
      intallize();
      that.options.isInited = true;
      if(this.options.afterInit && $.isFunction(this.options.afterInit)) this.options.afterInit(that);
    },

    reset: function() {
      let that = this,
          $this = $(that.element),
          $root = $this.parents('.select-custom'),
          $btn = $root.find('.btn-link'),
          $li = $root.find('.dropdown-menu li');
      $li.removeClass('selected');
      $this.val('');
      $btn.children('span').text($this.attr('title'));
      $this.trigger('change');
      if($this.attr('multiple')!==null && $this.attr('multiple')!==undefined){
        that.updateMultiSelect($root.find('.dropdown-menu'), $this, $btn.children('span'));
      }
    },

    destroy: function () {
      $.removeData(this.element[0], pluginName);
    },

    update: function (){
      let that = this,
          el = that.element,
          ul = el.parent().find('.dropdown-menu');

      if(el.attr('multiple')==null||el.attr('multiple')===undefined){
        ul.find('[data-value="'+el.val()+'"]').trigger('click');
      }else{
        for(var i=0,len=el.val().length;i<len;i++){
          ul.find('[data-value="'+el.val()[i]+'"]').trigger('click');
        }
      }
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
      return instance;
    });
  };

  $.fn[pluginName].defaults = {
    marginTop: 15
  };

  $(function () {
    $('[data-' + pluginName + ']')[pluginName]();
    // Testing
    var btnReset = $('[data-reset]');
    btnReset.on('click.reset', function(e){
      e.preventDefault();
      $('[data-select]')['select']('reset');
    });
    // End testing
  });

}(jQuery, window));
