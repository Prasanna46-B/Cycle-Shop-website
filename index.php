<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport"   content="width=device-width, initial-scale=1.0">
  <title> CYCLE SHOP </title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="bootstrap.min.js"></script>
  <script src="jquery.min.js"></script>

  <!------------FONT STYLE LINK-------------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@600&display=swap" rel="stylesheet">


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">

</head>
<body>



      <nav class="navbar navbar-inverse" style="border-color: white;">
      <div class="container-fluid" style="background-color: white;">
      <div class="navbar-header">
      <img src="logo.webp" style="margin-top:0px;bottom: 0px;height:92px;width:143px;">
      </div>

    <ul class="nav navbar-nav navbar-right" style="font-family: 'Roboto Slab', serif;font-size: 17px;margin-top: 22px;margin-right:447px;">
        <li ><a href="#">HOME</a></li>
        <li ><a href="#">CATEGORY</a></li>
        <li ><a href="#">GALLERY</a></li>
        <li ><a href="#">BLOG</a></li>
        <li ><a href="#">ABOUT US</a></li>
        <li ><a href="#">CONTACT </a></li>
    </ul> 

    <ul class="nav navbar-nav navbar-right" style="font-family: 'Inconsolata', monospace;font-size: 20px; text-shadow: 2px 2px 5px #795548;margin-top:-19px;margin-right:157px;">
        <li ><a href="#"><i class="fa fa-shopping-cart">&nbsp;&nbsp</i>SHOPPING CART</a></li>
        
        <a id="login-button" ms-hide-element="true" href="" class="button logout login w-button">Login</a>
  </ul>
 </div>
</nav>


      <div class="container-fluid" style="margin-top:24px;">
      <div class="row">
      <div id="sg-carousel" class="carousel slide carousel-fade" data-ride="carousel" style="width: 100%;height: 600px;">
        <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1" class=""></li>
        <li data-target="#carousel" data-slide-to="2" class=""></li>
        <li data-target="#carousel" data-slide-to="3" class=""></li>
        </ol>

      <!-- Carousel items -->
        <div class="carousel-inner carousel-zoom">
        <div class="item active"><img class="img-responsive" src="c1.png" alt="" style="width: 100%;height: 600px;">
        <div class="carousel-caption">
          <h1  data-animation="animated zoomInLeft" class="cap-txt ">We are amazing</h1>
        
          <button data-animation="animated bounceInUp" class="button button--tamaya button--border-thick" data-text="BUY NOW" style="padding: 12px 25px;font-size: 12px;"><span>BUY</span></button>
        </div>
        </div>

          <div class="item"><img class="img-responsive" src="c2.jpg" alt="" style="width: 100%;height: 600px;">
          <div class="carousel-caption">
          <h1 data-animation="animated zoomInLeft" class="cap-txt">We are smart developers</h1>
          
          <button data-animation="animated bounceInUp" class="button button--tamaya button--border-thick" data-text="ADD TO CART" style="padding: 12px 25px;font-size: 12px;"><span>BUY</span></button>
          </div>
          </div>

          <div class="item"><img class="img-responsive" src="c3.jpeg" alt="" style="width: 100%;height: 600px;">
          <div class="carousel-caption animated slideInLeft">
          <h1 data-animation="animated zoomInLeft" class="cap-txt">We are innovative</h1>

          <button data-animation="animated bounceInUp" class="button button--tamaya button--border-thick" data-text="BOOK NOW" style="padding: 12px 25px;font-size: 12px;"><span>BUY</span></button>
          </div>
          </div>

      <!-- Carousel nav -->
      <a class="carousel-control left" href="#sg-carousel" data-slide="prev">‹</a>
      <a class="carousel-control right" href="#sg-carousel" data-slide="next">›</a>
    </div> 
  </div>
