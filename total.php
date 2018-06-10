<!DOCTYPE>
<html>
<head>
<meta charset = utf8>
  <?php
  $con = mysqli_connect("localhost","root","dhrusdn93","project");


  $sql = "SELECT meno, mename, price FROM menu WHERE meno = 101";
  $result = mysqli_query($con, $sql);

  while($row=mysqli_fetch_array($result)){
  echo "name is ".$row['mename']
}
  ?>
</head>
</html>
