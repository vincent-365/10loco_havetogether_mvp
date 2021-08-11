<?php
include("./head.php");

$id = $_GET["id"];

$hostname = $_SERVER["HTTP_HOST"];

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
$xy = $location_y . "," . $location_x;
$date2=date_create($date);
$time2 = date_create($time);
$dates = date_format($date2,"m-d");
$times = date_format($time2,"H:i");
//참가자 정보
$event_particpants  = $row["event_part_pel"];
$event_particpants_pur = explode(",", $event_particpants);
$particpants = count($event_particpants_pur);

if ($particpants < 3) {
    if ($particpants == 1) {
        $particpants_info = "including , " . $event_particpants_pur[0];
    } else {
        $particpants_info = "including , " . $event_particpants_pur[0] . " and " . $event_particpants_pur[1];
    }
} else {
    $other = $particpants - 2;
    if ($other > 0) {
        $particpants_info = "including , " . $event_particpants_pur[0] . " and " . $event_particpants_pur[1] . " " . $other . " other";
    } else {
        $particpants_info = "including , " . $event_particpants_pur[0] . " and " . $event_particpants_pur[1];
    }
}
?>
<style>
    .info-da {
        text-align: center;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .info-icons {
        padding: 10px;
        width: 50px;
        height: 50px;
        background: #fff;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-radius: 50%;
        -webkit-box-shadow: rgb(0 0 0 / 45%) 0px 1px 4px;
        box-shadow: rgb(0 0 0 / 45%) 0px 1px 4px;
        text-align: center;
    }

    .info-icons {
        font-size: 30px;
        color: var(--main-color);
        margin: 15px auto;
    }
</style>
<div class="meet-container">
    <div class="top-box">
        <div class="title">Have <strong><?php echo $event_type; ?></strong> Together</div>
    </div>
    <div class="info">
        <div class="main-img">
            <img src="<?php echo $main_img; ?>" alt="<?php echo $event_name; ?>">
        </div>
        <div class="meet-info">
            <!-- main-title -->
            <div class="main-title">
                <div class="m-title"><? echo $event_name; ?></div>
                <div id="share-btn" onClick="sendLinkDefault();"><i class="fas fa-share-alt"></i></div>
            </div>
            <!-- main-title -->

            <div class="info-da">
                <div class="info-bbox">
                    <div class="info-icons"><i class="fas fa-calendar-week"></i></div>
                    <div><?php echo $dates; ?></div>
                </div>
                <div class="info-bbox">
                    <div class="info-icons"><i class="fas fa-calendar-week"></i></div>
                    <div><?php echo $times; ?></div>
                </div>
                <div class="info-bbox">
                    <div class="info-icons"><i class="far fa-handshake"></i></div>
                    <div><?php echo $particpants . "/" . $event_participants; ?></div>
                </div>
            </div>

            <!-- Organizer -->
            <div class="info-title">The <?php echo $event_type; ?></div>
            <div class="info-img"><img src="<?php echo $main_img; ?>" alt="<?php echo $event_name; ?>"></div>
            <div class="info-text">
                <div class="icon"><i class="fas fa-comment-dots"></i></div>
                <? echo $event_details; ?>
            </div>
            <!-- Organizer -->

            <!-- Organizer -->
            <div class="info-title">Organizer</div>
            <div class="info-img"><img src="<? echo $event_organizer; ?>" alt="<? echo $organizer_name; ?>"></div>
            <div class="info-text">
                <div class="icon"><i class="far fa-user"></i></div>
                <? echo $organizer_name; ?>
            </div>
            <div class="info-text">
                <div class="icon"><i class="fas fa-comment-dots"></i></div>
                <? echo $organizer_details ?>
            </div>
            <!-- Organizer -->

            <!-- Participants -->
            <div class="info-title">Participants</div>
            <div class="info-text"><strong><? echo $particpants; ?> particpants</strong> <? echo $particpants_info; ?></div>
            <!-- Participants -->

            <!-- Location -->
            <div class="info-title">Location</div>
            <div class="info-text">
                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                <? echo $event_location; ?>
            </div>
            <div class="info-text">
                <div class="icon"><i class="fas fa-comment-dots"></i></div>
                <? echo $location_details; ?>
            </div>
            <input type="hidden" name="location" id="location" value="<?php echo $xy; ?>">
            <div id="staticMap" style="height:250px; border-radius: 25px;"></div>
            <!-- Location -->
        </div>
    </div>
    <div class="meet-box">
        <div class="box-button">Let's Join</div>
    </div>
</div>
<style>
    .join {
        width: 100vw;
        height: 100vh;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999;
        display: none;
    }

    div#input-box {
        display: flex;
        width: 240px;
        justify-content: space-between;
        margin: 20px 0px;
    }

    .join-box {
        background: #fff;
        padding: 45px 30px;
        border-radius: 25px;
        -webkit-box-shadow: rgb(0 0 0 / 45%) 0px 1px 4px;
        box-shadow: rgb(0 0 0 / 45%) 0px 1px 4px;
        position: relative;
    }

    .lable {
        width: 100px;
    }

    .inputs {
        width: 140px;
    }

    .inputs input[type="text"] {
        padding: 10px;
        display: block;
        margin: auto;
        font-size: 15px;
    }
</style>

<div class="join">
    <div class="join-box">
        <div id="join-col"><i class="far fa-times-circle"></i></div>
        <form action="" id="tarrs">
            <div style="text-align: center;">
                <div style="font-size: 30px;color: var(--main-color);font-weight: bold;">Have Together</div>
                <div style="font-size: 18px;color: #484848;">Join</div>
            </div>
            <div id="input-box">
                <div class="inputs"><input type="text" id="names" name="names" placeholder="Name"></div>
            </div>
            <!-- <div id="input-box">
                <div class="lable">E-mail</div>
                <div class="inputs"><input type="text"></div>
            </div> -->
            <div id="Joins" style="background: var(--main-color);border: 0;color: #fff;padding: 7px 45px;margin: auto;border-radius: 25px;font-size: 18px;display: block;text-align: center;width: 70px;">Join</div>
        </form>
    </div>
</div>



<?php
include("meet_js.php");
?>
<?php
include("./footer.php");
?>