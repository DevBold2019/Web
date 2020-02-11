<?php session_start();?>
<?php
    if(isset($_POST['logUser'])){
        
    $error = false;
    require_once "register.php";
    
      if(isset($_POST["emailUser"]) && isset($_POST["passUser"]))
      {
        $salt="R6pJC&89?#3gT5";
        $password = $_POST['passUser'];
        $encPass=md5($salt.$password);
        $email=$_POST['emailUser'];
        
        $isValid = $db->verifyClient($email,$encPass);
        if($isValid){
          $_SESSION["log_in"] = true;
          $_SESSION["email_name"]= $email;?>
          <script>
            location.href = "home.php"
          </script>
          <?php 
        }else{
         $error = true;
         echo $error;
        }
        }
        else{
            
         echo "SHida";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meru Market Online</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link href="assets/css/product.css" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider1.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    
    
    
    <style>
         body{
        overflow-x:hidden;
        }
        .list-group-item {
            background-color: transparent;
        }
        /* unvisited link */
        
        a:link {
            color: black;
            text-decoration: none;
            font-size:13px;
        }
        /* visited link */
        
        a:visited {
            color: black;
            text-decoration: none;
        }
        /* mouse over link */
        
        a:hover {
            color: white;
            text-decoration: none;
        }
        /* selected link */
        
        a:active {
            color: white;
            text-decoration: none;
        }
        /* Styles for wrapping the search box */
        
        .main {
            width: 15%;
            margin: 0.1vw;
        }
        /* Bootstrap 4 text input with search icon */
        
        .has-search .form-control {
            padding-left: 2.375rem;
            border-radius: 2.0vw;
        }
        
        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 1.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }
        .category-bar {
            width:100%;
            margin:auto;
            padding-left: 2.375rem;
            height: 2.375rem;
            line-height: 1.375rem;
            background-color: #b5651d;
        }
        
        
        .collapse-content .fa.fa-heart:hover {
            color: #f44336 !important;
        }
        
        #carouselmain img {
            width: 100%;
        }
        
        .collapse-content .fa.fa-share-alt:hover {
            color: #0d47a1 !important;
        }
        
        .card-title {
            font-size: 12px;
            text-align: center;
        }
        
        .card-text {
            font-size: 10px;
            text-align: center;
        }
        
        .btn {
            font-size: 0.8vw;
            text-align: center;
            padding-left: 0vw;
            padding-right: 0vw;
            background-color: #f9a602;
        }
        
    
        
        #first_row {
            margin-top: 5px;
            padding-bottom: 0px;
        }
        
        #recipeCarousel img {
            width: 100%;
            height: 230px;
        }
        
        
        
        .text {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
        }
        /* the bottom next tootgle  */
        
        #next {
            opacity: 1;
            top: 50%;
            bottom: 50%;
            background-color: black;
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }
        
        
        #next:hover {
            background-color: #d4af37;
            opacity: 1;
            border-radius: 50%;
            top: 50%;
            bottom: 50%;
            width: 60px;
            height: 60px;
        }
        /* the bottom next tootgle  */
        /* the bottom prev tootgle  */
        
        #prev {
            opacity: 1;
            top: 50%;
            bottom: 50%;
            background-color: black;
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }
        
        #prev:hover {
            background-color: #d4af37;
            opacity: 1;
            border-radius: 50%;
            top: 50%;
            bottom: 50%;
            width: 50px;
            height: 50px;
        }
        /* the bottom prev tootgle  */
        /* the top next tootgle  */
        
        #slidenext {
            opacity: 1;
            top: 50%;
            bottom: 50%;
            background-color: gray;
            border-radius: 50%;
            width: 20px;
            height: 20px;
        }
        
        #slidenext:hover {
            background-color: black;
            border-radius: 50%;
            top: 50%;
            bottom: 50%;
            width: 50px;
            height: 50px;
        }
        /* the top next tootgle  */
        /* the top prev tootgle  */
        
        #slideprev {
            opacity: 1;
            top: 50%;
            bottom: 50%;
            background-color: gray;
            border-radius: 50%;
            width: 20px;
            height: 20px;
        }
        
        #slideprev:hover {
            background-color: black;
            border-radius: 50%;
            top: 50%;
            bottom: 50%;
            width: 50px;
            height: 50px;
        }
        /* the top next tootgle  */
        
        #card {}
        
        #topsales {
            color: #b5651d;
        }
        
        #sidecard {
            margin: 10px;
        }
        
        #title {
            text-align: center;
            font-weight: bold;
            color: black;
        }
        
        #price {
            text-align: center;
            color: grey;
            font-size: medium;
        }
        
        #button {
            background-color: #d4af37;
        }
        
        #button:hover {
            background-color: gray;
        }
        
        #button.text {
            color: grey;
        }
        
       .footer {
            position: fixed;
            left:0;
            bottom:0;
            clear:both;
            width: 100%;
            background-color: #b5651d;
            color: white;
            text-align: center;
            margin:0;
            margin-top: 3px;
}
    
        
        .center {
            margin: auto;
            width: 50%;
            padding: 0.5vw;
        }
        
        .cat-btn {
            
            font-size: 14px;
        }
        
        li {
            backgorund: white;
        }
        
        li.odd {
            background: #a9a9a9;
        }
        
        .content {
            max-width:100%;
            margin: auto;
        }
        
        /* categories*/
