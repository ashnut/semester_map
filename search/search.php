
<?php

if(isset($_POST['search']))
{
	$stuid = $_POST['stuid'];
	$connect = mysqli_connect("localhost", "root", "", "semestermap");
	$query = "select courseid1, courseid2, coursesub1, coursesub2, term, stuid from subject where stuid = '$stuid' LIMIT 1 ";
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0) 
	{
		while($row = mysqli_fetch_array($result))
		{	
			$stuid = $row['stuid'];
			$courseid1 = $row['courseid1'];
			$courseid2 = $row['courseid2'];
			$coursesub1 = $row['coursesub1'];
			$coursesub2 = $row['coursesub2'];
			$term = $row['term'];
		}	
	}
	else
	{
			echo "Data not available";
			$courseid1 = "";
			$courseid2 = "";
			$coursesub1 = "";
			$coursesub2 = "";	
			$term = "";
	}
	
mysqli_free_result($result);
mysqli_close($connect);
}

else{
    	$courseid1 = "";
		$courseid2 = "";
		$coursesub1 = "";
		$coursesub2 = "";	
		$term = "";
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Search Functionality</title>
</head>
<body>
<h2>Search Functionality</h2>


<form action="search.php" method="post">

    ID <input type="text" name="stuid"><br><br>
    CourseID1<input type="text" name="courseid1" value="<?php echo $courseid1;?>"><br><br>
    CourseID2<input type="text" name="courseid2" value="<?php echo $courseid2;?>"><br><br>
    Course Subject 1<input type="text" name="coursesub1" value="<?php echo $coursesub1;?>"><br><br>
    Course Subject 2<input type="text" name="coursesub2" value="<?php echo $coursesub2;?>"><br><br>
    Term<input type="text" name="term" value="<?php echo $term;?>"></td><br><br>
            
    <input type="submit" name="search" value="Search">

</form>
<a href="../welcome.php">Go Back</a> 
</body>
</html>
