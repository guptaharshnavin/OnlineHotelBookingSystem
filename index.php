<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">
      .table-align
      {
        position: relative;
        left: 350px;
        padding:50px;
      }
      #links 
      {
float: inherit;
    padding: 15px;
    color: white;
    text-decoration: none;
    font-size: 17px;
    width: 25%;
    text-align: center;
      }
      #input-type
      {
        padding: 3px;
        margin:10px;
        color:black;
      }
      #btn-check  
      {
         background-color: #9A1750;
         border: none;
         color: white;
         padding: 15px 32px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
         margin: 4px 2px;
         cursor: pointer;
         color:white;
      }
      #btn-check:hover
      {
        background-color: #E3AFBC;
        color: white;
      }
      #table-class
      {
        color: white;
        font-size: 17px;
        position: relative;
        right: 140px;
      }
      .heading
      {
        color:white;
        font-size: 30px;
        position: relative;
        top: -35px;
        right: 200px;
      }

      .search_text
      {
        padding: 3px;
        margin:10px;
        color:black; 
      }
      .btn-search
      {
        background-color: #9A1750;
         border: none;
         color: white;
         padding: 15px 32px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 17px;
         margin: 4px 2px;
         cursor: pointer;
         color:white;
      }
      .mySlides {display:none;}

  </style>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Online Hotel Booking System">
    <meta name="author" content="Rushabh Doshi">
    <title>Online Hotel Management Project System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="footer.css" type="text/css">
    <link rel="stylesheet" href="navbar.css" type="text/css">
    <link rel="stylesheet" href="social.css" type="text/css">
    <link rel="stylesheet" href="about.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="sliders/engine1/style.css"/>
    <style type="text/css">a#vlb{display:none}</style>
  <script type="text/javascript" src="sliders/engine1/jquery.js"></script>
</head>
<body>
<div class="container-fluid" id="color">
  <div class="container">
			
			<div class="row">
				<div class="col-xs-12">
<div class="w3-content w3-display-container">
  <img class="mySlides" src="images/logo.jpg" style="width:100%;height:500px">
  
  <img class="mySlides" src="images/img2.jpg" style="width:100%;height:500px">
  <img class="mySlides" src="images/img3.jpg" style="width:100%;height:500px">
  <img class="mySlides" src="images/img4.jpg" style="width:100%;height:500px">
</div>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
<div class="row">
        <div class="col-xs-12">
          <div class="navbar navbar-nav">
              <a href="index.php" id="links">Home</a> 
              <a href="search_room.php" id="links">Search</a> 
              <a href="Signin.php" id="links">Sign in</a>
              <a href="about.html" id="links">About</a>
          </div>
        </div>
      </div>
			
<!--
<div class="search-text"> 
        <div class="row text-center">
            <div class="form">
                <form id="search-form" class="form-search form-horizontal">
                    <input type="text" class="input-search" placeholder="Search">
                    <button type="submit" class="btn-search">Search</button>
                </form>
        </div>         
   </div>     
</div>
-->

<footer>
  <center>
             <div class="col-xs-12">
              	<ul class="list-inline"> 
                           <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                           </li>
                           <li>
                                <a href="#"><i class="fa fa-google"></i></a>
                           </li>
                           <li>
                                <a href="#"><i class="fa fa-twitter"></i></a> 
                           </li>
                           <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                           </li>
                           <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                           </li>
                           <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                           </li>
                </ul>
              </div>
            </center>
       </div> 
</footer>
<div class="copyright">
     <div class="row text-center">
      <p>Copyright © 2019 All rights reserved</p>
     </div>
    </div>
</div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/creative.js"></script>
<script>
$(document).ready(function()
{
  //load_data();
  function load_data(query)
  {
    $.ajax({
      url:"fetch.php",
      method:"post",
      data:{query:query},
      success:function(data)
      {
        $('#result').html(data);
      }
    });
  }
  
  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      load_data(search);
    }
    else
    {
      load_data();      
    }
  });
});
</script>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>
	</body>
</html>