.activate {
  display: block;
  text-decoration: none;
  color: black;
}
.activate:hover{
  background-color: #b5651d;
  width: 100%;
  border-radius: 2px;
  text-decoration: none;
  color: white;
}
.btn-group{
    max-width: 90%!important;
    position: relative!important;
    left: 50%!important;
    margin-left: -480px!important;
    line-height: 1.4em!important;
}
.btn-primary, .btn-primary:hover{
    background-color: #fff!important;
  color: black !important;
  padding-right: 10px!important;
  position: relative!important;
}
    </style>
</head>

<body>
    <div class="row" id="first-row" style="background-color:#b5651d; background-size:cover;">
       
        <div class="col-md-12">
        <!-- navigation -->
            <nav class="navbar navbar-expand-sm" style="background-color:#b5651d; height:auto;">

            <button class="navbar-toggler float-xs-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  
                   <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
                  
              </span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="background-color:#b5651d;">
                <ul class="navbar-nav mr-auto" style="background-color:#b5651d;">

                    <li role="presentation" class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li role="presentation" class="nav-item"><a href="addbusiness.php" class="nav-link">Add Business</a></li>
                    <li role="presentation" class="nav-item"><a href="team.php" class="nav-link">About Us</a></li>
                    <li role="presentation" class="nav-item"><a href="faq.php" class="nav-link">Contact Us</a></li>
        
                </ul>
            </div>

        
            <form class="form-inline" method="post">
                
                <input class="form-control mr-sm-2" type="email" placeholder="Email" name="emailUser" style="width:30%; height:2.0em; font-size:10px;">
                <input class="form-control mr-sm-2" type="password" placeholder="Password" name="passUser" style="width:20%; height:2.0em; font-size:10px;">
                <button class="btn btn-sm" name = "logUser" style="width:15%; height:2.0em; background-color:#ffffff; font-size:12px;" type="submit">Login</button>
           
            </form>
       
       
       
        </nav>
         
    <!-- Body -->

        <!-- I USED THE CONTENT CLASS DEFINED IN THE INTERNAL CSS TO ENSURE A WIDTH THAT IS GOOD FOR EVERY SCREEN. IT DOES NOT LEAVE LARGE EMPTY SPACES BETWEEN ELEMENTS-->
       
    </div>
    </div>
    
    <!-- Second row -->
    <div class="row">
    <div class="col-md-12" style="float:center; line-height:0.8;">
            <h4 style="text-align:center; color:#b5651d;">Welcome to Meru Market Online</h4>
        <p style="font-style:oblique; text-align:center; color:#b5651d; size:10px;">"Connected Community. Easy Life."</p>
    </div>
    </div>
    <!--/.Second row -->
       
        <div class="btn-group" style="">
        <button type="button" class="btn btn-primary" style=" border-color: #fff; "  data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true"  data-content="<a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> ">Home</button>
        <button type="button" class="btn btn-primary" style=" border-color: #fff; " data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true"  data-content="<a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> ">Fashion & Beauty</button>
        <button type="button" class="btn btn-primary" style=" border-color: #fff; " data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true"  data-content="<a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> ">Phones & Computers</button>
        <button type="button" class="btn btn-primary" style=" border-color: #fff; " data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true"  data-content="<a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> ">Hotel & Suits</button>
     <button type="button" class="btn btn-primary" style=" border-color: #fff; " data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true"  data-content="<a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> ">Supermarkets</button>
     <button type="button" class="btn btn-primary" style=" border-color: #fff; " data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true"  data-content="<a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> ">Health</button>
     <button type="button" class="btn btn-primary" style=" border-color: #fff; " data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true"  data-content="<a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> ">Electronics</button>
     <button type="button" class="btn btn-primary" style=" border-color: #fff; " data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true"  data-content="<a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> ">Groceries</button>
     <button type="button" class="btn btn-primary" style=" border-color: #fff; " data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true"  data-content="<a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> <a class='activate' href='#'>office</a> 
           <a class='activate' href='#'>garage</a> ">Motorcars & Hire</button>
  </div>
    
        <!-- Third Row -->
            <div class="row" style="margin-top:0.5rem; background-color:#ffffff;">
              
