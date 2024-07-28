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
		<div style="border:2px solid black;width:1345">
		<div style="margin:5px;border:2px solid black;width:300">
		<div class="wrapper"> 
	  
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <center><img src="logo.jpg"  width="200"></center>
            <div class="sidebar">
               
			   <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				  
               <li class="nav-item animated bounceInLeft">
               <a href="AdminDashboard.php" class="nav-link">
               <p>Dashboard</p>
               </a>
               </li>
					 	 
               <li class="nav-item animated bounceInLeft">
               <a href="#" class="nav-link">
               <p>Register</p>
               </a>
               <ul class="nav nav-treeview">
               <li class="nav-item">
               <a href="RegisterAdd.php" class="nav-link">
               <p>Add</p>
               </a>
               </li>          
			   <li class="nav-item">
               <a href="RegisterManage.php" class="nav-link">
               <p>Manage</p>
               </a>
               </li>
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="#" class="nav-link">
               <p>Instructor</p>
               </a>
               <ul class="nav nav-treeview">
               <li class="nav-item">
               <a href="InstructorAdd.php" class="nav-link">
               <p>Add</p>
               </a>
               </li>          
			   <li class="nav-item">
               <a href="InstructorManage.php" class="nav-link">
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
               <a href="PaymentManage.php" class="nav-link">
               <p>Manage</p>
               </a>
               </li>          
			   <li class="nav-item">
               <a href="PaymentConfirm.php" class="nav-link">
               <p>Confirm</p>
               </a>
               </li>
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="#" class="nav-link">
               <p>Exam</p>
               </a>
               <ul class="nav nav-treeview">
               <li class="nav-item">
               <a href="ExamAdd.php" class="nav-link">
               <p>Add</p>
               </a>
               </li>          
			   <li class="nav-item">
               <a href="ExamManage.php" class="nav-link">
               <p>Manage</p>
               </a>
               </li>
               </ul>
               </li>
			   
			   <li class="nav-item animated bounceInLeft">
               <a href="#" class="nav-link">
               <p>Trail</p>
               </a>
               <ul class="nav nav-treeview">
               <li class="nav-item">
               <a href="TrailAdd.php" class="nav-link">
               <p>Add</p>
               </a>
               </li>          
			   <li class="nav-item">
               <a href="TrailManage.php" class="nav-link">
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
	  
	  <div class="bgimg" style="position:absolute;top:7px; left:310px;border:2px solid black;width:1035;height:843;>
		form name="f1" method="post">
		
		<h2><center>Instructor Registration Form</center></h2>
        
		<div class="row">
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;NICNo :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
		<input type="text" name="t1">
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
        <input type="text" name="t9">
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
        
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Classes of vehicles practiced :&emsp; </label>
        <input type="text" name="t7">
        </div>
        </div><br>
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">&emsp;&emsp;Joined Date :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp </label>
        <input type="text" name="t7">
        </div>
        </div><br>
		
		</div>
        
		&emsp;&emsp;<input type="submit" name="s1" value="Register">
		</form>
		
		</div>
		
   </body>
</html>