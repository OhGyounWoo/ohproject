﻿<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">


     <link href="abc.css" rel="stylesheet" type="text/css" />
     <link href="checkbox.css" rel="stylesheet" type="text/css" />

     <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.0.min.js" ></script>
     <script type="text/javascript">

  /*   $('.optionModifyBtn').click(function(event){
       console.log('click');
       popupOpen();
     });
     function popupOpen(){
       var url = "https://192.168.1.66/total.php";
       var winWidth = 400;
       var winheight = 650;
       var popupOption = "width="+winWidth+",height="+winHeight;
       window.open(url,"total",popupOption);
     } */



      window.onfocus=function(){
      }
      window.onload=function(){
       window.focus(); // 현재 window 즉 익스플러러를 윈도우 최상단에 위치
       window.moveTo(100,100); // 웹 페이지의 창 위치를 0,0 (왼쪽 최상단) 으로 고정
       window.resizeTo(1290,740); // 웹페이지의 크기를 가로 1280 , 세로 740 으로 고정(확장 및 축소)
       window.scrollTo(0,250); // 페이지 상단 광고를 바로 볼 수 있게 스크롤 위치를 조정
      }

      function check_only(chk){
        var obj = document.getElementsByName("guetno");
        for(var i=0; i<obj.length; i++){
          if(obj[i] != chk){
            obj[i].checked = false;
          }
        }
      }

      /* total 금액 산정 */
      function itemSum(frm)
      {
         var sum = 0;
         var count = frm.chkbox.length;
         for(var i=0; i < count; i++ ){
             if( frm.chkbox[i].checked == true ){
      	    sum += parseInt(frm.chkbox[i].value);
             }
         }
         frm.total_sum.value = sum;
      }


     </script>
<style>
select::-ms-expand { display: none; }
select { -webkit-appearance: none; }

table{margin-bottom: 0px;}


</style>

</head>

<body bgcolor=blue>

  <!--어느 테이블의 주문인지 테이블을 정하는 구역-->

    <div class="float-unit1">
      <form action="enter.php" method="POST">

        <img src="T1check-off.gif" width="40%"/>

      <div class="checkbox">
        <input type="checkbox" name="guetno" value="T1" onclick="javascript:check_only(this);" id="T1">
        <label for="T1"></label>
      </div>
<!--1번 테이블-->
      <img src="T2check-off.gif" width="40%">

      <div class="checkbox">
        <input type="checkbox" name="guetno" value="T2" onclick="javascript:check_only(this);" id="T2">
        <label for="T2"></label>
      </div>
<!--2번 테이블-->
      <img src="T3check-off.gif" width="40%">

      <div class="checkbox">
        <input type="checkbox" name="guetno" value="T3" onclick="javascript:check_only(this);" id="T3">
        <label for="T3"></label>
      </div>
<!--3번 테이블-->
      <img src="T4check-off.gif" width="40%">

      <div class="checkbox">
        <input type="checkbox" name="guetno" value="T4" onclick="javascript:check_only(this);" id="T4">
        <label for="T4"></label>
      </div>

      <center><p><input type="submit" value="주문하기" name="send">


<!--      <input type="button" formtarget="_blank" name="total" value="주문내역"> -->
    <button onclick="window.open('https://192.168.1.66/total.php','주문내역','width = 300, height = 700, location=no, scrollbar=no');"> 주문내역 </button>


              </p></center>
    </div>


  </div>
    <div class="float-unit"> </div>
<!--4번 테이블-->


<!-- 큰 음식의 항목을 구분하는 구역-->

    <div class="float-unit2">
      <img src="coffee.gif"/>
