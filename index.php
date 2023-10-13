<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="owl" href="">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        
            <img class= "owlpic" src="images/ovo1.jpg" alt="The owl" />
        
        
        <h2 class="theowl">
            THE OWL
        </h2>
        <nav>
            <ul>
            <li class="home">
                <a href="index.php">HOME</a>
            </li>
            <li class="data">
                <a href="view.php">DATA</a>
            </li>
            <li  class="contact">
               <a href="index.php"> CONTACT US</a>
            </li>
            <input type ="text" class="search" placeholder="Search" />
            <li class="search">
                <a href="#" ></a>
            </li>
            <button class="sear" role="button" id="sear">Search</button>
            <button class="login" role="button" id="login">Login</button>
            <button class="register" role="button" id="register">Register</button>
            </li>
        </ul>
        </nav>
</header>
  <main class="container">
	   <section>
	   <img class="back1" src="images/felipe-correia-Z3r7p3DqXeM-unsplash.jpg" alt="backgroundimage" >
		     <form method="post" >
					<h1>Create User</h1>
					 
						<label for="input1" class="ln">First Name</label>
						<input type="text" id="input1" name="fname" placeholder="Enter your first Name" required>
						
						<label for="input2" class="ln">Last Name</label>
						<input type="text" id="input2" name="lname" placeholder="Enter your last Name" required>
					
						<label for="input3" class="ea" >Email</label>
						<input type="email" id="input3" name="email"  placeholder="Enter your email address" required>

					 	<label for = "mnumber" class="mn"><strong>Mobile Number</strong></label>
    				 	<input type="tel" id="input4" name="mobile" placeholder="Enter Your Mobile Number" required/></br>
					 
						 <label class="yob">Age
						
							 <select name="age" class="age">
								 <option>Select Your Age</option>
								 <option value="20">20</option>
								 <option value="21">21</option>
								 <option value="22">22</option>
								 <option value="23">23</option>
								 <option value="24">24</option>
								 <option value="25">25</option>
							</select>
						</label>
					<button class="reset" role="button" >Reset</button>
        			<button class="submit" role="button">submit</button>
		     </form>
        <div class="form-group submit-message">
           <?php
				require_once('database.php');
				
				if(!empty($_POST)){
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$age = $_POST['age'];
					$email = $_POST['email'];
					$mobile = $_POST['mobile'];
					$res = $database->create($fname, $lname, $age, $email,$mobile);
					if($res){
						echo "<p>Successfully inserted data</p>";
					}else{
						echo "<p>Failed to insert data</p>";
					}
				}
			?>
        </div>
      </section>
     </main>
	 <img class="icons" src="images/icons.jpeg" alt="icons">
    <footer>
        © The Owl company.
        All rights reserved.
    </footer>
</body>
   </body>
</html>
