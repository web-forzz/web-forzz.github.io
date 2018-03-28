<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <title>Beatufly Day</title>


  <header>
    <div class="menu">
      <nav>  
       
        <input type="checkbox" name="menu" id="btn-menu" />
        <label for="btn-menu">&nbsp;Menu&nbsp;</label> 
        <ul>
          <li class="logo"><span><a style="border: none;" href="">MUINLIM</a></span></li>

          <li><a href="#">Get US</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Position</a></li>
          <li><a href="#">Memory</a></li>
        </ul>
      </nav>
    </div>
    <div class="img_header">
      <img src="img/header.jpg">
      <p>Design for life</p>
    </div>
  </header>
  <content>
    <div class="content">
      <div class="right">
        <hr class="style14">
        <span>FOLLOW ME &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=""><img width="18px" src="img/social1.png"></a>&nbsp;&nbsp;&nbsp;<a href=""><img width="18px" src="img/social2.png"></a>&nbsp;&nbsp;&nbsp;<a href=""><img width="18px" alt="social" src="img/social3.png"></a>&nbsp;&nbsp;&nbsp;<a href=""><img width="18px" src="img/social4.png"></a></span><br> <br>
        <input width="250px" type="search" name=""> <br>
        <a href=""><button>Subscribe Now</button></a> 
        <p></p><hr size="1px"> 
        <span>SEARCH BY TEGS</span><p></p>
        <div class="tags"><a href="">Hello</a>&nbsp;&nbsp;&nbsp;<a href="">Byfly</a>&nbsp;&nbsp;&nbsp;<a href="">First</a>&nbsp;&nbsp;&nbsp;<a href="">dificuld</a>&nbsp;&nbsp;&nbsp;<a href="">project</a>&nbsp;&nbsp;&nbsp;<br><a href="">usiual</a>&nbsp;&nbsp;&nbsp;<a href="">brazzers</a>&nbsp;&nbsp;&nbsp;<a href="">help</a>
        </div><br>
        <hr size="1px"> <p></p>
        <span>CHECK HISTORY FOT </span><p></p>
        <hr size="1px"> 
        <div class="right_img">
         <img width="70px" src="img/right_2.jpg"><span class="right_img_text">OPEN HOUSES PROJECT <br><br><i>March 27.2018</i></span><br><br>
         <img width="70px" src="img/right_4.jpg"><span class="right_img_text">OFF THE BREAK WALL O <br><br><i>March 26.2018</i></span><br><br>
         <img width="70px" src="img/right_3.jpg"><span class="right_img_text">HOY ITS MADE CAN FUR <br><br><i>March 24.2018</i></span><br><br>
         <img width="70px" src="img/right_1.jpg"><span class="right_img_text">LYCKY HTML SHELTER A <br><br><i>March 24.2018</i></span><br><br>
       </div>
       <hr size="1px"> 
       <span>GALLEREY </span><p></p>
       <style>
        #calendar2 {
          width: 100%;
          font: monospace;
          line-height: 1.2em;
          font-size: 15px;
          text-align: center;
        }
        #calendar2 thead tr:last-child {
          font-size: small;
          color: rgb(85, 85, 85);
        }
        #calendar2 thead tr:nth-child(1) td:nth-child(2) {
          color: rgb(50, 50, 50);
        }
        #calendar2 thead tr:nth-child(1) td:nth-child(1):hover, #calendar2 thead tr:nth-child(1) td:nth-child(3):hover {
          cursor: pointer;
        }
        #calendar2 tbody td {
          color: rgb(44, 86, 122);
        }
        #calendar2 tbody td:nth-child(n+6), #calendar2 .holiday {
          color: rgb(231, 140, 92);
        }
        #calendar2 tbody td.today {
          background: rgb(220, 0, 0);
          color: #fff;
        }
      </style>

      <table id="calendar2">
        <thead>
          <tr><td>‹<td colspan="5"><td>›
            <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
              <tbody>
              </table>

              <script>
                function Calendar2(id, year, month) {
                  var Dlast = new Date(year,month+1,0).getDate(),
                  D = new Date(year,month,Dlast),
                  DNlast = new Date(D.getFullYear(),D.getMonth(),Dlast).getDay(),
                  DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
                  calendar = '<tr>',
                  month=["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"];
                  if (DNfirst != 0) {
                    for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
                  }else{
                    for(var  i = 0; i < 6; i++) calendar += '<td>';
                  }
                for(var  i = 1; i <= Dlast; i++) {
                  if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
                    calendar += '<td class="today">' + i;
                  }else{
                    calendar += '<td>' + i;
                  }
                  if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) {
                    calendar += '<tr>';
                  }
                }
                for(var  i = DNlast; i < 7; i++) calendar += '<td>&nbsp;';
                  document.querySelector('#'+id+' tbody').innerHTML = calendar;
                document.querySelector('#'+id+' thead td:nth-child(2)').innerHTML = month[D.getMonth()] +' '+ D.getFullYear();
                document.querySelector('#'+id+' thead td:nth-child(2)').dataset.month = D.getMonth();
                document.querySelector('#'+id+' thead td:nth-child(2)').dataset.year = D.getFullYear();
