<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php
  $conn = mysqli_connect('localhost','root','dhrusdn93','project'); //데이터베이스 접속
  $sqlt1 = "SELECT meno, counter, (price * count) as tprice FROM table1";

  $result = mysqli_query($conn, $sqlt1);

    while($row = mysqli_fetch_array($result){

    printf("$d", $row['meno']);

    }

  ?>
</head>
<body>
</body>
</html>
