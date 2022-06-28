<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";
$conn = mysqli_connect($server,$username,$password,$database);
if(isset($_POST["submitapplication"]))
{
     //1. fetch form data
     $fullname=$_POST["fullname"];
     $phonenumber=$_POST["phonenumber"];
     $email=$_POST["email"];
     $gender=$_POST["gender"];
     $course=$_POST["course"];  
//check connection
  
  //2. submit form data
  $insertData = mysqli_query($conn,"INSERT INTO enrollment(fullname,phonenumber,email,gender,course) 
                                VALUES('$fullname','$phonenumber','$email','$gender','$course') "); 

    if($insertData)
    {
        echo "Data submitted successfully";
    } 
    else{
        echo "Error occurred";
    }  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.20/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome\css\font-awesome.min.css">
    <link rel="stylesheet" href="enroll.css">
    <title>Document</title>
</head>
<body>
    <!-- navigation bar-->
    <?php
    include("navbar.php");
    ?>
    <!-- end navigation bar-->
    <br>

    <!--contact us page here-->
    <div class="container-fluid">    
           <main  class="p-5 mb-4 bg-light rounded-3px">
               <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
               <nav>           			    
				     <i class="fa fa-calendar fa-2x"></i>                  
					<span>2oth July 2022</span>
                     <br>
                      <i class="fa fa-map-marker fa-2x"></i>                   
					<span>Zalego Academy <br> Devan Plaza</span>                    
		      </nav>
         </main> 
    </div>
            <p class="text-center">Looking for a place to kickstart your career in Technology? <br> Whether you're a local, new in town or just cruising through we've got <br> loads of great tips and events for you</p>
            <h1 class="text-center text-muted">Sign up Today?</h1>      
    <div class="container">
        <form action="enroll.php" method="POST">
            <div class="row shadow p-3 mb-5 bg-body">
                <div class="mb-3 col-lg-6">
                        <label for="fullname" class="form-label">Full name</label>
                        <input type="text"name="fullname" class="form-control" placeholder="Enter Your Full name">
                     </div>                   
                    <div class="mb-3 col-lg-6">
                        <label for="phonenumber" class="form-label">Phone Number</label>
                        <input type="tel" name="phonenumber" class="form-control" placeholder="+254">
                    </div>
                    <div class="row">
                          <div class="mb-3 col-lg-6">
                          <label for="Emailaddress" class="form-label">Email Address</label>
                          <input type="email" name="email" class="form-control " placeholder=" please enter Your Email">
                     </div>

                    <div class="mb-3 col-lg-6">
                         <label for="gender" class="form-label">What's Your gender </label>
                        <select class="form-select" name="gender" aria-label="Disabled select example" required>                       
                            <option >--select your gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                         </select>
                    </div> 
                </div>            
                   <p> in order to complete your registration to the bootcamp, you are required to select one course you will be <br> undertaking. Please NOTE that this will be your learning track during the 2-weeks immersion.    </p>                        
                <div class="row">
                    <div class="col-lg-6">
                        <label for="message" class="form-label"> <b> What's your preferred course?</b></label>
                        <select class="form-select" name="course" aria-label="Disabled select example">
                            <option><b>--Select your course--</b></option>
                            <option value="Web Development and Design">Web Development and Design</option>
                            <option value="Data Analysis">Data Analysis</option>
                            <option value="Cyber Security">Cyber Security</option>
                            <option value="Android App Development">Android App Development</option>
                        </select>
                    </div>               
                      <br>
                       <p> you agree by providing your information you understand all our data privacy and protection policy<br>outlined in our Terms and condition and the privacy Policy statements.</p>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                          <label class="form-check-label"><b> Agree terms and condition</b></label> 
                    </div>
                        <br> 
                       <br> 
                        <div class="col-lg-6">
                           <button type="submit" name="submitapplication" class="btn btn-primary">Submit application</button>
                       </div>                         
              </div>           
          </div>

                <p class="text-center text-muted">Subscribe to get information, latest news about <br> Zalego Academy</p>
                    <div class="row">
                         <div class="mb-3 col-lg-6">
                          <input type="email" class="form-control" placeholder="Enter Your Email Address">
                        </div>
                        <div class="mb-3 col-lg-6">
                         <button type="submit"name="subscribe" class="btn btn-primary">Subscribe</button>                                                           
                        </div> 
                
                    </div> 
        </form>               
    </div>   

    <footer>
            &copy; @Company 2022
        </footer>
        <!--End contact us page-->
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="bootstrap-5.20/js/bootstrap.min.js"></script>
</body>
</html>