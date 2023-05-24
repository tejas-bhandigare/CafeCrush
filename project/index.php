<?php
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $Time=$_POST['Time'];
    $Bookedtable=$_POST['Booktable'];


    $host='localhost';
    $user='root';
    $pass='';
    $dbname='project';


    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql ="insert into tablebook(name,mobile,Time,Booktable) values ('$name','$mobile','$Time','$Bookedtable')";

    mysqli_query($conn,$sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="#">

    Name : <input type="text" name="name">
    <br>
    mobile No : <input type="text" name="mobile">
    <br>
    Time :<select id="Time" name="Time">
      <option value="s">Select Your Time--</option>
      <option value="10 A.M. To 11 A.M.">10 A.M. To 11 A.M.</option>
      <option value="11 A.M. To 12 A.M.">11 A.M. To 12 A.M.</option>
      <option value="12 P.M. To 1 P.M.">12 P.M. To 1 P.M.</option>
      <option value="1  P.M. To 2 P.M.">1  P.M. To 2 P.M.</option>
      <option value="2  P.M. To 3 P.M.">2  P.M. To 3 P.M.</option>
      <option value="3  P.M. To 4 P.M.">3  P.M. To 4 P.M.</option>
    </select>

    <br>
    Table NO :
    <select id="Table" name="Booktable">
    <option value="s">Select your Table--</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    </select>
    <br>
    <p>
                <input type="submit" name="submit" id="submit" value="submit">
            </p>
</form>

</body>
</html>