<!doctype html>
<html>
    <head>
        <style>
            body{
                 margin:0px;
                 padding:0px;
                 font-family:sans-serif;
                 background:url("college.jpg");
                 
                }
   
         .box
         {
             width:300px;
             padding:40px;
             position:absolute;
              border-radius:24px;
              top:25%;
             left:40%;
             box-sizing:border-box;
             transform:translate(-50%,-50%);
             background:grey;
             text-align:center;
         }
         .box form div{
             position:relative;
             
         }
         .box form div label
         {
             position:absolute;
             top:0px;
             pointer-events:none;
             left:0;
             
         }
         
         .box input[type="text"],.box input[type="password"]
         {
             border:0;
             background:none;
             display:block;
             margin:20px auto;
             text-align:center;
             border:none;
             border-bottom: 2px solid #3498db;
             padding :14px 10px;
             width:200px;
             outline:none;
             color:white;
             border-radius:24px;
             transition:0.25s;
            
         }
          .box input[type="text"]:focus,.box input[type="password"]:focus
          {
              width:280px;
              border-color:#2ecc71;
              
          }
          .box input[type="submit"]
          {
               border:0;
             background:none;
             display:block;
             margin:20px auto;
             text-align:center;
             border:2px solid #3498db;
             padding :14px 40px;
             font-size:20px;
             outline:none;
             color:black;
             border-radius:24px;
             transition:0.25s;
             cursor:pointer;
          }
           .box input[type="submit"]:hover
           {
               background:#2ecc71;
           }
           .mm
           {
               color:white;
           }
          
        
         </style>
        
    </head>
    <body>
        <div id="main">
   
        <form class="box" action="login.php" method="post">
          
          <div class="rt">
              <label> Username<label>
            <input type="text" name="user_name" placeholder="user name" required/>
              
          </div>
          
              <div class="rt">
                   <label>Password<label>
            <input type="text" name="password" placeholder="password" required/>
            
              </div>
            <input class="rt" type="submit" name="login" value="login" /> 
            <a href="index.php">Create an account</a>
            
        </form>
        </div>
    </body>
</html>

<?php
   session_start();
   //require_once("connection.php");
   $con=mysqli_connect("localhost","root","","chatapplication");
   if(Isset($_POST['login']))
   {
       $user_name=$_POST['user_name'];
       $password=$_POST['password'];
       
       $q="SELECT * FROM `user` where `user_name`='$user_name' and `password`='$password'";
       $r=mysqli_query($con,$q);
       if(mysqli_num_rows($r)>0)
       {
            echo'you are now not logged in';
            $_SESSION['user_name']=$user_name;
            header("location:index1.php");
       }
       else
       { 
           echo'your password and user_name dont match';
       }
       
       
   }
?>

