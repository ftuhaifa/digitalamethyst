<!doctype html>
<html lang="en">
<head>
	<title>Digital Amethyst-Home</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="copyright" content="Digital Amethyst">
<meta name="title" content="Digital Amethyst, Contact us">
<meta name="description" content="text">
<meta name="keywords" content="online marketing, emarketing, digital, search engine optimization, SEO">
<meta name="robots" content="index, follow">

<meta property="og:url"                content="http://digitalamethyst.com/contact.php" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="Digital Amethyst, Contact us" />
<meta property="og:description"        content="An agency that provides serveces such as SEO, webdevelopment, and converting document to smart devices book" />
<meta property="og:image"              content="DigitalAmethyst.jpg" />


<meta name="twitter:url" content="http://digitalamethyst.com/contact.php" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="summary" />
<meta name="twitter:title" content="Digital Amethyst, Contact us" />
<meta name="twitter:description" content="An agency that provides serveces such as SEO, webdevelopment, and converting document to smart devices book" />
<meta name="twitter:image" content="DigitalAmethyst.jpg" />
<meta name="twitter:creator" content="#" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	
	<script>
	
$(function() {
$("#trigger").click(function() {
  $(".mainMenu").toggleClass("active");
});

$("#trigger").click(function() {
  $("#trigger").toggleClass("active");
});
});
		
	
	</script>
</head>

<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PJ9QCS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PJ9QCS');</script>
<!-- End Google Tag Manager -->



<div id="headline">

    <ul>

             <li><a href="http://digitalamethyst.com/contact.php">English</a></li>
       <li><a href="http://digitalamethyst.com/arabicontact.php">عربي</a></li>
    </ul>


</div>


<nav class="mainMenu">
<div class="">



<div class="firstList">

  <ul class="mainMenu">

        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li> 
        <li><a href="contact.php">Contact us</a></li>
        <li><a href="#">Services</a>
	      <ul>
				<li><a href="seo.php">SEO</a></li>
				<li><a href="web.php">Web Development</a></li>
				<li><a href="bookapp.php">Book App</a></li>
			</ul>		 
	
	    </li>
        
 		
    </ul>
	   
</div>

	<div class="secondList">	
	
	
	</div>
	


</div>



</nav>

<div id="trigger"> <img src="nav-icon.png" class="navicon"> </img> </div>



<div id="digitalbaner"> 

<div class="logo">
<a href="index.html"><img src="DigitalAmethyst.jpg" id="websitelogo"></a>
</div>
</div>








<div class="main">
<div class="insidmain">

<h3>Meet with us or send us email:</h3>
 <p>Google hangout:</p>
 <p>Email: digitalamethystco@gmail.com
</p>



<div class="contact">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >

 
<p>
<label>Name:  </label>
</p>
<p>
<span class="error"><?php echo $nameError;?></span>
</p>
<p>
 <input type="text" name="name" value="" >
</p>


<p>
<label class="#">Email:  </label>
</p>
<p>
<span class="error"><?php echo $emailError;?></span>
</p>
<p>
 <input  class="" type="text" name="email" value="" >
</p>


<p>
<label class="#">Message:  </label></p>
<p>
 <textarea name="message" ></textarea>
 <br>
</p>


<br>
 <button class="" type="submit" value="Submit"/>Send</button>
 </form>
 <br>




</div>	
	
</div>
</div>



<footer>
 
 
 <ul>
 <li><a href="https://www.facebook.com/Digital-Amethyst-1239953956032373/"><img src="facebook.png" alt="fellow us in facebook" align="middle" id="icon"></a></li>
 <li><a href="https://www.instagram.com/digitalamethyst/"> <img src="insta.png" alt="fellow us in Instegram" align="middle" id="icon"></a></li>
<li><a href="https://www.linkedin.com/company/digital-amethyst?trk=biz-companies-cym"> <img src="linkedin.png" alt="fellow us in Linkedin" align="middle" id="icon"></a></li>
 </ul>
 

</footer>


</body>


<?php require("contactfunction.php"); ?>
<link rel="stylesheet" href="style.css">
</html>