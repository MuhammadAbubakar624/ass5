<?php
   if(isset($_POST['form4']))
   {
       include("conn.php");
       
       $r=$_POST['rollno'];
       $c=$_POST['city'];
       $y=$_POST['year']; 
       $t=$_POST['t_marks']; 
       $o=$_POST['o_marks']; 
     
       $query="INSERT INTO `g_tb` (`id`, `rollno`, `city`, `year`, `t_marks`, `o_marks`) 
       VALUES (NULL, '$r', '$c', '$y', '$t', '$o')";
      if( mysqli_query($connection,$query))
      {
        //  echo " <h1> Recored Is Successfully Submitted </h1>";
      }
   } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asssignment-3</title>  
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/ff356d0148.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstarp.css">
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
   
    <div class="header">
        <div class="menu ">
            <ul class="navigation">
                <li><a class="btn-floating btn-lg btn-home" type="button" role="button" id="active"><i class="fas fa-home"></i> Home</a></li>
                <li><a class="btn-floating btn-lg btn-" type="button" role="button"><i class="fas fa"></i> Muhammad Abubakar ( 18F-0207 )</a></li>
                <li><a class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook"></i></a></li>
                <li><a class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a></li>
                <li><a class="btn-floating btn-lg btn-git" type="button" role="button"><i class="fab fa-github"></i></a></li>
                <li><a class="btn-floating btn-lg btn-email" type="button" role="button"><i class="fas fa-envelope"></i></a></li>
                <li><a class="btn-floating btn-lg btn-whatsapp" type="button" role="button"><i class="fab fa-whatsapp"></i></a></li>
                <li><a class="btn-floating btn-lg btn-" type="button" role="button"><i class="fas fa"></i> Add Record</a></li>
                <li><a class="btn-floating btn-lg btn-" type="button" role="button"><i class="fas fa"></i> Display Record</a></li>
  
              </ul>
        </div>
    </div>
    <div class="box1">
        <h1> Recored is Suceessfully submitted  </h1>
      
             
               </div>


              
    
 
            </br>  </br> 
            </br>  </br> 
            </br>  </br> 
            </br>  </br> 
            </br>  </br> 
            </br>  </br> 
            </br>  </br> 
            </br>  </br> 
           

   

<div id="section-footer" class="pt-5 footer-wrap text-center ">
  <div class="container">
    <div class="col-md-12">
      <p class="copyright-text">&copy; 2020 <span>Abubakar</span>. All rights reserved</p>
    </div>
  </div>
</div>

   
      
    <script src="js.js"></script>
</body>
</html>