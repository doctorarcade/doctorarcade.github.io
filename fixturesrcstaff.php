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
echo '<font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D><h3>Fixture Search Page ‐ Staff Only</h3></font>';
// check session variable
if (isset($HTTP_SESSION_VARS['valid_user']))
{
echo '<p><font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D>You are logged in as
'.$HTTP_SESSION_VARS['valid_user'].'</font></p>';
echo '
<p><font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D>Use the forms below to search for
fixtures. </font></p>
<table style="width: 100%">
<tr class="h2">
<td style="width: 296px; height: 18px;">Search by Year Group</td>
<td style="width: 343px; height: 18px;">Search by Sport</td>
<td style="height: 18px">Custom Search</td>
</tr>
<tr>
<td style="width: 296px">
<form action="staffsrcyear.php" method="post" name="year">
<table style="width: 94%">
<tr>
<td style="width: 130px">
<span class="body">Select Year Group:</span></td>
<td>
<select name="fsearchyearonly" class="body">
<option value="y7">Year 7</option>
<option value="y8">Year 8</option>
<option value="y9">Year 9</option>
<option value="y10">Year 10</option>
<option value="y11">Year 11</option>
<option value="y12">Year 12</option>
<option value="y13">Year 13</option>
</select></td>
</tr>
<tr>
<td style="width: 130px">&nbsp;</td>
<td>
<input class="h2" name="Submit2" type="submit" value="submit"></td>
</tr>
</table>
</form>
</td>
<td style="width: 343px">
<form action="staffsrcsport.php" method="post" name="sport">
<table style="width: 79%">
<tr>
<td>
<span class="body">Select Sport:</span></td>
<td>
<select name="fsearchsportonly" class="body">
<option>Athletics</option>
<option>Cross Country</option>
<option>Hockey</option>
<option>Netball</option>
<option>Squash</option>
<option>Swimming</option>
<option>Tennis</option>
</select></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input class="h2" name="Submit3" type="submit" value="submit"></td>
</tr>
</table>
</form>
</td>
<td>
<form action="results.php" method="post">
<table style="width: 84%" class="body">
<tr>
<td class="body" style="width: 105px">Search Type:</td>
<td style="width: 128px"><select name="fsearchtype" class="body">
<option value="event">Event Name</option>
<option value="staff2">Support Staff (e.g. J Walton)</option>
<option value="venue">Venue</option>
<option value="date">Date (yyyy‐mm‐dd)</option>
<option value="transport">Transport Booked (Yes or No)
</option>
<option value="lunch">Lunch Booked (Yes or No)</option>
</select></td>
</tr>
<tr>
<td class="body" style="width: 105px">Search Criteria:</td>
<td style="width: 128px">
<input name="fsearchcriteria" type="text" style="width: 151px"></td>
</tr>
<tr>
<td class="body" style="width: 105px">&nbsp;</td>
<td style="width: 128px">
<input class="h2" name="Submit5" type="submit" value="submit"></td>
</tr>
</table>
</form>
</td>
</tr>
<tr>
<td style="height: 23px; width: 296px">&nbsp;</td>
<td style="height: 23px; width: 343px;">&nbsp;</td>
<td style="height: 23px">&nbsp;</td>
</tr>
<tr>
<td style="height: 23px; width: 296px"><span class="h2">Search by Staff</span></td>
<td style="height: 23px; width: 343px;"><span class="h2">Search by Sport and Year
Group.</span></td>
<td style="height: 23px">&nbsp;</td>
</tr>
<tr>
<td style="width: 296px" valign="top">
<form action="staffsrcstaff.php" method="post" name="staff">
<table class="body">
<tr class="body">
<td style="width: 134px">Select Staff Member:</td>
<td style="width: 129px">
<select class="body" name="fsearchstaff" style="width:
104px">
<option>A Dress</option>
<option>H Dune</option>
<option>J Hamilton</option>
<option>H Lille</option>
78
<option>J Walton</option>
<option>J Wheel</option>
</select></td>
</tr>
<tr>
<td style="width: 134px">&nbsp;</td>
<td style="width: 129px">
<input class="h2" name="Submit4" type="submit"
value="submit"></td>
</tr>
</table>
</form>
</td>
<td style="width: 343px">
<form action="staffsrcsportyear.php" method="post" name="sportyear">
<table style="width: 81%">
<tr class="body">
<td class="body" style="width: 105px">Select Sport</td>
<td class="body"><select name="fsearchsport" class="body">
<option>Athletics</option>
<option>Cross Country</option>
<option>Hockey</option>
<option>Netball</option>
<option>Squash</option>
<option>Swimming</option>
<option>Tennis</option>
</select></td>
</tr>
<tr class="body">
<td class="body" style="width: 105px">Search Criteria</td>
<td class="body"><select name="fsearchyear" class="body">
<option value="y7">Year 7</option>
<option value="y8">Year 8</option>
<option value="y9">Year 9</option>
<option value="y10">Year 10</option>
<option value="y11">Year 11</option>
<option value="y12">Year 12</option>
<option value="y13">Year 13</option>
</select></td>
</tr>
<tr>
<td class="body" style="width: 105px">&nbsp;</td>
<td>
<input class="h2" name="Submit1" type="submit" value="submit"></td>
</tr>
</table>
</form>
</td>
<td>&nbsp;
</td>
</tr>
</table></p> ';
}
else
{
echo '<p><font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D>You are not logged in.</font></p>';
echo '<p><font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D>Only staff may see this page.</font></p>';
}
echo '<a href="newfixture.php">Add a new fixture</a></br></br>';
echo '<a href="logout.php">Log out</a><br />';
?>

</span></p>
<!‐‐ #EndEditable ‐‐>
</div>
</div>
</body>
</html>