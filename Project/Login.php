<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Heshamal Learners </title>
		
		<style>
			body {
				background-image: url('background.jpg');; 
				height: 607px;
				background-size: cover;
			}
			
			.blink {
			animation: blinker 1.5s linear infinite;
            color: green;
            font-family: Lucida Console;
			font-size:25;
            }
			
			@keyframes blinker {
                50% {
                    opacity: 0;
                }
            }
			
			.container {
				display: grid;
				align-items: center; 
				grid-template-columns: 1fr 1fr;
				column-gap: 2px;
			}
			
		</style>

	</head>
	
	<body>
	
		<marquee class="blink" width="100%" direction="right" height="100px">
			Heshamal Driving Training School
		</marquee>
		
		<div style="position:absolute; top:20px; left:20px">
		<br><br><center><img src="logo.jpg" width="200"></center> <br><br>
		<form name="f1" method="post">
		<div style="margin:5px;border:2px solid black;padding:5px;width:800">
		<div style="margin:5px;border:2px solid black;padding:5px;width:350">
		<h2><center>Customer Registration</center></h2>
        
		<div class="row">
		
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">NICNo :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
		<input type="text" name="t1">
        </div>
		
        </div><br><div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">First Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
		<input type="text" name="t2">
        </div>
        </div><br>
                                    
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">Last Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
        <input type="text" name="t3">
        </div>
        </div><br>
		
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">Address :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="t4">
        </div>
        </div><br>
                                    
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">Gender :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
		<input type="text" name="t5">
        </div>
        </div><br>
                                    
		<div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1">Contact :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="t6">
        </div>
        </div><br>
        
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">Email :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="t7">
        </div>
        </div><br>
        
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">Username :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
        <input type="text" name="t8"><br>
		<label for="exampleInputEmail1">(Use your NICNO as the username)</label>
        </div>
        </div><br>
        
		<div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">Password :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
		<input type="text" name="t9">
        </div>
        </div><br>
        
		</div>
        
		<input type="submit" name="s1" value="Register">
		</form>
		</div>
		
		<div style="position:absolute; top:315px; left:500px;border:2px solid black;padding:10px">
		<img src="login.jpeg" width="280">
		<h2><center>Login</center></h2>
		Username:&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="t10"><br><br>
		Password:&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="t11"><br><br>
		<input type="submit" name="s2" value="Login">
		</div>
		
		<br><h2>Contact Information</h2>
	
	<div style="margin:5px;padding:5px;width:300" >
		
		<div class="container">
			<img src="location.png" width="50">
			<p>No: 191,Main street,Kahawatta</p>
		</div>
	
		<div class="container">
			<img src="contact.png" width="50">
			<p>0718024138/0773769522</p>
		</div>
	
		<div class="container">
			<img src="mail.png" width="50">
			<p>heshamallearners@gmail.com</p>
		</div>
	
	</div>

</body>
</html>