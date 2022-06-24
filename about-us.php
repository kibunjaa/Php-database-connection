<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";
$conn = mysqli_connect($server,$username,$password,$database);
if(isset($_POST["submitbutton"]))
{
      //1. fetch form data
      $email=$_POST["email"];    
      //2. submit form data
      $insertData = mysqli_query($conn,"INSERT INTO subscribers(email) VALUES('$email') ");
  
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
    <link rel="stylesheet" href="style.css">
    <title>About us</title>
</head>
<body>
    <!-- navigation bar -->
     <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
           <a href="#" class="navbar-brand">Zalego Academy</a> 
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardisplaynavigations"  aria-expanded="false" >
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbardisplaynavigations"> 
                <div class="navbar-nav">
                    <a href="#" class="nav-link active">Home</a>
                    <a href="#" class="nav-link">About us</a>
                    <a href="#" class="nav-link">Contact us</a>
                </div>
            </div>
        </div>
    </nav>  -->
    <!-- end navigation bar-->

    <!-- About us page here-->
    
            <div class="bg-secondary bg-opacity-25"><h1>AboutUS</h1>
             <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut nisi dignissimos, voluptates eaque obcaecati incidunt soluta dolorem repudiandae beatae ipsum temporibus, cupiditate saepe? Aut dolorum, mollitia vero doloribus repudiandae doloremque.</P>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-6">
                  <h2>Our Program</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus unde, commodi quibusdam cum assumenda perspiciatis amet impedit quaerat accusamus dolore?</p>
                </div>
                    <div class="col-lg-6">
                        <img src="imagess/book.png" alt="wallpaper" height="300cm" width="300cm">
                    </div>
            </div>
            <br>            
            <div class="container">
                <h3>The Program</h3>
                <br>
                    <div class="row">
                        <div class="col-lg-4">
                          <div class="card" style="border-radius:10px;">
                            <div class="card-body">
                                <h5 class="card-title">Skill Discovery</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil eaque vitae modi dolorem iure quidem quod omnis, consequuntur autem doloribus?</p>
                                  <a href="#" class="btn btn-primary">View More</a>
                            </div>
                        </div>
                        </div>  
                        <br>
                    <div class="col-lg-4">
                        <div class="card" style="border-radius: 10px;">
                            <div class="card-body">
                                <h5 class="card-title">Upskilling Program</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil eaque vitae modi dolorem iure quidem quod omnis, consequuntur autem doloribus?</p>
                                  <a href="#" class="btn btn-primary">View More</a>                   
                            </div> 
                        </div>     
                       </div>    
                      <br>
                         <div class="col-lg-4">
                             <div class="card" style="border-radius: 10px;">
                                 <div class="card-body">
                                 <h5 class="card-title">Path Finding Program</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil eaque vitae modi dolorem iure quidem quod omnis, consequuntur autem doloribus?</p>
                                  <a href="#" class="btn btn-primary">View More</a>                        
                                  </div>
                             </div>
                        </div>
                </div>           
                <div class="mb-3 col-lg-6">  
                  <form action="about-us.php"method="POST">
                    <br>
                    <br>
                    <div class="row">
                        <div class="text-center">
                            <div class="card-body">
                <h7 class="card-subtitle mb-2 text-muted">Subscribe to get information, latest new about <br> Zalego Academy.</h7>  
                                <h7 class="card-subtitle mb-2 text-muted">Subscribe to get information, latest new about <br> Zalego Academy.</h7>
                <h7 class="card-subtitle mb-2 text-muted">Subscribe to get information, latest new about <br> Zalego Academy.</h7>  
                  <form action="about-us.php"method="POST">
                    <table>
                        <tr>
                            <td>
                                                                 
                                     <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address">
                                     </td>
                                     <td> 
                                     <div class="mb-1 col-lg-6">                             
                                    <button type="submit"  name="submitbutton" class="btn btn-primary">Subscribe</button>  
                             </div>                                                                                       
                                </div>
                             </div>                                                                                       
                            </td>                           
                        </tr>
                    </table> 
                 </form>
                </div>
            </div>    
        <!-- End about us page -->
        <footer>
            &copy; Company 2022
        </footer>
     <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
     <script src="bootstrap-5.20/js/bootstrap.bundle.min.js"></script>
     <script src="bootstrap-5.20/js/bootstrap.min.js"></script>
</body>
</html>