<!-- Right Navigation -->
                <div class="col-md-3">
                    <!-- ********************************************************  -->
                </div>
<!-- Right Navigation -->
                
                <!-- Carousel -->
                <div class="col-md-4" style="background-color: #ffffff00 !important; vertical-align:top;">
                    
        <div class="form-group has-search main" style="padding:0.1vw; margin-bottom:0.5vw; width:auto;">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="text" class="form-control" style="height:2.0em; font-size:12px;" placeholder="Search items and shops...">
        </div>
                    
                    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
                        <!-- They are showing up in a not so good manner and I dont think they are necessary - Evans
                        
                            <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        
                        -->

                        <div class="carousel-inner" style="max-height:50% !important;" id="carouselmain">
                            <div class="carousel-item active" id="items">
                                <img src="https://ke.jumia.is/cms/2020/WK2/KE_WK2_S1_06012020.jpg" style="object-fit: contain;" class="img-fluid d-block w-100" alt="...">
                                <!-- I added the style="object-fit: contain;" to retain the aspect ratio of the images in the carousel -->

                            </div>
                            <div class="carousel-item" id="items">
                                <img src="https://ke.jumia.is/cms/2020/WK2/HP_Slider-(5).jpg" style="object-fit: contain;" class="img-fluid d-block w-100" alt="...">

                            </div>
                            <div class="carousel-item" id="items">
                                <img src="https://ke.jumia.is/cms/2020/WK2/KE_WK2_S2_02012020_D.jpg" style="object-fit: contain;" class="img-fluid d-block w-100" alt="...">

                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev" id="slideprev" style=" width: 20px;
                        height: 20px;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next" id="slidenext" style=" width: 20px;
                        height: 20px;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- Carousel -->
                
                <!-- Events -->
                 
                <div class="col-md-2" style="font-size:12px;">
<nav>
<ul>
  <li class="disabled"><h5 style="font-size:14px;">Upcoming Events</h5></li>
  <li>Football Games</li>
  <li>Rugby County Cup</li>
  <li>Inauguration of Bypass</li>
  <li>IT Competition at MUST</li>
  <li>Agri-BS Conference</li>
  <li>Locusts By-pass Meru</li>
  <li>Tiriji Hub Today</li>
  <li>Innovation Cup 2020</li>
  <li>Broadcasting Vote</li>
