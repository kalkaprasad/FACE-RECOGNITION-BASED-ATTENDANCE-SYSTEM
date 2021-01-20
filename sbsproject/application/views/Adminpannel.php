<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sbs Pannel</title>

<link rel="stylesheet" href="<?php echo base_url("assests/css/dashboard.css") ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo base_url("assests/css/card.css") ?>">

<script type="text/javascript" src="<?php echo base_url("assests/script/bootstrap.min.js")  ?>"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/css/bootstrap.min.css")?>">
<script src="<?php echo base_url("assests/font/font.js") ?>"></script>
<script src="<?php echo base_url("assests/script/jquerymin.js")?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="<?php echo base_url("assests/script/internetcon.js")?>"></script>
<script src="<?php echo base_url("assests/script/firebase.js")?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-storage.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-database.js"></script>



</head>


<body onload="loads">

<script>firebase.initializeApp(firebaseConfig); </script>
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
<div class="logo">Admin  Pannel</div>
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
<li><a href="#"class="active"id='dropoption'>
<span class="icon"><i class="fas fa-book"></i></span>
<span class="title"> Pannel </span></a></li>

</a></li>
<!--<li><a href="<?php echo base_url(); ?>index.php/Admin/userpannel">-->
<!--<span class="icon"><i class="fas fa-volleyball-ball"></i></span>-->
<!--<span class="title">Student</span>-->
<!--</a></li>-->
<!--<li><a href="<?php echo base_url() ?>index.php/Admin/appsetting">-->
<!--<span class="icon"><i class="fas fa-blog"></i></span>-->
<!--<span class="title">Staff</span>-->
<!--</a></li>-->
<li><a href="#">
<span class="icon"><i class="fa fa-list-alt"></i></span>
<span class="title">Setting</span>
</a></li>
</a></li>
</ul>
</div>



<!--  main container -->
<div class="main_container">

