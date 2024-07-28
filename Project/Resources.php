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
				height:563; 
				width:1035;
				opacity:0.5;
			}
			
	</style>

   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
		
		<marquee class="blink" width="100%" direction="right" height="100px">
			Heshamal Driving Training School
		</marquee>

		<div style="position:absolute; top:35px";>
		<div style="border:2px solid black;width:1345">
		<div style="margin:5px;border:2px solid black;width:300">
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
	  
	  <div class="bgimg" style="position:absolute;top:7px; left:310px;border:2px solid black;width:1035">
			<img src="resource.jpg"  width="1035" top="40px" height="563">
		</div>
		
   </body>
</html>