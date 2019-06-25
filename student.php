
    <?php
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
     $connection=mysqli_connect("localhost","root","","student_db");
     $email=mysqli_real_escape_string($connection,$_POST['email_txt']);
     $password=mysqli_real_escape_string($connection,$_POST['password_txt']);
     
     $query="select * from login where email='$email' and password='$password'";
     $result=mysqli_query($connection,$query);
     if(mysqli_num_rows($result)==1)
     {
         header('location:main.php');

     }
     else
     {
         $message="Invalid Credentials";
     }
 }
?>