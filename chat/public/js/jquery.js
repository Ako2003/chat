$(document).ready(function(){
    $('.signup').hide();

});

$(document).ready(function(){
    $("#greeting").click(function(){
      $(this).animate({
        top: '150px',
        opacity: '0',
      });
      $('.signup').show(function(){
        $('.signup').animate({
            opacity: '1',
      });
    });
    });
});