//darle una revision


  (function($) {
  
  
    var marginSlider = document.getElementById('slider-margin');
    if (marginSlider != undefined) {
        noUiSlider.create(marginSlider, {
              start: [500],
              step: 10,
              connect: [true, false],
              tooltips: [true],
              range: {
                  'min': 0,
                  'max': 1000
              },
              format: wNumb({
                  decimals: 0,
                  thousand: ',',
                  prefix: '$ ',
              })
      });
    }
    $('#reset').on('click', function(){
        $('#register-form').reset();
    });
  
    $('#register-form').validate({
      rules : {
          first_name : {
              required: true,
          },
          last_name : {
              required: true,
          },
          company : {
              required: true
          },
          email : {
              required: true,
              email : true
          },
          phone_number : {
              required: true,
          },
          ID: {
              required: true,
          }
      },
      onfocusout: function(element) {
          $(element).valid();
      },
  });
  
      jQuery.extend(jQuery.validator.messages, {
          required: "",
          remote: "",
          email: "",
          url: "",
          date: "",
          dateISO: "",
          number: "",
          digits: "",
          creditcard: "",
          equalTo: ""
      });
  })(jQuery);
  
  