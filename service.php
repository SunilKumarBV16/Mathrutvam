<html >
    <title>Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
    <link href="2/ninja-slider.css" rel="stylesheet" type="text/css">
    <script src="2/ninja-slider.js" type="text/javascript"></script><style></style>
 
<!--<!-- core CSS ---->
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	 <link href="css/sun.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function () {
   $(document).click(function (event) {
    var clickover = $(event.target);
    var $navbar = $(".navbar-collapse");               
    var _opened = $navbar.hasClass("in");
    if (_opened === true && !clickover.hasClass("navbar-toggle")) {      
        $navbar.collapse('hide');
    }
});
});

</script>

  <script>
$(document).ready(function(){
    $("#bttn").click(function(){
		  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		  var name1= /^[A-Za-z\s]+$/;
		  var number1= /^[0]?[789]\d{9}$/;
				var name = $('#name').val();
				var number = $('#number').val();
				var email = $('#email1').val();
				
					if(name == '')
					{
							document.getElementById("demo").innerHTML = "*please fill form";
					}else if(number == '')
					{
						document.getElementById("demo1").innerHTML = "*please fill form";
					}else if(email == '')
					{
						document.getElementById("demo2").innerHTML = "*please fill form";
					}else if(name1.test(name) == false)
					{
						document.getElementById("demo").innerHTML = "*please enter Valid Name";
					}else if(number1.test(number) == false)
					{
						document.getElementById("demo1").innerHTML = "*please enter valid Phone number";
					}else if(reg.test(email) == false)
					{
							document.getElementById("demo2").innerHTML = "*please  enter valid emailid";
					}
					else
					{		
						
						
						$.ajax({
										 url: 'mail_form.php',
										type: 'POST',
										data: 'name=' +name + '&number=' + number+ '&email=' + email,
									
										success: function(result) {
										 //console.log(result);
										//alert(result);
												
												
																	$('#myModal').modal('show');
										}
																	
							});


					}



	
    });
	// Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

});
</script>
<script>
$(document).ready(function () {
	
		 var topOfOthDiv = $("#but").offset().top;
		  var topOfOthDiv2 = $("#nany").offset().top;
	    $(window).scroll(function () {
        if ($(window).scrollTop() > topOfOthDiv && $(window).scrollTop() < topOfOthDiv2) {
            $("#book").show();
			
			
        } else
        if($(window).scrollTop() < topOfOthDiv || $(window).scrollTop() < topOfOthDiv2)    { //scrolled past the other div?                
            $("#book").hide(); //reached the desired point -- show div   
		
        } else
    if($(window).scrollTop() > topOfOthDiv2) { //scrolled past the other div?                
        $("#book").hide(); //reached the desired point -- show div  
			
    }    
		
    });
	
	
});

</script>
<style>
@media only screen and (max-width:700px){
#Intro
	{
	   margin-left: 89px;
    width: 54%;
    margin-bottom: 23px;
    background: #3dc9b3;
    height: 24px;
	}
	#text1
	{
		        margin-right: -74px;
    padding-bottom: 19px;
		
	}
}
@media only screen and (max-width:360px){ 
.r-form-1-bottom
	{
		
		    margin-left: -15px;
	}
	#togglle
	{
		    margin-right: 18px;
	}
	#neede1
	{
		
		margin-left: 50px;
	}
	#nany
	{
		margin-left: 40px;
	}
	#neede
	{
		
		margin-left: 40px;
	}
	#Intro
	{
	        margin-left: 73px;
    width: 56%;
    margin-bottom: 23px;
    background: #3dc9b3;
    height: 24px;
	}
	#text1
	{
		    margin-right: -89px;
    padding-bottom: 19px;
		
	}
	
	#butt
	{
		
		
	}
	#inputtag
  {
	       padding-left: 58px; 
  }
  

#ttitle
{
	padding-left: 0px;
}
	#email
{
	    margin-left: -14px;
    padding-left: 10px;
}
	
	#home1
{
	
	
	    width: 100%;
}
}


.carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f28bb8;
  }
  .carousel-indicators li {
      border-color: #f28bb8;
  }
  .carousel-indicators li.active {
      background-color: #f28bb8;
  }@media (max-width: 767px) {
  .navbar-collapse
    {
        background-color:#e6faff;
		opacity: 0.8;
    }
}
.box-hover {
    transition: all 500ms ease-in-out;
    -webkit-transition: all 700ms ease-in-out;
    -moz-transition: all 500ms ease-in-out;
    -o-transition: all 500ms ease-in-out;
}

