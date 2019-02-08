<?php
  $mysqli = new mysqli("mt2-lrw.travelline.lan", "root", "root", "mariadb");
  if ($mysqli->connect_errno) {
    $mysqli = new mysqli("mt3-lrw.travelline.lan", "root", "root", "mariadb");
  }
  if ($mysqli->connect_errno) {
    $mysqli = new mysqli("mt4-lrw.travelline.lan", "root", "root", "mariadb");
  }
  else {
    $res = $mysqli->query("SELECT * FROM ShowOne");
    #res->data_seek(0);
    $row = $res->fetch_assoc();
    print ($row['One']);
  }
?>
