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
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>

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
<div class="logo">Staff  Pannel</div>
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
<span class="title"> Attendance  </span></a></li>

</a></li>
<!--<li><a href="<?php echo base_url(); ?>index.php/Admin/userpannel">-->
<!--<span class="icon"><i class="fas fa-volleyball-ball"></i></span>-->
<!--<span class="title">User Pannel</span>-->
<!--</a></li>-->
<li><a href="<?php echo base_url() ?>index.php/Admin/staffnotification">
<span class="icon"><i class="fas fa-blog"></i></span>
<span class="title">Notification</span>
</a></li>
<!--<li><a href="<?php echo base_url() ?>index.php/Admin/playconsole">-->
<!--<span class="icon"><i class="fa fa-list-alt"></i></span>-->
<!--<span class="title">Play-Console</span>-->
<!--</a></li>-->
<!--</a></li>-->
</ul>
</div>



<!--  main container -->
<div class="main_container">

<!-- 	bootrap container -->
<div class="container">
<!-- 	row -->
<h1> Attendance  Data. <hr>  </h1>
<div class="row">
<div class="col-4">
<!-- New Admition -->
<div class="card" id="card1"style="width: 18rem;"data-toggle="modal" data-target="#exampleModalLong">
<div class="card-body">
<center> <img src="<?php echo base_url("assests/image/attedenceicon.png")?>"id="imgIcon"></center>
<center><p class="card-text">Today  Attendance Status. </p></center> 

</div>
</div>

</div>

<!--  Show Students -->

<div class="col sm-4">
<div class="card"id="card2" style="width: 18rem;"data-toggle="modal" data-target="#exampleModalLong1">
<!-- <a href="<?php echo base_url()?>index.php/manage/showstudents"> -->
<div class="card-body">
<center> <img src="<?php echo base_url("assests/image/attedenceicon.png")?>"id="imgIcon"></center>
</a>

<center> <p class="card-text">Old Attendance </p></center>
</div>


</div>

</div>
<!-- student registred -->
<div class="col sm-4">
<div class="card"id="card3" style="width: 18rem;"data-toggle="modal" data-target="#exampleModalLong2">
<div class="card-body">
<center> <img src="<?php echo base_url("assests/image/attedenceicon.png")?>"id="imgIcon"></center>
<center> <p class="card-text"style="margin-top: 21px">Attendance Report</p></center>

</div>
</div>

</div>

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

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<center><h5 class="modal-title" id="exampleModalLongTitle">Today Attedance Status.</h5></center> 
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<!-- admition form -->
<div class="row">
  <b> <label>Attedance details: </label></b>
<table class="table table-striped"style="margin-top: 20px;"id="hinditable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID No</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>

    </tr>
  </thead>
</table>

<!--Today Attendance data-->

<script>
    var urls='<?php echo base_url();?>index.php/Admin/todayStatus';
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
        
        var content = '';

        content +='<tr>';
        content += '<td>' +data[0]['idno']+'</td>';
        content += '<td>' +data[0]['name'] + '</td>';
        // console.log("sani"+val.);
        if(data[0]['status']=="0")
        {
            content += '<td>'+"present " +'</td>';
        }
        content +='<td>'+data[0]['date']+'</td>';
        content += '</tr>';
        $('#hinditable').append(content);
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
		<button type="button" class="btn btn-secondary" data-dismiss="modal"onclick='window.location.reload();'>Close</button>

		</div>
		</div>
		</div>
		</div>
		
		
		<!-- new Old Attednaceupload's -->
		
		
		
		
		<!-- Modal -->
		<div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
		<center><h5 class="modal-title" id="exampleModalLongTitle">Old Attedence Status.</h5></center> 
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>
		<div class="modal-body">
		<!-- admition form -->
		 
		<div class="row">
  <b> <label> Old Attendance: </label></b>
<table class="table table-striped"style="margin-top: 20px;"id="oldtable">
  <thead class="thead-dark">
    <tr>
       <th scope="col">ID No</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>

    </tr>
  </thead>
</table>

<script>
    var urlsold='<?php echo base_url();?>index.php/Admin/oldStatus';
    $.ajax({
        type:'ajax',
        url:urlsold, 
        async:false,  
        dataType:'json',
        type:'POST',
        success:function(data)  
        {
            var i=0;
            for(i=0;i<data.length;i++)
            {
                var content = '';

        content +='<tr>';
        content += '<td>' +data[0]['idno']+'</td>';
        content += '<td>' +data[0]['name'] + '</td>';
        // console.log("sani"+val.);
        if(data[0]['status']=="0")
        {
            content += '<td>'+"Present " +'</td>';
        }
        content +='<td>'+data[0]['date']+'</td>';
        content += '</tr>';
        $('#oldtable').append(content);
        // alert("data aya");
                
            }
      
               
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
    
    
</script>




</div>

		
		<!-- admition form end -->
				<!-- admition form end -->
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal"onclick='window.location.reload();'>Close</button>

				</div>
				</div>
				</div>
				</div>	
				<!-- new Old Attedance end  -->
				<!-- new Attenace report-->
	
				<!-- Modal -->
				<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
				<center><h5 class="modal-title" id="exampleModalLongTitle"> Attendance Report</h5></center> 
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body">
				<!-- admition form -->
				<div class="row">
  <b> <label>Attendance Report.: </label></b>

 <div id="piechart"style="width:900px; height:200px;"></div>  
 
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
               
    var totalatt=0;                
    var urls='<?php echo base_url();?>index.php/Admin/totalattedance';
    $.ajax({
        type:'ajax',
        url:urls, 
        async:false,  
        dataType:'json',
        type:'POST',
        success:function(data)  
        {
         
         totalatt=data;
        //  alert(totalatt);
        //   $("#rollno").html(data[0]['rollno']); 
        //      $("#name").val(data[0]['name']); 
        //       $("#Email").val(data[0]['email']); 
        //       $("#Password").val(data[0]['password']);
             },
        error:function(data)
        {
            alert('ajax error'); 
        }
    });
                var data = google.visualization.arrayToDataTable([  
                          ['Present', 'Number'],  
                        //   <?php  
                        //   while($row = mysqli_fetch_array($result))  
                        //   {  
                        //       echo "['".$row["gender"]."', ".$row["number"]."],";  
                        //   }  
                        //   ?>  
                        ["Present",totalatt],
                        ["Absent",60]
                     ]);  
                var options = {  
                      title: 'Percentage of Present and Absent',  
                      is3D:true,  
    
                      pieHole: 0.9  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script> 

</div>
							<!-- admition form end -->
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal"onclick='window.location.reload();'>Close</button>
					
						</div>
						</div>
						</div>
						</div>
						<!-- Attendance report end -->
						
										</body>
										</html>