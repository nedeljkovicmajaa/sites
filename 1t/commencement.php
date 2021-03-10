<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
div.scrollfonctionne {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
}
div.scrollfonctionne a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}
div.scrollfonctionne a:hover {
  background-color: #777;
}
.column1 {
  float: left;
  width: 50%;
  padding: 5px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}
.fonctionne {
  display: none;
}
</style>

<body>
<!-- Links (sit on top) -->
<div class="w3-top w3-content">
  <div class="w3-row w3-padding w3-black ">
    <div class="w3-col s3">
      <a href="#commencement" class="w3-button w3-block w3-black">COMMENCEMENT</a>
    </div>
    <div class="w3-col s3">
      <a href="#aproposdenous" class="w3-button w3-block w3-black">À PROPOS DE NOUS</a>
    </div>
    <div class="w3-col s3">
      <a href="#fonctionne" class="w3-button w3-block w3-black">FONCTIONNE</a>
    </div>
    <div class="w3-col s3">
      <a href="#contact" class="w3-button w3-block w3-black">CONTACT</a>
    </div>
    
  </div>
</div>


<body class="w3-content w3-black" >
<header class="w3-display-container " id="commencement">
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="05.jpg" style="min-width:400px" width="1500" height="1000">
    
  </div>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="01.jpg"  style="min-width:400px" width="1500" height="1000">
   
  </div>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="03.jpg" style="min-width:400px" width="1500" height="1000">
   
  </div>
  </div>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="02.jpg" style="min-width:400px" width="1500" height="1000">
   
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    <a class="w3-button w3-darkgray w3-round w3-hide-small w3-hover-light-grey" onclick="window.location.href = 'http://localhost:8000/start.php';">EN<i class="fa fa-angle-right"></i></a><br>
    <a class="w3-button w3-darkgray w3-round w3-hide-small w3-hover-light-grey" onclick="window.location.href = 'http://localhost:8000/e.php';">FR<i class="fa fa-angle-right"></i></a><br>
    <a class="w3-button w3-darkgray w3-round w3-hide-small w3-hover-light-grey" onclick="window.location.href = 'http://localhost:8000/pocetak.php';">SRB<i class="fa fa-angle-right"></i></a><br>
    <br>
    <span class="w3-text-white">Kraljevo, Srbija</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">Selic<br>Bois</span>
  </div>
  <div class="w3-display-bottomright  w3-padding-large">
    <span class="w3-text-white">Paris, France</span>
  </div>
  <a class="w3-button w3-darkgray w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-light-grey" onclick="plusDivs(1)"><font size="6">→</font> <i class="fa fa-angle-right"></i></a>
  <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs(1)"><font size="6">→</font> <i class="fa fa-angle-right"></i></a>
</header>


<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-white w3-large">
<!-- aproposdenous Container -->
<div class="w3-container" id="aproposdenous">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">À PROPOS DE NOUS</span></h5>
    <p> was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p>In addition to our full espresso and brew bar fonctionne, we serve fresh made-to-order breakfast and lunch sandwiches, as well as a selection of sides and salads and other good stuff.</p>
    
  </div>
</div>

<!-- fonctionne Container -->
<div class="w3-container" id="fonctionne">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">FONCTIONNE</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openfonctionne(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">Mesta</div>
      </a>
      <a href="javascript:void(0)" onclick="openfonctionne(event, 'Drinks');">
        <div class="w3-col s6 tablink">Elementi</div>
      </a>
    </div>
    
    <div id="Eat" class="w3-container fonctionne w3-padding-48 w3-card">
      <div class="w3-display w3-container w3-xlarge">
      <button onclick="document.getElementById('prvi').style.display='block'" class="w3-button ">Paris 18</button>
      &#8201<button onclick="document.getElementById('drugi').style.display='block'" class="w3-button ">Paris 11<br>Rue Amelot</button>
      &#8201<button onclick="document.getElementById('treci').style.display='block'" class="w3-button ">Paris 3</button>
      &#8201<button onclick="document.getElementById('cetvrti').style.display='block'" class="w3-button ">Paris<br>Rue Duhesme</button>
      <button onclick="document.getElementById('peti').style.display='block'" class="w3-button ">Avenue<br>Parmentier</button>
      <button onclick="document.getElementById('sesti').style.display='block'" class="w3-button ">Rue<br>d'Amsterdam</button>
      <button onclick="document.getElementById('sedmi').style.display='block'" class="w3-button ">Rue Neuve<br>Popincourt</button>
      <button onclick="document.getElementById('osmi').style.display='block'" class="w3-button ">Rue<br>Lecourbe </button>
      </div>
      </div>

    <div id="Drinks" class="w3-container fonctionne w3-padding-48 w3-card">
    <div class="w3-display w3-container w3-xlarge">
      &#8201<button onclick="document.getElementById('fonctionne4').style.display='block'" class="w3-button ">Paris 18</button>
      &nbsp&nbsp<button onclick="document.getElementById('fonctionne5').style.display='block'" class="w3-button ">Paris 18</button>
      &nbsp&nbsp<button onclick="document.getElementById('fonctionne6').style.display='block'" class="w3-button ">Paris 18</button>
      &nbsp&nbsp<button onclick="document.getElementById('fonctionne7').style.display='block'" class="w3-button ">Paris 18</button>
      </div>
    </div>  
   
  </div>
