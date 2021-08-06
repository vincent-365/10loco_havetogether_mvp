<?php
include("./head.php");

$id = $_GET["id"];

$query = "SELECT * FROM ht_event WHERE event_id = $id;
";
$result = $havetohere_db->query($query);

$row = $result->fetch_array(MYSQLI_ASSOC);

$event_name = $row["event_name"];
$event_category = $row["event_category"];
$event_info_img = $row["event_info_img"];
$event_info = $row["event_info"];
$location = $row["event_location"];

//참가자 정보
$event_particpants  = $row["event_particpants"];
$event_particpants_pur = explode(",", $event_particpants);
$particpants = count($event_particpants_pur);

if ($particpants < 3) {
    if ($particpants == 1) {
        $particpants_info = "including ," . $event_particpants_pur[0];
    } else {
        $particpants_info = "including ," . $event_particpants_pur[0] . " and " . $event_particpants_pur[1];
    }
} else {
    $other = $particpants - 2;
    if ($other > 0) {
        $particpants_info = "including ," . $event_particpants_pur[0] . " and " . $event_particpants_pur[1] . " " . $other . " other";
    } else {
        $particpants_info = "including ," . $event_particpants_pur[0] . " and " . $event_particpants_pur[1];
    }
}
?>



<div class="meet-container">
    <div class="report">

        <div id="report-exit" style="display: flex;justify-content: flex-end;padding: 10px;"><img src="./bin/img/Group 6197.svg" alt="" style="width: 40px;"></div>
        <div class="report-box">
            <div class="report-title">Report</div>
            <div class="report-subtitle">Thank you for reporting this person / event.
                </br></br>
                Please precise the reason of your report.
                We will take a decision based on these information
                and external information.
            </div>
            <form action="">
                <input type="hidden" name="">
                <select name="order" form="myForm">
                    <option value="" disabled selected>Reason of the report</option>
                    <option value="americano">아메리카노</option>
                </select>
                <label for="">Message</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="SEND">
            </form>
        </div>
    </div>
    <div class="meet-main-title">
        Have <div class="meet-main-title-keyword"><? echo $event_category; ?></div> Together
    </div>
    <div class="meet-con-box">
        <div class="meet-bg-img">
            <img src="https://images.unsplash.com/photo-1517154421773-0529f29ea451?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
        </div>
        <div class="meet-main-info-box">
            <div class="meet-main-info-marginbox">
                <div class="meet-title">
                    <div class="info-title"><? echo $event_name; ?></div>
                    <!-- <div id="report"><i class="fas fa-share"></i></div> -->
                    <div id="share-btn" onClick="sendLinkDefault();"><i class="fas fa-share"></i></div>
                </div>
                <div class="info-details">
                    <!--정보-->
                    <div class="info-boxs">
                        <div class="details-title">The <? echo $event_category; ?> </div>
                        <div class="organizer-img">
                            <img src="<? echo $event_info_img; ?>" alt="">
                        </div>
                        <div class="info-text"><? echo $event_info; ?></div>
                    </div>
                </div>
                <div class="info-boxs">
                    <div class="details-title">Name</div>
                    <div class="organizer-img">
                        <img src="https://images.unsplash.com/photo-1564931941481-cb07951e9f2f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
                    </div>
                    <div class="info-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed interdum libero, ut elementum velit. Sed congue ante accumsan, faucibus.</div>
                </div>
                <!--참가자-->
                <div class="info-boxs">
                    <div class="details-title">Particpants</div>
                    <div class="info-text"><strong><? echo $particpants; ?> particpants</strong> <? echo $particpants_info; ?></div>
                    <!-- <div class="particpants">
                        <div class="test"><img src="https:\/\/uifaces.co\/our-content\/donated\/KOSDadHu.jpg" alt=""></div>
                        <div class="test"><img src="https:\/\/images.pexels.com\/photos\/415829\/pexels-photo-415829.jpeg?crop=faces&fit=crop&h=200&w=200&auto=compress&cs=tinysrgb" alt=""></div>
                        <div class="test"><img src="https:\/\/i.imgur.com\/D01FNwR.jpg" alt=""></div>
                    </div> -->
                </div>
                <!--주소-->
                <input type="hidden" name="location" id="location" value="<?php echo $location; ?>">
                <div class="info-boxs" style="margin-bottom: 5px;">
                    <div class="details-title">Location</div>
                    <div id="staticMap"></div>
                </div>
            </div>
        </div>
        <div class="meet_box">
            <div class="box_button">Let's Join</div>
        </div>
        <script type="text/JavaScript" src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
        <script>
            try {
                Kakao.init('d9d73704ebd737b5760c728a51e9eff6')

                function sendLinkDefault() {
                    Kakao.Link.sendDefault({
                        objectType: 'feed',
                        content: {
                            title: 'Have <? echo $event_category; ?> Together',
                            description: '<? echo $event_info; ?>',
                            imageUrl: '<? echo $event_info_img; ?>',
                            link: {
                                mobileWebUrl: 'http://106.242.52.73/meet.php?id=<? echo $id; ?>',
                                webUrl: 'http://106.242.52.73/meet.php?id=<? echo $id; ?>',
                            },
                        },
                        buttons: [{
                            title: '약속잡기',
                            link: {
                                mobileWebUrl: 'http://106.242.52.73/meet.php?id=<? echo $id; ?>',
                                webUrl: 'http://106.242.52.73/meet.php?id=<? echo $id; ?>',
                            },
                        }, ],
                    })
                };
                window.kakaoDemoCallback && window.kakaoDemoCallback()
            } catch (e) {
                window.kakaoDemoException && window.kakaoDemoException(e)
            }
        </script>
    </div>
</div>



<?php
include("./footer.php");
?>