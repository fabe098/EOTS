
<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql = "SELECT * FROM `project` where eid = '$id'";
	$result = mysqli_query($conn, $sql);
	
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Dictionary</title>
    <link rel="stylesheet" type="text/css" href="styleemplogin.css">
    <link rel="stylesheet" href="wdicstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
</head>

<body>
<header>
		<nav>
			<h1>Employee Management System</h1>
			<ul id="navli">
				<li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>"">My Profile</a></li>
				<li><a class="homeblack" href="empproject.php?id=<?php echo $id?>"">My Projects</a></li>
				<li><a class="homered" href="wdic.php?id=<?php echo $id?>"">Dictionary</a></li>
                <li><a class="homeblack" href="esendemail.php?id=<?php echo $id?>"">Send Email</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
    <section>
        <form class="searchForm">
            <h1>Simple Word Dictionary</h1>
            <input type="search" name="searchBox" id="searchBox" placeholder="word to search">
            <input type="button" name="submit" value="submit" onclick="wordSearch()">
            <input type="reset" value="reset" onclick="reloadPage()">
        </form>

        <div class="searchResult" id="searchResult">
            <div>
                <h1>Word</h1>
                <p id="word"></p>
            </div>
            <div>
                <h1>Definition</h1>
                <p id="definition"></p>
            </div>
            <div>
                <h1>Example</h1>
                <p id="example"></p>
            </div>
            <div>
                <h1>How To Spell?</h1>
                <p id="spell"></p>
            </div>
        </div>
    </section>

    <script src="js/wdic.js"></script>

</body>

</html>