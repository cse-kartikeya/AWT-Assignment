<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Successful!</title>
    <style media="screen">
    #mid{padding: 20px;margin-left: 36%;margin-top: 5%;width:300px;;height: auto;}
    h2{text-align: center;}
    p{text-align: center;font-size: 20px;}
    #home{width:60px;height:60px;float: left;position: absolute;top:30px;}
    </style>
  </head>
  <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $database="students";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$database,3308);
    $RegNum=$_POST['regno'];
    $Name=$_POST['name'];
    $Marks1=$_POST['marks1'];
    $Marks2=$_POST['marks2'];
    $Marks3=$_POST['marks3'];

    $sql= "select * from Student_info where Reg_no='$RegNum'";
    if ($result=mysqli_query($conn, $sql)) {
     if(mysqli_num_rows($result)>0)
     {
       $sql= "delete from Student_info where Reg_no='$RegNum'";
       if (mysqli_query($conn, $sql))
       {
         echo "";
       }
     }
     }

    $sql = "INSERT INTO Student_info (Reg_no,Name,Marks1,Marks2,Marks3)
    VALUES ('$RegNum','$Name','$Marks1','$Marks2','$Marks3')";

    if (mysqli_query($conn, $sql)) {
     echo "";
    } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>
<div id="mid">

<h2 >Thank You!</h2>
<p><?php echo $_POST['name']; ?>Your data has been saved.</p>
</div>
  </body>
</html>
