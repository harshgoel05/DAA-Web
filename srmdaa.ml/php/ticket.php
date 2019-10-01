<html>
<head>
  <title>Proceed with Payment</title>
</head>
<?php
$fullname = filter_input(INPUT_POST, 'fullname');
$branch = filter_input(INPUT_POST, 'branch');
$year = filter_input(INPUT_POST, 'year');
$phoneno = filter_input(INPUT_POST, 'phoneno');
$email = filter_input(INPUT_POST, 'mailid');
$host = "sql105.unaux.com";
$dbusername = "unaux_24328535";
$dbpassword = "harsh123";
$dbname = "unaux_24328535_srm_alumni";

// Create connection

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error())
{
  die('Connect Error ('. mysqli_connect_errno() .') '
  . mysqli_connect_error());
}
else
{
  $sql = "INSERT INTO tickets(fullname,branch,year,phoneno,email)
  values ('$fullname','$branch','$year','$phoneno','$email')";
  if ($conn->query($sql))
  {
    echo "Hello!".$fullname." ,Please Proceed with Payment";
  }
  else
  {
    echo "Error: ". $sql ."
    ". $conn->error;
  }
}
$conn->close();
?>

<body>
<!--Payment Button-->
  <br><div class="razorpay-embed-btn" data-url="https://rzp.io/l/9WwrTK8" data-text="Pay Now" data-color="#528FF0" data-size="large">
    <script>
    (function(){
      var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
      if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
      s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
      rzp && rzp.init && rzp.init()}})();
    </script>
  </div>

</body>
</html>
