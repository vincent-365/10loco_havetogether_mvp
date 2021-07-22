<?php

include("./head.php");

?>
<div class="meet-container">
    <div class="report">
        <div id="report-exit" style="    display: flex;
    justify-content: flex-end;
    padding: 10px;"><img src="./bin/img/Group 6197.svg" alt="" style="width: 40px;"></div>
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
        Have <div class="meet-main-title-keyword">Food</div> Together
    </div>
    <div class="meet-con-box">
        <div class="meet-bg-img">
            <img src="https://images.unsplash.com/photo-1517154421773-0529f29ea451?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
        </div>
        <div class="meet-main-info-box">
            <div class="meet-main-info-marginbox">
                <div class="meet-title">
                    <div class="info-title">Kimbap</div>
                    <div id="report"><img src="./bin/img/warning-sign.svg" alt="" style="width: 20px;margin-right: 10px;"></div>
                </div>
                <div class="subinfo">
                    <div class="box-sizer">
                        <div class="subinfo-icon">
                            <img src="./bin/img/meeting-point.svg" alt="">
                        </div>
                        <div class="subinfo-info">Distance</div>
                        <div class="subinfo-info-det">1 KM</div>
                    </div>
                    <div class="box-sizer">
                        <div class="subinfo-icon">
                            <img src="./bin/img/time.svg" alt="">
                        </div>
                        <div class="subinfo-info">time</div>
                        <div class="subinfo-info-det">4:45 pm</div>
                    </div>
                    <div class="box-sizer">
                        <div class="subinfo-icon">
                            <img src="./bin/img/teamwork (1).svg" alt="">
                        </div>
                        <div class="subinfo-info">Particpants</div>
                        <div class="subinfo-info-det">1 KM</div>
                    </div>
                </div>
                <div class="info-details">
                    <!--정보-->
                    <div class="info-boxs">
                        <div class="details-title">The Food </div>
                        <div class="organizer-img">
                            <img src="https://images.unsplash.com/photo-1608731001805-187e9c904388?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
                        </div>
                        <div class="info-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed interdum libero, ut elementum velit. Sed congue ante accumsan, faucibus.</div>
                    </div>
                </div>
                <!--오픈한사람-->
                <div class="info-boxs">
                    <div class="details-title">Name <div class="details-title-details">★ 5</div>
                    </div>
                    <div class="organizer-img">
                        <img src="https://images.unsplash.com/photo-1564931941481-cb07951e9f2f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
                    </div>
                    <div class="info-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed interdum libero, ut elementum velit. Sed congue ante accumsan, faucibus.</div>
                </div>
                <!--참가자-->
                <div class="info-boxs">
                    <div class="details-title">Particpants</div>
                    <div class="info-text"><strong>3 particpants</strong> including Michael, Micky and 1 other.</div>
                    <div class="particpants">
                        <div class="test"><img src="https:\/\/uifaces.co\/our-content\/donated\/KOSDadHu.jpg" alt=""></div>
                        <div class="test"><img src="https:\/\/images.pexels.com\/photos\/415829\/pexels-photo-415829.jpeg?crop=faces&fit=crop&h=200&w=200&auto=compress&cs=tinysrgb" alt=""></div>

                        <div class="test"><img src="https:\/\/i.imgur.com\/D01FNwR.jpg" alt=""></div>
                    </div>
                </div>
                <!--주소-->
                <div class="info-boxs" style="margin-bottom: 5px;">
                    <div class="details-title">Location</div>
                    <div id="staticMap"></div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php

include("./footer.php");

?>