<!-- 	bootrap container -->
<div class="container">
<!-- 	row -->
<h1> Admin Pannel <hr>  </h1>
<div class="row">
<div class="col-4">
<!-- New Admition -->
<div class="card" id="card1"style="width: 18rem;"data-toggle="modal" data-target="#totalstudent">
<div class="card-body">
<!-- <center> <img src="<?php echo base_url("assests/image/admition.jpg")?>"id="imgIcon"></center> -->
<center>    <h6 class="card-subtitle mb-2 "id="total"style="margin-top: 45px;margin-bottom: 50px;color: white;text-decoration: blink;font-size:25px;">Loading..</h6></center>
<center><p class="card-text">Registerd Students.</p></center> 

 <!--fetch total students-->
 
 <script>
     
     var urls='<?php echo base_url();?>index.php/Admin/fetchtotalstudent';
    $.ajax({
        type:'ajax',
        url:urls, 
        async:false,  
        dataType:'json',
        type:'POST',
        success:function(data)  
        {
          $("#total").html(data); 
            //  $("#name").val(data[0]['name']); 
            //   $("#Email").val(data[0]['email']); 
            //   $("#Password").val(data[0]['password']);
              
       
               
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
    
     
 </script>
 
  <!--fetch total student-->

</div>
</div>

</div>

<!--  Show Students -->

<div class="col sm-4">
<div class="card"id="card2" style="width: 18rem;"data-toggle="modal" data-target="#totalStaff">
<!-- <a href="<?php echo base_url()?>index.php/manage/showstudents"> -->
<div class="card-body">
<!-- <center> <img src="<?php echo base_url("assests/image/admition.jpg")?>"id="imgIcon"></center> -->
<center>    <h6 class="card-subtitle mb-2 "id="totalstaff"style="margin-top: 45px;margin-bottom: 50px;color: white;text-decoration: blink;font-size:25px;">Loading..</h6></center>
<center><p class="card-text">Registerd Staff.</p></center> 

 <!--fetch total students-->
 
 <script>
     
     var urls='<?php echo base_url();?>index.php/Admin/fetchtotalstaff';
    $.ajax({
        type:'ajax',
        url:urls, 
        async:false,  
        dataType:'json',
        type:'POST',
        success:function(data)  
        {
          $("#totalstaff").html(data); 
            //  $("#name").val(data[0]['name']); 
            //   $("#Email").val(data[0]['email']); 
            //   $("#Password").val(data[0]['password']);
              
       
               
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
    
     
 </script>
 
  <!--fetch total student-->
</div>


</div>

</div>
<!-- student registred -->
<div class="col sm-4">
<div class="card"id="card3" style="width: 18rem;"data-toggle="modal" data-target="#trainstd">
<div class="card-body">
<!-- <center> <img src="<?php echo base_url("assests/image/admition.jpg")?>"id="imgIcon"></center> -->
<center>    <h6 class="card-subtitle mb-2 "id="totalsttrain"style="margin-top: 45px;margin-bottom: 50px;color: white;text-decoration: blink;font-size:25px;">Loading..</h6></center>
<center><p class="card-text">Total Student Face Trained.</p></center> 

 <!--fetch total students-->
 
 <script>
     
     var urls='<?php echo base_url();?>index.php/Admin/studentTraindata';
    $.ajax({
        type:'ajax',
        url:urls, 
        async:false,  
        dataType:'json',
        type:'POST',
        success:function(data)  
        {
          $("#totalsttrain").html(data); 
            //  $("#name").val(data[0]['name']); 
            //   $("#Email").val(data[0]['email']); 
            //   $("#Password").val(data[0]['password']);
              
       
               
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
    
     
 </script>
 
  <!--fetch total student-->

</div>
</div>

</div>

</div>

<div class="row">

<div class="col-lg-4 col-md-6 col-sm-12">
<!-- New Admition -->
<div class="card" id="card4"style="width: 18rem;"data-toggle="modal" data-target="#teachertrain">
<div class="card-body">
<!-- <center> <img src="<?php echo base_url("assests/image/admition.jpg")?>"id="imgIcon"></center> -->
<center>    <h6 class="card-subtitle mb-2 "id="totalstaffface"style="margin-top: 45px;margin-bottom: 50px;color: white;text-decoration: blink;font-size:25px;">Loading..</h6></center>
<center><p class="card-text">Total Staff Face Trained.</p></center> 

 <!--fetch total students-->
 
 <script>
     
     var urls='<?php echo base_url();?>index.php/Admin/staffno';
    $.ajax({
        type:'ajax',
        url:urls, 
        async:false,  
        dataType:'json',
        type:'POST',
        success:function(data)  
        {
          $("#totalstaffface").html(data); 
            //  $("#name").val(data[0]['name']); 
            //   $("#Email").val(data[0]['email']); 
            //   $("#Password").val(data[0]['password']);
              
       
               
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
    
     
 </script>
 
  <!--fetch total student-->
</div>
</div>

</div>

<!--  Show Students -->

<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card"id="card5" style="width: 18rem;"data-toggle="modal" data-target="#raisereport">

<div class="card-body">
<!-- <center> <img src="<?php echo base_url("assests/image/admition.jpg")?>"id="imgIcon"></center> -->
<center>    <h6 class="card-subtitle mb-2 "id="raisere"style="margin-top: 45px;margin-bottom: 50px;color: white;text-decoration: blink;font-size:25px;">Loading..</h6></center>
<center><p class="card-text">Total Raise Reports.</p></center> 

 <!--fetch total students-->
 
 <script>
     
     var urls='<?php echo base_url();?>index.php/Admin/raisereport';
    $.ajax({
        type:'ajax',
        url:urls, 
        async:false,  
        dataType:'json',
        type:'POST',
        success:function(data)  
        {
          $("#raisere").html(data); 
            //  $("#name").val(data[0]['name']); 
            //   $("#Email").val(data[0]['email']); 
            //   $("#Password").val(data[0]['password']);
              
       
               
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
    
     
 </script>
 
  <!--fetch total student-->
</div>


</div>

</div>


<!-- student registred -->

</div>









<!--  Show Students -->

</div>

</div>
<!-- student registred -->

</div>
<hr></hr>


<div class="row"></div>
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

<script>

<script type="text/javascript">


function loads()
{
	
	$(window).on('load',function(){
		$('#exampleModalLong').modal({show:true});
	});
}

</script>

</script>



		
		
		<!-- new Old Attednaceupload's -->
		
		
		
		
		
		<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="totalstudent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content" style="overflow:visible;">
<div class="modal-header">
<center><h5 class="modal-title" id="exampleModalLongTitle">Registtred student details.</h5></center> 
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body"style="overflow:visible;">

<!-- admition form -->
<div class="row">
  <b> <label>Student  details: </label></b>
<table class="table table-striped"style="margin-top: 20px; table-layout: fixed;
  word-wrap: break-word;"id="hinditable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Roll No</th>
      <th scope="col">Name</th>
       <th scope="col">Email</th>
       <th scope="col">phone</th>
      <th scope="col">Father Email</th>
      <th scope="col">Date</th>

    </tr>
  </thead>
</table>

<!--Today Attendance data-->

<script>
    var urls='<?php echo base_url();?>index.php/Admin/studentfetch';
    $.ajax({
        type:'ajax',
        url:urls, 
        async:false,  
        dataType:'json',
        type:'POST',
        success:function(data)  
        {
        //   $("#rollno").html(data[0]['rollno']); 
        //      $("#name").val(data[0]['name']); 
        //       $("#Email").val(data[0]['email']); 
        //       $("#Password").val(data[0]['password']);
        
      
        var i=0;
       
        var count=0;
        for(i=0;i<data.length;i++)
        {   
            var content ='';
            content +='<tr>';
        content += '<td>'+data[i]['rollno']+'</td>';
        content += '<td>'+data[i]['name'] + '</td>';
          content += '<td>'+data[i]['email'] + '</td>';
           content += '<td>'+data[i]['phone'] + '</td>';
            content += '<td>'+data[i]['fatheremail'] + '</td>';
        // console.log("sani"+val.);
       
        content +='<td>'+data[i]['date']+'</td>';
        content += '</tr>';
          $('#hinditable').append(content);
          count++;
        }
        
      
        // alert(data[0]['name']);
               
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
    
    
</script>

<!--Today Status Attendance end -->




</div>

<!-- admition form end -->

		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

		</div>
		</div>
		</div>
		</div>
		
		<!--studentfetch data end-->
		
		
		
		  <!--staff fetehc data-->
		
		
				<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="totalStaff" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content" style="overflow:visible;">
<div class="modal-header">
<center><h5 class="modal-title" id="exampleModalLongTitle">Registred Staff details.</h5></center> 
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body"style="overflow:visible;">

<!-- admition form -->
<div class="row">
  <b> <label>Staff  details: </label></b>
<table class="table table-striped"style="margin-top: 20px; table-layout: fixed;
  word-wrap: break-word;"id="stafftable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id No</th>
      <th scope="col">Name</th>
       <th scope="col">Email</th>
       <th scope="col">phone</th>
      <th scope="col">Date</th>

    </tr>
  </thead>
</table>

<!--Today Attendance data-->

<script>
    var urls='<?php echo base_url();?>index.php/Admin/stafffetch';
    $.ajax({
        type:'ajax',
        url:urls, 
        async:false,  
        dataType:'json',
        type:'POST',
        success:function(data)  
        {
        //   $("#rollno").html(data[0]['rollno']); 
        //      $("#name").val(data[0]['name']); 
        //       $("#Email").val(data[0]['email']); 
        //       $("#Password").val(data[0]['password']);
        
      
        var i=0;
       
        var count=0;
        for(i=0;i<data.length;i++)
        {   
            var content ='';
            content +='<tr>';
        content += '<td>'+data[i]['idno']+'</td>';
        content += '<td>'+data[i]['name'] + '</td>';
          content += '<td>'+data[i]['email'] + '</td>';
           content += '<td>'+data[i]['phone'] + '</td>';
        // console.log("sani"+val.);
       
        content +='<td>'+data[i]['date']+'</td>';
        content += '</tr>';
          $('#stafftable').append(content);
          count++;
        }
        
      
        // alert(data[0]['name']);
               
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
    
    
</script>

<!--Today Status Attendance end -->




</div>

<!-- admition form end -->

		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

		</div>
		</div>
		</div>
		</div>
		<!--staff dataend-->
		
		
		
		
		 <!--total  student train data of student-->
		
		
		
		
						<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="trainstd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content" style="overflow:visible;">
<div class="modal-header">
<center><h5 class="modal-title" id="exampleModalLongTitle">Students Train face Data details.</h5></center> 
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body"style="overflow:visible;">

<!-- admition form -->
<div class="row">
  <b> <label>Trained face  details: </label></b>
<table class="table table-striped"style="margin-top: 20px; table-layout: fixed;
  word-wrap: break-word;"id="sttrain">
  <thead class="thead-dark">
    <tr>
         <th scope="col">Serial Number</th>
      <th scope="col">ID No</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>

    </tr>
  </thead>
</table>

<!--Today Attendance data-->

<script>
    var urls='<?php echo base_url();?>index.php/Admin/stutrainface';
    $.ajax({
        type:'ajax',
        url:urls, 
        async:false,  
        dataType:'json',
        type:'POST',
        success:function(data)  
        {
        //   $("#rollno").html(data[0]['rollno']); 
        //      $("#name").val(data[0]['name']); 
        //       $("#Email").val(data[0]['email']); 
        //       $("#Password").val(data[0]['password']);
        
      
        var i=0;
       
        var count=1;
        for(i=0;i<data.length;i++)
        {   
            var content ='';
            content +='<tr>';
        content += '<td>'+count+'</td>';
        content += '<td>'+data[i]['rollno'] + '</td>';
          content += '<td>'+data[i]['name'] + '</td>';
         
        // console.log("sani"+val.);
       
        content +='<td>'+"18/01/2021"+'</td>';
        content += '</tr>';
          $('#sttrain').append(content);
          count++;
        }
        
      
        // alert(data[0]['name']);
               
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
    
    
</script>

<!--Today Status Attendance end -->




</div>

<!-- admition form end -->

		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

		</div>
		</div>
		</div>
		</div>
		<!--staff dataend-->
		
		
		
		
		<!--teacher staff traindata -->
		
		
		
		
				 <!--total  student train data of student-->
		
		
		
		
						<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="teachertrain" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content" style="overflow:visible;">
<div class="modal-header">
<center><h5 class="modal-title" id="exampleModalLongTitle">Teacher Train face Data details.</h5></center> 
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body"style="overflow:visible;">

<!-- admition form -->
<div class="row">
  <b> <label>Trained face  details: </label></b>
<table class="table table-striped"style="margin-top: 20px; table-layout: fixed;
  word-wrap: break-word;"id="teachtrain">
  <thead class="thead-dark">
    <tr>
         <th scope="col">Serial Number</th>
      <th scope="col">ID No</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>

    </tr>
  </thead>
</table>

<!--Today Attendance data-->

<script>
    var urls='<?php echo base_url();?>index.php/Admin/teachtrainface';
    $.ajax({
        type:'ajax',
        url:urls, 
        async:false,  
        dataType:'json',
        type:'POST',
        success:function(data)  
        {
        //   $("#rollno").html(data[0]['rollno']); 
        //      $("#name").val(data[0]['name']); 
        //       $("#Email").val(data[0]['email']); 
        //       $("#Password").val(data[0]['password']);
        
      
        var i=0;
       
        var count=1;
        for(i=0;i<data.length;i++)
        {   
            var content ='';
            content +='<tr>';
        content += '<td>'+count+'</td>';
        content += '<td>'+data[i]['idno'] + '</td>';
          content += '<td>'+data[i]['name'] + '</td>';
         
        // console.log("sani"+val.);
       
        content +='<td>'+data[i]['date']+'</td>';
        content += '</tr>';
          $('#teachtrain').append(content);
          count++;
        }
        
      
        // alert(data[0]['name']);
               
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
    
    
</script>

<!--Today Status Attendance end -->




</div>

<!-- admition form end -->

		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

		</div>
		</div>
		</div>
		</div>
		<!--staff dataend-->
		
		
		
		
		
		
								<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="raisereport" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content" style="overflow:visible;">
<div class="modal-header">
<center><h5 class="modal-title" id="exampleModalLongTitle"> Pending Reports details.</h5></center> 
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body"style="overflow:visible;">

<!-- admition form -->
<div class="row">
  <b> <label>Reports  details: </label></b>
<table class="table table-striped"style="margin-top: 20px; table-layout: fixed;
  word-wrap: break-word;"id="kalka">
  <thead class="thead-dark">
    <tr>
          <th scope="col">Serial Number</th>
      <th scope="col">ID No</th>
       <th scope="col">Sender</th>
      <th scope="col">Title</th>
      <th scope="col">Message</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
</table>

<!--Today Attendance data-->

<script>

  function deleteButtonClicked(e) {
    //   e.stopPropagation();
    //   alert(e);
       
         $.confirm({
      title: 'Approve ?',
      content: 'Are you sure to Want to Approve Report?',
      type: 'blue',
      typeAnimated: true,
      buttons: {
        tryAgain: {
          text: 'Yes',
          btnClass: 'btn-blue',
          action: function(){
              
            // var userRef = firebase.database().ref('gameurl/'+e);
            // userRef.remove();
            // window.location.reload();
            
            
              var urls='<?php echo base_url();?>index.php/Admin/aprrorticket';
    $.ajax({
        type:'ajax',
        url:urls, 
        async:false,  
        dataType:'json',
        data:{'idno':e},
        type:'POST',
        success:function(data)  
        {
      
      swal({
  title: "Congratulation!",
  text: "You Approved Pending Report!",
  icon: "success",
  button: "Ok!",
});
      
        // alert(data[0]['name']);
               
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
          }
        },
        close: function () {
        }
      }
    });
       
       
  
  }    

    var urls='<?php echo base_url();?>index.php/Admin/ticketno';
    $.ajax({
        type:'ajax',
        url:urls, 
        async:false,  
        dataType:'json',
        type:'POST',
        success:function(data)  
        {
        //   $("#rollno").html(data[0]['rollno']); 
        //      $("#name").val(data[0]['name']); 
        //       $("#Email").val(data[0]['email']); 
        //       $("#Password").val(data[0]['password']);
        
      
        var i=0;
       
        var count=1;
        for(i=0;i<data.length;i++)
        {   
            var content ='';
            content +='<tr>';
        content += '<td>'+count+'</td>';
        content += '<td>'+data[i]['idno'] + '</td>';
         content += '<td>'+data[i]['sender'] + '</td>';
          content += '<td>'+data[i]['title'] + '</td>';
            content += '<td>'+data[i]['message'] + '</td>';
         
        // console.log("sani"+val.);
       
        content +='<td>'+data[i]['date']+'</td>';
         content +='<td>'+data[i]['time']+'</td>';
          content +='<td>' +"<Button class='delete' style='border: #fff;background-color: #fff;'id='idno'onclick='deleteButtonClicked(\""+data[i]['idno']+"\")'> <i class='fa fa-check-square'style='color:red;'title='Delete'></i></Button>"+'</td>';
        content += '</tr>';
          $('#kalka').append(content);
          count++;
        }
        
      
        // alert(data[0]['name']);
               
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
    
    
</script>

<!--Today Status Attendance end -->




</div>

<!-- admition form end -->

		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

		</div>
		</div>
		</div>
		</div>
		
		
		
		<!--teacher train data end-->
		
		<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">-->
<!--  Launch demo modal-->
<!--</button>-->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="solveuser">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
		
		   <!--raise report start-->
		   

		<!--staff dataend-->
		
		
		
		
		
		   
		   
		   
		   <!--raise report end-->
		
		
		<!--total train student data end-->
		
		
	
				<!-- new Old Attedance end  -->
				<!-- new Attenace report-->
	
			
						<!-- Attendance report end -->
						
										</body>
										</html>