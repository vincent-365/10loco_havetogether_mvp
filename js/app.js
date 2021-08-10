
$(function () {
    var type;
    document.documentElement.addEventListener('touchstart', function (event) {
        if (event.touches.length > 1) {
            event.preventDefault();
        }
    }, false);

    var lastTouchEnd = 0;

    document.documentElement.addEventListener('touchend', function (event) {
        var now = (new Date()).getTime();
        if (now - lastTouchEnd <= 300) {
            event.preventDefault();
        } lastTouchEnd = now;
    }, false);

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
        $(".report").css('display', 'block');
        $(".meet-main-title").css('display', 'none');
        $(".meet-con-box").css('display', 'none');
    })
    $("#report-exit").click(function () {
        $(".report").css('display', 'none');
        $(".meet-main-title").css('display', 'block');
        $(".meet-con-box").css('display', 'block');
    })
    $(".butt").click(function () {
        location.href = 'm_event.php';
    })
    $("#choice_cat").click(function () {
        $(".catcho").css('display', 'flex');
    });
    $("#choice_cat2").click(function () {
        $(".catcho").css('display', 'flex');
    });
    $(".catcho .catcho_box").click(function () {
        var cat = $(this).text();
        $("#choice_cat").text(cat);
        $("#choice_cat2").text(cat);
        $("#type").val(cat);
        type = cat;
        $(".catcho").css('display', 'none');
    });
    $("#catcho_clo").click(function () {
        $(".catcho").css('display', 'none');
    })
    $("#m_cloes").click(function () {
        location.href = '/';
    })
    $("#event-main-pic").click(function () {
        if (typeof (type) == "undefined") {
            alert("Please select Type")
        } else {
            var Api = "https://havetogether.com/json/json.php?type=" + type;
            $.getJSON(Api, function (json) {
                $.each(json, function (key, value) {
                    var div = $("<div>").attr("class", "modals_box").appendTo("#modals_img");
                    $("<img>").attr("src", value).appendTo(div);
                })
                $(".modals_box img").click(function () {
                    var img = $(this).attr("src");
                    $("#event-main-pic img").attr("src", img);
                    $(".event_img img").attr("src", img);
                    $("#main_img").val(img);
                    $(".modals").css('display', 'none');
                    $("#modals_img").empty();
                })
            });
            $(".modals").css('display', 'flex');
        }
    })
    $("#modals_clo").click(function () {
        $(".modals").css('display', 'none');
        $("#modals_img").empty();
    })
    var numbers = 0;
    $("#partnumber-plus").click(function () {
        if (numbers  > 3) {
        } else {
            numbers++
            $("#partnumber").text(numbers);
            $("#participants").val(numbers);
        }
    })
    $("#partnumber-minus").click(function () {
        if (numbers < 1) {
        } else {
            numbers--;
            $("#partnumber").text(numbers);
            $("#participants").val(numbers);
        }
    })

    $(".box_button").click(function () {
        $("#target").submit();
    })
    $(".organizer_img").click(function () {
        $(".profiles").css("display", "flex");
    })
    $(".profiles").change(function () {
        $(".profiles").css("display", "none");
    })
    $("#profiles_clo").click(function () {
        $(".profiles").css('display', 'none');
    })
    $("#address").click(function () {
        $("#mapsers").css('display', 'block');
    })
    $(".mapser_col").click(function () {
        $("#mapsers").css('display', 'none');
    })
    $("#mapserss").click(function () {
        $("#mapserss").val('');
    })
    // 콘텐츠 수정 :: 사진 수정 시 이미지 미리보기
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.organizer_img img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(":input[name='profile']").change(function () {
        if ($(":input[name='profile']").val() == '') {
            $('.organizer_img img').attr('src', '');
        }
        $('#imgViewArea').css({ 'display': '' });
        readURL(this);
    });

    // 이미지 에러 시 미리보기영역 미노출
    function imgAreaError() {
        $('.organizer_img img').css({ 'display': 'none' });
    }
})