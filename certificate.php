<html>
<h3>Achivers Connect Tickets</h3>
<form action="certificate.php" method="post" >
  <label for="fullname">Full Name:</label>
  <input type="text" name="fullname" class="form-control" required>
  <label for="branch">Branch:</label>
  <input type="text" name="branch" class="form-control" required>
  <label for="year">Year:</label>
  <select type="text" name="year" class="form-control" required>
    <option value='1'>1st</option>
    <option value='2'>2nd</option>
    <option value='3'>3rd</option>
    <option value='4'>4th</option>
  </select>
    <input type="submit" value="Submit">
</form>
</html>
<?php
$fullname = filter_input(INPUT_POST, 'fullname');
$branch = filter_input(INPUT_POST, 'branch');
$year = filter_input(INPUT_POST, 'year');
$host = "localhost";
$dbusername = "id9421571_srm_alumni";
$dbpassword = "alumni123";
$dbname = "id9421571_alumnidata";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error())
{
  die('Connect Error ('. mysqli_connect_errno() .') '
  . mysqli_connect_error());
}
else
{
    if($fullname)
    {
      $sql = "INSERT INTO eventcertificate(fullname,branch,year)
  values ('$fullname','$branch','$year')";
  if ($conn->query($sql))
  {
    echo "This is to certify that Mr./Ms.".$fullname." of ".$fullname." was been actively as the team member for SRM Achievers' Connect 2019 organised on 23rd July,2019 by Directorate of Alumni Affairs,SRM Insitue of Science and Technology,Kattankulathur,Chennai";
  }
    }
}
$conn->close();
?>
