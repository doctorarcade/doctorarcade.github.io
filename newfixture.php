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
echo '<font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D><h3>Fixture Entry Page ‐ Staff Only</h3></font>';
// check session variable
if (isset($HTTP_SESSION_VARS['valid_user']))
{
echo '<p><font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D>You are logged in as
'.$HTTP_SESSION_VARS['valid_user'].'</font></p>';
echo '<p>
<form action="insert1.php" method="post">
<table class="body" style="width: 80%" cellpadding="4">
<tr>
<td style="width: 148px">Sport</td>
<td style="width: 115px">
<select name="fsport" style="width: 126px" tabindex="1" class="body">
<option>Athletics</option>
<option>Cross Country</option>
<option>Hockey</option>
<option>Netball</option>
<option>Swimming</option>
<option>Tennis</option>
<option>Squash</option>
</select></td>
<td style="width: 122px">Event</td>
<td style="width: 115px">
<input name="fevent" type="text" tabindex="7" size=40></td>
</tr>
<tr>
<td style="width: 148px">Date (yyyy/mm/dd)</td>
<td style="width: 115px">
<input name="fdate" type="text" tabindex="2"></td>
<td style="width: 122px">Time (hh:mm)</td>
<td style="width: 115px">
<input name="ftime" type="text" tabindex="8"></td>
</tr>
<tr>
<td style="width: 148px">Time of Day</td>
<td style="width: 115px">
<select name="ftofday" style="width: 100px" tabindex="3" class="body">
<option>Morning</option>
<option>Afternoon</option>
<option>Evening</option>
<option>Weekend</option>
</select></td>
<td style="width: 122px">Transport Booked?</td>
<td style="width: 115px">
<input type="hidden" name="ftransport" value="No" />
<input name="ftransport" type="checkbox" value="Yes" tabindex="9"></td>
</tr>
<tr>
<td style="width: 148px">Venue</td>
<td style="width: 115px">
<input name="fvenue" type="text" tabindex="4" size=40></td>
<td style="width: 122px">Packed Lunch?</td>
<td style="width: 115px">
<input type="hidden" name="flunch" value="No" />
<input name="flunch" type="checkbox" value="Yes" tabindex="10"></td>
</tr>
<tr>
<td style="width: 148px">Lead Staff Member</td>
<td style="width: 115px">
<select name="fstaff1" tabindex="5" class="body">
<option>A Dress</option>
<option>H Dune</option>
<option>J Hamilton</option>
<option>H Lille</option>
<option>J Walton</option>
<option>J Wheel</option>
<option>None</option>
</select></td>
67
<td style="width: 122px">Team Size (approx)</td>
<td style="width: 115px">
<input name="fsize" type="text" tabindex="11"></td>
</tr>
<tr>
<td style="width: 148px">Assistant Staff Member</td>
<td style="width: 115px">
<select name="fstaff2" tabindex="6" class="body">
<option>None</option>
<option>A Dress</option>
<option>H Dune</option>
<option>J Hamilton</option>
<option>H Lille</option>
<option>J Walton</option>
<option>J Wheel</option>
</select></td>
<td style="width: 122px">
&nbsp;</td>
<td style="width: 115px">&nbsp;</td>
</tr>
<tr>
<td style="width: 148px" rowspan="2">Year Group(s)</td>
<td colspan="2" rowspan="2">
<table align="left" style="width: 91%; height: 56px">
<tr>
<td style="width: 51px">Year 7</td>
<td style="width: 48px">
<input name="f7" type="checkbox" value="Yes" tabindex="12"></td>
<td style="width: 52px">Year 10</td>
<td style="width: 51px">
<input name="f10" type="checkbox" value="Yes" tabindex="15"></td>
<td style="width: 51px">Year 12</td>
<td style="width: 51px">
<input name="f12" type="checkbox" value="Yes" tabindex="17"></td>
</tr>
<tr>
<td style="width: 51px">Year 8</td>
<td style="width: 48px">
<input name="f8" type="checkbox" value="Yes" tabindex="13"></td>
<td style="width: 52px">Year 11</td>
<td style="width: 51px">
<input name="f11" type="checkbox" value="Yes" tabindex="16"></td>
<td style="width: 51px">Year 13</td>
<td style="width: 51px">
<input name="f13" type="checkbox" value="Yes" tabindex="18"></td>
</tr>
<tr>
<td style="width: 51px">Year 9</td>
<td style="width: 48px">
<input name="f9" type="checkbox" value="Yes" tabindex="14"></td>
<td style="width: 52px">&nbsp;</td>
<td style="width: 51px">&nbsp;</td>
<td style="width: 51px">&nbsp;</td>
<td style="width: 51px">&nbsp;</td>
</tr>
</table>
</td>
<td style="width: 115px">
<input class="h1" name="Submit1" type="submit" value="submit" tabindex="19"></td>
</tr>
<tr>
<td style="width: 115px">
<input class="h1" name="Reset1" type="reset" value="reset" tabindex="20"></td>
</tr>
</table>
67
<td style="width: 122px">Team Size (approx)</td>
<td style="width: 115px">
<input name="fsize" type="text" tabindex="11"></td>
</tr>
<tr>
<td style="width: 148px">Assistant Staff Member</td>
<td style="width: 115px">
<select name="fstaff2" tabindex="6" class="body">
<option>None</option>
<option>A Dress</option>
<option>H Dune</option>
<option>J Hamilton</option>
<option>H Lille</option>
<option>J Walton</option>
<option>J Wheel</option>
</select></td>
<td style="width: 122px">
&nbsp;</td>
<td style="width: 115px">&nbsp;</td>
</tr>
<tr>
<td style="width: 148px" rowspan="2">Year Group(s)</td>
<td colspan="2" rowspan="2">
<table align="left" style="width: 91%; height: 56px">
<tr>
<td style="width: 51px">Year 7</td>
<td style="width: 48px">
<input name="f7" type="checkbox" value="Yes" tabindex="12"></td>
<td style="width: 52px">Year 10</td>
<td style="width: 51px">
<input name="f10" type="checkbox" value="Yes" tabindex="15"></td>
<td style="width: 51px">Year 12</td>
<td style="width: 51px">
<input name="f12" type="checkbox" value="Yes" tabindex="17"></td>
</tr>
<tr>
<td style="width: 51px">Year 8</td>
<td style="width: 48px">
<input name="f8" type="checkbox" value="Yes" tabindex="13"></td>
<td style="width: 52px">Year 11</td>
<td style="width: 51px">
<input name="f11" type="checkbox" value="Yes" tabindex="16"></td>
<td style="width: 51px">Year 13</td>
<td style="width: 51px">
<input name="f13" type="checkbox" value="Yes" tabindex="18"></td>
</tr>
<tr>
<td style="width: 51px">Year 9</td>
<td style="width: 48px">
<input name="f9" type="checkbox" value="Yes" tabindex="14"></td>
<td style="width: 52px">&nbsp;</td>
<td style="width: 51px">&nbsp;</td>
<td style="width: 51px">&nbsp;</td>
<td style="width: 51px">&nbsp;</td>
</tr>
</table>
</td>
<td style="width: 115px">
<input class="h1" name="Submit1" type="submit" value="submit" tabindex="19"></td>
</tr>
<tr>
<td style="width: 115px">
<input class="h1" name="Reset1" type="reset" value="reset" tabindex="20"></td>
</tr>
</table>
</form></p>';
}
else
{
echo '<p><font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D>You are not logged in.</font></p>';
echo '<p><font face="verdana, Geneva, Tahoma, sans‐serif" color=#4C4C4D>Only staff may see this page.</font></p>';
}
echo '<a href="fixturesrcstaff.php">Fixture search page</a></br></br>';
echo '<a href="logout.php">Log out</a><br />';
?>

</span></p>
<!‐‐ #EndEditable ‐‐>
</div>
</div>
</body>
</html>