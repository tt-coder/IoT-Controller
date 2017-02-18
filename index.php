<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="favicon.ico">
  <title>Remote Controller</title>
</head>
<body>
  <br><br><br>
  <div align="center">
    <img src="http://192.168.202.31:8080/?action=stream" style="filter:brightness(2.5);"/>
    <br>現在の様子<br><br>
    <form action ="index.php" method="post">
      <button type="submit" name="type" value="garage" style="WIDTH: 120px; HEIGHT: 60px; text-align:center;">シャッター開/閉</button>
      <!--
      <button type="submit" name="type" value="airon" style="WIDTH: 120px; HEIGHT: 60px; text-align:center;">エアコンON</button>
      <button type="submit" name="type" value="airoff" style="WIDTH: 120px; HEIGHT: 60px; text-align:center;">エアコンOFF</button>
      <br><br>
      <button type="submit" name="type" value="lightmax" style="WIDTH: 120px; HEIGHT: 60px; text-align:center;">照明ON</button>
      <button type="submit" name="type" value="lightoff" style="WIDTH: 120px; HEIGHT: 60px; text-align:center;">照明OFF</button>
      -->
    </form>
  </div>

<?php
  $type = $_POST["type"];
  if (empty($type)) {
    //echo json_encode(array("status"=>500,"text"=>"Status unknown"));
  }

  if ($type === "airon") {
    exec("irsend SEND_ONCE aircon airon");
    //echo json_encode(array("status"=>200,"text"=>"AIR ON"));
    exit();
  }else if ($type === "airoff") {
    exec("irsend SEND_ONCE aircon airoff");
    //echo json_encode(array("status"=>200,"text"=>"AIR OFF"));
    exit();
  }else if ($type === "lightmax") {
    exec("irsend SEND_ONCE light lightmax");
    //echo json_encode(array("status"=>200,"text"=>"LIGHT ON"));
    exit();
  }else if ($type === "lightoff") {
    exec("irsend SEND_ONCE light lightoff");
    //echo json_encode(array("status"=>200,"text"=>"LIGHT OFF"));
    exit();
  }else if ($type === "garage") {
    exec("sudo /var/www/html/garage");
    header("Location:index.php");
    //echo json_encode(array("status"=>200,"text"=>"Received"));
    exit();
  }else{
    //echo json_encode(array("status"=>500,"text"=>"Status unknown"));
    exit();
  }
?>

</body>
</html>

