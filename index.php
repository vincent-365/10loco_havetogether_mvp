<?php

include("./head.php");

?>

<div class="chack_agent">
    <div class="main_box">
        <div id="map"></div>
        <div class="main_cat_box">
            <div class="cat-box-borders">
                <div class="cats cat-1">Have</div>
                <div class="cats cat-2">
                    <div class="cat_name">Blank</div>
                    <div class="cat-box">
                        <div id="cat-menu">Coffee</div>
                        <div id="cat-menu">Drink</div>
                        <div id="cat-menu">Eat</div>
                        <div id="cat-menu">Norebang</div>
                        <div id="cat-menu">sadkoasfgoasngo</div>
                    </div>
                </div>
                <div class="cats cat-3">Together</div>
                <div class="cats cat-4"> | </div>
                <div class="cats cat-5"><img src="./bin/img/fillter.svg" alt=""></i>
                </div>
            </div>
        </div>
        <div class="ht_button">Have Together</div>
        <div class="border_list">
            <div class="list-box">
                <div class="title">24 Have Together</div>
                <div class="con">
                    <div class="bast">Bast matches</div>
                    <div class="con-box cont-top">


                        <?php
                        for ($i = 0; $i < 5; $i++) {
                        ?>
                            <div class="contop-box">
                                <div class="cons">
                                    <div class="img-box"><img src="https://images.unsplash.com/photo-1608731001805-187e9c904388?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt=""></div>
                                    <div class="title-box">Kimbob</div>
                                    <div class="info-box2"><i class="fas fa-user"></i> Name 5 <i class="far fa-star"></i></div>
                                    <div class="lll-top">
                                        <div>
                                            <div class="lll-box1">
                                                <img src="./bin/img/meeting-point.svg" alt="">
                                            </div>
                                            <div class="lll-text"> 1km</div>
                                        </div>
                                        <div>
                                            <div class="lll-box1">
                                                <img src="./bin/img/time.svg" alt="">
                                            </div>
                                            <div class="lll-text"> 1km</div>
                                        </div>
                                        <div>
                                            <div class="lll-box1">
                                                <img src="./bin/img/teamwork (1).svg" alt="">
                                            </div>
                                            <div class="lll-text"> 1km</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                    <div class="con-box cat-boxs">
                        <?php
                        for ($t = 0; $t < 4; $t++) {
                        ?>
                            <div class="catboxs">
                                <div class="boxs active">
                                    <div class=icon><i class="fas fa-coffee"></i></div>
                                    <div class="titles">Coffee</div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="con-box bord-list">
                        <?php
                        for ($i = 1; $i < 29; $i++) {
                        ?>
                            <div class="bord-box">
                                <div class="bord">
                                    <div class="bord-img">
                                        <img src="https://images.unsplash.com/photo-1526199119161-4be1e3368d52?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80" alt="">
                                    </div>
                                    <div class="brod-title">Korea cafe</div>
                                    <div class="bord-info2"><i class="fas fa-user"></i> name 5<i class="far fa-star"></i></div>
                                    <div class="lll">
                                        <div>
                                            <div class="lll-box2">
                                                <img src="./bin/img/meeting-point.svg" alt="">
                                            </div>
                                            <div class="lll-text"> 1km</div>
                                        </div>
                                        <div>
                                            <div class="lll-box2">
                                                <img src="./bin/img/time.svg" alt="">
                                            </div>
                                            <div class="lll-text"> 1km</div>
                                        </div>
                                        <div>
                                            <div class="lll-box2">
                                                <img src="./bin/img/teamwork (1).svg" alt="">
                                            </div>
                                            <div class="lll-text"> 1km</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if ($i % 8 == 0) {
                            ?>
                                <div class="ad">
                                    <img src="./bin/img/ta52.png" alt="">
                                </div>
                            <?php
                            }
                            ?>
                        <?php } ?>
                    </div>
                    <div class="con-box ad-boxs">

                    </div>
                </div>
            </div>
        </div>
        <div class="add_button"><img src="./bin/img/iiii2.svg" alt=""></div>
    </div>
</div>
<?php

include("./footer.php");

?>