<?php



include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: home.php"); // Redirecting To Home Page
}

?>



<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Madhya Pradesh Tourist's Guide</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
     <link href="css/slider.css" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">MPTG   <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Discover</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#booking">Booking</a>
            </li>

  <li class="nav-item">
  <b id="logout"><a  class="nav-link js-scroll-trigger" href="logout.php">Log Out</a></b></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Madhya Pradesh!</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
      </div>
    </header>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Discover</h2>
            <h3 class="section-subheading text-muted">what do you want.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              
              <i><a href="Religious.html"><img src="img/icon1.jpg" height="120px" width="150px"></i>
            </span>
            <h4 class="service-heading">Religious</h4></a>
            <p class="text-muted">Faith In Spirituality</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              
              <i><a href="Historical.html"><img src="img/icon2.jpg" height="120px" width="150px"></i>
            </span>
            <h4 class="service-heading">Historical</h4></a>
            <p class="text-muted"> Simply Heaven</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              
                            <i><a href="wildlife.html"><img src="img/icon3.jpg" height="120px" width="150px"></i>
            </span>
            <h4 class="service-heading">wildlife</h4></a>
            <p class="text-muted">Live Is The Beauty of Earth.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Explore The New Era</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/singht.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>FAIRS & FESTIVALS</h4>
              <p class="text-muted">What Makes MP Tick</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/museum.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>MUSEUMS</h4>
              <p class="text-muted">A Glimpse Into An Era</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/food1.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>FOODS</h4>
              <p class="text-muted">Serving The Tradition</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/art.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>ART & CULTURE</h4>
              <p class="text-muted">Explore The Splendour Of  MP</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/rp.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>ROCK PAINTINGS</h4>
              <p class="text-muted">Discover The Rocks</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/hotel.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>HOTELS</h4>
              <p class="text-muted">The Best Places To Stay</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About MP</h2>
            <h3 class="section-subheading text-muted">MadhyaPradesh  is a state in central India</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Our cities</h4>
                    <h4 class="subheading">Its capital is Bhopal</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"> and the largest city is Indore, with Jabalpur, Gwalior, and Ujjain being the other major cities.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>"Heart of India"</h4>
                    <h4 class="subheading">second-largest state</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Nicknamed the "Heart of India" due to its geographical location in India, Madhya Pradesh is the second-largest state in the country by area. With over 75 million inhabitants, it is the fifth-largest state in India by population. </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Our History</h4>
                    <h4 class="subheading">Avanti Mahajanapada</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">he area covered by the present-day Madhya Pradesh includes the area of the ancient Avanti Mahajanapada, whose capital Ujjain (also known as Avantika) arose as a major city during the second wave of Indian urbanisation in the sixth century BCE. Subsequently, the region was ruled by the major dynasties of India. By the early 18th century, the region was divided into several small kingdoms which were captured by the British and incorporated into Central Provinces and Berar and the Central India Agency. After India's independence, Madhya Pradesh state was created with Nagpur as its capital: this state included the southern parts of the present-day Madhya Pradesh and northeastern portion of today's Maharashtra. In 1956, this state was reorganised and its parts were combined with the states of Madhya Bharat, Vindhya Pradesh and Bhopal to form the new Madhya Pradesh state, the Marathi-speaking Vidarbha region was removed and merged with the then Bombay State. This state was the largest in India by area until 2000, when its southeastern Chhattisgarh region was made as a separate state.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>connect</h4>
                    <h4 class="subheading"> the borders of other states</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"> It borders the states of Uttar Pradesh to the northeast, Chhattisgarh to the southeast, Maharashtra to the south, Gujarat to the west, and Rajasthan to the northwest. Its total area is 308,252 km2. Before 2000, when Chhattisgarh was a part of Madhya Pradesh, Madhya Pradesh was the largest state in India and the distance between the two furthest points inside the state, Singoli and Konta, was 1500 km. Konta is presently in Sukma district of Chattisgarh state.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/logos/giphy.gif" alt="">
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
 <section class="bg-light" id="booking">
      <div class="container">
<div class="alert alert-secondary" role="alert">
 <h1 align="center"> BOOKING</h1>
</div>
      	<br><br>
