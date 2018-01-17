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
$sql="INSERT INTO fixtures (sport, event, date, venue, staff1, staff2, timeoday, starttime, transport, lunch, size, y7, y8, y9, y10, y11,
y12, y13)
VALUES
('$_POST[fsport]','$_POST[fevent]','$_POST[fdate]','$_POST[fvenue]','$_POST[fstaff1]','$_POST[fstaff2]','$_POST[ftofday]','$_POST[ftime]','$_POST[ftransport]','$_POST[flunch]','$_POST[fsize]','$_POST[f7]','$_POST[f8]','$_POST[f9]','$_POST[f10]','$_POST[f11]','$_POST[f12]','$_POST[f13]')";
if (!mysqli_query($sql,$conn))
{
	die('Error: ' . mysqli_connect_error());
}
//echo "1 record added";
mysqli_close($conn);
?>
<p><span class="h1">Fixture Confirmation</span><span class="body"><br><br>
<table width="60%" border="0">
<tr>
<td style="width: 25%" class="h2">Sport:</td>
<td width="82%" class="body"><?php echo $_POST["fsport"]; ?></td>
</tr>
<tr>
<td style="width: 25%" class="h2">Event Name:</td>
<td class="body"><?php echo $_POST["fevent"]; ?> </td>
</tr>
<tr>
<td style="width: 25%" class="h2">Fixture Date:</td>
<td class="body"><?php echo $_POST["fdate"]; ?></td>
</tr>
<tr>
<td style="width: 25%" class="h2">Fixture Time: </td>
<td class="body"><?php echo $_POST["ftime"]; ?></td>
</tr>
<tr>
<td style="width: 25%" class="h2">Time of Day: </td>
<td class="body"><?php echo $_POST["fsport"]; ?></td>
</tr>
<tr>
<td style="width: 25%" class="h2">Year Groups: </td>
<td class="body">
<table style="width: 81%; height: 46px">
<tr>
<td class="body">Year 7</td>
<td class="body" style="width: 39px"><?php echo $_POST["f7"]; ?></td>
<td class="body">Year 10</td>
<td class="body" style="width: 36px"><?php echo $_POST["f10"]; ?></td>
<td class="body">Year 12</td>
<td class="body" style="width: 37px"><?php echo $_POST["f12"]; ?></td>
</tr>
<tr>
<td class="body">Year 8</td>
<td class="body" style="width: 39px"><?php echo $_POST["f8"]; ?></td>
<td class="body">Year 11</td>
<td class="body" style="width: 36px"><?php echo $_POST["f11"]; ?></td>
<td class="body">Year 13</td>
<td class="body" style="width: 37px"><?php echo $_POST["f13"]; ?></td>
</tr>
<tr>
<td class="body">Year 9</td>
<td class="body" style="width: 39px"><?php echo $_POST["f9"]; ?></td>
<td class="body">&nbsp;</td>
<td class="body" style="width: 36px">&nbsp;</td>
<td class="body">&nbsp;</td>
<td class="body" style="width: 37px">&nbsp;</td>
</tr>
</table>
</td>
</tr>
<tr>
<td style="width: 25%" class="h2">Venue: </td>
<td class="body"><?php echo $_POST["fvenue"]; ?></td>
</tr>
<tr>
<td style="width: 25%" class="h2">Lead Staff Member: </td>
<td class="body"><?php echo $_POST["fstaff1"]; ?></td>
</tr>
<tr>
<td style="width: 25%" class="h2">Support Staff: </td>
<td class="body"><?php echo $_POST["fstaff2"]; ?></td>
</tr>
<tr>
<td style="width: 25%" class="h2">Transport Booked?: </td>
<td class="body"><?php echo $_POST["ftransport"]; ?></td>
</tr>
<tr>
<td style="width: 25%" class="h2">Lunch Required?: </td>
<td class="body"><?php echo $_POST["flunch"]; ?></td>
</tr>
<tr>
<td style="width: 25%" class="h2">Group Size:</td>
<td class="body"><?php echo $_POST["fsize"]; ?></td>
</tr>
<tr>
<td style="width: 25%" class="h2">&nbsp;</td>
<td>
<br><br><a href="newfixture.php">Add another fixture</a></br></br>
<a href="fixturesrcstaff.php">Fixture search page</a></br></br>
<a href="logout.php">Log out</a><br />
</td>
</tr>
</table>
</span></p>

</span></p>
<!‐‐ #EndEditable ‐‐>
</div>
</div>
</body>
</html>