<?php

include("./head.php");


function get_flags($con){
    $flag = "https://flagcdn.com/h240/".$con.".png";
    return $flag;
}
?>

<div class="mypage">
    <div class="mypage-top">
        <div class="mypage-top-box">
        </div>
        <div class="mypage-top-box">
            <div class="mypage-top-name">
                Name
            </div>
        </div>
        <div class="mypage-top-box">
            <div class="mypage-top-btn"><img src="./bin/img/menu.svg" alt=""></div>
        </div>
    </div>
    <div class="mypage-info">
        <div class="mypage-info-img">
            <img src="https://images.unsplash.com/photo-1564931941481-cb07951e9f2f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
        </div>
        <div class="mypage-info-text">
            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed interdum libero, ut elementum velit. Sed congue ante accumsan, faucibus.</div>
        </div>
        <div class="mypage-info-lng">
            <div class="lng-box">
                <div class="lng-con-img">
                    <div class="flag ko"></div>
                </div>
                <div class="lng-con-title">KOREAN</div>
                <div class="lng-con-level">Mothertong</div>
            </div>
            <div class="lng-box">
                <div class="lng-con-img">
                    <div class="flag gb"></div>
                </div>
                <div class="lng-con-title">ENGLISH</div>
                <div class="lng-con-level">Fluent</div>
            </div>
            <div class="lng-box">
                <div class="lng-con-img">
                    <div class="flag es"></div>
                </div>
                <div class="lng-con-title">SPANISH</div>
                <div class="lng-con-level">Beginner</div>
            </div>
        </div>
    </div>
    <div class="mypage-event">
        <div class="mapage-event-title">Events you organized</div>
        <div>
            <div>
                <div>dmao</div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div>
                <div>dmao</div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div>
                <div>dmao</div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div>
                <div>dmao</div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>
<?php

include("./footer.php");

?>