@font-face {
    font-family: myFirstFont;
    src: url(Sansation-Bold.ttf);
}
@font-face {
    font-family: myFirstFont2;
    src: url(Sansation-Regular.ttf);
}
@font-face {
    font-family: myFirstFont1;
    src: url(OpenSans-Light.ttf);
}
@font-face {
    font-family: myFirstFont3;
    src: url(OpenSans-Italic.ttf);
}
@font-face {
    font-family: myFirstFont4;
    src: url(Raleway-Regular.ttf);
}
@font-face {
    font-family: myFirstFont5;
    src: url(Roboto-Regular.ttf);
}
@font-face {
    font-family: myFirstFont6;
    src: url(too-freakin-cute-demo.regular.ttf);
}
div {
    font-family: myFirstFont;
	
}
h3 {
    font-family: myFirstFont;
}
h2 {
    font-family: myFirstFont;
}
a
{
	font-family: myFirstFont1;
}
span
{
font-family: myFirstFont;
}
p
{
font-family: myFirstFont1;
}
.social-btn {
    width: 40px;
    height: 40px;

    display: inline-block;
    color: #fff;
    font-size: 17px;
    line-height: 40px;
    text-align: center;
}
.social-btn {
    width: 40px;
    height: 40px;
   
   
 
    display: inline-block;
    color: #fff;
    font-size: 17px;
    line-height: 40px;
    text-align: center;
}
@media screen and (max-width: 1068px) {
    img.smallResolution{
        min-height: 150px;
    }

}
.seperator
{
height:10px;
width:100%;
background:#fff9fc;
}
.image1
{
	width:auto;
	padding-left: 66px;
}
.button1
  {
    color: #fff;
    background-color: #3dc9b3;
    border-color: #3dc9b3;
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
}
	}


	hr {
    margin-top: -1px;
    width: 55px;
    border: 0;
    border-top: 1px solid #eee;
}
form-control {
    display: block;
    width: 59%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
hr {
    margin-left: 43%;
    margin-top: -1px;
    width: 55px;
    border: 0;
    border-top: 1px solid #3051a0;
}
.r-form-1-top {
    overflow: hidden;
    padding: 0 25px 15px 25px;
    background: #444;
    background: rgba(0, 0, 0, 0.35);
    text-align: left;
}
.r-form-1-top-left {
    float: left;
    width: 75%;
    padding-top: 25px;
}
.r-form-1-top-right {
    float: left;
    width: 25%;
    padding-top: 5px;
    font-size: 66px;
    color: #fff;
    line-height: 100px;
    text-align: right;
    opacity: 0.3;
}
.r-form-1-bottom {
opacity: 0.95;
    padding: 25px 25px 30px 25px;
 
    text-align: left;
}
.form-group {
    margin-bottom: 15px;
}
].sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
}
.r-form-1-box input[type="text"], .r-form-1-box textarea, .r-form-1-box textarea.form-control {
    height: 50px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background: #fff;
    border: 3px solid #fff;
    font-family: 'Raleway', sans-serif;
    font-size: 15px;
    font-weight: 400;
    line-height: 50px;
    color: #888;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    -o-transition: all .3s;
    -moz-transition: all .3s;
    -webkit-transition: all .3s;
    -ms-transition: all .3s;
    transition: all .3s;
}
div.fixed {
   margin-left: -19px;
    float: left;
    position: fixed;
    right: 0;
    z-index: 1000;
    width: 300px;
    bottom: 0px;
    left: 16px;
    font-size: 18px;
}

