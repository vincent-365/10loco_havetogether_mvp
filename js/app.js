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
        $(".ht_button").css('display', 'block');
    })
    $("#report").click(function () {
        $(".report").css('display','block');
        $(".meet-main-title").css('display','none');
        $(".meet-con-box").css('display','none');
    })
    $("#report-exit").click(function () {
        $(".report").css('display','none');
        $(".meet-main-title").css('display','block');
        $(".meet-con-box").css('display','block');
    })
    $(".butt").click(function () {
        location.href = 'm_event.php';
    })
    $("#choice_cat").click(function () {
        $(".catcho").css('display','flex');
    });
    $(".catcho .catcho_box").click(function () {
        var cat = $(this).text();
        $("#choice_cat").text(cat);
        $(".catcho").css('display','none');
    });
    $("#catcho_clo").click(function () {
        $(".catcho").css('display','none');
    })
    $("#m_cloes").click(function () {
        location.href = '/';
    })
    $("#event-main-pic").click(function () {
        $(".modals").css('display','flex');
    })
    $("#modals_clo").click(function () {
        $(".modals").css('display','none');
    })
    $(".modals_box img").click(function () {
        var img = $(this).attr("src");
        $("#event-main-pic img").attr("src",img);
        $(".modals").css('display','none');
    })

    
})