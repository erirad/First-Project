<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="./css/hover-min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <!--<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">-->
  <!-- mano css turi buti visada zemiau nei kiti css failai -->
  <link rel="stylesheet" href="./css/style.css">
  <title>Project</title>

</head>

<body>
<!-- MENU RED-->
  <div class="dropup">
  <button id="myBtn" class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-align-justify"></i>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a href="#">Home</a></li>
    <li><a href="#about">About Us</a></li>
    <li><a href="#web">Web building</a></li>
    <li><a href="#prices">Prices</a></li>
    <li><a href="#team">Team</a></li>
    <li><a href="#customers">Customers</a></li>
    <li><a href="#contact">Contacts</a></li>
    <li role="separator" class="divider"></li>
    </ul>
</div>
<!-- MENU RED END -->

  <div class="container-fluid" id="bg-header">

        <header class="row">
          <div class="col-md-2">
            <!--  .img-thumbnail to give an image a rounded 1px -->
              <img class="img-thumbnail" src="./image/logo.png" alt="logo" width="113px">
          </div>
          <div class="col-md-10 ">
                <ul class="nav justify-content-end nav-tabs navbar">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#web">Web building</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#prices">Prices</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#team">Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#customers">Customers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contacts</a>
                </li>
                <?php
                     require_once("./requere_login.php");
                 ?>
              </ul>
          </div>
      </header>
        <!--HEADER END      HEADER END -->
  <div class="row text-center" >
    <div class="col" id="padding-header">
      <h2 class="text-uppercase"> We are</h2>
      <h1 class="text-uppercase ml12">web developers</h1>

        <span class="timer"></span>
        <hr class="style14"/>
        <span id="help"> More than 350 happy clients</span>

        <button type="button" class="btn btn-outline-primary hvr-grow" data-toggle="modal" data-target=".bd-example-modal-lg">
          Contact Us
        </button>
        <?php
             require_once("./write.php");
         ?>
      </div>
    </div>
    </div> <!--container pagaigimas -->

<!-- <button id="myBtn" title="Go to top"><i class="fa fa-align-justify " title="Align Justify"></i></button> -->

<div class="container">

 <div class="row text-center p-5" id="about">
   <div class="col-md-12">
     <h2>About us</h2>
     <hr class="style14"/>
     <p>
       Welcome to the leading company on the market! Our success is driven by the highest quality customer service. We can meet the requirements even of the whimsical clients; there are no complex tasks for us! Thanks for your choice! Our company can boast the reputation of the trusted partner known worldwide. We are proud of the uncompromising quality of services.
     </p>
   </div>
 </div>
  <div class="row">
    <div class="col">
      <div class="row">
        <div class="col-md-4">
          <img src="./image/icon1.png" alt="icon1" class="img-fluid"/>
        </div>
        <div class="col-md-8">
          <h4> Get a Custom Domain Name </h4>
          <p> With Website Builder we make owning a domain name and website for everyone, by taking care of your hosting and domain. </p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="row">
        <div class="col-md-4">
          <img src="./image/icon3.png" alt="icon2" class="img-fluid"/>
        </div>
        <div class="col-md-8">
          <h4> SEO Tools Included Free </h4>
          <p> We provide you with free, easy to use, tools to give your website a boost in search engine rankings as well as track vital traffic statistics.  </p>
        </div>
      </div>
    </div>
</div>
  <!-- TARPAS 80 -->
  <div class="row">
    <div class="col-md-12 height-80"></div>
  </div>
  <!-- TARPAS 80 -->
  <div class="row">
    <div class="col">
      <div class="row">
        <div class="col-md-4">
          <img src="./image/icon2.png" alt="icon3" class="img-fluid"/>
        </div>
        <div class="col-md-8">
          <h4> Business Email Setup </h4>
          <p> Once you have chosen your domain, Website Builder will help you create name@dom.com email address to ensure you look professional. </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="row">
        <div class="col-md-4">
          <img src="./image/icon4.png" alt="icon4" class="img-fluid"/>
        </div>
        <div class="col-md-8">
          <h4> Easy eCommerce Integration </h4>
          <p> Website Builder offer quick and simple eCommerce solutions which will allow you to sell products and taking payments in no time. </p>
        </div>
      </div>
    </div>
  </div>
</div> <!--CONTAINER END -->


  <!-- TARPAS 80 -->
  <div class="row">
    <div class="col-md-12 height-80"></div>
  </div>
  <!-- TARPAS 80 -->

