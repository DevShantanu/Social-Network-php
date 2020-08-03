
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
   header("location: Index.php");
   
    exit;

 }
 /*else{
 	require_once "config.php";
 	if (isset($_POST['submit'])){
 		$file = $_FILES['image'];

 		$fileName = $file['name'];
 		$fileTmpName = $file['tmp_name'];
 		$fileSize = $file['size'];
 		$fileError = $file['error'];
 		$fileType = $file['type'];

 		$fileExt = explode('.',$fileName);
 		$fileActualExt = strtolower(end($fileExt));

 		$allowed = array('jpg', 'jpeg', 'png', 'pdf');
 		if (in_array($fileActualExt, $allowed)) {
 			if ($fileError === 0) {
 				$fileNameNew = uniqid('',true).".".$fileActualExt;
 				$fileDest = 'images/'.$_SESSION["username"]."/".$fileNameNew;

 				move_uploaded_file($fileTmpName, $fileDest);

 				$_SESSION['upload']=1;
 			}
 			else{
 				echo "There was an error uploading file";
 			}
 		}
 		else{
 			echo "You cannot upload files of this type";
 		}
 	}
 }*/



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSS/main.css">

	<style type="text/css">
		h2{
			color: blue;
			text-align: center;
		}
		.head{
			box-shadow: 0px 0px 10px 3px;
		}
		.container {
			padding-top: 8px;
			display: grid;
			grid-template-columns: auto 400px;
		}
		.News{
			 grid-column-start: 1;
 			 grid-column-end: 2;
 			 padding: 8px;
 			 margin: 5px;
		}
		.Notice{
			 padding: 8px;
 			 margin: 5px;
 			 padding-left: 20px;
 			 margin-left: 1px;
			border-left: 3px solid lightgreen;
		}
		.ntc{
			border:1px solid grey;
			margin-bottom: 8px;
		}
		footer{
			background-color: #b4cd93;
			width: 100%;
			height: 40px;
			text-align: center;
			padding-top: 15px;

		}

</style>
</head>
<body>
<div class="head">
		<h1><a href="#">The Academia</a></h1>
<div class="navbar">
		<li><a href="News.php" >Campus News </a>	</li>	
	<li><a href="tabs/events.php">Events & Notices</a></li>	
	<li><a href="tabs/hostel.php">Hostel</a>	</li>	
	<li><a href="tabs/teacher.php" >Teachers Info</a></li>
	<li><a href="tabs/placement.php" >Training & Placement</a></li>
	<li><a href="tabs/report.php" >Report</a></li>
</div>	

	<div class="dropdown">
	<button onclick="myFunction()" class="dropbtn">Profile</button> 
	
		<div id="myDropdown" class="dropdown-content">
	<a href="#">Attendence</a>
	<a href="#">Results</a>
	<a href="#">Subjects</a>
	<a href="disconnect.php">logout</a>
		</div>
	</div>

</div>

<div class="container">
	<div class="News">
		<h2> News</h2>

	<h3>What is Lorem Ipsum?</h3>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	<hr>



	<h3>What is Lorem Ipsum?</h3>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	<hr>


	<h3>What is Lorem Ipsum?</h3>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	<hr>


	<h3>What is Lorem Ipsum?</h3>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	<hr>


	<h3>What is Lorem Ipsum?</h3>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	</div>
	
	<div class="Notice">
			<h2> Notice</h2>
			<div class="ntc">
			<h3>Notice Prototype</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
			</div>
			<div class="ntc">
			<h3>Notice Prototype</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
			</div>	
			<div class="ntc">
			<h3>Notice Prototype</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
			</div>
			<div class="ntc">
			<h3>Notice Prototype</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
			</div>
	</div>
	

</div>

<footer>

            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            
</footer>
	



<script type="text/javascript">
	function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


</body>
</html>