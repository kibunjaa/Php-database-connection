
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.20/css/bootstrap.min.css">
    <title>Bootstrap Getting Started</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navigation bar-->
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
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
    </nav> -->
    <!-- end navigation bar-->
    <main class="p-5 mb-4 bg-light rounded-3px">
        <h1>Welcome,Franziska</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error consequuntur vero pariatur officia saepe quae a? Ea eligendi obcaecati iusto quia, facere dolorem labore possimus perferendis dolore vero impedit ex.</p>
        <button class="btn btn-primary">learnmore</button>
    </main>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1>Header 1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam magni eveniet temporibus. Eius quia natus, est magnam veniam perferendis similique possimus id aspernatur amet ab molestiae explicabo ex minus?</p>
                <button class="btn btn-primary">Learnmore</button>
            </div>
        <div class="col-lg-4">
            <h1>Header 2</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam magni eveniet temporibus. Eius quia natus, est magnam veniam perferendis similique possimus id aspernatur amet ab molestiae explicabo ex minus?</p>
            <button class="btn btn-primary">Learnmore</button>
        </div>
        <div class="col-lg-4">
            <h1>Header 3</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam magni eveniet temporibus. Eius quia natus, est magnam veniam perferendis similique possimus id aspernatur amet ab molestiae explicabo ex minus?</p>
            <button class="btn btn-primary">Learnmore</button>
        </div>
        </div>

        <!--contact us page here-->
        <div class="row pt-5">
            <h1>Contact us</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam molestiae necessitatibus temporibus aliquam dicta mollitia. Totam, eius! Temporibus repellat accusamus numquam consectetur rem fugit, ut iste ratione aut totam optio!</p>
            <form action="enroll.php"method="POST">
               <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your First Name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Last Name">
                    </div>
               </div>
               <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="phonenumber" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" placeholder="Enter Your Phone Number">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="Emailaddress" class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email Address">
                    </div>
               </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="message" class="form-label">Your message</label>
                        <textarea cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Send A Message</button>
            </form>
        </div>
        <!--End contact us page-->
        <hr>
         <footer>
            &copy; Company 2022
        </footer>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="bootstrap-5.20/js/bootstrap.min.js"></script>
</body>
</html>