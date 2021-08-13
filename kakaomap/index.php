<?php

$phpname = $_SERVER['PHP_SELF'];
?>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=d9d73704ebd737b5760c728a51e9eff6&libraries=services,clusterer,drawing""></script>

<?php
if ($phpname == "/index.php") {
?>
     <script src="/src/js/map.js" type="text/javascript"></script>
<?php
}
?>
<?php
if ($phpname == "/event/index.php") {
?>
     <script src="/src/js/sersh.js" type="text/javascript"></script>
<?php
}
?>


<?php
if ($phpname == "/confirm/index.php") {
?>
     <script src="/src/js/staticmap.js" type="text/javascript"></script>
<?php
}
?>
<?php
if ($phpname == "/meet/index.php") {
?>
     <script src="/src/js/staticmap.js" type="text/javascript"></script>
<?php
}
?>
