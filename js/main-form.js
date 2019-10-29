(function($) {


  $('#opcion').parent().append('<ul class="list-item" id="newopcion" name="opcion" ></ul>');

  $('#opcion option').each(function(){
      $('#newopcion').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
  });
  $('#opcion').remove();
  $('#newopcion').attr('id', 'opcion');
  $('#opcion li').first().addClass('init');
  $("#opcion").on("click", ".init", function() {
      $(this).closest("#opcion").children('li:not(.init)').toggle();
  });
  
  var allOptions = $("#opcion").children('li:not(.init)');
  $("#opcion").on("click", "li:not(.init)", function() {
      allOptions.removeClass('selected');
      $(this).addClass('selected');
      $("#opcion").children('.init').html($(this).html());
      allOptions.toggle();
  });

  

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

(function($) {

    $('#opcion1').parent().append('<ul class="list-item" id="newopcion1" name= "opcion1" ></ul>');
    $('#opcion1 option').each(function(){
        $('#newopcion1').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#opcion1').remove();
    $('#newopcion1').attr('id', 'opcion1');
    $('#opcion1 li').first().addClass('init');
    $("#opcion1").on("click", ".init", function() {
        $(this).closest("#opcion1").children('li:not(.init)').toggle();
    });
    
    var allOptions = $("#opcion1").children('li:not(.init)');
    $("#opcion1").on("click", "li:not(.init)", function() {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#opcion1").children('.init').html($(this).html());
        allOptions.toggle();
    });
  
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

  (function($) {

    $('#opcion2').parent().append('<ul class="list-item" id="newopcion2" name= "opcion2"></ul>');
    $('#opcion2 option').each(function(){
        $('#newopcion2').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#opcion2').remove();
    $('#newopcion2').attr('id', 'opcion2');
    $('#opcion2 li').first().addClass('init');
    $("#opcion2").on("click", ".init", function() {
        $(this).closest("#opcion2").children('li:not(.init)').toggle();
    });
    
    var allOptions = $("#opcion2").children('li:not(.init)');
    $("#opcion2").on("click", "li:not(.init)", function() {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#opcion2").children('.init').html($(this).html());
        allOptions.toggle();
    });
  
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