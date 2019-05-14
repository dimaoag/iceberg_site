$(document).ready( function() {
    var form = $('#form');
    var url = form.attr('action');

    form.submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),
            success: function( response ) {
                $('#modal').addClass(' modal_open');
                $('body').addClass(' modal_style');
                form[0].reset();
            }
        });


        return false;
    });

$('.enter-popap').click(function(event){
  event.preventDefault();
  $('.modal').addClass('modal_open');
  $('body').addClass('modal_style');
});

$('.close-modal').click(function(){
  $('.modal').removeClass('modal_open');
  $('body').removeClass('modal_style');
});



});