.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.r-form-1-box button.btn {
    width: 100%;
    height: 50px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background: #3051a0;
    border: 0;
    font-family: 'Raleway', sans-serif;
    font-size: 15px;
    font-weight: 400;
    line-height: 50px;
    color: #fff;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
    text-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    -o-transition: all .3s;
    -moz-transition: all .3s;
    -webkit-transition: all .3s;
    -ms-transition: all .3s;
    transition: all .3s;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.buuton1
{


	float:right;
   position:fixed !important;
    position: absolute; /*ie6 */
    bottom: 0;
}
btn-success {
    color: #fff;
    background-color:#f28bb8;
    border-color: #f28bb8;
}

media only screen and (max-width:700px){    
    .seperator {
}

.button1
{
    margin-bottom: -119px;
}
.seperator
{    margin-top: -405px;
}
#form
{


}
}
.arrow
{

    margin-right: 56px;
    float: right;
    width: 35px;
    height: 58px;
    margin-top: -35px;
}
#arrwo:hover
{

   
 
  opacity:0.5;
}
div.fixed {
   margin-left: -19px;
    float: left;
    position: fixed;
    right: 0;
    z-index: 1000;
    width: 300px;
    bottom: 0px;
    left: 16px;
    font-size: 18px;
}
@media (min-width: 768px)
{
.col-sm-offset-3 {
    margin-left: 35%;
}
#cap
{}
}
@-moz-document url-prefix() {
    
}
caption
{
    font-size: 10em;
    font-family: 'Bree Serif', sans-serif;
    position: absolute;
    width: 53%;
    color: rgba(255,255,255,0.8);
    bottom: 20%;
}
</style>
<style>
@media screen and (device-aspect-ratio: 40/71) {
#bttn
{
        margin-left: -24px;
}
.form-group
{
    margin-left: -24px;
}
	
	#togglle
	{
		    margin-right: 18px;
	}
	#neede1
	{
		
		margin-left: 50px;
	}
	#nany
	{
		margin-left: 40px;
	}
	#neede
	{
		
		margin-left: 40px;
	}
	#Intro
	{
	        margin-left: 73px;
    width: 56%;
    margin-bottom: 23px;
    background: #3dc9b3;
    height: 24px;
	}
	#text1
	{
		    margin-right: -89px;
    padding-bottom: 19px;
		
	}
	#butt
	{
		
		
	}
	#inputtag
  {
	       padding-left: 58px; 
  }
  

#ttitle
{
	padding-left: 0px;
}
	#email
{
	    margin-left: -14px;
    padding-left: 10px;
}
	
	#home1
{
	
	
	    width: 112%;
}
}
.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 142px;
    left: 28%;
    z-index: 10;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0,0,0,.6);
    width: 651px;
    
   
}
  .carousel-inner img {
      
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
 

    .carousel-caption {
           line-height: 6px;
    margin-left: -95px;
    width: 327px;
    display: list-item;
    letter-spacing: -1px;
    margin-bottom: -159px;
    }
	#text
	{
	}
  }
 
}

  </style>
<script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/27/5/common.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/27/5/util.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/27/5/stats.js"></script></head>


<body id="home1" class="homepage" style="background: rgb(255, 249, 252);  overflow: visible;">


<nav class="navbar navbar-default navbar-fixed-top" style=" background:#fffafa;">
<div id="Intro"  style="    text-align: right;
    margin-top: 10px;">
 <p id="text1" style="font-size: 14px;
    color: #3051a0;
    padding-right: 103px;"> <img id="call" src="images\call.png" alt="not availbel" style="         margin-right: 4px;
    width: 13px;
    height: 12px;
        margin-top: -6px;">0888 000 4422 </p>
</div> 
  <div class="container">
 
    <div class="navbar-header" style="    margin-top: 15px;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false" style="
       margin-top: -12px;
">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html" style="margin-top: -32px;color: #555;" id="image1"><img id="iii" src="images/logo.png" alt="not availbel" style="
      margin-top: -50px;
    margin-left: -24px;
    width: 200px;
    height: 98px;
    "></a>
    </div>
	
    <div class="navbar-collapse collapse" id="myNavbar" style="color: rgb(252, 248, 227); height: 1px;" aria-expanded="false">
      <ul class="nav navbar-nav navbar-right" style="margin-top: -8px;float:right;">
	   
        <li><a href="index.html" style="font-family: myFirstFont2;color: black;">HOME</a></li>
      
 
      </ul>
    </div>
  </div>
</nav>


    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
  
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="servicesSliders.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption  " >
        
          <p id="text" style="       
    font-family: myFirstFont6;

    font-size: 30px;
    color: white;">*There is no way to be a perfect mother... but a million ways to be a good one*</p>
	<span style="margin-left: -38px;"> <a href="#services" style="
   