<div class="container-fluid" id="bg-1">
  <div class="row text-center p-5" id="web">
    <div class="col-md-12">
      <h3> Creating a website is easy as 1 .. 2 .. 3 </h3>
       <hr class="style14"/>
    </div>
  </div>
  <div class="row text-center p-5">
    <div class="col-md-4">
 <img src="./image/search.png" alt="search" class="img-fluid" />
 <h4> 1. Choose a Design </h4>
 <p> Over 10,000 options for you to choose from </p>
    </div>
    <div class="col-md-4">
      <img src="./image/cut.png" alt="cut" class="img-fluid" />
      <h4> 2. Edit your Website  </h4>
      <p> Simple steps to customize your site </p>
    </div>
    <div class="col-md-4">
      <img src="./image/put.png" alt="put" class="img-fluid" />
      <h4> 3. Publish to the Web  </h4>
      <p> Get your website online with 1 click </p>
    </div>
  </div> <!--row-->

    <section class="row text-center">
      <div class="col-md-12">
        <button type="button" class="btn btn-outline-primary btn-lg hvr-grow" id="btn">How it works</button>
      </div>
    </section>



  <section id="two" style="display:none">
    <div class="row p-5">
      <div class="col-md-12 text-center">
        <h3> How Does Website Builder Work? </h3>
      </div>
    </div>
    <div class="row p-5">
      <div class="col-md-6">
        <img src="./image/template.png" alt="image1" class="img-fluid" />
      </div>
      <div class="col-md-6">
         <h3> 1. Choose a Template </h3>
         <p><em> We have over 10,000 designs for you to choose from </em> <br /><br /> Whatever your vision of your site is Website Builder have you covered. Our designers have created stunning ready-made templates in all niches and styles to give your website an instant head start. Here at Website Builder we pride ourselves on having the best template designs in the industry. </p>
         <img src="./image/down-l.png" alt="img-check" class="img-fluid"/>
      </div>
    </div>

    <div class="row p-5">
      <div class="col-md-6">
        <h3> 2. Customize your Website</h3>
        <p><em> Creating a Website has Never Been so Easy  </em> <br /><br /> Thanks to our revolutionary drag & drop website builder, you can create a website just how you want it. Just click on the content you wish to change, or drag and drop new images. You can easily add maps, blogs, videos, contact forms or even products to sell. Website Builder will allow you to create your dream website with ease. </p>
         <img src="./image/down-r.png" alt="img-check" class="img-fluid"/>
      </div>
      <div class="col-md-6">
        <img src="./image/cutdesign.png" alt="image2" class="img-fluid" />
      </div>
    </div>

    <div class="row p-5">
      <div class="col-md-6">
        <img src="./image/upload.png" alt="image3" class="img-fluid" />
      </div>
      <div class="col-md-6">
        <h3> 3. Publish to the Internet </h3>
        <p><em> Publish your website live to the world  </em> <br /><br /> Choose your domain name, then click publish. It's that simple! Website Builder have made owning a domain and website the easiest it can be by creating our 1 click publish system. Once live you can still edit your website then again just one click to update it. Our website builder tool is the easiest in the industry to launch a website. </p>
      </div>
    </div>
    </section>

</div> <!--container-->

<div class="container" id="prices">
  <div class="row p-5">
    <div class="col-md-5">
      <h2> Build a better website </h2>
      <p> Designed for Google, mobile, social and success.<br/><br/> Choose the most suitable option for you. If you want to know more about the advantages and disadvantages of each choice, please let us know. We will offer you the best solution.<br/><br/><em>If this is your first site, we'll give you a gift. Click the button and know what you can get for free. </em></p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
      </ul>
        <button type="button" class="btn btn-lg btn-outline-warning hvr-float-shadow" data-toggle="modal" data-target=".bd-example-modal-lg">
        Start for Free
      </button>
      <?php
           require_once("./write.php");
       ?>
  </div>
  <div class="col-md-7">
    <img src="./image/stage.png" alt="computer" class="img-fluid" />
  </div>