<!--커피-->
  <table width="350px" height="50px" border='1'>
    <tr>
      <td rowspan="2" width="30px"><img src="americano.png" width="100px" height="100px" /></td>
        <td width="120px" align="center" height="35px" >아메리카노</td>
        <td rowspan="2" align="center">
          <div class="bcheckbox">
          <input type="checkbox" name="meno" value="101" placeholder="americano" id="101">
          <label for="101"></label>
        </div>
      </td>
        <td rowspan="2" align="center">
          <div class="select">
            <select name="count">
              <option value='1'> 1 </option>
              <option value='2'> 2 </option>
              <option value='3'> 3 </option>
              <option value='4'> 4 </option>
              <option value='5'> 5 </option>
            </select>
          </div>
        </td>
      </tr>
      <tr>
        <td height="40px" align="center">3000원</td>
      </tr>
    </table>

    <p style="margin-top:1px;">

    <table width="350px" height="50px" border='1'>
      <tr>
        <td rowspan="2" width="30px"><img src="iceamericano.jpg" width="100px" height="100px" /></td>
          <td width="120px" height="50px" align="center" width="100px"><font size = "2">
                                아이스 아메리카노</font></td>
          <td rowspan="2" align="center">
            <div class="bcheckbox">
          <input type="checkbox" name="meno" value="102" placeholder="iceamericano" id="102">
          <label for="102"></label>
        </div>
        </td>
        <td rowspan="2" align="center">
          <select>
            <option name="count" value="1"> 1 </option>
            <option name="count" value="2"> 2 </option>
            <option name="count" value="3"> 3 </option>
            <option name="count" value="4"> 4 </option>
            <option name="count" value="5"> 5 </option>
          </select>
        </td>
      </tr>
        <tr>
          <td height="40px" align="center">3000원</td>
        </tr>
      </table>

      <p style="margin-top:1px;">

      <table width="350px" border='1'>
        <tr>
          <td rowspan="2" width="30px"><img src="cafelatte.jpg" width="100px" height="100px" /></td>
            <td width="120px" height="40px" align="center" width="100px" height="100px" >카페라떼</td>
              <td rowspan="2" align="center">
                <div class="bcheckbox">
            <input type="checkbox" name="meno" value="103" placeholder="iceamericano" id="103">
            <label for="103"></label></td>
          </div>
          <td rowspan="2" align="center">
            <select name="count">
              <option value="1"> 1 </option>
              <option value="2"> 2 </option>
              <option value="3"> 3 </option>
              <option value="4"> 4 </option>
              <option value="5"> 5 </option>
            </select>
          </td>
          </tr>
          <tr>
            <td height="40px" align="center">4000원</td>
          </tr>
        </table>

        <p style="margin-top:1px;">

        <table width="350px" border='1'>
          <tr>
            <td rowspan="2" width="30px"><img src="cold.png" width="100px" height="100px" /></td>
              <td width="120px" height="40px" align="center" width="100px" height="100px" >콜드블루</td>
              <td rowspan='2' align="center">
                  <div class="bcheckbox">
              <input type="checkbox" name="meno" value="107" placeholder="iceamericano" id="107">
              <label for="107"></label></td>
            </div>
            <td rowspan="2" align="center">
              <select name="count">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
              </select>
            </td>
            </tr>
            <tr>
              <td height="40px" align="center">4000원</td>
            </tr>
          </table>



