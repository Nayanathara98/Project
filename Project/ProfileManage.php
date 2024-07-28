<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Heshamal Learners</title>
	  <link rel="stylesheet" href="animate.css.">
	  
	  <style> 
		ul li p{
			color:rgb(255,179,79);
		}
		
		body{
			background-color: rgba(134,78,173);
		}
		
		.blink {
			animation: blinker 1.5s linear infinite;
            color: white;
            font-family: Lucida Console;
			font-size:25;
            }
			
			@keyframes blinker {
                50% {
                    opacity: 0;
                }
            }
			
			.bgimg {
				background-image: url('admindashboard.jpg');
				height:843; 
				width:1035;
				opacity:0.5;
			}
			
			h2{
				color: navy blue;
				background-color: grey;
			}
			
	</style>

   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
		
		<marquee class="blink" width="100%" direction="right" height="100px">
			Heshamal Driving Training School
		</marquee>

		<div style="position:absolute; top:35px";>
		<div style="border:2px solid black;width:1345;height:1000">
		<div style="margin:5px;border:2px solid black;width:300;height:980;">
		<div class="wrapper"> 
	  
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <center><img src="logo.jpg"  width="200" top="40px"></center>
            <div class="sidebar">
               
			   <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				  
               <li class="nav-item animated bounceInLeft">
               <a href="StudentDashboard.php" class="nav-link">
               <p>Dashboard</p>
               </a>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="Aboutus.php" class="nav-link">
               <p>About Us</p>
               </a>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="Contactus.php" class="nav-link">
               <p>Contact Us</p>
               </a>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="Resources.php" class="nav-link">
               <p>Learning Resources</p>
               </a>
               </li>
					 	 
               <li class="nav-item animated bounceInLeft">
               <a href="#" class="nav-link">
               <p>My Profile</p>
               </a>
               <ul class="nav nav-treeview">          
			   <li class="nav-item">
               <a href="ProfileManage.php" class="nav-link">
               <p>Manage</p>
               </a>
               </li>
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="#" class="nav-link">
               <p>Payment</p>
               </a>
               <ul class="nav nav-treeview">
               <li class="nav-item">
               <a href="PaymentAdd.php" class="nav-link">
               <p>Add</p>
               </a>
               </li>          
			   <li class="nav-item">
               <a href="StPaymentManage.php" class="nav-link">
               <p>Manage</p>
               </a>
               </li>
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="Login.php" class="nav-link"> 
               <p>Exit</p>
               </a>
               </li>
			   
               </ul>
               </li>
               </ul>
               </nav>
              </div>
       </aside>
      </div>
		</div>
	  
	  <div class="bgimg" style="position:absolute;top:7px; left:310px;border:2px solid black;width:1035;height:980;>
		<form name="f1" method="post">
		
		<h2><center>My Profile Details</center></h2>
		
		&emsp;&emsp;<input type="submit" name="s1" value="Search" >&emsp;&emsp;
			<input type="text" name="t18"> <br><br>
		
		<div class="row">
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;NICNo :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp </label>
		<input type="text" name="t1">
		</div>
        </div><br>
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Full Name :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp </label>
		<input type="text" name="t2">
        </div>
        </div><br>
                                    
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Name with Initials :&emsp;&emsp;&emsp;</label>
        <input type="text" name="t3">
        </div>
        </div><br>
                                    
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Address :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </label>
        <input type="text" name="t4">
        </div>
        </div><br>
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Gender :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp</label>
		<input type="text" name="t5">
        </div>
        </div><br>
                                    
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Birthday :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp </label>
        <input type="text" name="t6">
        </div>
        </div><br>
                                    
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Contact :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp </label>
        <input type="text" name="t7">
        </div>
        </div><br>
        
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Email :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp </label>
        <input type="text" name="t8">
        </div>
        </div><br>
		
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Apply vehicle Classes :&emsp;</label>
        <input type="text" name="t17"><br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<input type="text" name="t18"><br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<input type="text" name="t19"><br>
        </div>
        </div><br>
        
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Payment :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp</label>
        <input type="text" name="t17"><br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<input type="text" name="t18"><br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<input type="text" name="t19"><br>
        </div>
        </div><br>
        
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Exam Date :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </label>
        <input type="text" name="t7">
        </div>
        </div><br>
        
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Exam Status :&emsp;&emsp;&emsp;&emsp;&emsp;</label>
        <input type="text" name="t8">
        </div>
        </div><br>
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Trail Date :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </label>
        <input type="text" name="t7">
        </div>
        </div><br>
        
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Trail Status :&emsp;&emsp;&emsp;&emsp;&emsp;</label>
        <input type="text" name="t8">
        </div>
        </div><br>
		
		</div>
		
		</div>
		
   </body>
</html>