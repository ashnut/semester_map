
<html>
<head>
  <link rel="stylesheet" type="text/css" href="statusstyle.css"> 
  <script
              src="https://code.jquery.com/jquery-1.10.1.js"
              integrity="sha256-663tSdtipgBgyqJXfypOwf9ocmvECGG8Zdl3q+tk+n0="
              crossorigin="anonymous"></script>
        
    <script src="dragjs.js"></script>
</head>

<body>

  <h1>Semester Map Prototype: Status of Subject</h1>
  <h3><b> The status of subjects for <?php require '../connection.php';
  session_start(); echo $_SESSION['stud']; ?> </h3></b>



<?php
require '../connection.php';

$pass = mysqli_query($conn,"select * from substatus where uname='$_SESSION[stud]' and status='Pass'") or die("Error " . mysql_error());
$fail = mysqli_query($conn,"select * from substatus where uname='$_SESSION[stud]' and status='Fail'") or die("Error " . mysql_error());
$progress = mysqli_query($conn,"select * from substatus where uname='$_SESSION[stud]' and status='In Progress'") or die("Error " . mysql_error());
$withdraw = mysqli_query($conn,"select * from substatus where uname='$_SESSION[stud]' and status='Withdraw'") or die("Error " . mysql_error());
?>



<table id="MyTable" class="table table-bordered" style="font-family:aerial;font-size:15">
	<tr>
		<th> Course Name </th>
		<th> Term </th>
		<th> Status </th>
	<tr>

<?php

	while($data=mysqli_fetch_Array($pass))
	{
			echo "<tr>";
			echo "<td height='10'><font color='green'> $data[0]</td>";
			echo "<td height='10'> $data[1] </td> ";
			echo "<td height='10'> $data[2] </td> ";
			echo "</tr>";
	}

	while($data1=mysqli_fetch_Array($fail))
	{
			echo "<tr>";
			echo "<td height='10'><font color='red'> $data1[0]</td>";
			echo "<td height='10'> $data1[1] </td> ";
			echo "<td height='10'> $data1[2] </td> ";
			echo "</tr>";
	}

	while($data2=mysqli_fetch_Array($progress))
	{
		
			echo "<tr>";
			echo "<td height='10'><font color='blue'> $data2[0]</td>";
			echo "<td height='10'> $data2[1] </td> ";
			echo "<td height='10'> $data2[2] </td> ";
			echo "</tr>";
	}

	while($data3=mysqli_fetch_Array($withdraw))
	{
		
			echo "<tr>";
			echo "<td height='10'><font color='yellow'> $data3[0]</td>";
			echo "<td height='10'> $data3[1] </td> ";
			echo "<td height='10'> $data3[2] </td> ";
			echo "</tr>";
	}

?>

</table>
<a href="../welcome.php">Go Back</a>  
</body>
</html>