"><button id="but"  type="button" class="btn btn-success" style="      height: 38px;
    margin-left: 28px;
    background-color: #3dc9b3;
    border-color: #3dc9b3;
    font-family: 'Raleway', sans-serif;
    font-size: 17px;
    border-radius: 0px;
    width: 76px;">Mother</button></a></span>
<span> <a href="#baby1" style="
   
"><button  id="but" type="button" class="btn btn-success" style="      height: 38px;
    margin-left: 28px;
    background-color: #3dc9b3;
    border-color: #3dc9b3;
    font-family: 'Raleway', sans-serif;
    font-size: 17px;
    border-radius: 0px;
    width: 76px;">Baby</button></a></span>
        </div>      
      </div>
 
    
     
	
	  

   
</div>
    
	<div class="container-fluid" id="book" style="margin-right: 94px; float: right; display: none;">
		<div class="row" style="">

				<div class="col-sm-12">
							<div class="buuton1" id="bookservice" style="      z-index: 1000;  margin-left: 42px;
   margin-bottom: 143px;
   "> 
	
	<span> <a href="#form"> <img src="images/bookservice2.png" alt="not avaliable" style="        height: 90px;
    width: 54px;">  </a> </span>
	
	
	
	</div>
				</div>

		</div>
</div>

<div   style="height:10px;
width:100%;
background:#fff9fc;">  </div>
<section  id="services" name="mother" style="margin-top: -84px;min-height:600px;">
						<div style="    background-repeat: no-repeat;
    background-size: cover;
    background-image: url(&quot;images/counter.png&quot;);     margin-top: -14px; padding-top: 12px;     height: 112px;">
		
            <div class="section-header">
												<h3 class="section-title text-center wow fadeInDown animated animated animated animated animated animated" style="visibility: visible; font-size: 30px;     padding-top: 28px;">mother</h3>
											
               
			</div>
			</div>
			
							
			<div class="container">
        
        <div class="row">

          <div class="col-md-4 col-sm-6 wow fadeInDown animated animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="margin-top: 22px; visibility: visible; animation-duration: 1000ms; animation-delay: 300ms;">
           <img src="images\MotherSlider.jpg" class="img-responsive" alt="Cinque Terre" style="    width: 361px;
    height: 467px;

    margin-top: -2px;

">
          </div>


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms" style="margin-top: 15px; visibility: hidden; animation-duration: 1000ms; animation-delay: 450ms; animation-name: none;">
            <div class="features" style="padding-top: 15px;">
			<img src="Icons\ICONS\PreNatalclasses-01.png" width="44" height="44" alt="not avaliable">
			<h4 id="neede" style="font-family: myFirstFont2; text-align:center; margin-top: -27px;     padding-right: 100px;"> Pre-Natal Classes</h4>
              </div>
              <div class="features-text">
                
                <p style="font-family: myFirstFont1; color:black; letter-spacing:0.5px; font-size:16px; text-align: justify; padding-top: 12px;">
                 The Nine months of pregnancy is one of the most amazing times for  parents, especially for the mother. Mathrutvam aims to empower Mothers to understand why the changes occur &amp; prepare her for the birthing.
                </p>
              </div>
            
          </div>

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms" style="margin-top: 15px; visibility: hidden; animation-duration: 1000ms; animation-delay: 550ms; animation-name: none;">
            <div class="features" style="padding-top: 15px;">
             <img src="Icons\ICONS\pre&amp;postnatalcare.png" width="44" height="44" alt="not avaliable">
			 <h4 id="neede" style="font-family: myFirstFont2;  text-align:center; margin-top: -27px; padding-right: 37px;">  Pre and Post-Natal care</h4>
              <div class="features-text">
                
                <p style="font-family: myFirstFont1; color:black; letter-spacing:0.5px; font-size:16px; text-align: justify; text-align: justify; padding-top: 12px;">
                Our Nursing professionals / Midwives are an invaluable help to Mothers recovering from the hardships of Labor or Caesarean deliveries by offering Health and Nutrition advice. They help you to regain the strength of your body, abdominal muscles, help prevent lower back injury and help you lose your body fat.
                </p>
              </div>
            </div>
          </div>            


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms" style="margin-top: 15px; padding-bottom: 35px; visibility: hidden; animation-duration: 1000ms; animation-delay: 650ms; animation-name: none;">
            <div class="features" style="padding-top: 15px;">
                 <img src="Icons\ICONS\lamazeclasses-01.png" width="44" height="44" alt="not avaliable">
				 <h4 id="neede1" style="font-family: myFirstFont2; text-align:center; margin-top: -27px;     padding-right: 100px;"> Lamaze Classes</h4>
			  </div>
              <div class="features-text">
                
                <p style="font-family: myFirstFont1; color:black; letter-spacing:0.5px; font-size:16px; text-align: justify; padding-top: 12px;">
                Our professionals offer Lamaze classes to women in the convenience of their homes. They help prepare women for a safe, healthy birth &amp; navigate the maze of modern maternity care.
                </p>
              </div>
            
          </div>
		    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms" style="margin-top: 15px; padding-bottom: 35px; visibility: hidden; animation-duration: 1000ms; animation-delay: 650ms; animation-name: none;">
            <div class="features" style="padding-top: 15px;">
           <img src="Icons\ICONS\LactationGuidance-01.png" width="44" height="44" alt="not avaliable">
		    <h4  id="neede" style="font-family: myFirstFont2; text-align: justify; text-align:center; margin-top: -27px; padding-right: 68px;">Lactation Guidance</h4>
              </div>
              <div class="features-text">
               
                <p style="font-family: myFirstFont1; color:black; letter-spacing:0.5px; font-size:16px; padding-top: 12px;">
                  We know that the process of breastfeeding is often accompanied by issues such as latching, clumping, hardening, treatment for mastitis, etc. Our team of professionals offers you guidance related to these problems.
                </p>
              </div>
            </div>
				
          </div>