<a href="hotelbok.php"><button type="button" class="btn btn-danger btn-lg btn-block">Hotel Booking</button></a><br>
<a href="yyy.php"><button type="button" class="btn btn-success btn-lg btn-block">Safari Booking</button></a><br>
<a href="showbooking.html"><button type="button" class="btn btn-warning btn-lg btn-block">Show Booking</button></a><br>



      </div>
  </section>


    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/ankit.jpg" alt="">
              <h4>Ankit Parte</h4>
              <p class="text-muted">Database Admin </p>
              <ul class="list-inline social-buttons">
               <li class="list-inline-item">
                
                  <a href="https://m.facebook.com/ankit.parte.77" class="fa fa-facebook"></a>
          
              </li>
              <li class="list-inline-item">
               
               <a href="#" class="fa fa-twitter"></a>
             
              </li>
              <li class="list-inline-item">
      
                  <a href="https://www.instagram.com/ankit.p900/" class="fa fa-instagram"></a>
       
              </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/sanjay.jpeg" alt="">
              <h4>Sanjay Rathore</h4>
              <p class="text-muted">Designer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                
                  <a href="https://www.facebook.com/sanjay.rathore.33483903" class="fa fa-facebook"></a>
          
              </li>
              <li class="list-inline-item">
               
               <a href="#" class="fa fa-twitter"></a>
             
              </li>
              <li class="list-inline-item">
      
                  <a href="https://www.instagram.com/243sanjayrathore/" class="fa fa-instagram"></a>
       
              </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/aman.jpeg" alt="">
              <h4>Aman Dubey</h4>
              <p class="text-muted">Developer</p>
              <ul class="list-inline social-buttons">
               <li class="list-inline-item">
                
                  <a href="https://www.facebook.com/people/Aman-Dubey/100009081857732" class="fa fa-facebook"></a>
          
              </li>
              <li class="list-inline-item">
               
               <a href="#" class="fa fa-twitter"></a>
             
              </li>
              <li class="list-inline-item">
      
                  <a href="https://www.instagram.com/amandubey.d03/" class="fa fa-instagram"></a>
       
              </li>
              </ul>
            </div>
          </div>
            <div class="col-lg-12">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/111.jpeg" alt="">
              <h4>Ajay Rohit</h4>
              <p class="text-muted">Data Collection </p>
              <ul class="list-inline social-buttons">
               <li class="list-inline-item">
                
                  <a href="https://m.facebook.com/ankit.parte.77" class="fa fa-facebook"></a>
          
              </li>
              <li class="list-inline-item">
               
               <a href="#" class="fa fa-twitter"></a>
             
              </li>
              <li class="list-inline-item">
      
                  <a href="https://www.instagram.com/ankit.p900/" class="fa fa-instagram"></a>
       
              </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted"></p>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; amandubey 2018 </span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                
                  <a href="https://www.facebook.com/people/Aman-Dubey/100009081857732" class="fa fa-facebook"></a>
          
              </li>
              <li class="list-inline-item">
               
               <a href="#" class="fa fa-twitter"></a>
             
              </li>
              <li class="list-inline-item">
      
                  <a href="https://www.instagram.com/amandubey.d03/" class="fa fa-instagram"></a>
       
              </li>
            </ul>

          </div>
          
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">FAIRS & FESTIVALS</h2>
                 
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                 
                  <p>
                  	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col" colspan="2">FAIRS & FESTIVALS</th>
      
      <th scope="col">Place</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td colspan="2">Bhagoria Haat Festival</td>
    
      <td>jhabua</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td colspan="2">Madai festival</td>
    
      <td>Mandla to Bastar</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Tansen music festival</td>
      <td>Gwalior</td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td colspan="2">Khajuraho cultural Festival</td>
    
      <td>Khajuraho </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td colspan="2">Kumbh</td>
    
      <td>ujjain</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td colspan="2">AMARKANTAK SHIVRATRI FAIR</td>
      <td>shahdol</td>
    </tr>
     <tr>
      <th scope="row">7</th>
      <td colspan="2">AALAMI TABLEEGI IJTIMA</td>
    
      <td>Bhopal</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td colspan="2">FAIR OF RAMLILA</td>
    
      <td>Gwalior</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td colspan="2">FAIR OF BARMAN</td>
      <td>Narsinghpur</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td colspan="2">LOKRANG FESTIVAL</td>
      <td>Bhopal</td>
    </tr>
  </tbody>
