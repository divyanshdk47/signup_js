
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phno'];
$city=$_POST['city'];
$email=$_POST['email'];
$password=$_POST['pass'];

if($fname=="" || $email=="" || $phone=="" || $password==""){
  echo"plzz fill all";
}
else{
  mysql_connect("localhost","root","");

  mysql_select_db("database");
  $query="SELECT * FROM project WHERE fname='$fname' AND email='$email' ";
  $result=mysql_query($query);
  $count=mysql_num_rows($result);
}

  if($count==0){
    $query1="INSERT INTO project VALUES ('$fname','$lname','$phone','$city','$email','$password')";
    mysql_query($query1);

    echo"<script>
     if( window.confirm('You are registered. Press OK to LOGIN NOW'))
      {
        window.open('Login.html','_self');
      }

   </script>";
  }
  else{
    echo "user exist";
  }

 ?>
