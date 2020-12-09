<?php
   if(isset($_POST['form3']))
   {
       include("conn.php");
       
       $r=$_POST['rollno'];
       $c=$_POST['city'];
       $y=$_POST['year']; 
       $t=$_POST['t_marks']; 
       $o=$_POST['o_marks']; 
     
       $query="INSERT INTO `inter_tb` (`id`, `rollno`, `city`, `year`, `t_marks`, `o_marks`) 
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
        <h1> INTER INFORMATION FORM </h1>
        <label >ProgressBar</label></br>
        <div class="progress">
          <div class="progress-bar bg-success" style="width:50%;">50%</div>
      </div>
        <form  action="form4.php" method="post" class="row  g-3">

          <div class="col-md-6">
            <label  class="form-label">RollNo</label>
            <input type="text" name="rollno" id="rollno" class="form-control" >
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label for="City">City</label>
                <select class="form-control" name="city" id="city">
                    <option value="Lahore">Lahore</option>
                    <option value="Faislabad">Faislabad</option>
                    <option value="Gujrawala">Gujrawala</option>
                    <option value="RawalPindi">RawalPindi</option>
                </select>
            </div>
          </div>

          <div class="col-md-6">
            <label  class="form-label">Passing Year</label>
            <input type="text" name="year" id="year" class="form-control" >
          </div>

       


          <div class="col-md-6">
            <label  class="form-label">Total Marks</label>
            <input  class="form-control" type="text" name="t_marks" id="t_marks">
            </div>

          
      
       

          <div class="col-md-6">
            <label  class="form-label">Obtained Marks </label>
            <input type="text" name="o_marks" id="o_marks" class="form-control" >
            </div>
           
            <div class="row">
               <div class="col-offset-8 ">
                 <input type="submit" id="next" value="Next" name="form3">
               </div>
            </div>
          </div>
        </form>
             
             
             
               </div>


                

   </br> </br>  </br>  </br> 

   

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