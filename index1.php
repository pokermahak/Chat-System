<html>
    <head>
        <style>
            *{
                margin:0px;
                padding:0px;
                background-color:#A3E4D7;
            }
            #main{
                border:3px solid black;
                width:700px;
                height:800px;
                margin:24px auto;
               background-color:black;
               color:black;
            }
            #mess-area
            {
                width:98%;
                border:1px solid black ;
                height:700px;
                color:black;
                background-color:black;
            }
            .let{
                background-color:#34495e;
                color:white;
                margin-bottom:10px;           
                
            }
            .mg
            {
                color:black;
                background-color:white;
                left:30%;
            }
            .i
            {
                color:black;
            }
            
            
        </style>
    </head>
    <body>
        
                     <?Php session_start();
   if(isset($_SESSION['user_name']))
   {
     //  echo Welcome.$_SESSION['user_name'];
       echo '<a href="logout.php">Log out</a>';
   }
   else
   {
       header("location:login.php");
       
   }
   
?>
        <div class="mg">
        <h2 >WELCOME TO CHATTING ROOM</h2>
        </div>
  <div id="main">
  <div id="mess-area">

              <?php
include("new1.php");
   
 $q="SELECT * from message";
 $r1=mysqli_query($con,$q);
   
 while($row=$row=mysqli_fetch_assoc($r1))
 { 
     $message=$row['message'];
     $user_name=$row['user_name'];
   
      echo '<h3 style="color:blue">'.$user_name.'</h3>';
           echo '<h4 class="ii">'.$message.'<h4>';
  
    
 }

if(isset($_POST['submit']))
{
    $message=$_POST['message'];
    
    $q1='INSERT INTO `message`(`id`,`message`,`user_name`)VALUES("","'.$message.'","'.$_SESSION['user_name'].'")';
    if(mysqli_query($con,$q1))
    {
    echo '<h3 style="color:blue">'.$_SESSION['user_name'].'</h3>';
           echo '<h4>'.$message.'</h4>';
    }
}
  ?>
  </div>

  <form method="post">
      <h3 class="i">TYPE YOUR MESSAGE</h3>
            <input class="let" type="text" name="message" style="width:400px;height:70px" placeholder="Type your message"/>
            <input class="let" type="submit" name="submit" style="width:40;height:30px;" value="message"/>
  </form>
   </div>     
    </body>
     

</html>