</table>
                  </p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">MUSEUMS</h2>
                 
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                 
                  
                         <p>
                  	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col" colspan="2">MUSEUMS</th>
      
      <th scope="col">Place</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td colspan="2">THE SANCHI MEUSEUM</td>
    
      <td>SANCHI</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td colspan="2">State Museum</td>
    
      <td> Bhopal</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">The Baghela Museum</td>
      <td>Rewa</td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td colspan="2">The Lalbagh Palace</td>
    
      <td> Indore </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td colspan="2">The Sarod Museum</td>
    
      <td> Gwalior </td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td colspan="2">Tribal And Folk Art Museum</td>
      <td>Khajuraho</td>
    </tr>
     <tr>
      <th scope="row">7</th>
      <td colspan="2">Tribal Habitat Museum</td>
    
      <td>Bhopal</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td colspan="2"> Archaeological Museum  </td>
    
      <td>Khajuraho</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td colspan="2">Maharaja Chhatrasal Museum</td>
      <td>Dhubela</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td colspan="2">Rani Durgavati Museum</td>
      <td>Jabalpur</td>
    </tr>
  </tbody>
</table>
                  </p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">FOODS</h2>
       
                  <p>
                  	<h3>Bhopali Korma</h3>
                  	<img src="img/bhopalikorma.jpg" alt="..." class="img-thumbnail"><br>Mutton lovers are going to enjoy Bhopali Gosht Korma during their visit to Madhya Pradesh. This popular Mughlai dish involves cooking mutton in a gravy made of peppers. The dish is a dream for non-vegetarians and a must-have for every foodie.<br>



                 </p>
                 <p>
                 	<h3>Daal Bafla</h3>
                  	<img src="img/dalbafla.jpg" alt="..." class="img-thumbnail"><br>Madhya Pradesh’s dal bafla is a local version of dal baati of Rajasthan. Baflas are crispy wheat flour balls that are dipped in ghee before being served. It is served with a spicy dal, coriander chutney and pickle. Head to Bhopal for the ultimate dal baflas in the state. <br>

                 </p>
                 <p>
                 	<h3>Jalebi</h3>
                  	<img src="img/jalebi.jpg" alt="..." class="img-thumbnail"><br>
                  	India’s favourite sweet is also a popular Madhya Pradesh food. These deep-fried wheat flour rings are dipped into sugar syrup before being served. They are crispy in texture but juicy on the inside. Jalebi tastes best with rabri drizzled on top.<br>

                 </p>
                 <p>
                 	<h3>Maalpua</h3>
                 	<img src="img/maalpua.jpg" alt="..." class="img-thumbnail"><br>
                 	Malpua is a popular dessert from the state of Madhya Pradesh that resembles a pancake. The sweet dish involves mixing dry fruits in flour and frying in it ghee before dipping it in sugar syrup. They are crispy on the edges with a soft central part and go best with a bowl of rabri.<br>

                 </p>
                 <p>
                 	<h3>Mawa Bati</h3>
                 	<img src="img/mawabati.jpg" alt="..." class="img-thumbnail"><br>Mawa baati is one sweet that you just can’t miss if you’re in Bhopal. These are sweet balls of fried mawa stuffed with chopped dry fruits, cardamom powder. They look like bigger gulab jamuns and are served on festive occasions. There are some street food stalls in Old Bhopal that serve these decadent desserts. You’ll also find mawa baati, chaat and other street foods at Hawker’s Corner at 6 No. Stop in Bhopal. Besides this, there are many other sweets that one must absolutely try in Madhya Pradesh, including Shrikhand (made from strained sweetened yogurt), Khopra Pak (made from coconut), Malpua and Imarti (a sweet like jalebi).<br>

                 </p>
                <p>
                	<h3>Poha</h3>
                	<img src="img/poha.jpg" alt="..." class="img-thumbnail"><br>Poha may not be a new dish for most of us but is definitely a favourite Madhya Pradesh food. The dish is made using flattened rice that is mixed with onions, tomatoes, green chilies, roasted peanuts and curry leaves. Squeeze a lemon on top before enjoying this appetizing dish.  <br>
                	
                </p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">ART & CULTURE</h2>
                  
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <p>
                  	<h3><u>-:BAGH:-</u></h3><br>
                  	<br>
                  	<h4>
                  	BAGH PRINTS:-</h4>