<div id="baby1"> </div>
          
          </div>   
        
	
      
		
	
			
			</section>
	
	<div style="width:100%;height:22px;background:#fff0f7; "> </div>
<div class="container-fluid" id="book" style="margin-right: 94px; float: right; display: none;">
		<div class="row" style="">

				<div class="col-sm-12">
							<div class="buuton1" style="    margin-left: 42px;
   margin-bottom: 150px;
   "> 

	<span> <a href="#form"> <img src="images/bookservice2.png" alt="not avaliable" style="        height: 90px;
    width: 54px;">  </a> </span></div>
				</div>

		</div>
</div>
		<section style="min-height:600px;">
						<div style="    background-repeat: no-repeat;
    background-size: cover;
    background-image: url(&quot;images/counter.png&quot;);     margin-top: -14px; padding-top: 12px; height: 120px;">
		
            <div class="section-header">
												<h3 class="section-title text-center wow fadeInDown animated animated animated animated" style="visibility: hidden; font-size: 30px;     padding-top: 28px; animation-name: none;">baby</h3>
											
               
			</div>
			</div>
			
							
			<div class="container">
        
        <div class="row">

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 300ms; animation-name: none;">
           
           <img src="images\BabySlider.jpg" class="img-responsive" alt="Cinque Terre" style="    width: 361px;
    height: 467px;

   margin-top:10px;

