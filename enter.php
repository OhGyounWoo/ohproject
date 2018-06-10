<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

<?php
$con = mysqli_connect('localhost','root','dhrusdn93','project'); //데이터베이스 접속.

  if($_POST['guetno'] == "T1")  // 1번 테이블을 선택했을때 DB 저장
  {
    $sql = "
    INSERT INTO table1
    (meno, counter)
    VALUES(
      '{$_POST['meno']}',
      '{$_POST['count']}'
      )
      ";
    }
    elseif($_POST['guetno'] == 'T2')  // 2번 테이블을 선택했을때 DB 저장
    {
  $sql = "
    INSERT INTO table2
    (meno, counter)
    VALUES(
      '{$_POST['meno']}',
      '{$_POST['count']}'
      )
      ";
    }
    elseif($_POST['guetno'] == 'T3')  // 3번 테이블을 선택했을때 DB 저장
    {
  $sql = "
    INSERT INTO table3
    (meno, counter)
    VALUES(
      '{$_POST['meno']}',
      '{$_POST['count']}'
      )
      ";
    }
    elseif($_POST['guetno'] == 'T4')  // 4번 테이블을 선택했을때 DB 저장
    {
  $sql = "
    INSERT INTO table4
    (meno, counter)
    VALUES(
      '{$_POST['meno']}',
      '{$_POST['count']}'
      )
      ";
    }

else{
  echo '';
}

$result = mysqli_query($con, $sql);

  if($result === false){  //주문 도중에 문제가 생겼을때 나오는 구문
    echo '주문이 완료되는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($con));
  }
  else{
    echo '';
  }

?>

<style>
img{ position: absolute;
top:75%; margin-top: -294.5px;
/* 위에서 15% 내리고 그 옆의 숫자는 이미지의 세로 길이의 절만의 수치만큼 위호 올리는 것이다. */
left: 15%; margin-left: =400px;
/* 왼쪽에서 15%이동시키고 이미지의 가로 길이의 절만에 해당하는 만큼 왼쪽으로 당긴다.*/
}
</style>
</head>
<body> <!-- 주문이 완료가 되고 다시 메뉴판으로 돌아각 위한 링크-->
  <a href="index0.html"> <img src="restart.jpg" align='abscenter' border='0'> </a>
</body>

</html>
