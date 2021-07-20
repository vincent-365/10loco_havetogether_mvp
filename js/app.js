$(function(){
    $(".cat").click(function() {
        $(".drop_box").toggleClass('open');
        $(".cont_box").removeClass('open');
        $(".HTbutton").css('display','block');
    })
    $(".drop_box li").click(function(){
       var menu = $(this).text();
       $(".cat").text(menu);
       $(".drop_box").toggleClass('open');
       console.log(menu);
    })
    $(".HTbutton").click(function(){
        $(".cont_box").toggleClass('open');
        $(".drop_box").removeClass('open');
        $(".HTbutton").css('display','none');
    })
    $("#map").click(function() {
        $(".drop_box").removeClass('open');
        $(".cont_box").removeClass('open');
        $(".HTbutton").css('display','block');
    })
});