/* Modal Ajax Plugin */
(function($, window, undefined) {
  'use strict';

  var pluginName = 'modal-ajax',
    Site = window.Site;

  function Plugin(element, options) {
    this.element = $(element);
    this.options = $.extend(
      {},
      $.fn[pluginName].defaults,
      this.element.data(),
      options
    );
    this.init();
  }

  Plugin.prototype = {
    init: function() {
      var that = this,
        options = that.options;

      $.when(Site.getTemplate(options.templatePopup)).done(function(
        templatePopup
      ) {
        that.templatePopup = templatePopup;
        that.initEvents();
      });
    },

    initEvents: function() {
      var that = this,
        ele = that.element,
        options = that.options,
        idPopup = ele
          .find('[' + options.triggerPopup + ']')
          .data('trigger-popup');
      that.popupModal = $('#' + idPopup);
      const aaa = ['a', 'b'];
      aaa.map(item => {
        console.log(item);
      });
      ele
        .off('click.' + pluginName, ['data-trigger-popup'])
        .on('click.' + pluginName, ['data-trigger-popup'], function(ev) {
          ev.preventDefault();
          var deferred = $.Deferred();
          Site.showLoader(true);
          $.ajax({
            type: options.type,
            url: options.ajaxUrl || '',
            dataType: options.dataType
          })
            .done(function(res) {
              var modalContainer = that.popupModal.find(
                '[' + options.modalContainer + ']'
              );
              modalContainer.replaceWith(that.templatePopup(res));
              Site.showLoader(false);
              that.popupModal.modal('show');
              deferred.resolve(res);
            })
            .fail(function() {
              Site.showLoader(false);
              deferred.reject();
            });
          return deferred.promise();
        });
    },

    destroy: function() {
      $.removeData(this.element[0], pluginName);
    }
  };

  $.fn[pluginName] = function(options, params) {
    return this.each(function() {
      var instance = $.data(this, pluginName);
      if (!instance) {
        $.data(this, pluginName, new Plugin(this, options));
      } else if (instance[options]) {
        instance[options](params);
      }
    });
  };

  $.fn[pluginName].defaults = {
    type: 'GET',
    dataType: 'json',
    ajaxUrl: './views/data/data-content-popup.json',
    templatePopup: './handlebars/popup-content.html',
    triggerPopup: 'data-trigger-popup',
    modalContainer: 'data-modal-container'
  };

  $(function() {
    $('[data-' + pluginName + ']')[pluginName]();
  });
})(jQuery, window);
