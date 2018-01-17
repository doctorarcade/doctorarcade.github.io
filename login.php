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
if (isset($HTTP_POST_VARS['userid']) && isset($HTTP_POST_VARS['password']))
{
// if the user has just tried to log in
$userid = $HTTP_POST_VARS['userid'];
$password = $HTTP_POST_VARS['password'];
$db_conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db('PE', $db_conn);
$query = 'select * from users '
."where userid='$userid' "
." and password=('$password')";
$result = mysqli_query($query, $db_conn);
if (mysqli_num_rows($result) >0 )
{
// if they are in the database register the user id
$HTTP_SESSION_VARS['valid_user'] = $userid;
}
}
?>
<p><span class="h1">Staff Login Area</span></p>
<p><span class="body">Only attempt to access this area if you are authorised
to do so.</span></p>
<font face="Verdana, Arial, Helvetica, sans‐serif" color=#4C4C4D>
<?
if (isset($HTTP_SESSION_VARS['valid_user']))
{
echo 'You are logged in as: '.$HTTP_SESSION_VARS['valid_user'].' <br /><br>';
echo '<a href="logout.php">Log out</a><br />';
}
else
{
if (isset($userid))
{
// if they've tried and failed to log in
echo 'Could not log you in';
}
else
{
// they have not tried to log in yet or have logged out
echo 'You are not logged in.<br /><br>';
}
// provide form to log in
echo '<form method="post" action="login.php">';
echo '<table>';
echo '<tr><td>Userid:</td>';
echo '<td><input type="text" name="userid"></td></tr>';
echo '<tr><td>Password:</td>';
echo '<td><input type="password" name="password"></td></tr>';
echo '<tr><td colspan="2" align="center">';
echo '<input type="submit" value="Log in"></td></tr>';
echo '</table></form>';
}
?></font>
<br>
<a href="newfixture.php">Create New Fixture</a><br><br>
<a href="deleteform.php">Delete Fixture</a><br><br>
<a href="fixturesrcstaff.php">Fixture Search</a>

</span></p>
<!‐‐ #EndEditable ‐‐>
</div>
</div>
</body>
</html>