</div>

    
                <div class="container_fluid" style="margin-top:30px;">
                <div class="page-header">
                <h2 style="text-align: center;color:#009688;font-family: 'Itim', cursive;font-size: max(40px,40px);display: flex;justify-content: center;text-shadow: 2px 2px 5px #795548;">    CATERORY </h2>
                  <hr style="width: 115px; border: 1px solid orange;">
                </div>

                <div class="row" id="pic">
                <div class="col-md-4">
                  <div class="pras">
                  <img src="cycle1.jpg" height="auto" width="100% ">
                  <a href="http://localhost/CYCLE%20SHOPS/form.php"><button class="b" >BUY NOW</button></a>
                </div>
                </div>

                <div class="col-md-4">
                  <div class="pras">
                  <img src="cycle2.webp" height="auto" width="100%">
                  <a href="http://localhost/CYCLE%20SHOPS/form.php"><button class="b">BUY NOW</button></a>
                </div>
                </div>

                <div class="col-md-4">
                  <div class="pras">
                  <img src="kid3.webp" height="auto" width="100%">
                  <a href="http://localhost/CYCLE%20SHOPS/form.php"><button class="b">BUY NOW</button></a>
                </div>
                </div>
                </div>


                <div class="row" id="pic" style="margin-top: 50px;">
                <div class="col-md-4">
                  <div class="pras">
                  <img src="cycle4.jpg" height="auto" width="400px">
                  <a href="http://localhost/CYCLE%20SHOPS/form.php"><button class="b">BUY NOW</button></a>
                </div>
                </div>

                <div class="col-md-4">
                  <div class="pras">
                  <img src="kid4.webp" height="auto" width="400px">
                  <a href="http://localhost/CYCLE%20SHOPS/form.php"><button class="b">BUY NOW</button></a>
                </div>
                </div>

                <div class="col-md-4">
                  <div class="pras">
                  <img src="cycle3.jpg" height="auto" width="400px">
                  <a href="http://localhost/CYCLE%20SHOPS/form.php"><button class="b">BUY NOW</button></a>
                </div>
                </div>
                </div>


              <div class="container-fluid" style="margin-top:55px;">
              <div class="page-header">
                <h2 style="text-align: center;color:#009688;font-family: 'Itim', cursive;font-size: max(40px,40px);display: flex;justify-content: center;text-shadow: 2px 2px 5px #795548;"> GALLERY</h2>
                  <hr style="width: 110px; border: 1px solid orange;">
              </div>

                 
  <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

     <!-- Wrapper for slides -->
      <div class="carousel-inner">
      <div class="item active">
        <img src="c.2.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="c.3.jpg" alt="Chicago" style="width:100%;">
      </div>

      <div class="item">
        <img src="c.4.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="c.1.jpg" alt="New york" style="width:100%;">
      </div>
      </div>

     <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
    </a>

</div>
</div>
</div>


                <div class="container-fluid" id="blog" style="margin-top:55px;">
                <div class="page-header">
                <h2 style="text-align: center;color:#009688;font-family: 'Itim', cursive;font-size: max(40px,40px);display: flex;justify-content: center;text-shadow: 2px 2px 5px #795548;"> BLOG</h2>
                  <hr style="width: 80px; border: 1px solid orange;">
                </div>


              <div class="row" >
              <div class="col-md-4 col-xs-12" >
              <div class="thumbnail" >
                  <img src="b1.jpg" alt="Lights" style="width:100%;height: 250px;">

              <div class="caption">
              <p style="font-size:17px;color:#795548;font-family: 'Ribeye Marrow', cursive;text-shadow: 2px 2px 5px red;height:30px;border:3px solid #607D8B;width:350px;">5 Ways to Keep Cool on Summer Tours</p>
              <p style="font-family: 'Itim', cursive;font-size:22px;">The summer months in New York can get HOT! We’ve put together a few.</p>
              </div>
              </div>
              </div>


    <div class="col-md-4 col-xs-12">
      <div class="thumbnail">
       
          <img src="b2.jpg" alt="Nature"  style="width:100%;height: 250px;">
          <div class="caption">
            <p style="font-size:17px;color:#795548;font-family: 'Ribeye Marrow', cursive;text-shadow: 2px 2px 5px red;height:50px;border:3px solid #607D8B;width:360px;">Bike Touring: What It Is and Why You Should Pursue It.</p>
            <p style="font-family: 'Itim', cursive;font-size:22px;">Bike touring is the act of riding a bike for days, weeks, months.</p>
          </div>
       </div>
    </div>


    <div class="col-md-4 col-xs-12">
      <div class="thumbnail">
        <img src="b3.jpg" alt="Fjords"  style="width:100%;height: 250px;">
          <div class="caption">
            <p style="font-size:17px;color:#795548;font-family: 'Ribeye Marrow', cursive;text-shadow: 2px 2px 5px red;height:60px;border:3px solid #607D8B;width:360px;">Rent a Bike Touring Bikes: Reviews and Opinions of Our Customers.</p>
            <p style="font-family: 'Itim', cursive;font-size:22px;">Our new touring bikes have had rave reviews. They have been successful.</p>
          </div>
       </div>
      </div>


 <div class="row" style="margin-top: 20px;">
    <div class="col-md-6">
      <div class="thumbnail">
       <img src="nature1.jpg" alt="Lights"  style="width:100%;height: 300px;">
          <div class="caption">
             <p style="font-size:17px;color:#795548;font-family: 'Ribeye Marrow', cursive;text-shadow: 2px 2px 5px red;height:60px;border:3px solid #607D8B;width:400px;">How to Conduct a Bike Tour of Your Dreams without Paying Extra Charges.</p>
            <p style="font-family: 'Itim', cursive;font-size:22px;">Whether you’re planning a short one-day bike ride near your home or a multi-year-long bicycle tour all the way around the world, bicycle touring.</p>
          </div>
      </div>
    </div>

   <div class="col-md-6">
      <div class="thumbnail" >
        <img src="nature2.jpg" alt="Lights"  style="width:100%;height: 300px;">
          <div class="caption">
             <p style="font-size:17px;color:#795548;font-family: 'Ribeye Marrow', cursive;text-shadow: 2px 2px 5px red;height:40px;border:3px solid #607D8B;width:430px;">The Best Places to Ride your Bike This Spring.</p>
            <p style="font-family: 'Itim', cursive;font-size:22px;">Today marks one of our favorite days of the year!  They have been successful To celebrate this Year.</p>
          </div>
        </div>
    </div>
