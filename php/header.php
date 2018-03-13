<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name=viewport content='width=1024'>
    <meta http-equiv="Cache-Control" content="max-age=3600" />
    <title>Joshrl.me - Online Portfolio</title>
    <link rel="stylesheet" href="style.css">
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
foreach ($scriptList as $script) {
    echo "<script src='$script'></script>";
}
?>
  </head>
  <body>
    <div id="bar">
      <div id="bar-contents">
        <a href="#content" id="logo">
          <img src="./images/titletext.png" alt="Joshrl.me Logo" height="20" width="142">
        </a>
      </div>
    </div>
