<?php

$phpname = $_SERVER['PHP_SELF'];

?>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=d9d73704ebd737b5760c728a51e9eff6"></script>

<?php
if ($phpname == "/index.php") {
?>
     <script src="./js/map.js" type="text/javascript"></script>
<?php
}
?>



<?php
if ($phpname == "/meet.php") {
?>
     <script src="./js/staticmap.js" type="text/javascript"></script>
<?php
}
?>