</div>

  <div class="row p-5">
    <div class="col-md-3 shadow">
      <div class="line-40"></div>
      <h3> Personal </h3>
      <p> For sharing your passion online </p>
      <button type="button" class="btn btn-outline-warning hvr-float-shadow"> Start for Free </button>
      <p><strong>No credit card required. Try it free for one month.</strong> Then £4.99/mo (£59.88/yr) after. Prices exclude 20% VAT where applicable. <br /><br />
       <strong> Responsive </strong> mobile design <br />
       <strong> Website </strong> hosting <br />
       <strong> 24/7 </strong> support </p>
    </div>
    <div class="col-md-3 shadow">
      <div class="line-40"></div>
      <h3> Business </h3>
      <p> For businesses just starting out </p>
      <button type="button" class="btn btn-outline-warning hvr-float-shadow"> Start for Free </button>
      <p><strong>No credit card required. Try it free for one month.</strong> Then £6.99/mo (£83.88/yr) after. Prices exclude 20% VAT where applicable. <br /><br />
       <strong> Responsive </strong> mobile design <br />
       <strong> Website </strong> hosting <br />
       <strong> 24/7 </strong> support <br />
       <strong> PayPal </strong> integration <br />
       <strong> Security </strong> (SSL) <br />
       <strong> Search Engine Optimization  </strong> (SEO) </p>
    </div>
    <div class="col-md-3 shadow">
      <h5 class="bg-yellow">Most popular</h5>
      <h3> Business Plus </h3>
      <p> For businesses looking for more customers </p>
      <button type="button" class="btn btn-outline-warning hvr-float-shadow"> Start for Free </button>
      <p><strong>No credit card required. Try it free for one month.</strong> Then £10.99/mo (£131.88/yr) after. Prices exclude 20% VAT where applicable. <br /><br />
       <strong> Responsive </strong> mobile design <br />
       <strong> Website </strong> hosting <br />
       <strong> 24/7 </strong> support <br />
       <strong> PayPal </strong> integration <br />
       <strong> Security </strong> (SSL) <br />
       <strong> Search Engine Optimization  </strong> (SEO) <br />
       <strong> Email </strong> Marketing <br />
       <strong> Social </strong> Media Integration <br />
       <strong> Globally </strong> -Optimized Speed </p>
    </div>
    <div class="col-md-3 shadow">
      <h5 class="bg-yellow"> eCommerce </h5>
      <h3> Online Store </h3>
      <p> For businesses that want to sell products online  </p>
      <button type="button" class="btn btn-outline-warning hvr-float-shadow"> Start for Free </button>
      <p><strong>No credit card required. Try it free for one month.</strong> Then £19.99/mo (£239.88/yr) after. Prices exclude 20% VAT where applicable. <br /><br />
       <strong> Responsive </strong> mobile design <br />
       <strong> Website </strong> hosting <br />
       <strong> 24/7 </strong> support <br />
       <strong> PayPal </strong> integration <br />
       <strong> Security </strong> (SSL) <br />
       <strong> Search Engine Optimization  </strong> (SEO) <br />
       <strong> Email </strong> Marketing <br />
       <strong> Social </strong> Media Integration <br />
       <strong> Globally </strong> -Optimized Speed <br />
       <strong> Built-in shopping cart </strong> with fast checkout <br />
       <strong> Accept credit cards </strong> , PayPal, Apple Pay and more <br />
       <strong> Configure shipping </strong> and tax rates <br />
       <strong> Offer discounts </strong> and coupons <br />
       <strong> Manage orders </strong> and inventory <br />
       <strong> Abandoned cart </strong> recovery </p>
    </div>
  </div>
</div>



<div class="container-fluid" id="team">
  <div class="row">
    <div class="col-md-12" id="bg-team">
     <div class="lygiavimas-center">
      <h2 class=" d-flex justify-content-center display-1">TEAM</h2>
    <p>
      We are responsible for your business
    </p>
  </div>
    </div>
  </div>
</div>


<div class="container">
<?php
require_once("./put_image_into.php");
?>
  <div class="row">
    <div class="col-md-12 p-5 text-center">
      <h2>WE LOVE THIS STUFF</h2>
      <p>
        Want something amazing? Get a team that cares as much as you do.
      </p>
        <hr class="style14">
    </div>
  </div>

  <div class="row height-40 p-5 line text-center">
    <div class="col-md-2">
    <img src="./image/<?php $img = getImage(1); echo $img['img_name'] ?>" class="rounded-circle" width="100px;" height="100px;" alt="team7">
  <h5>
    Mike Kelandar
  </h5>
  <p><em>Founder</em></p>
    </div>
    <div class="col-md-2">
    <img src="./image/<?php $img = getImage(2); echo $img['img_name'] ?>" class="rounded-circle" width="100px;" height="100px;" alt="team8">
    <h5>
      Tod Dancan
    </h5>
    <p><em>CEO</em></p>
    </div>
    <div class="col-md-2">
    <img src="./image/<?php $img = getImage(3); echo $img['img_name'] ?>" class="rounded-circle" width="100px;" height="100px;" alt="team2">
    <h5>
      Mary Colson
    </h5>
    <p><em>Human Resources</em></p>
    </div>
    <div class="col-md-2">
  <img src="./image/<?php $img = getImage(4); echo $img['img_name'] ?>" class="rounded-circle" width="100px;" height="100px;" alt="team1">
  <h5>
    Spencer Belgand
  </h5>
  <p><em>Sales manager</em></p>
    </div>
    <div class="col-md-2">
  <img src="./image/<?php $img = getImage(5); echo $img['img_name'] ?>" class="rounded-circle" width="100px;" height="100px;" alt="team4">
  <h5>
    Tim Kelan
  </h5>
  <p><em>web designer</em></p>
    </div>
    <div class="col-md-2">
  <img src="./image/<?php $img = getImage(6); echo $img['img_name'] ?>" class="rounded-circle" width="100px;" height="100px;" alt="team6">
  <h5>
    Denim Deran
  </h5>
  <p><em>programmer</em></p>
    </div>
  </div>