if (document.querySelectorAll('#'+id+' tbody tr').length < 6) {  // чтобы при перелистывании месяцев не "подпрыгивала" вся страница, добавляется ряд пустых клеток. Итог: всегда 6 строк для цифр
  document.querySelector('#'+id+' tbody').innerHTML += '<tr><td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;';
}
}
Calendar2("calendar2", new Date().getFullYear(), new Date().getMonth());
// переключатель минус месяц
document.querySelector('#calendar2 thead tr:nth-child(1) td:nth-child(1)').onclick = function() {
  Calendar2("calendar2", document.querySelector('#calendar2 thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar2 thead td:nth-child(2)').dataset.month)-1);
}
// переключатель плюс месяц
document.querySelector('#calendar2 thead tr:nth-child(1) td:nth-child(3)').onclick = function() {
  Calendar2("calendar2", document.querySelector('#calendar2 thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar2 thead td:nth-child(2)').dataset.month)+1);
}
</script>
</div>
<div class="left">
  <div>
    <span>OPEN PICHURES PROJECT</span>   <br>
    <i style="font-size: 13px;">March 30.2018</i> <br> <br>
    <img width="50%" src="img/left_31.jpg"><br>
    <p>Knowledge nay estimable questions repulsive daughters boy. Solicitude gay way unaffected expression for. His mistress ladyship required off horrible disposed rejoiced. Unpleasing pianoforte unreserved as oh he unpleasant no inquietude insipidity.
    </p><br>
    <a class="left_read" href="#">Read more</a><br><br><br>
  </div>
  <div>
    <span>OFF THE BORDER FALL</span>   <br>
    <i style="font-size: 13px;">March 28.2018</i> <br> <br>
    <img width="50%" src="img/left_32.jpg"><br>
    <p>Knowledge nay estimable questions repulsive daughters boy. Solicitude gay way unaffected expression for. His mistress ladyship required off horrible disposed rejoiced. Unpleasing pianoforte unreserved as oh he unpleasant no inquietude insipidity.
    </p><br>
    <a class="left_read" href="#">Read more</a>
    <br><br><br>


  </div>
  <div>
    <span>OFF THE BORDER FALL</span>   <br>
    <i style="font-size: 13px;">March 28.2018</i> <br> <br>
    <img width="50%" src="img/left_33.jpg"><br>
    <p>Knowledge nay estimable questions repulsive daughters boy. Solicitude gay way unaffected expression for. His mistress ladyship required off horrible disposed rejoiced. Unpleasing pianoforte unreserved as oh he unpleasant no inquietude insipidity.
    </p><br>
    <a class="left_read" href="#">Read more</a>


  </div><br> <br><br> <br>
  <div class="scrool">
    <a href="list2.php">&laquo;</a>
    <a href="index.php">1</a>
    <a href="list2.php" >2</a>
    <a href="#" class="active">3</a>
    <a href="list4.php">4</a>
    <a href="list5.php">5</a>
    <a href="list6.php">6</a>
    <a href="list4.php">&raquo;</a>
  </div><br> <br><br> <br>

</div>


</div>
</content>
<footer>
  <div class="footer">
    <p> DESIGN <i>FOR</i> LIFE</p>
    <hr width="800px" size="1px" >
    <div align="center" class="hr"><input  placeholder="Join my Mailing list" width="250px" type="search" name=""> <br>
      <a href=""><button type="submit">Subscribe Now</button></a> </div>
    </div>
  </footer>
</body>
</html>