Although block prints are largely associated with Rajasthan, the residents of Madhya Pradesh much prefer their own bagh prints. This bold, vibrant hand-block printing originates from Bagh village in the district of Dhar. While there are several imitations of the original print now, the real stuff is still made with organic dyes – and you can tell which is authentic by the cloth’s distinctive smell.
<br>
The process is slow, and involves treating the cloth in a mixture that includes sea salt and castor oil. The prints –geometrical, floral patterns –themselves are done by hand, and the teakwood blocks used for printing are also crafted painstakingly by hand.
<br><br>
<h4>DURRIES:-</h4>
<br>

Durries (rugs) in Madhya Pradesh have been made for centuries near Sironj, a city in Vidisha district, though now they are also made in Jabalpur and Shahdol, among other places. Made of thick cotton, the durries are woven by a technique called ‘punja’. They come in vibrant colours, with bold patterns and folk designs, including birds and animal motifs, and geometric weaves.

<br>
<br>
<h4>BATTO BAI DOLLS:-</h4>
<br>
Named after their creator, a craftswoman from Gwalior, Batto Bai dolls are now made in Bhopal and Jhabua as well. Made of rags and paper, these rustic dolls are influenced by the different cultures of the country. These are charmingly dressed in bright, traditional clothing, and in varying sizes, which can go up to 5 ft in height.
<br><br>
<h4>ZARI:-</h4>
<br>
Zari is a metallic thread, used for weaving and embroidery. It was originally made of gold or silver, which is no longer the case. However, that hasn’t lessened the beauty of this craft, where talented artisans use the metallic thread to embroider delicate, intricate designs on items ranging from clothes and jootis (slippers) to bags. Bhopal’s cacophonic Chowk market, in the middle of the old city, is where you can find beautifully embroidered and beaded batuas (purses).
<br><br>
<h4>LEATHER:-</h4>
<br>
Craftspeople in Madhya Pradesh have an age-old tradition of working with leather. The state’s stuffed leather toys are famous, with camels, zebras and elephants being the most popular. The craft has evolved over time, and today Gwalior is known for shoes, and Indore and Dewas for leather apparel. Most factories in Dewas, in fact, create apparel for large fashion houses based in Europe and the US.
<br>
<br>
<h4>METAL CRAFT:-</h4>
<br>
Although you will find beautifully made metal objects, ranging from idols of gods and goddesses to items of home décor across the length and breadth of Madhya Pradesh, Tikamgarh is where it all originated. The craft of bell metal casting has been practiced here for many centuries. The technique used is lost-wax casting, where a duplicate sculpture is cast from an original one, using wax as a mould. Although the number of craftspeople in Tikamgarh has declined, the few artisans that are left behind still make exquisite figurines, lamps, vessels and toys that are appreciated the world over.<br>
                  </p>

                  <p>
                  <h3><u>	-:CHANDERI:-</u></h3>

The famous Chanderi fabric is a hand-woven combination of silk and cotton.
 The town of Chanderi, where the craft originated, is still home to master
 weavers who practice the age-old tradition of creating the cloth on 
handlooms. Chanderi saris, woven in subtle, pleasant colours, 
with a rich gold border, are the most popular. The traditional bootis,
 or motifs, of the saris include lotuses and peacocks. It is said that when 
this incomparable cloth was first woven, the only colour used was an 
extraction from the much-prized saffron herb. The delicacy of the weave
 and the ratio of silk to cotton are the factors that decide the worth 
of the sari. Nowadays, you can also find scarves, salwar kameez and mens’ 
jackets made with Chanderi cloth.

                  </p>
                  <p><h3><u>-:MAHESHWARI:-</u></h3>

Maheshwari is also a fabric, somewhat similar to Chanderi. It is said to have
 originated from Maheshwar, a city approximately 90 km from Indore. The fabric was created by weavers,
 who were brought from Surat by Maharani Ahilya Bai Holkar (1725-1795) to weave cloth for 
the royal household. The queen, particularly partial to floral designs,
and thus the weavers, commanded to only create geometrical motifs, drew inspiration from the
 detailing of the Maheshwar Fort.Thus, even today, the main difference between Maheshwari and 
Chanderi saris is the former’s distinctive design, which comprises checks and stripes,
 while Chanderi has a less austere touch with pretty sfloral motifs woven 
throughout the sari.</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">ROCK PAINTINGS</h2>

                  <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                  <p><h3>Bagh Caves</h3><br>
                  	The Bagh Caves are a group of nine rock-cut monuments,