</div>

<div class="row text-center p-5" id="bg-team-end">

<div class="col-md-3 p-5 grow" id="bg-team-end1">
  <h2> 350 <i class="fa fa-check-square-o" aria-hidden="true"></i></h2>
  <p> Cases completed </p>
</div>
<div class="col-md-3 p-5 grow" id="bg-team-end2">
  <h2> 16 <i class="fa fa-users" aria-hidden="true"></i></h2>
  <p> Consultant </p>
</div>
<div class="col-md-3 p-5 grow" id="bg-team-end3">
  <h2> 5 <i class="fa fa-history" aria-hidden="true"></i></h2>
  <p> years of experiance </p>
</div>
<div class="col-md-3 p-5 grow" id="bg-team-end4">
  <h2> 8 <i class="fa fa-slideshare" aria-hidden="true"></i></h2>
  <p>public notifications </p>
</div>
  </div>


  <div class="container">

<div class="row">
  <div class="col-md-12 text-center p-5">
      <h2> Our Web examples </h2>
      <p>
        We introduce you to our latest works. Every month we add a new ones. So you can get an opinion about design. We divide works into personal and business and you can click on url and find out.
      </p>
        <hr class="style14"/>
    </div>
  </div>
  <div class="row p-4 d-flex justify-content-center">
    <div class="col-md-4 p-4">
  <h5> Personal web pages </h5>
        <?php
           require_once("./personal_pages.php");
       ?>
    </div>
    <div class="col-md-4 p-4">
      <h5> Business web pages </h5>
      <?php
           require_once("./business_pages.php");
       ?>
    </div>
</div>

    <div class="row p-5">
      <div class="col-md-12 text-center">
        <h2>We are waiting for your dream website shortcut</h2>
        <p>
          If you have a vision of what your website should look like, or maybe you have a dream design. But you have to doubt whether it is possible to do such a design and want to ask how much about such a design could cost? Upload your own design shortcut, write your own notes and wishes, and we'll get in touch with you.
        </p>
          <hr class="style14"/>
      </div>
    </div>
    <div class="row p-5">
      <div class="col-md-6">
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <label for="validationServer03">Email</label>
          <input type="email" name="email" class="form-control is-invalid" id="validationServer04" placeholder="example@gmail.com" required>
          <label for="validationServer02">Your text</label>
          <textarea type="text" name="text" class="form-control is-valid" id="inputEmail5" placeholder="Say something about your inspiration" value="Otto"></textarea>
          <input type="file"  name="image" class="p-3">
          <button class="btn btn-outline-primary hvr-grow" type="submit" name="upload">Upload photo</button>
        </form>
      </div>
      <div class="col-md-6">
        <img src="./image/blog.png" aria-flowto="webtemptate" class="img-fluid" />
      </div>
    </div>
  </div>

  <!-- TARPAS 80 -->
  <div class="row">
    <div class="col-md-12 height-80"></div>
  </div>
  <!-- TARPAS 80 -->
  <div class="container-fluid">
<div class="row" id="bg-customers">
  <div class="col-md-12" id="customers">
    <h2 class="text-uppercase text-center">Happy customers</h2>
  </div>
