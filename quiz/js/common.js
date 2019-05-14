$(document).ready(function() {

    if ($(window).width() <= 1199 ){
        $('.dropdown_button').on('click', function(){
            $('.dropdown_container').toggleClass('dropdown_open');
        });
        $(document).on('click', function(e) {
          if (!$(e.target).closest(".phone_box_with_dropdown").length) {
            $('.dropdown_container').removeClass('dropdown_open');
          }
          e.stopPropagation();
        });
    }

    $('.modal_btn').on('click', function(){
       $('#question').addClass('modal_open');
       $('body').addClass('modal_overlow');
    });
     $('.close').click(function(){
       $('.modal_wrapper').removeClass('modal_open'); 
       $('body').removeClass('modal_overlow');
    });

    $('.red_close').click(function(){
       $('.modal_wrapper').removeClass('modal_open'); 
       $('body').removeClass('modal_overlow');
    });
  
    $(document).mouseup(function (e){ 
        var div = $(".modal_content"); 
        if (!div.is(e.target) 
            && div.has(e.target).length === 0) { 
            $('.modal_wrapper').removeClass('modal_open'); 
            $('body').removeClass('modal_overlow');
        }
      });




      $(".phone--form").mask("+38(999) 999-9999");
  
});


var form_btn = $('#form_btn');
var form = $('#mailing');
var email = form.find($('input[type="email"]'));
var phone = form.find($('input[type="tel"]'));
//dsd

form.submit(function (e) {
    if (email.val() === '' && phone.val() === ''){
        console.log('false');
        return false;

    } else {
        e.preventDefault();

        $.ajax({
            url: 'mail_2.php',
            data: {
                email: email.val(),
                phone: phone.val(),
            },
            type: 'POST',
            dataType: "json",
            success: function(data){
                if (data.result === 'success'){
                $('#modal-mailing').addClass('modal_open');
                }
            },
            error: function () {
                return false;
            }
        });
        $('#mailing')[0].reset();
        return false;
    }

    return false;
});


