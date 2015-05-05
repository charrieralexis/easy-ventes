$(document).ready(function(){
  /*Slider*/
  $('#slider .bxslider').bxSlider({
    mode: 'fade',
    speed:500,
    auto: true,
    adaptiveHeight: true,
    captions: true
  });
  
  /*Alertes*/
  $("[data-alert]").click(function(){
        var id = $(this).attr("data-alert");
        var action = $(this).attr("data-action");
        var user_id = $(this).attr("data-user");
        $.ajax({
           url : action+'?product_id='+id+'&user_id='+user_id+'',
           type : 'GET',
           data: $(this).serialize(),
           success : function(data){ // code_html contient le HTML renvoyé
                if (data === "success") {
                    $("[data-alert="+id+"],#high-"+id+"").remove();
                    $("#success-"+id+"").addClass('active-alert');
                }
           }
        });
    });
});

$(function () {

    var $window = $(window);

    $window.scroll(function () {

        if ($window.scrollTop() > 100){
            $('#menu').addClass('active');
        } else {
            $('#menu').removeClass('active');
        }
        

    });

});
