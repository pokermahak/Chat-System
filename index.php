<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | mplates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
               top:8%;
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
         
         .box input[type="text"],.box input[type="password"],.box input[type="number"]
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
        <?php
              $con=mysqli_connect("localhost","root","","chatapplication");
             if(Isset($_POST['register']))
               {
                 $id=$_POST['id'];
                 $first_name=$_POST['first_name'];
                 $last_name=$_POST['last_name'];
                 $user_name=$_POST['user_name'];
                 $password=$_POST['password'];
                    $q="INSERT INTO user(id,first_name,last_name,user_name,password) VALUES($id,'$first_name','$last_name','$user_name','$password')";
                     if(mysqli_query($con,$q))
                     {
                        echo 'you are successfully registered';
                        header("location:login.php");
                    }
                    
               }
                 
        ?>
        <div id="main">
            <h2 align="center">REGISTER</h2>
            <form class="box"action=index.php method="post">
                id:<br>
                <input type="number" name="id" placeholder="ID"required/><br>
                First name:<br>
                <input type="text" name="first_name" placeholder="First Name"required/><br>
                Last name:<br>
                <input type="text" name="last_name" placeholder="Last Name"required/><br>
                User name:<br>
                <input type="text" name="user_name" placeholder="User Name"required/><br>
                Password:<br>
                <input type="password" name="password" placeholder="Password"required/><br>
                
                <input type="submit" name="register" value="register"required/><br>
                
            </form>
        </div>
        
    </body>
</html>