</div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner bg-comment">
        <div class="carousel-item active p-5">
          <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                  <blockquote class="blockquote blockquote-reverse">
                  <p class="mb-0"> <i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>I did not think it was so simple. I received services that were suppressing my glimpse. You had to work with a wide range of companies, but you've come to the best service.</p>
                  <footer class="blockquote-footer text-right">Talor Ban (head of UAB Campus)</footer>
                </blockquote>
              </div>
          </div>
        </div>
        <div class="carousel-item p-5">
          <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <blockquote class="blockquote blockquote-reverse">
                <p class="mb-0"> <i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>I have long been doubting whether it is worth building a personal website, but the price is seductive. I wanted to adjust the page, and I was surprised that the details were made by telephone.</p>
                <footer class="blockquote-footer text-right">Salamon Keilor (manages of AB Luctus)</footer>
              </blockquote>
              </div>
          </div>
        </div>
        <div class="carousel-item p-5">
          <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <blockquote class="blockquote blockquote-reverse">
                <p class="mb-0"> <i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>I immediately say Tom Tailor is the best employee. Very cunning people work here. If I ever need a web page again, I'll really appeal to this company.</p>
                <footer class="blockquote-footer text-right">Kelly Manson (student of university)</footer>
              </blockquote>
              </div>
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

    <!-- TARPAS 80 -->
    <div class="row">
      <div class="col-md-12 height-80"></div>
    </div>
    <!-- TARPAS 80 -->
<div class="container">
  <div class="row p-5">
    <div class="col-md-12 text-center">
      <h2>We are pleased to introduce</h2>
      <hr class="style14"/>
      <p>
        We want to say thanks all those companies that you give us an opportunity to take care for your websites to get better. Our Logo Maker crafts a variety of options for you to find the perfect logo to represent your company’s brand. The end result is a logo that is simple, adaptable, powerful, and blends perfectly with your company’s branding strategy.
      </p>
    </div>
  </div>
</div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12" id="scroll">
          <?php
                 require_once("./clients_logo.php");
             ?>
        </div>
      </div>
    </div>


    <!-- TARPAS 80 -->
    <div class="row">
      <div class="col-md-12 height-80"></div>
    </div>
    <!-- TARPAS 80 -->
   <div class="row p-5">
     <div class="col-md-12 text-center">
       <h2>Get our top stories delivered to your inbox every week!</h2>
       <p>
         Sign up and be in the loop on the hottest tech trends
       </p>
       <hr class="style14"/>
     </div>
   </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-2 text-center">

    <form action="subscribe.php" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm();" method="post">
    <input type="text" name="email" class="form-control is-invalid" id="validationServer04" placeholder="example@gmail.com" /> <br />
    <button class="btn btn-outline-primary hvr-grow" type="submit" name="upload">SUBSCRIBE</button>
    </form>

    </div>
    </div>



    <!-- TARPAS 80 -->
    <div class="row">
      <div class="col-md-12 height-80"></div>
    </div>
    <!-- TARPAS 80 -->
</div> <!--container-->

    <div class="container-fluid" id="myFooter">
        <div class="row p-5" id="contact">
            <div class="col-md-3  text-center">
              <img src="./image/logo.png" alt="logo" width="200px" height="150px"/>
            </div>
            <div class="col-md-2">
                <h5 class="white">NAVIGATION</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#web">Web building</a></li>
                    <li><a href="#prices">Prices</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#customers">Customers</a></li>
                    <li><a href="#contact">Contacts</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="white">CONTACTS</h5>
                <ul id="mycontact">
                  <li><i class="fa fa-phone p-2" aria-hidden="true"></i> (8-37) 399770</li>
                  <li><i class="fa fa-envelope-open-o p-2" aria-hidden="true"></i> info@website.com</li>
                  <li><i class="fa fa-user-secret p-2" aria-hidden="true"></i> Mon-Sat: 9:00 - 18:00</li>
                  <li><i class="fa fa-building p-2" aria-hidden="true"></i> Baltų pr. 8, Kaunas 48119</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="white">LOCATION</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2292.385367506776!2d23.8919052158988!3d54.93125698034162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e71f35a4218311%3A0xf01415098fa503c3!2sBalt%C5%B3+pr.+8%2C+Kaunas+48119!5e0!3m2!1slt!2slt!4v1508957228908" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            </ul>
        </div>
      </div>
    <div class="row text-center p-2">
      <div class="col-md-12 white">
        <p>&copy; 2017 Kaunas cooding school. Privacy policy. Designed by E.R. </p>
      </div>
    </div>

</div> <!--containerio-->





<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="./libs/jquery.counterup.min.js"></script>
<!-- REIKALINGAS KAD VEIKTU SIUNTIMO FORMOS MYGTUKAS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./libs/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="./libs/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="./main.js"></script>

</body>

</html>