</div>

<div id="prvi" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
  <div  class="w3-row w3-padding" style="background-color:rgb(30, 30, 30)">
    <a><font size="5" color="#E8E8E8"><center><b>Paris 18</b></center></font></a>
  </div>
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('prvi').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>   
      <div class=" w3-container">
        <div class="mySlides1 w3-animate-opacity">
          <img class="w3-image center" src="f1.jpg" style="min-width:400px" width="1500" height="1000">
          
        </div>
        <div class="mySlides1 w3-animate-opacity">
          <img class="w3-image center" src="f2.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides1 w3-animate-opacity">
          <img class="w3-image center" src="f3.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides1 w3-animate-opacity">
          <img class="w3-image center" src="f4.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides1 w3-animate-opacity">
          <img class="w3-image center" src="f5.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides1 w3-animate-opacity">
          <img class="w3-image center" src="f6.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides1 w3-animate-opacity">
          <img class="w3-image center" src="f7.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides1 w3-animate-opacity">
          <img class="w3-image center" src="f8.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides1 w3-animate-opacity">
          <img class="w3-image center" src="f9.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides1 w3-animate-opacity">
          <img class="w3-image center" src="f10.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides1 w3-animate-opacity">
          <img class="w3-image center" src="f11.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides1 w3-animate-opacity">
          <img class="w3-image center" src="f12.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides1 w3-animate-opacity">
          <img class="w3-image center" src="f13.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <a class="w3-button w3-gray w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-grey" onclick="plusDivs1(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
        <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs1(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
    <div class="scrollfonctionne" style="background-color:rgb(30, 30, 30)">
    <a onclick="showDivs11(1)" ><img class="w3-image" src="f1.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs11(2)" ><img class="w3-image" src="f2.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs11(3)" ><img class="w3-image" src="f3.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs11(4)" ><img class="w3-image" src="f4.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs11(5)" ><img class="w3-image" src="f5.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs11(6)" ><img class="w3-image" src="f6.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs11(7)" ><img class="w3-image" src="f7.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs11(8)" ><img class="w3-image" src="f8.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs11(9)" ><img class="w3-image" src="f9.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs11(10)" ><img class="w3-image" src="f10.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs11(11)" ><img class="w3-image" src="f11.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs11(12)" ><img class="w3-image" src="f12.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs11(13)" ><img class="w3-image" src="f13.jpg"  style="max-width:100px"></a>
  </div>
  </div>
</div>

<div id="drugi" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
  <div  class="w3-row w3-padding" style="background-color:rgb(30, 30, 30)">
    <a><font size="5" color="#E8E8E8"><center><b>Paris 11, Rue Amelot</b></center></font></a>
  </div>
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('drugi').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>   
      <div class=" w3-container">
        <div class="mySlides2 w3-animate-opacity">
          <img class="w3-image center" src="a1.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides2 w3-animate-opacity">
          <img class="w3-image center" src="a2.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides2 w3-animate-opacity">
          <img class="w3-image center" src="a4.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides2 w3-animate-opacity">
          <img class="w3-image center" src="a5.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides2 w3-animate-opacity">
          <img class="w3-image center" src="a6.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides2 w3-animate-opacity">
          <img class="w3-image center" src="a8.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides2 w3-animate-opacity">
          <img class="w3-image center" src="a9.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides2 w3-animate-opacity">
          <img class="w3-image center" src="a3.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides2 w3-animate-opacity">
          <img class="w3-image center" src="a7.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <a class="w3-button w3-gray w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-grey" onclick="plusDivs2(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
        <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs2(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
    <div class="scrollfonctionne" style="background-color:rgb(30, 30, 30)">
    <a onclick="showDivs22(1)" ><img class="w3-image" src="a1.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs22(2)" ><img class="w3-image" src="a2.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs22(3)" ><img class="w3-image" src="a4.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs22(4)" ><img class="w3-image" src="a5.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs22(5)" ><img class="w3-image" src="a6.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs22(6)" ><img class="w3-image" src="a8.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs22(7)" ><img class="w3-image" src="a9.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs22(8)" ><img class="w3-image" src="a3.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs22(9)" ><img class="w3-image" src="a7.jpg"  style="max-width:100px"></a>
  </div>
  </div>
</div>

<div id="treci" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
  <div  class="w3-row w3-padding" style="background-color:rgb(30, 30, 30)">
    <a><font size="5" color="#E8E8E8"><center><b>Paris 3</b></center></font></a>
  </div>
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('treci').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>   
      <div class=" w3-container">
        <div  class="mySlides3 w3-animate-opacity">
          <img class="w3-image center" src="q2.jpg"  style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides3 w3-animate-opacity">
          <img class="w3-image center" src="q3.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides3 w3-animate-opacity">
          <img class="w3-image center" src="q4.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides3 w3-animate-opacity">
          <img class="w3-image center" src="q5.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides3 w3-animate-opacity">
          <img class="w3-image center" src="q6.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides3 w3-animate-opacity">
          <img class="w3-image center" src="q7.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides3 w3-animate-opacity">
          <img class="w3-image center" src="q8.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides3 w3-animate-opacity">
          <img class="w3-image center" src="q10.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides3 w3-animate-opacity">
          <img class="w3-image center" src="q13.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides3 w3-animate-opacity">
          <img class="w3-image center" src="q14.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <a class="w3-button w3-gray w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-grey" onclick="plusDivs3(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
        <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs3(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
    <div class="scrollfonctionne" style="background-color:rgb(30, 30, 30)">
    <a onclick="showDivs33(1)" ><img class="w3-image" src="q2.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs33(2)" ><img class="w3-image" src="q3.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs33(3)" ><img class="w3-image" src="q4.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs33(4)" ><img class="w3-image" src="q5.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs33(5)" ><img class="w3-image" src="q6.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs33(6)" ><img class="w3-image" src="q7.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs33(7)" ><img class="w3-image" src="q8.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs33(8)" ><img class="w3-image" src="q10.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs33(9)" ><img class="w3-image" src="q13.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs33(10)" ><img class="w3-image" src="q14.jpg"  style="max-width:100px"></a>
  </div>
  </div>
  
</div>

<div id="cetvrti" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
  <div  class="w3-row w3-padding" style="background-color:rgb(30, 30, 30)">
    <a><font size="5" color="	#E8E8E8"><center><b>Paris Rue Duhesme</b></center></font></a>
  </div>
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('cetvrti').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>   
      <div class=" w3-container">
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s2.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s4.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s5.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s6.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s7.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s9.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s10.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s12.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s13.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s14.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s15.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s16.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div  class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s1.jpg"  style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s3.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s8.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides4 w3-animate-opacity">
          <img class="w3-image center" src="s11.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <a class="w3-button w3-gray w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-grey" onclick="plusDivs4(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
        <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs4(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
    <div class="scrollfonctionne" style="background-color:rgb(30, 30, 30)">
    
    <a onclick="showDivs44(1)" ><img class="w3-image" src="s2.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(2)" ><img class="w3-image" src="s4.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(3)" ><img class="w3-image" src="s5.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(4)" ><img class="w3-image" src="s6.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(5)" ><img class="w3-image" src="s7.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(6)" ><img class="w3-image" src="s9.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(7)" ><img class="w3-image" src="s10.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(8)" ><img class="w3-image" src="s12.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(9)" ><img class="w3-image" src="s13.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(10)" ><img class="w3-image" src="s14.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(11)" ><img class="w3-image" src="s15.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(12)" ><img class="w3-image" src="s16.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(13)" ><img class="w3-image" src="s1.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(14)" ><img class="w3-image" src="s3.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(15)" ><img class="w3-image" src="s8.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs44(16)" ><img class="w3-image" src="s11.jpg"  style="max-width:100px"></a>
  </div>
  </div>
</div>

<div id="peti" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
  <div  class="w3-row w3-padding" style="background-color:rgb(30, 30, 30)">
    <a><font size="5" color="#E8E8E8"><center><b>Petit Studio - Avenue Parmentier, Paris</b></center></font></a>
  </div>
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('peti').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>   
      <div class=" w3-container">
        <div class="mySlides5 w3-animate-opacity">
          <img class="w3-image center" src="p1.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides5 w3-animate-opacity">
          <img class="w3-image center" src="p2.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides5 w3-animate-opacity">
          <img class="w3-image center" src="p3.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides5 w3-animate-opacity">
          <img class="w3-image center" src="p4.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides5 w3-animate-opacity">
          <img class="w3-image center" src="p5.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides5 w3-animate-opacity">
          <img class="w3-image center" src="p6.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides5 w3-animate-opacity">
          <img class="w3-image center" src="p7.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides5 w3-animate-opacity">
          <img class="w3-image center" src="p8.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <a class="w3-button w3-gray w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-grey" onclick="plusDivs5(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
        <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs5(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
    <div class="scrollfonctionne" style="background-color:rgb(30, 30, 30)">
    <a onclick="showDivs55(1)" ><img class="w3-image" src="p1.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs55(2)" ><img class="w3-image" src="p2.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs55(3)" ><img class="w3-image" src="p3.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs55(4)" ><img class="w3-image" src="p4.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs55(5)" ><img class="w3-image" src="p5.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs55(6)" ><img class="w3-image" src="p6.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs55(7)" ><img class="w3-image" src="p7.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs55(8)" ><img class="w3-image" src="p8.jpg"  style="max-width:100px"></a>
    </div>
  </div>
</div>

<div id="sesti" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
  <div  class="w3-row w3-padding" style="background-color:rgb(30, 30, 30)">
    <a><font size="5" color="#E8E8E8"><center><b>Veranda - Rue d'Amsterdam, Paris</b></center></font></a>
  </div>
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('sesti').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>   
      <div class=" w3-container">
        <div class="mySlides6 w3-animate-opacity">
          <img class="w3-image center" src="k1.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides6 w3-animate-opacity">
          <img class="w3-image center" src="k2.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides6 w3-animate-opacity">
          <img class="w3-image center" src="k3.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides6 w3-animate-opacity">
          <img class="w3-image center" src="k4.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides6 w3-animate-opacity">
          <img class="w3-image center" src="k5.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides6 w3-animate-opacity">
          <img class="w3-image center" src="k6.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides6 w3-animate-opacity">
          <img class="w3-image center" src="k7.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides6 w3-animate-opacity">
          <img class="w3-image center" src="k8.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides6 w3-animate-opacity">
          <img class="w3-image center" src="k9.jpg" style="min-width:350px" width="1500" height="1000">
        </div>
        <div class="mySlides6 w3-animate-opacity">
          <img class="w3-image center" src="k10.jpg" style="min-width:350px" width="1500" height="1000">
        </div>
        <a class="w3-button w3-gray w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-grey" onclick="plusDivs6(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
        <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs6(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
    <div class="scrollfonctionne" style="background-color:rgb(30, 30, 30)">
    <a onclick="showDivs66(1)" ><img class="w3-image" src="k1.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs66(2)" ><img class="w3-image" src="k2.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs66(3)" ><img class="w3-image" src="k3.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs66(4)" ><img class="w3-image" src="k4.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs66(5)" ><img class="w3-image" src="k5.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs66(6)" ><img class="w3-image" src="k6.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs66(7)" ><img class="w3-image" src="k7.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs66(8)" ><img class="w3-image" src="k8.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs66(9)" ><img class="w3-image" src="k9.jpg"  style="max-width:50px"></a>
    <a onclick="showDivs66(10)" ><img class="w3-image" src="k10.jpg"  style="max-width:50px"></a>
    </div>
  </div>
</div>

<div id="sedmi" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
  <div  class="w3-row w3-padding" style="background-color:rgb(30, 30, 30)">
    <a><font size="5" color="#E8E8E8"><center><b>Appartement - Rue Neuve Popincourt Paris</b></center></font></a>
  </div>
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('sedmi').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>   
      <div class=" w3-container">
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w1.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w2.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w3.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w4.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w5.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w6.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w7.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w8.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w9.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w10.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w11.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w12.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w13.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w14.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w15.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w16.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w17.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w18.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides7 w3-animate-opacity">
          <img class="w3-image center" src="w19.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <a class="w3-button w3-gray w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-grey" onclick="plusDivs7(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
        <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs7(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
    <div class="scrollfonctionne" style="background-color:rgb(30, 30, 30)">
    <a onclick="showDivs77(1)" ><img class="w3-image" src="w1.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(2)" ><img class="w3-image" src="w2.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(3)" ><img class="w3-image" src="w3.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(4)" ><img class="w3-image" src="w4.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(5)" ><img class="w3-image" src="w5.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(6)" ><img class="w3-image" src="w6.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(7)" ><img class="w3-image" src="w7.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(8)" ><img class="w3-image" src="w8.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(9)" ><img class="w3-image" src="w9.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(10)" ><img class="w3-image" src="w10.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(11)" ><img class="w3-image" src="w11.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(12)" ><img class="w3-image" src="w12.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(13)" ><img class="w3-image" src="w13.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(14)" ><img class="w3-image" src="w14.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(15)" ><img class="w3-image" src="w15.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(16)" ><img class="w3-image" src="w16.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs77(17)" ><img class="w3-image" src="w17.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs77(18)" ><img class="w3-image" src="w18.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs77(19)" ><img class="w3-image" src="w19.jpg"  style="max-width:60px"></a>
    </div>
  </div>
</div>

<div id="osmi" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
  <div  class="w3-row w3-padding" style="background-color:rgb(30, 30, 30)">
    <a><font size="5" color="#E8E8E8"><center><b>Appartement - Rue Lecourbe Paris</b></center></font></a>
  </div>
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('osmi').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>   
      <div class=" w3-container">
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z1.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z2.jpg" style="min-width:500px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z3.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z4.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z5.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z6.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z7.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z8.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z9.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z10.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z11.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z12.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z13.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z14.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z15.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z16.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z17.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <div class="mySlides8 w3-animate-opacity">
          <img class="w3-image center" src="z18.jpg" style="min-width:400px" width="1500" height="1000">
        </div>
        <a class="w3-button w3-gray w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-grey" onclick="plusDivs8(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
        <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs8(1)"><font size="6" color="white">→</font> <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
    <div class="scrollfonctionne" style="background-color:rgb(30, 30, 30)">
    <a onclick="showDivs88(1)" ><img class="w3-image" src="z1.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs88(2)" ><img class="w3-image" src="z2.jpg"  style="max-width:100px"></a>
    <a onclick="showDivs88(3)" ><img class="w3-image" src="z3.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(4)" ><img class="w3-image" src="z4.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(5)" ><img class="w3-image" src="z5.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(6)" ><img class="w3-image" src="z6.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(7)" ><img class="w3-image" src="z7.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(8)" ><img class="w3-image" src="z8.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(9)" ><img class="w3-image" src="z9.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(10)" ><img class="w3-image" src="z10.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(11)" ><img class="w3-image" src="z11.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(12)" ><img class="w3-image" src="z12.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(13)" ><img class="w3-image" src="z13.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(14)" ><img class="w3-image" src="z14.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(15)" ><img class="w3-image" src="z15.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(16)" ><img class="w3-image" src="z16.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(17)" ><img class="w3-image" src="z17.jpg"  style="max-width:60px"></a>
    <a onclick="showDivs88(18)" ><img class="w3-image" src="z18.jpg"  style="max-width:60px"></a>
    </div>
  </div>
</div>


<!-- Contact/Area Container -->
<div class="w3-container" id="contact" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">CONTACT</span></h5>
    <p>Contactez-nous pour plus d'informations et un accord:</p><br>
    <p><img src="email.png" class="w3-image" style="width:10%">
    <b> E-mail:</b></span> selic73@gmail.com</p>
    <p><img src="fb.png" class="w3-image" style="width:9%">
    <b> Facebook:</b></span> SELIC - BOIS</p>
    <p><img src="ig.png" class="w3-image" style="width:10%">
    <b>Instagram:</b></span> - </p>
    <p><img src="pint.png" class="w3-image" style="width:10%">
    <b>Pinterest:</b></span> - </p>
    <p><img src="wa.png" class="w3-image" style="width:10%">
    <img src="viber.png" class="w3-image" style="width:9%">
    <b>Brojevi telefona:</b></span> +381637419765, +330033762700449</p>
  </div>
</div>

<!-- End page content -->
</div>


<script>
// Tabbed fonctionne
function openfonctionne(evt, fonctionneName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("fonctionne");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(fonctionneName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>


<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);
function plusDivs(n) {
  showDivs(slideIndex += n);
}
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

var slideIndex1 = 1;
showDivs1(slideIndex1);
function plusDivs1(n) {
  showDivs1(slideIndex1 += n);
}
function showDivs1(n) {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  if (n > x.length) {slideIndex1 = 1}
  if (n < 1) {slideIndex1 = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex1-1].style.display = "block";  
}
function showDivs11(n) {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[n-1].style.display = "block";  
  slideIndex1 = n;
}

var slideIndex2 = 1;
showDivs2(slideIndex2);
function plusDivs2(n) {
  showDivs2(slideIndex2 += n);
}
function showDivs2(n) {
  var i;
  var x = document.getElementsByClassName("mySlides2");
  if (n > x.length) {slideIndex2 = 1}
  if (n < 1) {slideIndex2 = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex2-1].style.display = "block";  
}
function showDivs22(n) {
  var i;
  var x = document.getElementsByClassName("mySlides2");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[n-1].style.display = "block"; 
  slideIndex2 = n; 
}

var slideIndex3 = 1;
showDivs3(slideIndex3);
function plusDivs3(n) {
  showDivs3(slideIndex3 += n);
}
function showDivs3(n) {
  var i;
  var x = document.getElementsByClassName("mySlides3");
  if (n > x.length) {slideIndex3 = 1}
  if (n < 1) {slideIndex3 = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex3-1].style.display = "block";  
}
function showDivs33(n) {
  var i;
  var x = document.getElementsByClassName("mySlides3");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[n-1].style.display = "block";  
  slideIndex3 = n;
}

var slideIndex4 = 1;
showDivs4(slideIndex4);
function plusDivs4(n) {
  showDivs4(slideIndex4 += n);
}
function showDivs4(n) {
  var i;
  var x = document.getElementsByClassName("mySlides4");
  if (n > x.length) {slideIndex4 = 1}
  if (n < 1) {slideIndex4 = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex4-1].style.display = "block";  
}
function showDivs44(n) {
  var i;
  var x = document.getElementsByClassName("mySlides4");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[n-1].style.display = "block"; 
  slideIndex4 = n;
}

var slideIndex5 = 1;
showDivs5(slideIndex5);
function plusDivs5(n) {
  showDivs5(slideIndex5 += n);
}
function showDivs5(n) {
  var i;
  var x = document.getElementsByClassName("mySlides5");
  if (n > x.length) {slideIndex5 = 1}
  if (n < 1) {slideIndex5 = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex5-1].style.display = "block";  
}
function showDivs55(n) {
  var i;
  var x = document.getElementsByClassName("mySlides5");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[n-1].style.display = "block"; 
  slideIndex5 = n;
}

var slideIndex6 = 1;
showDivs6(slideIndex6);
function plusDivs6(n) {
  showDivs6(slideIndex6 += n);
}
function showDivs6(n) {
  var i;
  var x = document.getElementsByClassName("mySlides6");
  if (n > x.length) {slideIndex6 = 1}
  if (n < 1) {slideIndex6 = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex6-1].style.display = "block";  
}
function showDivs66(n) {
  var i;
  var x = document.getElementsByClassName("mySlides6");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[n-1].style.display = "block"; 
  slideIndex6 = n;
}

var slideIndex7 = 1;
showDivs7(slideIndex7);
function plusDivs7(n) {
  showDivs7(slideIndex7 += n);
}
function showDivs7(n) {
  var i;
  var x = document.getElementsByClassName("mySlides7");
  if (n > x.length) {slideIndex7 = 1}
  if (n < 1) {slideIndex7 = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex7-1].style.display = "block";  
}
function showDivs77(n) {
  var i;
  var x = document.getElementsByClassName("mySlides7");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[n-1].style.display = "block"; 
  slideIndex7 = n;
}

var slideIndex8 = 1;
showDivs8(slideIndex8);
function plusDivs8(n) {
  showDivs8(slideIndex8 += n);
}
function showDivs8(n) {
  var i;
  var x = document.getElementsByClassName("mySlides8");
  if (n > x.length) {slideIndex8 = 1}
  if (n < 1) {slideIndex8 = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex8-1].style.display = "block";  
}
function showDivs88(n) {
  var i;
  var x = document.getElementsByClassName("mySlides8");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[n-1].style.display = "block"; 
  slideIndex8 = n;
}



</script>
</body>
</html>