">
          </div>


          
          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms" style="margin-top: 1px; visibility: hidden; animation-duration: 1000ms; animation-delay: 450ms; animation-name: none;">
            <div class="features" style="padding-top: 15px;">
           	<img src="Icons\ICONS\ShishuAhbyanjana-01.png" width="44" height="44" alt="not avaliable">
			<h4 id="neede" style="font-family: myFirstFont2; text-align:center; margin-top: -27px; padding-right: 51px;">Shishu Abhyanjana</h4>
              </div>
              <div class="features-text">
                
                <p style="font-family: myFirstFont1; color:black; letter-spacing:0.5px; font-size:16px; text-align: justify;     padding-top: 12px;">
                 We offer baby massage and bath services in the convenience of your home. Our professional massage specialists are not only highly experienced but also thoroughly qualified and exclusively trained in the fine art of baby massage techniques.
                </p>
              </div>
           
          </div>

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms" style="margin-top: 1px; visibility: hidden; animation-duration: 1000ms; animation-delay: 550ms; animation-name: none;">
            <div class="features" style="padding-top: 15px;">
		  <img src="Icons\ICONS\neonatalnursingcare.png" width="44" height="44" alt="not avaliable">
		   <h4 id="neede" style="font-family: myFirstFont2; text-align:center; margin-top: -27px; padding-right: 45px;">  Neonate Nursing Care</h4>
              </div>
              <div class="features-text">
               
                <p style="font-family: myFirstFont1; color:black; letter-spacing:0.5px; font-size:16px; text-align: justify; padding-top: 12px;">
								Neonatal Nursing care for premature and ill newborns in the hygienic environment of the home. These babies are born with the need of immediate medical attention. Neonatal Nurses connect them to technology that helps them breathe and allows them to be fed intravenously, so they can gain weight. Daily records related to baby feed, sleep &amp; potty will be maintained &amp; monitored.
                  </p>
              </div>
         
          </div>            


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms" style="margin-top: 15px; padding-bottom: 35px; visibility: hidden; animation-duration: 1000ms; animation-delay: 650ms; animation-name: none;">
            <div class="features" style="padding-top: 15px;">
             <img src="Icons\ICONS\vaccination.png" width="44" height="44" alt="not avaliable">
			  <h4 id="neede" style="font-family: myFirstFont2; text-align:center; margin-top: -27px; padding-right: 83px;" id="examp1"> Baby Vaccination</h4>
              </div>
              <div class="features-text">
               
                <p style="font-family: myFirstFont1; color:black; letter-spacing:0.5px; font-size:16px;text-align: justify;  padding-top: 12px;">
                Mathrutvam aims at providing the best mother care services. Our professionals have full knowledge about vaccinations and are certified to vaccinate your child thus ensuring convenience for you. 
 
                </p>
              </div>
            
          </div>
		    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms" style="margin-top: 15px; padding-bottom: 35px; visibility: hidden; animation-duration: 1000ms; animation-delay: 650ms; animation-name: none;">
            <div class="features" style="padding-top: 15px;">
			 <img src="Icons\ICONS\nannycare-01.png" width="44" height="44" alt="not avaliable">
			    <h4 id="nany" style="font-family: myFirstFont2;  text-align:center; margin-top: -27px; padding-right: 125px;">Nanny care</h4>
         </div>
              <div class="features-text">
             
                <p style="font-family: myFirstFont1; color:black; letter-spacing:0.5px; font-size:16px; text-align: justify; padding-top: 12px;">
                Babies need constant care till they reach a certain age. Our services are not confined up to the neonate. Care Plans for the babies above 3 months are provided by Nannies. For parents who work long or untraditional hours, hiring a nanny provides the ultimate in flexibility.
                </p>
              </div>
           
          </div>
          
          </div>   
        </div>
      
		
	
			
			</section>
	
	
		
	

			
   <div style="width:100%;height:11px;     background: #fff0f7;"> </div>
   <div class="container">
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="margin-top:250px;">
    
      <!-- Modal content-->
      <div class="modal-content" style="text-align:center;">
        
         
        <div class="modal-body">
          <p style="font-size:16px;">Thanks For Subscribing!</p>
        </div>
        
      </div>
      
    </div>
  </div>
  
</div>
<section style="min-height:500px; background:#fff9f7c;">
		<div id="form"> 
				<div id="counetr" class="container-fluid" style="
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url(&quot;images/counter.png&quot;);
    ">

						<div class="row">
								<div class="col-sm-4" style=" text-align:center;        padding-top: 32px;">
										<img src="images\counter_1.png" width="44" height="44" alt="not avaliable" style="
 
"><br>
<span> <h3 class="counter-count counter" style="font-size:38px; color:#3051a0; font-family: myFirstFont1;    margin-top: 6px;">250</h3> </span>
<hr style="    ">
     <h3 style="
        margin-left: 14px;
    margin-top: -10px; color:#3051a0;font-family: myFirstFont1;
"> CARINGS HANDS </h3>         
                 
                   
                </div>
								
							
								<div class="col-sm-4" style=" text-align:center;         padding-top: 32px;">
										<img src="images\mothercount.png" width="44" height="44" alt="not avaliable" style="
 
"><br>
<span> <h3 class="counter-count counter" style="font-size:38px; color:#3051a0; font-family: myFirstFont1;   margin-top: 6px;">150</h3> </span>
<hr style="    ">
     <h3 style="
        margin-left: 14px;
    margin-top: -10px;color:#3051a0;font-family: myFirstFont1;
"> HAPPY MOTHERS</h3>         
                 
                   
                </div>
								<div class="col-sm-4" style=" text-align:center;         padding-top: 32px;">
										<img src="images\twins_cared.png" width="44" height="44" alt="not avaliable" style="
 
