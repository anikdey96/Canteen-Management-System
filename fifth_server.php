<?php 

	// initialize variables
	$Name = "";
	$Age = "";
	$Salary = "";
	$Id_Number = 0;
	//CONNECT TO DATABASE
	$db = mysqli_connect('localhost', 'root', '', 'canteen');


	//IF SAVE BUTTON IS CLICKED
	if (isset($_POST['save'])) {
		$Name = $_POST['Name'];
		$Age = $_POST['Age'];
		$Salary = $_POST['Salary'];
		$Id_Number = $_POST['Id_Number'];

		$query = "INSERT INTO canteen_member_info(Name, Age, Salary, Id_Number ) VALUES ('$Name', '$Age', '$Salary', '$Id_Number')"; 
	    mysqli_query($db, $query);
		header('location: fifth_page(2).php');//redirect to index page after inserting
	}

	//retrieve records
	// $results = mysqli_query($db, "SELECT * FROM canteen_member_info");

?>