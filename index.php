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
        <h1> PERSONAL INFORMATION FORM </h1>
        <label >ProgressBar</label></br>
        <div class="progress">
          <div class="progress-bar bg-success" style="width:0%;">0%</div>
      </div>
        <form action="form2.php" method="post" class="row  g-3">

          <div class="col-md-6">
            <label  class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
          </div>

          <div class="col-md-6">
            <label  class="form-label">Father Name</label>
            <input type="text" name="fname" id="fname" class="form-control" required >
          </div>

          <div class="col-md-6">
            <label  class="form-label">Dob</label>
            <input type="date" name="dob" id="dob" class="form-control" required>
          </div>


          <div class="col-md-6">
            <label  class="form-label">PhNo</label>
            <input  class="form-control" type="text" name="ph_no" id="ph_no" required>
            </div>

          
      
       

          <div class="col-md-6">
            <label  class="form-label">Address </label>
            <input type="text" name="address" id="address" class="form-control" required >
            </div>
            <div class="col-md-6">
              <label for="Gender">Gender</label> </br>
                 <input type="radio" name="gender" id="gender" value="Male"> Male
                 <input type="radio" name="gender" id="gender" value="Female"> FeMale
            </div>
    

            <div class="row">
               <div class="col-offset-8 ">
                 <input type="submit" id="next" value="Next" name="form1" required>
               </div>
            </div>
          </div>
         
        </form>
             
               </div>


              
    <?php 

    if(isset($_POST['form1']))
    {
      include("form2.php");
    }
    if(isset($_POST['form2']))
    {
      include("form3.php");
    }
    if(isset($_POST['form3']))
    {
      include("form4.php");
    }
    ?>
 
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