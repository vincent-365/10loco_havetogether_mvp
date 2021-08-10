<?php
include("./head.php");

$id = $_GET["id"];

$query = "SELECT * FROM ht_event WHERE event_id = $id";
$result = $havetohere_db->query($query);

$row = $result->fetch_array(MYSQLI_ASSOC);

$event_name = $row["event_name"];
$event_type = $row["event_type"];
$date = $row["date"];
$time = $row["time"];
$event_participants = $row["event_participants"];
$main_img = $row["main_img"];
$event_details = $row["event_details"];
$event_location = $row["event_location"];
$location_x = $row["location_x"];
$location_y = $row["location_y"];
$location_details = $row["location_details"];
$event_organizer = $row["event_organizer"];
$organizer_name = $row["organizer_name"];
$organizer_details = $row["organizer_details"];
$xy = $location_y.",".$location_x;
//참가자 정보
$event_particpants  = $row["event_part_pel"];
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
        Have <div class="meet-main-title-keyword"><? echo $event_type; ?></div> Together
    </div>
    <div class="meet-con-box">
        <div class="meet-bg-img">
            <img src="<? echo $main_img ?>" alt="">
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
                        <div class="details-title">The <? echo $event_type; ?> </div>
                        <div class="organizer-img">
                            <img src="<? echo $main_img ?>" alt="">
                        </div>
                        <div class="info-text"><? echo $event_details; ?></div>
                    </div>
                </div>
                <div class="info-boxs">
                    <div class="details-title"><? echo $organizer_name; ?></div>
                    <div class="organizer-img">
                        <img src="<? echo $event_organizer ?>" alt="">
                    </div>
                    <div class="info-text"><? echo $organizer_details; ?></div>
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
                <input type="hidden" name="location" id="location" value="<?php echo $xy; ?>">
                <div class="info-boxs" style="margin-bottom: 5px;">
                    <div class="details-title">Location</div>
                    <div class="info-text"><? echo $event_location; ?></div>
                    <div class="info-text"><? echo $location_details; ?></div>
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
                            title: 'Have <? echo $event_name; ?> Together',
                            description: '<? echo $event_details; ?>',
                            imageUrl: '<? echo "http://106.242.52.73/".$main_img; ?>',
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