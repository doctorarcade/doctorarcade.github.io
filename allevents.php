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

<p>&nbsp;</p>
<p><span class="h1">All Upcoming PE Department fixtures</span></p>
<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_connect_error());
}
mysqli_select_db("PE", $con);
$result = mysqli_query("SELECT * FROM fixtures WHERE date>=Current_Date() ORDER by date");
echo "<table width='100%' border='1' cellspacing='2' cellpadding='2'>
<tr>
<th><font face='verdana, Geneva, Tahoma, sans‐serif' color=#4C4C4D>Sport</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>Event</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>Date</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>Time</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>Staff Member</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>Venue</font></th>
</font></tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>" . $row['sport'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>" . $row['event'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>" . $row['date'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>" . $row['starttime'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>" . $row['staff1'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>" . $row['venue'] . "</font></td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
<p>&nbsp;</p>
<p><span class="h1">All Past PE Department fixtures</span></p>
<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_connect_error());
}
mysqli_select_db("PE", $con);
$result = mysqli_query("SELECT * FROM fixtures WHERE date<Current_Date() ORDER by date");
echo "<table width='100%' border='1' cellspacing='2' cellpadding='2'>
<tr>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>Sport</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>Event</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>Date</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>Time</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>Staff Member</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>Venue</font></th>
</font></tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>" . $row['sport'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>" . $row['event'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>" . $row['date'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>" . $row['starttime'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>" . $row['staff1'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'color=#4C4C4D>" . $row['venue'] . "</font></td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</span></p>
<!‐‐ #EndEditable ‐‐>
</div>
</div>
</body>
</html>