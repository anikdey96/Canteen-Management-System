<?php  include('seventh_server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="admin3.js"></script>
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
        <form method="post" action="seventh_server.php">
            <fieldset>
              <legend>Add Special Food Item</legend>
              Name<br>
              <input type="text" name="Name" required>
              <br>
              <br>
              ID<br>
              <input type="text" name="ID" required>
              <br><br>
              Price<br> 
              <input type="text" name=" Price" required>
              <br><br>
              
            <!-- <input type="submit" value="Add"> -->
            <button class="btn" type="submit" name="save" >Save</button>
             
             
            
              
            </fieldset>
          </form>
        </fieldset>
              
</body>
</html>