"><br>
<span> <h3 class="counter-count counter" style="font-size:38px; color:#3051a0;   font-family: myFirstFont1; margin-top: 6px;">90</h3> </span>
<hr style="   ;">
     <h3 style="
        margin-left: 14px;
    margin-top: -10px;color:#3051a0;font-family: myFirstFont1;
"> TWINS CARED </h3>         
                 
                   
                </div>
						</div>
						</div>
							<div class="container-fluid" style="
  background:#fff0f7;
    ">
							

<div class="row" style="text-align:center;">
				
				
					<div class="col-sm-12 col-sm-offset-3 r-form-1-box wow fadeInUp animated animated animated animated" style="visibility: hidden; min-height: 300px; animation-name: none;">
					<div class="r-form-1-bottom" style="height: 277px;
    margin-top: 7px;
    width: 333px;
    margin-left: 15px">
							<div class="form-group" style="
    width:  300px;
        margin-top: -26px;
    height: 7px;
">
									<label class="sr-only" for="name"> name</label>
									<input type="text" name="name" placeholder="name" class="r-form-1-first-name form-control" id="name">
									<p id="demo" style="color:red;font-size: 12px;margin-top: -8px;"></p>
								</div>
								<div class="form-group" style="
   width: 300px;
    margin-top: 62px;
    height: 7px;
">
									<label class="sr-only" for="name"> contact number</label>
									<input type="text" name="name" placeholder="contact number" class="r-form-1-first-name form-control" id="number">
									<p id="demo1" style="color:red;font-size: 12px;margin-top: -8px;"></p>
								</div>
									<div class="form-group" style="
									width: 300px;
        margin-top: 62px;
    height: 7px;
">
									<label class="sr-only" for="name">email id</label>
									<input type="text" name="name" placeholder="email id" class="r-form-1-first-name form-control" id="email1">
									<p id="demo2" style="color:red;font-size: 12px;margin-top: -8px;"></p>
								</div>
										
								<button type="submit" id="bttn" name="submit" class="btn" style="
								    
            width: 107%;
    margin-top: 50px;
    background-color: #3dc9b3;
    border-color: #3dc9b3;
    ">get in touch !</button>	
								
					</div>
					</div>
				</div>	
 				
  
  </div>
<footer id="footer" style=" height:130px; background:#fffafa;    margin-top: -24px;">
			<div class="container-fluid">
 <div class="row">
    <div class="col-sm-4" style="text-align:center;">
		<p style="color:#555;  font-family: myFirstFont; font-size:23px;"> A Unit Of <br>
	  <a href="http://healthheal.in/" target="_blank"> <img src="images\healthheallogo.png" style="     margin-top: 10px;width: 142px;
    height: 30px;"> </a>
	</p>
    </div>
	  <div class="col-sm-4" style="text-align:center;" id="footerservice">
					<ul id="sociallink" class="social-buttons" style="   padding-top:17px;     ">
                  <li><a href="https://www.facebook.com/healthhealnursing/" target="_blank"><i style="   font-size: 23px;
    color: #555;" class="fa fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/healthhealindia" target="_blank"><i style=" color: #555; font-size: 23px;" class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.linkedin.com/company/6497518?trk=vsrp_companies_cluster_name&trkInfo=VSRPsearchId%3A5455800081481623048515%2CVSRPtargetId%3A6497518%2CVSRPcmpt%3Acompanies_cluster" target="_blank">
									<i style="     font-size: 23px; color: #555;" class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
	<p style="      font-family: myFirstFont; color: #777; ">&copy;  2016 MATHRUTVAM  </p>
    </div>
	  <div class="col-sm-4" style="text-align:center;">
		
				<div style="margin-top: -24px;">		
				 <a href="#home1" id="arrowatfooter"> <img src="images\expand-arrow.png"  alt="not avaliable" style="float: right;
   
    margin-right: 14px;
    width: 25px;
    height: 32px;
    " id="arrwo" >    </a> </div>
    </div>
	 
	</div>
	</footer>
		
		
		</div>

</section>
<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
        
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/modernizr.js"></script>
 <script src="js/count-to.js"></script> 
   
	<script src="js/wow.min.js"></script>
       <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script> 
   
	

  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  
  
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
    


</body></html>