</div>
</div>
</div>


                    
              <div class="container-fluid" style="margin-top:50px;">
              <div class="page-header">
                <h2 style="text-align: center;color:#009688;font-family: 'Itim', cursive;font-size: max(40px,40px);display: flex;justify-content: center;text-shadow: 2px 2px 5px #795548;">ABOUT US</h2>
                  <hr style="width: 130px; border: 1px solid orange;">
                </div>
                <div class="row" style="margin-top: 20px;">
          <div class="col-md-6">
          <img src="about1.jpg" alt="Lights" style="width:100%;height:480px;">
          </div>

      <div class="col-md-6">
        <p style="text-align:center;font-family: 'Bungee Inline', cursive;text-shadow: 2px 2px 5px #FF9800;color: #607d8b;font-size: 20px;">Experience since 2000</p>
        <p style="font-family: 'Itim', cursive;font-size:21px;text-align: justify;margin-top:30px;">Our company has been the leading provider of bike rental services to residents and guests of the USA since 2000.

When Ride was founded, several American cities have already been among the leaders of global cycling centers. However, we managed to give everyone an opportunity to discover our country by bike.</p>

        <p style="text-align:center;font-family: 'Bungee Inline', cursive;text-shadow: 2px 2px 5px #FF9800;color: #607d8b;font-size: 20px;margin-top: 40px;">Our Mission</p>
        <p style="font-family: 'Itim', cursive;font-size:21px;text-align: justify;margin-top:50px;">We aim to provide the highest quality bike rentals, guided tours, maintenance, and repair to tourists, guests, and residents of the USA in almost all states.</p>
          </div>
          </div>



              <div class="container-fluid" style="margin-top:50px;">
              <div class="page-header">
                <h2 style="text-align: center;color:#009688;font-family: 'Itim', cursive;font-size: max(40px,40px);display: flex;justify-content: center;text-shadow: 2px 2px 5px #795548;">CONTACT</h2>
                  <hr style="width: 110px; border: 1px solid orange;">
              </div>   
              <div class="row" style="background-color:#8BC34A;">
              <div class="col-md-6">
                <img src="logo.webp" style="height:200px;width:300px;margin-top:-3px;">       




<div class="container animated fadeIn">
    <div class="row">
        <div class="col-sm-12" id="parent">
            <div class="col-sm-6">
                <iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7832.405962646044!2d76.9518711718046!3d11.02339209952867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba858fa2f7ea73d%3A0xce7ac4db7da50fa2!2sSivananda%20Colony%2C%20Tatabad%2C%20Coimbatore%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1678599013857!5m2!1sen!2sin"> allowfullscreen></iframe>
      </div>


        <div class="col-sm-6" style="font-family: 'Bungee Inline', cursive;text-shadow: 2px 2px 5px red;color: black;font-size: 18px;">
        <form action="form.php" class="contact-form" method="post">
        <div class="form-group">
              <input type="text" class="form-control" id="name" name="nm" placeholder="Name" required="">
        </div>
        
        
            <div class="form-group form_left">
              <input type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
            </div>
        
          <div class="form-group">
               <input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
          </div>

          <div class="form-group">
          <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Type Your Message/Feedback here..." required=""></textarea>
          <br>
            <button class="btn btn-default btn-send" style="color:#795548;font-family: 'Ribeye Marrow', cursive;text-shadow: 2px 2px 5px red;"> <span class="glyphicon glyphicon-send"></span> Send </button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <div class="container second-portion">
     <div class="row">
        <!-- Boxes de Acoes -->
      <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">MAIL & WEBSITE</h3>
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp bmprasanna2002@gmail.com
              <br>
              <br>
              <i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.bmprasanna.com
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
      

    <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">CONTACT</h3>
              <p>
              <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-6383XXXXX
              <br>
              <br>
              <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+91)-709437XXXX
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
      
        <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">ADDRESS</h3>
              <p>
               <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 15/3 Sivanandha colony
               "Issac Street", Coimbatore - 641012.
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>        
    <!-- /Boxes de Acoes -->
    
    <!--My Portfolio  dont Copy this -->      
</div>
</div>
</div>
</body>
</html>