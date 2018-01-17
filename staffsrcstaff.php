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

<p><span class="h1">Staff Search Results</span></p>
<p><span class="body">
<?php
// create short variable names
$searchstaff=$HTTP_POST_VARS['fsearchstaff'];
$searchstaff = addslashes($searchstaff);
@ $db = mysqli_pconnect('localhost', 'root', '');
if (!$db)
{
echo 'Error: Could not connect to database. Please try again later.';
exit;
}
mysqli_select_db('PE');
$query = "select * from fixtures where staff1 = '$searchstaff' ORDER BY date";
$result = mysqli_query($query);
$num_results = mysqli_num_rows($result);
echo '<p><font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D>Number of records found:
'.$num_results.'</font></p>';
for ($i=0; $i <$num_results; $i++)
{
$row = mysqli_fetch_array($result);
echo '<p><strong><font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D>'.($i+1).'. ';
echo htmlspecialchars(stripslashes($row['event']));
echo '</strong><br />Sport: ';
echo stripslashes($row['sport']);
echo '<br />Date: ';
echo stripslashes($row['date']);
echo '<br />Start Time: ';
echo stripslashes($row['time']);
echo '<br />Venue: ';
echo stripslashes($row['venue']);
echo '<br />Staff Member: ';
echo stripslashes($row['staff1']);
echo '<br />Second Staff Member: ';
echo stripslashes($row['staff2']);
echo '<br />Transport Booked: ';
echo stripslashes($row['transport']);
echo '<br />Lunch Required: ';
echo stripslashes($row['lunch']);
echo '<br />Group Size: ';
echo stripslashes($row['size']);
echo '<br />Date Added: ';
echo stripslashes($row['dateadded']);
echo '</font></p>';
}
?>
</span><span class="h2">You have searched for the staff member: </span><span class="body">
<?php echo $_POST["fsearchstaff"];
echo '<br><br><a href="fixturesrcstaff.php">Fixture search page</a></br></br>';
echo '<a href="logout.php">Log out</a><br />'; ?>
</span></p>

</span></p>
<!‐‐ #EndEditable ‐‐>
</div>
</div>
</body>
</html>