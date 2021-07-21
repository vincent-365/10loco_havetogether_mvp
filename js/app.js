$(function () {
    $(".ht_button").click(function () {
        $(".list-box").toggleClass('open');
        $(".border_list").toggleClass('open');
        $(".cat-box").removeClass('open');
        $(".ht_button").css('display', 'none');
    })
    $(".cat-box #cat-menu").click(function () {
        var cat = $(this).text();
        $(".cat_name").text(cat);
    });
    $("#map").click(function () {
        $(".list-box").removeClass('open');
        $(".border_list").removeClass('open');
        $(".cat-box").removeClass('open');
        $(".ht_button").css('display', 'block');
    })
    $(".cat-2").click(function () {
        $(".cat-box").toggleClass('open');
        $(".list-box").removeClass('open');
        $(".border_list").removeClass('open');
    })
});