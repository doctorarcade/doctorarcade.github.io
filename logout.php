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

&nbsp;<h1><span class="h1">Log out</span></h1>
<span class="body">
<?php
if (!empty($old_user))
{
echo 'Logged out.<br /><br>';
}
else
{
// if they weren't logged in but came to this page somehow
echo 'You were not logged in, and so have not been logged out.<br />';
}
?>
</span><span class="h1">
<a href="index.html">Back to main page</a></span><span class="body"><span class="h1">
</span>
</span></p>

</span></p>
<!‐‐ #EndEditable ‐‐>
</div>
</div>
</body>
</html>