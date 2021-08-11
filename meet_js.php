<script type="text/JavaScript" src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>

<script>
          Kakao.init('d9d73704ebd737b5760c728a51e9eff6')

    $(function() {
        $(".box-button").click(function() {
            $('.join').css('display', 'flex');
        })
        $('#join-col').click(function() {
            $('.join').css('display', 'none');
        })
        $('#Joins').click(function(){
            var name = $('#names').val();
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
                                        mobile_web_url: 'https://havetogether.com/comp.php?id=<? echo $id; ?>&name='+name,
                                        web_url: 'https://havetogether.com/comp.php?id=<? echo $id; ?>&name='+name,
                                    },
                                },
                                buttons: [{
                                        title: '약속잡기',
                                        link: {
                                            mobile_web_url: 'https://havetogether.com/comp.php?id=<? echo $id; ?>&name='+name,
                                            web_url: 'https://havetogether.com/comp.php?id=<? echo $id; ?>&name='+name,
                                        },
                                    },
                                ],
                            },
                        },
                        success: function(res) {
                            $('.join').css('display', 'none');
                            $('#tarrs').trigger("reset");
                            alert("카카오톡으로 일정을 보내드렸습니다.")
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
        })
    })
</script><script>
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
                                    },
                                ],
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