situated among the southern slopes 
of the Vindhyas in Bagh town of Dhar districtin Madhya Pradesh state in 
central India.These monuments are located at a distance of 97 km from Dhar town.
 These are renowned for mural paintings by master painters of ancient India.
The use of the word "cave" is a bit of a misnomer, since these are not natural, but instead examples of 
Indian rock-cut architecture. The Bagh caves, like those at Ajanta,
 were excavated by master craftsmen on perpendicular sandstone rock 
face of a hill on the far bank of a seasonal stream, the Baghani.
 Buddhist in inspiration, of the nine caves, only five have survived.
 All of them are 'viharas' or resting places of monksmonasteries having
 quadrangular plan. A small chamber, usually at the back, forms the 'chaitya',
the prayer hall. Most significant of these five extant caves is the Cave 4,
 commonly known as the Rang Mahal (Palace of Colors).<br>

The Bagh Caves were quarried in the 5th -6th century AD,
in the very late stages of Buddhism in India,
 and long after most of the Indian Buddhist Caves had been built,
 many of them since the 2nd or 1st centuries BCE.<br>


                  </p>
                  <p><h3>Bheembetika Rock Shelters</h3><br>
                  	The Bhimbetka rock shelters are an archaeological site in central India that spans the prehistoric paleolithic and mesolithic periods, as well as the historic period. It exhibits the earliest traces of human life on the Indian subcontinent and evidence of Stone Age starting at the site in Acheulian times.It is located in the Raisen District in the Indian state of Madhya Pradesh about 45 kilometres (28 mi) southeast of Bhopal. It is a UNESCO world heritage site that consists of seven hills and over 750 rock shelters distributed over 10 kilometres (6.2 mi). At least some of the shelters were inhabited by Homo erectus more than 100,000 years ago. The rock shelters and caves provide evidence of, according to Encyclopædia Britannica, and a "rare glimpse" into human settlement and cultural evolution from hunter-gatherers, to agriculture, and expressions of spirituality.

Some of the Bhimbetka rock shelters feature prehistoric cave paintings and the earliest are about 30,000 years old. These cave paintings show themes such as animals, early evidence of dance and hunting. The Bhimbetka site has the oldest known rock art in the Indian subcontinent, as well as is one of the largest prehistoric complexes.
<br>

                  </p>
                  <p><h3>Chaturbhujnath Nala Rock Art Shelters</h3><br>
                  	are from 4th to 5th century AD.

Chaturbhujnath Nala rock art shelters

Rock painting in Bhanpura
Chaturbhujnath Nala rock art shelters were discovered in 1973 and are one of the Longest Rock Art Galleries in the world.They are situated near the Gandhi Sagar Sanctuary, 30 kilometres (19 mi) from Bhanpura in the Mandsaur district of Madhya Pradesh. It is located along a perennial stream called the Chaturbhujnath Nala, stretching in a 5-kilometre-long (3.1 mi) rock art gallery, with thousands of figures painted on its walls. According to carbon dating, the paintings are around 35,000 years old. The rock shelters differ from the rock caves of Bhimbetka, because they are isolated and relatively narrow.

The surface of the paintings is uneven in colour and texture. The colour of the paintings, which is mostly red and ochre, comes in varying shades, some bright, others a faded maroon and in rare instances, white and black.The subjects of paintings are human beings and animals including elephants, bison, tigers, leopards, monkeys, snakes, birds, rhinos, deer, water animals, foxes, cows, bullocks and camels. In several cases, daily lives have been depicted, such as herding, hunting, axe wielding, riding cattle, women performing chores, and other pastoral arts. The people, usually men, are sometimes depicted as stick figures, and sometimes using two triangles linked by straight lines, with or without clothes

In January 2007, the Rock Art Society of India (RASI) described it as the "longest chain of rock arts in the world". According to them, the earliest carvings are mostly of animals. RASI Secretary G L Badam stated, "The presence of a variety of rituals, processions and fighting scenes goes to prove the continuity of the art and early man's culmination into community living".<br>



                  </p>
                  <p><h3>Udayagiri</h3><br>
                  	Udayagiri caves contain iconography of Vaishnavism (Vishnu), Shaktism (Durga and Matrikas) and Shaivism (Shiva). They are notable for the ancient monumental relief sculpture of 
Vishnu in his incarnation as the man-boar Varaha,
 rescuing the earth symbolically represented by Bhudevi clinging to the boar's
 tusk as described in Hindu mythology.
