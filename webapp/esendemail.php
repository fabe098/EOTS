<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql = "SELECT * FROM `project` where eid = '$id'";
	$result = mysqli_query($conn, $sql);
	
?>

<head>
	<title>Send Email | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="css/sendemail.css">
  <link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>
	
<header>
		<nav>
			<h1>Employee Management System</h1>
			<ul id="navli">
				<li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>"">My Profile</a></li>
				<li><a class="homeblack" href="empproject.php?id=<?php echo $id?>"">My Projects</a></li>
				<li><a class="homeblack" href="wdic.php?id=<?php echo $id?>"">Dictionary</a></li>
        <li><a class="homered" href="esendemail.php?id=<?php echo $id?>"">Send Email</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>

<section>
    <div class="container">
      <form action="https://formspree.io/f/xvodbwjz" method="POST" id="my-form">
  
        <div class="form-group">
          <label for="firstName"> First Name</label>
          <input type="text" id="firstName" name="firstName" value="Your First Name">
        </div>
  
        <div class="form-group">
          <label for="latsName">Last Name</label>
          <input type="text" id="lastName" name="lastName" value="Your Last Name">
        </div>
  
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="Your Email">
        </div>
  
        <div class="form-group">
          <label for="massage">Message</label>
          <textarea name="massage" id="massage" cols="30" rows="10"></textarea>
        </div>

        <input type="file" name="upload">
        <button type="submit">Submit</button>
      </form>
    </div>
    <div id="status"></div>
  </section>