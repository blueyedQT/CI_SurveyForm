<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP2 basicII - Result </title>
  <style type="text/css">
    #wrapper {
      font-family: sans-serif;
      text-align: left;
      width: 800px;
      margin: 0px auto;
    }
    .infoBox {
      background-color: palegreen;
      height: 80px;
      width: 400px;
      border: 2px solid green;
      display: block;
      margin: 20px auto;
    }
    .infoBox p {
      font-size: 15px;
      padding: 10px;
    }
    .contentBox {
      background-color: whitesmoke;
      height: 400px;
      width: 400px;
      border: 2px solid lightgray;
      display: block;
      margin: 20px auto;
    } 
    .contentBox p {
      padding: 0px 10px;
    }
    .contentBox .right {
      text-align: right;
      margin-right: 10px;
    }
    .contentBox .goback {
      margin-top: 60px;
    }
    input[type=submit] {
      background-color: lightblue;
      border-radius: 5px;
      font-size: 20px;
      padding: 0px 20px;
    }
  </style>
</head>
<body>
  <div id="wrapper"> 
    <div class="infoBox">
      <p> Thank you for submitting this form! You have submitted this form <?=$count?> times now. </p>
    </div>
    <div class="contentBox">
      <p>Your Name: </p>
      <p class="right"><?=$name?></p>
      <p>Dojo Location: </p>
      <p class="right"><?=$location?></p>
      <p>Favorite Language: </p>
      <p class="right"><?=$language?></p>
      <P>Comments: </P>
      <p class="right comment"><?=$comment?></p>
    <form class="right goback" action="<?= base_url('surveys/index')?>">
      <input type="submit" name="goBack" value="Go Back">
    </form>
    </div>
  </div>
</body>
</html>