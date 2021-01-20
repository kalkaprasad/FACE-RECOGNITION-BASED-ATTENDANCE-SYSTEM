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
	<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-storage.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-database.js"></script>



</head>
<body>
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
			<div class="logo">Staff-Admin Pannel</div>
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
			 
			<li><a href="<?php echo base_url(); ?>index.php/Admin/dashboard">
					<span class="icon"><i class="fas fa-file-video"></i></span>
					<span class="title">Attedance</span>
					</a></li>

					<!--<li><a href="<?php echo base_url(); ?>index.php/Admin/userpannel">-->
					<!--<span class="icon"><i class="fas fa-file-video"></i></span>-->
					<!--<span class="title">User Pannel</span>-->
					<!--</a></li>-->

				<li><a href="#"class="active">
					<span class="icon"><i class="fas fa-blog"></i></span>
					<span class="title">Notification</span>
					</a></li>
			
				
		</ul>
	</div>
	
 <!--  main container -->
	<div class="main_container">

	<!--  bootrap container -->
		<div class="container">
		<!--  row -->
<div class="row">
	<div class="col-lg-4 col-md-6 col-sm-12">
		<!-- New Admition -->
<div class="card" id="card1"style="background-color:orange">
	<div class="card-body"data-toggle="modal" data-target="#sendnotification">
	<center> <img src="<?php echo base_url("assests/image/notifi.png")?>"id="imgIconnoti"></center>

	 <center><p class="card-text">Raise Report</p></center> 
		
	</div>
</div>

	</div>



	<div class="divider"></div>

</div>

		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Profile details</h5></br>
<h3 class="modal-title" id="rollno"> <br>

</h3></br>
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
<input class="form-control" type="text" id="name" placeholder="Your name "readonly>
</div>
</div>
<div class="row">
<div class="col-4">

<label style="margin-top: 10px;">Email</label>
</div>
<div class="col-8"style="margin-top: 10px;">
<input class="form-control" id="Email" type="text" placeholder="Your Email"readonly>
</div>
</div>


<div class="row">
<div class="col-4">

<label style="margin-top: 10px;">Password</label>
</div>
<div class="col-8"style="margin-top: 10px;">
<input class="form-control" id="Password" type="password" placeholder="Password"readonly>
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
<a href="<?php echo base_url(); ?>index.php/mainModel/logout">  <button type="button" class="btn btn-primary"data-dismiss="model">Logout</button></a>
</div>
</div>
</div>
</div>


<!--profile fetch data-->

<script>
    var urls='<?php echo base_url();?>index.php/Admin/fetchuerdata';
    $.ajax({
        type:'ajax',
        url:urls, 
        async:false,  
        dataType:'json',
        type:'POST',
        success:function(data)  
        {
          $("#rollno").html(data[0]['rollno']); 
             $("#name").val(data[0]['name']); 
              $("#Email").val(data[0]['email']); 
              $("#Password").val(data[0]['password']);
              
       
               
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
    
    
</script>

<!--profile fetchdata end -->
<!-- 
user model end -->


<!-- send the  notification start  -->

<div class="modal fade" id="sendnotification" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Raise Report.</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
		 
				<div class="row">
					<div class="col-4">
						
				<label style="margin-top: 10px;">Title</label>
					</div>
					<div class="col-8"style="margin-top: 10px;">
						 <input class="form-control" id="title"type="text" placeholder="Enter Message Title"required>
					</div>
				</div>
						<div class="row">
					<div class="col-4">
						
				<label style="margin-top: 10px;">Message</label>
					</div>
					<div class="col-8"style="margin-top: 10px;">
					 <textarea rows="4"class="form-control" id="message"cols="50" name="comment" form="usrform"required>
</textarea>
					</div>
				</div>

<div class="row">  
	 <div class="col-8">
				<center>
					<button type="button" id="send" class="btn btn-success"style="margin-top: 10px">Send</button>
				</center>

			<center>  <p id="status"style="color:black;"></p> </center>
				
				</div>

<div class="progress" style="margin: 20px;">
	
</div>
			<!--   <div class="spinner-grow"id="loader" style="width: 3rem; height: 3rem;margin-top: 10px" role="status">
	<span class="sr-only">Loading...</span>

</div> -->
</div>

<script type="text/javascript">
					
$(document).ready(function()
{
	$('#loader').hide();

$('#send').click(function()
{

	var title=$('#title').val();
	var message=$('#message').val();

 // $('#loader').css('display','all')
	if(title=='')
	{

		alert('Please fill Name fields');
	}
 
	else if(message=='')
	{

		alert('Please fill message  fields');
	}

	else
	{
 
		 // $('.loader').show();
		//ajax start 
	 $.ajax({
				type:'ajax',
				//   var urls='<?php echo base_url();?>index.php/Admin/fetchuerdata';   staffraisereport
				url:'<?php echo base_url();?>index.php/Admin/staffraisereport', 
				async:false,  
				dataType:'json',
				type:'POST',
				data:{'title':title,'message':message},
				success:function(data)  
				{

swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});
// console.log(data);
// console.log("succes");
// alert(data);
// 					if(data=="success")
// 					{

// alert('successfully');
	 
// 					}
// 					else{

// 					 $('#status').html('Email sending faild');
// 					 $('#status').css('margin-top','10px','color','red');
 
// 					 alert('faild');
// 					}
				
						 },
				error:function(data)
				{
// 						$('#status').html('Successfully Message sent..  ');
// $('#status').css('margin-top','10px','color','blue');

swal({
  title: "Good job!",
  text: "Congratulation! Your report saved successfully!",
  icon: "success",
  button: "Ok!",
});
				}
		});

	 // ajax stop

	}
	
});

});
				</script>

	 </div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
			
			</div>
		</div>
	</div>
</div>
<!--  end -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>