<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="format-detection" content="telephone=no" />
      <title>Guerney Architectural Solutions</title>
      <link rel="stylesheet" href="site.css" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet" />
   </head>
   <body>
      <div class="container">
         <header class="main-header flex">
            <div class="logo-container">
               <a href="index.html"> <img class="logo" src="images/guernsey-horizontal.png" alt="Guernsey Architectural Logo" /></a>
            </div>
            <button class="nav-toggle" aria-label="toggle navigation">
               <span class="hamburger"></span>
            </button>
            <nav class="nav">
               <ul class="nav__list flex">
                  <li class="nav__item"><a href="about.html" class="nav__link">About</a></li>
                  <li class="nav__item"><a href="services.html" class="nav__link">Services</a></li>
                  <li class="nav__item"><a href="products.html" class="nav__link">Products</a></li>
                  <li class="nav__item"><a href="projects.html" class="nav__link">Projects</a></li>
                  <li class="nav__item"><a href="contact.html" class="nav__link">Contact</a></li>
               </ul>
            </nav>
         </header>
         <div class="page-header">
            
         </div>
         <div class="form-container form-response text-center">
            
            <?php 
                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    //if Post request
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $city = $_POST['city'];
                    $state = $_POST['state'];
                    $zip = $_POST['zip'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $referred = $_POST['referred'];
                    $position = $_POST['position'];
                    $startDate = $_POST['startDate'];

                    $subject = "Employment Interest";
                    $headers = "From: $name <$email>";

                    $to = "alex.duarte@fusion4solutions.com";
                    $body = "";

                    $body .= "From: ".$name. "\r\n";
                    $body .= "Email: ".$email. "\r\n";
                    $body .= "Phone: ".$phone. "\r\n";
                    $body .= "Address: ".$address. "\r\n";
                    $body .= "City: ".$city. "\r\n";
                    $body .= "State: ".$state. "\r\n";
                    $body .= "Zip: ".$zip. "\r\n";
                    $body .= "Referred by: ".$referred. "\r\n";
                    $body .= "Position: ".$position. "\r\n";

                    //send message
                    mail($to, $subject, $body, $headers);

                    echo '
                    
                    <h3>Thank you. Your information is being processed.</h3>';

                } else {
                     # Not a POST request, set a 403 (forbidden) response code.
                     http_response_code(403);
                     echo '<p class="alert alert-warning">There was a problem with your submission, please try again.</p>';
                } 


            ?>
         </div>

         <footer class="flex">
            <div class="footer-nav-wrapper flex">
               <div class="footer-nav">
                  <ul class="footer-nav__list">
                     <li><a class="footer-nav__link" href="services.html">Services</a></li>
                     <li><a class="footer-nav__link" href="products.html">Products</a></li>
                     <li><a class="footer-nav__link" href="projects.html">Projects</a></li>
                  </ul>
               </div>
               <div class="footer-nav">
                  <ul class="footer-nav__list">
                     <li><a class="footer-nav__link" href="#">Terms of Use</a></li>
                     <li><a class="footer-nav__link" href="#">Privacy Policy</a></li>
                     <li><a class="footer-nav__link" href="#">Equal Opportunity Employer</a></li>
                  </ul>
               </div>
            </div>
            <div class="footer-locations-wrapper flex">
               <div class="footer-location">
                  <p>MAIN OFFICE</p>
                  <p>1701 Airport Terminal Drive, Suite 100A-1</p>
                  <p>DeLand, Florida 32724</p>
                  <p>(386) 734-5572</p>
               </div>
            </div>
         </footer>
      </div>
      <script src="site.js"></script>
   </body>
</html>
