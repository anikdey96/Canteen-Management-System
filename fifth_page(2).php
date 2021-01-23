<?php  include('fifth_server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="admin.js"></script>
    

  <style>
  button{

  background-color: red;
  color: #FFFFFF;
  float: left;
  padding: 10px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  }
  </style>
</head>
<body>
    <fieldset>
        <form method="post" action="fifth_server.php">
            <fieldset>
              <legend>Add Member</legend>
              Name:<br>
              <input type="text" name="Name" required>
              <br>
              <br>
              Age:<br>
              <input type="text" name="Age" required>
              <br><br>
              Salary:<br>
              <input type="text" name="Salary" required>
              <br><br>
              Id_Number:<br>
              <input type="text" name="Id_Number" required>
              <br><br>
             
              <!-- <input  type="submit" value="Add"> -->
              <button class="btn" type="submit" name="save" >Save</button>
             
            
              
            </fieldset>
          </form>
        </fieldset>
              
</body>
</html>











