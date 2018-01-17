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
session_start();
?>
<?
echo '<font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D><h3>Fixture Deletion Page ‐ Staff Only</h3></font>';
// check session variable
if (isset($HTTP_SESSION_VARS['valid_user']))
{
echo '<p><font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D>You are logged in as
'.$HTTP_SESSION_VARS['valid_user'].'</font></p>';
echo' <p><span class="h1">Fixture Deletion</span></p>
<p><span class="h2">Find the fixture ID and use the form below to delete selected fixtures.</span><span
class="h2"></span></p>';
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_connect_error());
}
mysqli_select_db("PE", $con);
$result = mysqli_query("SELECT * FROM fixtures ORDER BY date");
echo "<table width='100%' border='1' cellspacing='2' cellpadding='2'>
<tr>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'>ID</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'>Sport</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'>Event</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'>Date</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'>Time</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'>Staff Member</font></th>
<th><font face='verdana, Geneva, Tahoma, sans‐serif'>Venue</font></th>
</font></tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'>" . $row['eventid'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'>" . $row['sport'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'>" . $row['event'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'>" . $row['date'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'>" . $row['starttime'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'>" . $row['staff1'] . "</font></td>";
echo "<td><font face='verdana, Geneva, Tahoma, sans‐serif'>" . $row['venue'] . "</font></td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
echo '
<br><form action="delete.php" method="post">
<table width="47%" style="width: 40%">
<tr>
<td width="211" class="h2" style="width: 105px"><font face="verdana, Geneva,
Tahoma, sans‐serif">Enter ID Number</font></td>
<td width="177" class="body"><label>
<input type="text" name="fdelete" id="fdelete">
</label></td>
73
</tr>
<tr>
<td class="body" style="width: 105px">&nbsp;</td>
<td>
<br><input class="h2" name="Submit1" type="submit" value="Delete
Fixture"></td>
</tr>
</table>
</form>' ;
}
else
{
echo '<p><font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D>You are not logged in.</font></p>';
echo '<p><font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D>Only staff may see this page.</font></p>';
}
echo '<a href="fixturesrcstaff.php">Fixture search page</a></br></br>';
echo '<a href="newfixture.php">Add new fixture</a></br></br>';
echo '<a href="logout.php">Log out</a><br />';
?>

</span></p>
<!‐‐ #EndEditable ‐‐>
</div>
</div>
</body>
</html>