</ul>
</nav>

                </div>
                
               <!-- /Events -->
               <div class="col-md-3">
                    <!-- ********************************************************  -->
                </div>
            </div>
       
        <!-- First Row -->


        <!-- second Row -->
        

            <div class="row" style="padding-bottom:1rem;">
                

                    <div class="col-md-12" style="margin:auto;">

                        <hr>

                        <h3 id="topsales" style="text-align:center;">Top Sales</h3>

                        <!--Carousel Wrapper-->
                        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                            <!--/.Controls-->


                            <!--Slides-->
                            <div class="carousel-inner row w-100 mx-auto" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">

                                    <div class="row">
                                        <div class="col-md-2" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top img-fluid mx-auto d-block" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/24/261971/1.jpg?9663" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Apple Iphone</p>
                                                    <p class="card-text" id="price">32,000 ksh</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top img-fluid mx-auto d-block" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/25/020052/1.jpg?5046" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Samsung 32 inch</p>
                                                    <p class="card-text" id="price">Ksh 18000</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top img-fluid mx-auto d-block" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/86/003462/1.jpg?3144" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Infinix Smart 3, 5.5", 16GB</p>
                                                    <p class="card-text" id="price">KSh 6,999</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top img-fluid mx-auto d-block" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/57/456242/1.jpg?7306" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Water Dispenser, Table top, Hot & Normal</p>
                                                    <p class="card-text" id="price">KSh 2,995</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top img-fluid mx-auto d-block" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/05/918741/1.jpg?8905" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Apple MacBook Pro, (2017), 13" 256GB SSD</p>
                                                    <p class="card-text" id="price">KSh 170,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top img-fluid mx-auto d-block" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/05/918741/1.jpg?8905" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Apple MacBook Pro, (2017), 13"</p>
                                                    <p class="card-text" id="price">KSh 170,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">

                                    <div class="row">
                                        <div class="col-md-2" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/73/532942/1.jpg?5227" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">V-Neck Long Sleeved Body Con Dress </p>
                                                    <p class="card-text" id="price">KSh 999</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/57/456242/1.jpg?7306" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Water Dispenser, Table top, Hot & Normal</p>
                                                    <p class="card-text" id="price">KSh 2,995</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/05/918741/1.jpg?8905" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Apple MacBook Pro, (2017), 13"</p>
                                                    <p class="card-text" id="price">KSh 170,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/73/532942/1.jpg?5227" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">V-Neck Long Sleeved Body Con Dress </p>
                                                    <p class="card-text" id="price">KSh 999</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/57/456242/1.jpg?7306" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Water Dispenser, Table top, Hot & Normal</p>
                                                    <p class="card-text" id="price">KSh 2,995</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/05/918741/1.jpg?8905" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Apple MacBook Pro, (2017), 13"</p>
                                                    <p class="card-text" id="price">KSh 170,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.Second slide-->
                                
                                <!--Third slide-->
                                <div class="carousel-item">

                                    <div class="row">
                                        <div class="col-md-2" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/46/280452/1.jpg?0808" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title"> Garnier Skin Care Essentials</p>
                                                    <p class="card-text" id="price">KSh 1,680</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/38/589852/1.jpg?1890" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Weetabix Chocolate 82% Whole Grain Biscuit</p>
                                                    <p class="card-text" id="price">KSh 430</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/29/797252/1.jpg?5705" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Sony PS4 500GB With FIFA 20 Bundle</p>
                                                    <p class="card-text" id="price">KSh 33,999</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/57/456242/1.jpg?7306" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Water Dispenser, Table top, Hot & Normal</p>
                                                    <p class="card-text" id="price">KSh 2,995</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/05/918741/1.jpg?8905" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Apple MacBook Pro, (2017), 13"</p>
                                                    <p class="card-text" id="price">KSh 170,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/05/918741/1.jpg?8905" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Apple MacBook Pro, (2017), 13"</p>
                                                    <p class="card-text" id="price">KSh 170,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--./Third slide-->
                                
                                <!--Fourth slide-->
                                <div class="carousel-item">

                                    <div class="row">
                                        <div class="col-md-2" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/46/280452/1.jpg?0808" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title"> Garnier Skin Care Essential</p>
                                                    <p class="card-text" id="price">KSh 1,680</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 0clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/38/589852/1.jpg?1890" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Weetabix Chocolate 82% W</p>
                                                    <p class="card-text" id="price">KSh 430</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/29/797252/1.jpg?5705" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Sony PS4 500GB With FIFA 20</p>
                                                    <p class="card-text" id="price">KSh 33,999</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/57/456242/1.jpg?7306" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Water Dispenser, Table top, Hot & Normal</p>
                                                    <p class="card-text" id="price">KSh 2,995</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/05/918741/1.jpg?8905" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Apple MacBook Pro, (2017), 13"</p>
                                                    <p class="card-text" id="price">KSh 170,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 clearfix d-none d-md-block" id="card">
                                            <div class="card mb-2 h-100">
                                                <img class="card-img-top" id="pic" src="https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/05/918741/1.jpg?8905" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title" id="title">Apple MacBook Pro, (2017), 13"</p>
                                                    <p class="card-text" id="price">KSh 170,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.Fourth slide-->

                            </div>
                            <!--/.Slides-->



                            <!--Controls-->

                            <a class="carousel-control-prev" href="#multi-item-example" role="button" data-slide="prev" id="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>


                            <a class="carousel-control-next" href="#multi-item-example" role="button" data-slide="next" id="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>

                            </a>




                        </div>
                        <!--/.Carousel Wrapper-->


                    </div>


        


            </div>
    
        <!-- Second row -->





        <!-- Third row -->
        <!-- Category row -->
        <div class="row" style="margin-bottom:0.5em;">
            
            <div class="col-md-12">


                
            </div>
            <!-- Category row -->
            <!-- Third row -->



            <!-- subCtaegory row -->


            <!-- subCtaegory row -->





        </div>


    <!-- Body -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js/bootstrap.bundle.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="assets/js/product.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'bottom',
        trigger : 'hover',
        delay: {show: 0, hide: 2000}
    });
});

</script>

<div class="footer">
            <p style="align-text:center;">(c) 2020 Meru Online Market info@merumarket.com +254 702 361 713/+254 716 192 803</p>
</div>
        
</html>