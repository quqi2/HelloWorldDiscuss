<?php
 $get=$_GET;
 $config = json_decode(file_get_contents('config.json'), true);
 $conn = new mysqli(
        $config["database.host"],
        $config["database.user"],
        $config["database.pass"],
        $config["database.name"]
    );
 if( is_null($get["uid"]) ){
    echo "<script>alert('输入的uid为空')</script>";
    echo "<meta http-equiv=\"Refresh\" content=\"0;url=index.php\">";
    die("1");
 }
 if( is_numeric($get["uid"]) == false ){
    echo "<script>alert('输入的参数必须是数字')</script>";
    echo "<meta http-equiv=\"Refresh\" content=\"0;url=index.php\">";
    die("1");
 }
?>
