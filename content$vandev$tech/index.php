<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="assets/img/myicon.ico">
  <!--<meta http-equiv="refresh" content="10">-->
  <title>Vandeveloper</title>
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="header">
    <div id="dh1" class="dh">
      <div id="dh11" class="">
        <a><img id="logo" src="assets/img/1c.png" /></a>
      </div>
      <div id="dh12" class="">
        <a id="nav1" class="aboutbt">About me</a>
        <a id="nav2" class="resumebt">Resume</a>
        <a id="nav3" class="projbt">Projects</a>
      </div>
    </div>

    <div id="dh2" class="dh">
      <h2 id="dev">DEVELOPER</h2>
      <h3 id="name">Vando Lima</h3>
    </div>

    <div id="dh3" class="dh">
      <div id="dh31" class="dh3">
        <a id="nav4" href="https://www.linkedin.com/in/vandeveloper/">Linkedin</a>
        <a id="nav5" href="https://github.com/antonylima">Github</a>
        <a id="nav6" href="https://www.instagram.com/vandolima100">Instagram</a>
      </div>
      <div id="dh32">
        <button id="btsn" onclick="document.querySelector('#ctct').style.display='block'">contact</button>
        
        <div id="ctct">
        <ul id="ctlt">
            <li>
            <a href="https://wa.me/5585987836810">whatsapp</a>
            </li>
            <li>
            <a onclick="openpp()">mensage</a>
            </li>
        </ul>
        </div>
        <div id="popup">
            <form class="msg" method="post">
              <table id="tbfm" cellspacing="10" cellpadding="0">
                <tr><td class="lbl">Name: </td><td><input class="ipt" id="nm" name="nm" type="text"></td></tr>
                <tr><td class="lbl">Company: </td><td><input class="ipt" id="cpn" name="cpn" type="text"></td></tr>
                <tr><td class="centro lbl" colspan="2">Message</td></tr>
                <tr><td colspan="2" class="centro"><textarea class="ipt" id="msgtxt" name="msgtxt"></textarea></td></tr>
                <tr><td colspan="2" class="centro"><input id="submit" class="ipt centro" name="submit" type="submit" value="SEND"></td></tr>
              </table>
            </form>
        </div>    
      </div>
    </div>
  </div>


  
  <div id="geral" onclick="closepp() ">
  <div id="center" onclick="closepp()">
    <div id="divmenu" onmouseleave="closemn()">
      <img id="bt-menu" src="assets/img/menu.png" onclick="openmn()">
      <div id="menu">
        <img src="assets/img/perto.png" id="close-menu" onclick="closemn()">
        <ul id="lista-menu">
          <li class="aboutbt"><a>About me</a></li>
          <li class="resumebt"><a>Resume</a></li>
          <li class="projbt"><a>Projects</a></li>
          <li>
            <a href="https://www.linkedin.com/in/vandeveloper/">Linkedin</a>
          </li>
          <li><a href="https://github.com/antonylima">Github</a></li>
          <li>
            <a href="https://www.instagram.com/vandolima10">Instagram</a>
          </li>
        </ul>
      </div>
    </div>
    <div id="home">
      <div style="color: whitesmoke">
        <h3>Technologies</h3>
        <div>
          <img class="tech" src="assets/img/html128px.png" />
          <img class="tech" src="assets/img/css.png" />
          <img class="tech" src="assets/img/js.png" />
          <img class="tech" src="assets/img/Angular.png" />
          <img class="tech" src="assets/img/php.png" />
          <img class="tech" src="assets/img/Android.png" />
        </div>
      </div>
    <div id="pgs">
        <div id="pg1">HTML</div>
        <div id="pg2">CSS</div>
        <div id="pg3">JAVASCRIPT</div>
        <div id="pg4">ANGULAR</div>
        <div id="pg5">PHP</div>
        <div id="pg6">ANDROID</div>
      </div>
    </div>
    <div id="about">
      <button id="idioma" onclick="changelang()">PT-EN</button>
      <h3 id="bvpt" style="color: whitesmoke">Bem-vindo!</h3>
      <h3 id="bven" style="color: whitesmoke">Welcome!</h3>

<p id="pt" style="text-align: justify">
Me chamo Sulivando Lima. Formado em Análise e Desenvolvimento de Sistemas e atualmente curso pós graduação em Desenvolvimento Web. Sou apaixonado por tecnologia, e nos últimos anos decidi me dedicar ao desenvolvimento de sistemas, tendo mergulhado em diversas tecnologias, tais como javascript. html, css, php, java, python, sql, angular, android studio, git e github, dentre outras, incluindo bibliotecas e frameworks relacionados às linguagens citadas.
</p>
<p id="en" style="text-align: justify">
My name is Sulivando Lima. Graduated in Systems Analysis and Development and currently taking a postgraduate degree in Web Development. I am passionate about technology, and in recent years I decided to dedicate myself to systems development, having delved into various technologies, such as javascript. html, css, php, java, python, sql, angular, android studio, git and github, among others, including libraries and frameworks related to the aforementioned languages.
</p>
    </div>
    <div id="proj">
      <h3 id="pd">Projects Demos</h3>

      <button id="prev" onclick="voltar()"><b> < </b></button>
      <button id="next" onclick="avancar()"><b> > </b></button>
      <a class="p" id="p1">
      <img class="pj" src="assets/img/login.png"/>
      </a>
      <a class="p" id="p2">
      <img class="pj" src="assets/img/calc.png"/>
      </a>
      <a class="p" id="p3" 
      ><img class="pj" src="assets/img/p_fin.png"
      /></a>
      <a class="p" id="p4" 
      ><img class="pj" src="assets/img/p_tecblog.png"
      /></a>
      <a class="p" id="p5" 
      ><img class="pj" src="assets/img/p_blog.png"
      /></a>
      <a class="p" id="p6" 
      ><img class="pj" src="assets/img/p_cidade.png"
      /></a>
    </div>
    <div id="rsm">
      <a href="assets/docs/cvdev.pdf"
      style="
      color: white;
      position: absolute;
      right: 10px;
      top:5px;
      text-decoration: none;
      ">PDF</a>
      <br /><br />
      <img id="cv" src="assets/img/CVDEV.jpg" />
    </div>
  </div>
  <div id="footer" style="font-size: 0.7em">2023 Vandeveloper</div>
  </div>
  <script src="assets/js/script.js"></script>
</body>
</html>


<?php
include_once('dbconf/cont.php');
//include_once('dbconf/contg.php');
include_once('dbconf/post.php');
//include_once('dbconf/liteconf.php');
//include_once('dbconf/msg.php');
?>