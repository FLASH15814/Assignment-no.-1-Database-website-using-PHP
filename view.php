<?php
	require_once('database.php');
	$res = $database->read();
?>
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
<section>
<div class="container">
	<div class="row">
		<table class="tab">
			<tr>
				<th>#</th>
				<th>Full Name</th>
				<th>Age</th>
				<th>Email</th>
				<th class="mn">Mobile number</th>
			</tr>
			<?php

				while($r = mysqli_fetch_assoc($res)){
			?>
					<tr>
						<td><?php echo $r['id']; ?></td>
						<td><?php echo $r['fname'] . " " . $r['lname']; ?></td>
						<td><?php echo $r['age'] ?></td>
						<td><?php echo $r['email'] ?></td>
						<td><?php echo $r['mobile'] ?></td>
					</tr>
				<?php
				}
			?>
		</table>
	</div>
</div>
</section>
<img class="icons" src="images/icons.jpeg" alt="icons">
    <footer class="f1">
        © The Owl company.
        All rights reserved.
    </footer>
</body>
</html>
