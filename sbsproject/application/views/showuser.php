<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>show Users</title>

<link rel="stylesheet" href="<?php echo base_url("assests/css/dashboard.css") ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo base_url("assests/css/fees.css") ?>">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url("assests/script/bootstrap.min.js")  ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/css/bootstrap.min.css")?>">
<script src="<?php echo base_url("assests/font/font.js") ?>"></script>
<script src="<?php echo base_url("assests/script/jquerymin.js")?>"></script>
<script src="<?php echo base_url("assests/script/firebase.js")?>"></script>
<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-storage.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-database.js"></script>


</head>
<body>
<!-- here firebase initilization  -->
<script>

firebase.initializeApp(firebaseConfig);

</script>
<!-- here firebase initilization  end  -->
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
<div class="logo">Tagzett Admin pannel</div>
<ul>
<li><a href="#">
<i class="fas fa-search"></i></a></li>
<li><a href="#">
<i class="fas fa-bell"></i>
</a></li>
<li><a href="#"data-toggle="modal"data-target="#exampleModalCenter">
<i class="fas fa-user"></i>
</a></li>
</ul>
</div>
</div>

<div class="sidebar">
<ul>

<li><a href="<?php echo base_url();?>index.php/Admin/dashboard">
<span class="icon"><i class="fas fa-book"></i></span>
<span class="title">Music pannel</span></a></li>
<li><a href="<?php echo base_url(); ?>index.php/Admin/gamepannel">
<span class="icon"><i class="fas fa-file-video"></i></span>
<span class="title">Game pannel</span>
</a></li>
<li><a href="#"class="active">
<span class="icon"><i class="fas fa-volleyball-ball"></i></span>
<span class="title">User pannel</span>
</a></li>
<li><a href="<?php echo base_url() ?>index.php/Admin/appsetting">
<span class="icon"><i class="fas fa-blog"></i></span>
<span class="title">App setting</span>
</a></li>
<li><a href="<?php echo base_url() ?>index.php/Admin/playconsole">
<span class="icon"><i class="fa fa-list-alt"></i></span>
<span class="title">Play Console</span>
</a></li>
<li><a href="<?php echo base_url() ?>index.php/Admin/admobpannel">
<span class="icon"><i class="fa fa-list-alt"></i></span>
<span class="title">AdMob-Account</span>
</a></li>
</ul>
</div>

<!--  main container -->
<div class="main_container">

<!--  bootrap container -->
<div class="container"style="overflow-x: auto;
white-space: nowrap;width:2500px;left: 0;
right: 0;
top: 0;">
<!--  row -->

<div class="row">
<b> <label>Users details: </label></b>
<table class="table table-striped"id="userdata"style="margin-top: 20px;">
<thead class="thead-dark">
<tr>
<th scope="col">Serial</th>
<th scope="col">Name</th>
<th scope="col">Contact Number</th>
<th scope="col">Photo</th>
<!-- <th scope="col">Action</th> -->

</tr>
</thead>
</table>
<script>

// Initialize Firebase
$(document).ready(function(){
  firebase.database().ref('Users').once('value', function(snapshot){
    if(snapshot.exists()){
      
      var content = '';
      var count=1;
      snapshot.forEach(function(data){
        var val = data.val();
        content +='<tr>';
        content += '<td>' + count+ '</td>';
        content += '<td>' + val.username + '</td>';
        console.log("sani"+val.username);
        content += '<td>' + val.Contactnumber + '</td>';
        content += '<td>' + "<img src='"+val.imageURL+"'style='border-radius: 50%;height:50px;width:50px;/>'" + '</td>';
        content += '</tr>';
        count++;
      });
      $('#userdata').append(content);
    }
  });
});

</script>

</div>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Admin details</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<div class="row">
<div class="col-4">
<label>Name</label> 
</div>
<div class="col-8">
<input class="form-control" type="text" placeholder="Your name ">
</div>
</div>
<div class="row">
<div class="col-4">

<label style="margin-top: 10px;">Email</label>
</div>
<div class="col-8"style="margin-top: 10px;">
<input class="form-control" type="text" placeholder="Your Email">
</div>
</div>

<div class="row">

<div class="col-8">
<center>
<button type="button" class="btn btn-success"style="margin-top: 10px">update</button>
</center>

</div>
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
<a href="<?php echo base_url(); ?>index.php/manage/logout">  <button type="button" class="btn btn-primary"data-dismiss="model">Logout</button></a>
</div>
</div>
</div>
</div>
<!-- 
user model end -->
</body>
</html>