The site has important inscriptions of the Gupta 
dynasty belonging to the reigns of Chandragupta II(c. 375-415) and
 Kumaragupta I.
Udayagiri Caves are set in two low hills near Betwa River, on the banks of 
its tributary Bes River. This is an isolated ridge about
 2.5 kilometres(1.6 mi) long, running from southeast to northwest,
 rising to about 350 feet (110 m) height. The hill is rocky and consists of
 horizontal layers of white sandstone, a material common in the region.
 They are about 6 kilometres (3.7 mi) west of the town of Vidisha,
 about 11 kilometres (6.8 mi) northeast of the Buddhist site of Sanchi,
 and 60 kilometres (37 mi) northeast of Bhopal. The site is connected 
to the capital Bhopal by a highway. Bhopal is the nearest major
 railway station and airport with regular services.


                  </p>
               
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h1>HERITAGE HOTELS OF MP</h1><br><br>
                   <p>
                    <h3>Jehan Numa Palace</h3>
                    <img src="img/jnp.jpg" alt="..." class="img-thumbnail"><br>The Jehan Numa Palace in Bhopal is a regal 19th Century royal residence. The palace is a rare fusion of Nawabi hospitality and contemporary comfort. Set atop Shamla Hill, the testament of Nawabi history and culture, it is an experience of the bygone era. The Palace presents a charming miscellany of colonial style, princely Indian culture and modern luxury. The timeless gallantry and hospitality reflect in every service. Guests experience a home away from home. Popular with both the leisure and business visitors, Jehan Numa Palace boasts of fine dining experiences, state-of-the-art business facilities, and a relaxing leisure environment.<br>



                 </p>
                 <p>
                  <h3>Sheesh Mahal</h3>
                    <img src="img/sm.jpg" alt="..." class="img-thumbnail"><br>Sheesh Mahal Orchha in the central Indian state of Madhya Pradesh offers an amazing combination of old-world charm along with contemporary facilities and impeccable Indian hospitality. The magnificence of the past is coupled with an enchanting color scheme and sophisticated decor.
 <br>

                 </p>
                 <p>
                  <h3>Deo Bagh</h3>
                    <img src="img/dbg.jpg" alt="..." class="img-thumbnail"><br>
                    Deo Bagh is one of the rarest of heritage hotels in Gwalior where numerous stunning historical artefacts are present within the hotel premises. The guests who come in here have a great time visiting the two 17th-18th century Maratha temple that are located here. It is one of the most unique accommodation facilities in the city. One stay in this hotel and you are guaranteed to cherish it for the rest of your life. <br>

                 </p>
                 <p>
                  <h3>Hammeer Garhi Heritage Resort</h3>
                  <img src="img/hgh.jpg" alt="..." class="img-thumbnail"><br>
                 Hammeer Garhi Heritage Resort is set at a pleasant location in Madhya Pradesh. Settled close to Khajuraho, the 350 year old resort is great stop for Orchha and other attractive places in the region. The heritage property is set at the backdrop of Basari. The old world charm, picturesque set up of three lakes, forests and hillocks, adds to the appeal of the resort. Experience the feel of India's history, culture in its truest essence. The accommodation, dining options and cultural activities makes your stay a pleasant one.<br>

                 </p>
                 <p>
                  <h3>Jhira Bagh Palace</h3>
                  <img src="img/jbp.jpg" alt="..." class="img-thumbnail"><br>Erected way back in 1865, Jhira Bagh Palace is an amazing heritage hotel for tourists who love splurging on luxury. A cozy environment is what this property has to offer to its guests who get to stay in spacious luxurious rooms and suites. Spread amidst a vast piece of lush green land in the calm Malwa countryside, this palace is a perfect place to enjoy a relaxing vacation and visit the best attractions of Madhya Pradesh. Enjoy world-class facilities and impeccable hospitality services in one of the heritage hotels of India.<br>

                 </p>
                <p>
                  <h3>Hotel Ahilya Fort</h3>
                  <img src="img/haf.jpg" alt="..." class="img-thumbnail"><br>Standing high on a hill, overlooking the river Narmada, Ahilya fort offers its guests a luxurious stay while offering excellent hospitality services. This heritage property is currently managed by Prince Shivaji Rao Holkar, son of the last ruler of Indore. <br>
                  
                </p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                     Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
