<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Survey Form</title>
  <style type="text/css">
    #wrapper {
      font-family: sans-serif;
      text-align: center;
      width: 800px;
      margin: 0px auto;
    }
    #wrapper h1 {
      font-size: 50px;
      margin: 50px 0px 70px 0px;
    }
    .box {
      border: 2px solid darkblue;
      height: 360px;
      width : 400px;
      margin: 0px auto;
    }
    .box div {
      display: block;
      font-size: 20px;
      text-align: left;
      margin: 15px;
    }
    input[type=text] {
      height:  25px;
      width: 200px;
      vertical-align: top;
      margin-left: 51px;
    }
    .box select {
      margin-left: 97px;
    }
    .box .location {
      margin-left: 109px;
    }
    .box textarea {
      height: 100px;
      width: 290px;
      display: block;
      margin: 20px auto;
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
    <h1>Welcome to the Survey Form</h1>
    <form class="box" action="<?=base_url('surveys/process_form')?>" method="POST">
      
      <div>
        <label>Your Name:</label> 
        <input type="text" name="name" placeholder="Name"/>
      </div>

      <div>
        <label>Dojo Location:</label>  
        <select class="location" name="location">
          <option value="Mountian View, CA">Mountain View, CA</option>
          <option value="Bellevue, WA">Bellevue, WA</option>
          <option value="Portland, OR">Portland, OR</option>  
        </select> 
      </div>
      
      <div>
        <label>Favorite Language:</label>
        <select name="language">
          <option value="PHP & SQL">PHP & SQL</option>
          <option value="Javascript">Javascript</option>
          <option value="Ruby on Rail">Ruby on Rail</option>
        </select>
      </div>

      <div>
        <label>Comment (optional):</label>
        <textarea name="comment" placeholder="Comments"></textarea>
      </div>  
        <input type="submit" value="submit"/>
    </form> 
  </div>
</body>
</html>