</div>
    <div class="float-unit";> </div>

    <div class="float-unit3">
      <img src="drink.gif" />

      <table width="355px" border='1'>
        <tr>
          <td rowspan="2" width="30px"><img src="레몬에이드.jpg" width="100px" height="100px" /></td>
            <td width="120px" height="40px" align="center" width="100px" height="100px" >레몬에이드</td>
            <td rowspan="2" align="center">
              <div class="bcheckbox">
              <input type="checkbox" name="meno" value="201" placeholder="americano" id="201">
              <label for="201"></label>
            </div>
          </td>
          <td rowspan="2" align="center">
            <select name="count">
              <option value="1"> 1 </option>
              <option value="2"> 2 </option>
              <option value="3"> 3 </option>
              <option value="4"> 4 </option>
              <option value="5"> 5 </option>
            </select>
          </td>
          </tr>
          <tr>
            <td height="40px" align="center">2800원</td>
          </tr>
        </table>

        <p>

        <table width="355px" border='1'>
          <tr>
            <td rowspan="2" width="30px"><img src="키위에이드.jpg" width="100px" height="100px" /></td>
              <td width="120px" height="40px" align="center" width="100px" height="100px" > 키위에이드 </td>
              <td rowspan="2" align="center">
                <div class="bcheckbox">
              <input type="checkbox" name="meno" value="202" placeholder="iceamericano" id="202" left:13px>
              <label for="202"></label>
            </div>
            </td>
            <td rowspan="2" align="center">
              <select name="count">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
              </select>
            </td>
            </tr>
            <tr>
              <td height="40px" align="center">2800원</td>
            </tr>
          </table>

          <p>

          <table width="355px" border='1'>
            <tr>
              <td rowspan="2" width="30px"><img src="복숭아아이스티.jpg" width="100px" height="100px" /></td>
                <td width="120px" height="40px" align="center" width="100px" height="100px" ><font size="2">
                                                복숭아 아이스티</font></td>
                  <td rowspan="2" align="center">
                    <div class="bcheckbox">
                <input type="checkbox" name="meno" value="204" placeholder="iceamericano" id="204">
                <label for="204"></label></td>
              </div>
              <td rowspan="2" align="center">
                <select name="count">
                  <option value="1"> 1 </option>
                  <option value="2"> 2 </option>
                  <option value="3"> 3 </option>
                  <option value="4"> 4 </option>
                  <option value="5"> 5 </option>
                </select>
              </td>
              </tr>
              <tr>
                <td height="40px" align="center">2500원</td>
              </tr>
            </table>

            <p>

            <table width="355px" border='1'>
              <tr>
                <td rowspan="2" width="30px"><img src="cold.png" width="100px" height="100px" /></td>
                  <td width="120px" height="40px" align="center" width="100px" height="100px" >핫초코라떼</td>
                  <td rowspan='2' align="center">
                      <div class="bcheckbox">
                  <input type="checkbox" name="meno" value="205" placeholder="iceamericano" id="205">
                  <label for="205"></label></td>
                </div>
                <td rowspan="2" align="center">
                  <select name="count">
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                  </select>
                </td>
                </tr>
                <tr>
                  <td height="40px" align="center">3500원</td>
                </tr>
              </table>


    </div><!--음료-->

    <div class="float-unit";> </div>

    <div class="float-unit4">

        <img src="dessert.gif">
        <table width="355px" border='1'>
          <tr>
            <td rowspan="2" width="30px"><img src="코코넛 마카룬.jpg" width="100px" height="100px" /></td>
              <td width="120px" height="40px" align="center" width="100px" height="100px" >코코넛 마카룬 </td>
              <td rowspan="2" align="center">
                <div class="bcheckbox">
                <input type="checkbox" name="meno" value="301" placeholder="americano" id="301">
                <label for="301"></label>
              </div>
            </td>
            <td rowspan="2" align="center">
              <select name="count">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
              </select>
            </td>
            </tr>
            <tr>
              <td height="40px" align="center">2000원</td>
            </tr>
          </table>

          <p>

          <table width="355px" border='1'>
            <tr>
              <td rowspan="2" width="30px"><img src="블루베리 파이.jpg" width="100px" height="100px" /></td>
                <td width="120px" height="40px" align="center" width="100px" height="100px" >블루베리 파이</td>
                <td rowspan="2" align="center">
                  <div class="bcheckbox">
                <input type="checkbox" name="meno" value="302" placeholder="iceamericano" id="302" left:13px>
                <label for="302"></label>
              </div>
              </td>
              <td rowspan="2" align="center">
                <select name="count">
                  <option value="1"> 1 </option>
                  <option value="2"> 2 </option>
                  <option value="3"> 3 </option>
                  <option value="4"> 4 </option>
                  <option value="5"> 5 </option>
                </select>
              </td>
              </tr>
              <tr>
                <td height="40px" align="center">3500원</td>
              </tr>
            </table>

            <p>

            <table width="355px" border='1'>
              <tr>
                <td rowspan="2" width="30px"><img src="브라우니.jpg" width="100px" height="100px" /></td>
                  <td width="120px" height="40px" align="center" width="100px" height="100px" >브라우니</td>
                    <td rowspan="2" align="center">
                      <div class="bcheckbox">
                  <input type="checkbox" name="meno" value="305" placeholder="iceamericano" id="305">
                  <label for="305"></label></td>
                </div>
                <td rowspan="2" align="center">
                  <select name="count">
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                  </select>
                </td>
                </tr>
                <tr>
                  <td height="40px" align="center" width="100px" height="100px" >4000원</td>
                </tr>
              </table>

              <p>

              <table width="355px" border='1'>
                <tr>
                  <td rowspan="2" width="30px"><img src="녹차 아이스크림.jpg" width="100px" height="100px" /></td>
                    <td width="120px" height="40px" align="center" width="100px" height="100px" ><font size="2">
                                            녹차 아이스크림</font></td>
                    <td rowspan='2' align="center">
                        <div class="bcheckbox">
                    <input type="checkbox" name="meno" value="306" placeholder="icecream" id="306">
                    <label for="306"></label></td>
                  </div>
                  <td rowspan="2" align="center">
                    <select name="count">
                      <option value="1"> 1 </option>
                      <option value="2"> 2 </option>
                      <option value="3"> 3 </option>
                      <option value="4"> 4 </option>
                      <option value="5"> 5 </option>
                    </select>
                  </td>
                  </tr>
                  <tr>
                    <td height="40px" align="center">4500원</td>
                  </tr>
                </table>


    </div><!--디저트-->

  </form>
</body>
</html>
