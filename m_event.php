<?php

include("./head.php");
?>
<div class="meet-main-title">
     Have <div class="meet-main-title-keyword" id="choice_cat">Blank</div> Together
</div>
<div id="m_cloes"><i class="far fa-times-circle"></i></div>
<div class="event-container">
     <div id="event-main-pic">
          <img src="./bin/img/picpic2.png" alt="">
     </div>
     <div class="event-infos">
          <form action="upload.php" method="get" id="target">
               <input type="hidden" name="type" id="type">
               <input type="hidden" name="main_img" id="main_img">
               <div class="form_boxs">
                    <div><input type="text" name="" id="" placeholder="Event Name"></div>
                    <div>
                         <div class="form_cat" id="choice_cat2">Type of event</div>
                    </div>
               </div>
               <div class="form_boxs">
                    <div>
                         <input type="date" name="date" id="date" placeholder="Date">
                    </div>
                    <div>
                         <input type="time" name="time" id="time" lang="" placeholder="Time">
                    </div>
               </div>
               <div class="particpantsss">
                    <div>Participants (max)</div>
                    <div class="particpantsssbt">
                         <div id="partnumber-minus" style="color:#52E48D"><i class="far fa-minus-square"></i></div>
                         <div id="partnumber" style="color:#52E48D">0</div>
                         <div id="partnumber-plus" style="color:#52E48D"><i class="far fa-plus-square"></i></div>
                    </div>
               </div>
               <div class="event_titles">Let's have</div>
               <div class="event_img"><img src="./bin/img/picpic.png" alt=""></div>
               <div class="location-details"><textarea name="describe" id="describe" cols="40" rows="5" description="Describe the event" placeholder="Describe the event details"></textarea></div>
               <div class="event_titles">Location</div>
               <div class="location-address"><input type="text" name="address" id="address" description="Address" placeholder="Address"></div>
               <div class="location-details"><textarea name="location" id="location" cols="40" rows="5" description="Location details" placeholder="Location details"></textarea></div>
               <div class="event_titles">Organizer</div>
               <div class="organizer_img"><img src="./bin/img/picpic.png" alt=""></div>
               <div class="location-address"><input type="text" name="name" id="name" description="Name" placeholder="Name"></div>
               <div class="location-details"><textarea name="organizerdet" id="organizerdet" cols="40" rows="5" description="Organizer details" placeholder="Organizer details"></textarea></div>
               <div class="profiles">
                    <input type="file" name="profile" id="profile">
               </div>
          </form>
     </div>
</div>

<div class="meet_box">
     <div class="box_button">Let's Join</div>
</div>
<div class="catcho">

     <div id="catcho_clo"><i class="fas fa-times"></i></div>
     <div class="catcho_box">Meal</div>
     <div class="catcho_box">Coffee</div>
</div>
<div class="modals">
     <div id="modals_clo"><i class="fas fa-times"></i></div>
     <div style="width: 100vw;overflow: scroll;margin: 30px 0px;" id="modals_img">
     </div>
</div>
<?php

include("./footer.php");

?>