<?php
 $fullname = filter_input(INPUT_POST, 'fullname');
 $branch = filter_input(INPUT_POST, 'branch');
 $passout_year = filter_input(INPUT_POST, 'year');
 $phoneno = filter_input(INPUT_POST, 'phoneno');
 $email = filter_input(INPUT_POST, 'mailid');
 $current_location = filter_input(INPUT_POST, 'location');
 $linkedin = filter_input(INPUT_POST, 'linkedin');
 $facebook = filter_input(INPUT_POST, 'facebook');
$host = "localhost";
$dbusername = "id9421571_srm_alumni";
$dbpassword = "alumni123";
$dbname = "id9421571_alumnidata";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error())
{
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else
{
$sql = "INSERT INTO data (fullname,branch,passout_year,phoneno,email,current_location,linkedin,facebook)
values ('$fullname','$branch','$passout_year','$phoneno','$email','$current_location','$linkedin','$facebook')";
if ($conn->query($sql))
{
echo "New record is inserted sucessfully";
}
else
{
echo "Error: ". $sql ."
". $conn->error;
}
}
$conn->close();
?>
