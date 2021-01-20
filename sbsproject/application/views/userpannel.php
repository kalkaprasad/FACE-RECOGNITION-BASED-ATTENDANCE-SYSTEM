<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>user pannel</title>

<link rel="stylesheet" href="<?php echo base_url("assests/css/dashboard.css") ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo base_url("assests/css/parent.css") ?>">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url("assests/script/bootstrap.min.js")  ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/css/bootstrap.min.css")?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/css/circleprogrss.css")?>">
<script src="<?php echo base_url("assests/font/font.js") ?>"></script>
<script src="<?php echo base_url("assests/script/jquerymin.js")?>"></script>
<script src="<?php echo base_url("assests/script/firebase.js")?>"></script>
<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-storage.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-database.js"></script>



</head>
<body>

<!--  firebase -->
<script>
firebase.initializeApp(firebaseConfig);
</script>
<!-- firebase  -->
<script>
$(document).ready(function(){
  $(".hamburger").click(function(){
    $(".wrapper").toggleClass("imgMinus");
  });
});
</script>
<div class="wrapper">
<div class="top_navbar">
<div class="hamburger">
<div class="one"></div>
<div class="two"></div>
<div class="three"></div>
</div>
<div class="top_menu">
<div class="logo">Tagzett-Admin Pannel</div>
<ul>
<li><a href="#">
<i class="fas fa-search"></i></a></li>
<li><a href="#">
<i class="fas fa-bell"></i>
</a></li>
<li><a href="#"data-toggle="modal" data-target="#exampleModalCenter">
<i class="fas fa-user"></i>
</a></li>
</ul>
</div>
</div>

<div class="sidebar">
<ul>
<li><a href="<?php echo base_url();?>index.php/Admin/dashboard">
<span class="icon"><i class="fas fa-book"></i></span>
<span class="title">Attedence</span></a></li>

<li><a href="#"class="active">
<span class="icon"><i class="fas fa-file-video"></i></span>
<span class="title">User Pannel</span>
</a></li>
<li><a href="<?php echo base_url() ?>index.php/Admin/appsetting">
<span class="icon"><i class="fas fa-blog"></i></span>
<span class="title">App setting</span>
</a></li>
<li><a href="<?php echo base_url() ?>index.php/Admin/Playconsole">
<span class="icon"><i class="fa fa-list-alt"></i></span>
<span class="title">Play Console</span>
</a></li>

</ul>
</div>

<!--  main container -->
<div class="main_container">

<!--  bootrap container -->
<div class="container">
<!--  row -->
<div class="row">
<div class="col-4">
<!-- New Admition -->
<div class="card" id="card1"style="width: 18rem;background-color:orange">
<div class="card-body"data-toggle="modal" data-target="#parentadd">
<!-- <center> <img src="<?php echo base_url("assests/image/admition.jpg")?>"id="imgIcon"></center> -->
<center>    <h6 class="card-subtitle mb-2 "id="total"style="margin-top: 45px;margin-bottom: 50px;color: white;text-decoration: blink;font-size:25px;">Loading..</h6></center>
<center><p class="card-text">Registerd Users</p></center> 

</div>
</div>

</div>

<!--  Show Students -->

<!-- student registred -->
<a href="<?php  echo base_url();?>index.php/Admin/showusers">
<div class="col sm-4">
<div class="card"id="card3" style="width: 18rem;hight:10rem;">
<div class="card-body"data-toggle="modal" data-target="#sendnotificaton">
<center> <img src="<?php echo base_url("assests/image/show.png")?>"id="imgIcon"></center>
<center> <p class="card-text"style="">Show Users</p></center>

</div>
</div>

</div>
</a>
</div>
</div>
</div>
</div>
<script type="text/javascript">

// Initialize Firebase

$(document).ready(function(){
  
  firebase.database().ref('Users').on('value',(snap)=>{
    var totalcount= snap.numChildren();
    $('#total').text(totalcount);
    console.log("total records"+totalcount);
    
  });
});

</script>

</div>

</div>
</div>
</div>
<!--  end -->
</body>
</html>