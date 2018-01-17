<!DOCTYPE html>
<html dir="ltr">
<head>
<meta content="en‐gb" http-equiv="Content‐Language">
<meta content="text/html charset=utf‐8" http-equiv="Content‐Type">
<!‐‐ #BeginEditable "doctitle" ‐‐>
<title>Untitled 1</title>
<!‐‐ #EndEditable ‐‐>
<link href="CssStyle.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
</head>
<body>
<div class="banner">
<img alt="Banner" height="150" src="phoenixlogo.png" width="500"></div>
<div class="Heading">
PE Department ‐ Fixtures Diary<br><span class="a">&nbsp;<br></span></div>
<div class="main1">
<span class="a"><a href="Index.html">Home Page </a>&nbsp;&nbsp;
<a href="allevents.php">Fixture List</a>&nbsp;&nbsp;&nbsp;
<a href="fixturesrcstudent.html">Fixture Search</a>&nbsp;&nbsp;&nbsp;
<a href="clubs.html">Club Information</a>&nbsp;&nbsp;&nbsp;
<a href="department.html">PE Department</a>&nbsp;&nbsp;&nbsp;
<a href="login.php">Staff Login</a></span><br>
<div class="main" style="left: 0px; top: 17px">
<!‐‐ #BeginEditable "PageContent" ‐‐>
<p><span class="body">

<?php
//open the connection
$conn = mysqli_connect("localhost", "root", "");
//select the database
mysqli_select_db("PE",$conn);
//sql statement
$fdelete=$_POST['fdelete'];
$query = "delete from fixtures where eventid='".$fdelete."'";
if(mysqli_query($query))
{
	echo '<font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D><br>fixture has been deleted from database</font>';
}
	else
{
	echo '<font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D>delete has failed</font>';
}
mysqli_close($conn);
?>
<br><br><span class="body">You have deleted record number: </span><span class="body">
<?php echo $_POST["fdelete"];
echo '<br><br><a href="fixturesrcstaff.php">Fixture search page</a></br>';
echo '<br><a href="deleteform.php">Delete another fixture</a><br />';
echo '<br><a href="newfixture.php">Add a new fixture</a><br />';
echo '<br><a href="logout.php">Log out</a><br />';?>
</td>
</tr>
</table>
</span></p>
<!‐‐ #EndEditable ‐‐>
</div>
</div>

</span></p>
<!‐‐ #EndEditable ‐‐>
</div>
</div>
</body>
</html>