<script type="text/JavaScript" src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>

<script>
    Kakao.init('d9d73704ebd737b5760c728a51e9eff6')

    $(function() {
        $(".box-button").click(function() {
            $('.join').css('display', 'flex');
        })
        $(".nav-button").click(function() {
            location.href = 'https://map.kakao.com/link/to/<?php echo $event_location ?>,<?php echo $location_y; ?>,<?php echo $location_x; ?>';
        })

        $('#join-col').click(function() {
            $('.join').css('display', 'none');
        })
        $('#Joins').click(function() {
            $('.join').css('display', 'none');
            var name = $('#names').val();
            $.ajax({
                type: "GET",
                url: "join.php",
                data: {
                    name: name,
                    id: <? echo $id; ?>
                },
                dataType: "text",
                success: function(res) {
                    if (res == "It's full of people") {
                        alert(res);
                    } else {
                        Kakao.Auth.login({
                            scope: 'TALK_MESSAGE',
                            success: function() {
                                Kakao.API.request({
                                    url: '/v2/api/talk/memo/default/send',
                                    data: {
                                        template_object: {
                                            object_type: 'feed',
                                            content: {
                                                title: 'Have <? echo $event_type; ?> Together',
                                                description: '<? echo $event_details; ?>',
                                                image_url: '<? echo "https://havetogether.com/" . $main_img; ?>',
                                                link: {
                                                    mobile_web_url: 'https://havetogether.com/comp.php?id=<? echo $id; ?>&name=' + name,
                                                    web_url: 'https://havetogether.com/comp.php?id=<? echo $id; ?>&name=' + name,
                                                },
                                            },
                                            buttons: [{
                                                title: '약속확인',
                                                link: {
                                                    mobile_web_url: 'https://havetogether.com/comp.php?id=<? echo $id; ?>&name=' + name,
                                                    web_url: 'https://havetogether.com/comp.php?id=<? echo $id; ?>&name=' + name,
                                                },
                                            }, ],
                                        },
                                    },
                                    success: function(res) {
                                        location.href = 'http://106.242.52.73/comp.php?id=<? echo $id; ?>&name=' + name;
                                    },
                                    fail: function(err) {
                                        alert('error: ' + JSON.stringify(err))
                                    },
                                })
                            },
                            fail: function(err) {
                                alert('failed to login: ' + JSON.stringify(err))
                            },
                        })
                    }
                }
            })
        })
    })
</script>
<script>
    try {
        Kakao.init('d9d73704ebd737b5760c728a51e9eff6')

        function sendTo() {
            Kakao.Auth.login({
                scope: 'TALK_MESSAGE',
                success: function() {
                    Kakao.API.request({
                        url: '/v2/api/talk/memo/default/send',
                        data: {
                            template_object: {
                                object_type: 'feed',
                                content: {
                                    title: 'Have <? echo $event_type; ?> Together',
                                    description: '<? echo $event_details; ?>',
                                    image_url: '<? echo "https://havetogether.com/" . $main_img; ?>',
                                    link: {
                                        mobile_web_url: 'https://havetogether.com/meet.php?id=<? echo $id; ?>',
                                        web_url: 'https://havetogether.com/meet.php?id=<? echo $id; ?>',
                                    },
                                },
                                buttons: [{
                                    title: '약속잡기',
                                    link: {
                                        mobile_web_url: 'https://havetogether.com/meet.php?id=<? echo $id; ?>',
                                        web_url: 'https://havetogether.com/meet.php?id=<? echo $id; ?>',
                                    },
                                }, ],
                            },
                        },
                        success: function(res) {
                            alert('success: ' + JSON.stringify(res))
                        },
                        fail: function(err) {
                            alert('error: ' + JSON.stringify(err))
                        },
                    })
                },
                fail: function(err) {
                    alert('failed to login: ' + JSON.stringify(err))
                },
            })
        }

        function sendLinkDefault() {
            Kakao.Link.sendDefault({
                objectType: 'feed',
                content: {
                    title: 'Have <? echo $event_type; ?> Together',
                    description: '<? echo $event_details; ?>',
                    imageUrl: '<? echo "https://havetogether.com/" . $main_img; ?>',
                    link: {
                        mobileWebUrl: 'https://havetogether.com/meet.php?id=<? echo $id; ?>',
                        webUrl: 'https://havetogether.com/meet.php?id=<? echo $id; ?>',
                    },
                },
                buttons: [{
                    title: '약속잡기',
                    link: {
                        mobileWebUrl: 'https://havetogether.com/meet.php?id=<? echo $id; ?>',
                        webUrl: 'https://havetogether.com/meet.php?id=<? echo $id; ?>',
                    },
                }, ],
            })
        };
        window.kakaoDemoCallback && window.kakaoDemoCallback()
    } catch (e) {
        window.kakaoDemoException && window.kakaoDemoException(e)
    }
</script>