<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <script language="javascript" type="text/javascript">

function schoice(i) {
    var idx = i.selectedIndex;
    document.frm.select_html.value = i.options[idx].value;
    document.frm.select_text.value = i.options[idx].text;
}
</script>
<?php

$con = mysqli_connect("localhost","root","dhrusdn93","project");
 /*$count = $("input:checkbox[name=count]:checked").length */
$count = $_POST['count'];

$getcount = $count;


  if($_POST['guetno'] == "T1"){
      $sql = "
    INSERT INTO table1
    (meno, counter)
    VALUES(
      '{$_POST['meno']}',
      '{$_POST['count']}'
      )
      ";
    }

    elseif($_POST['guetno'] == 'T2')
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
    elseif($_POST['guetno'] == 'T3')
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
    elseif($_POST['guetno'] == 'T4')
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


$result = mysqli_query($con, $sql);

  if($result === false){
    echo '주문이 완료되는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($con));
  }
  else{
    echo '';
  }
*/
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
<body>
  <a href="https://ohgyounwoo.github.io/ohproject/index0.php"> <img src="restart.jpg" align='abscenter' border='0'> </a>
</body>

</html>
