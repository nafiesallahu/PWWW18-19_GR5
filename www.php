<!Doctype html>
<html manifest="manifest.appcache">
<head>
<meta charset="utf-8">
<title>Activity</title>
<?php include 'php/Sessions.php';
  include 'php/cookie.php';

echo $message; ?>
 
 <script src="jquery-3.3.1.min.js"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"  crossorigin="anonymous">
 <script type="text/javascript" src="JScriptForRegister.js"></script>
 <link rel="stylesheet" href="csss.css">
 <style type="text/css">

                 body{ background-color: #F5F5DC;
                    font-family: Goudy Old Style, Garamond, Big Caslon, Times New Roman, serif;}

              header{
                background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url("back.jpg");
                height:680px;

                background-size: cover;
                background-position: center;

            }

 .activity1 {
              padding:30px;

          }
          .activity1 p{color:#800000;
                  font-size:20px;}
          .activity1 h1{ color: #e6b800;
             font-size:25px;
          }

          .activity1 h5{
              font-size:15px;
              color:#8B4513;
          }
              .myclass{  padding-left:40px;
                 -webkit-column-count: 3;
                  column-count: 3;
                  -webkit-column-gap: 40px;
                  text-align: left;
                 column-gap: 40px;
                 float:left;
                 width:85%;

}

           .image{
                               opacity: 1;
                               display: block;
                               width: 100%;
                               height: 200px;
                               transition: .5s ease;
                               backface-visibility: hidden;

            }
            #centered {
                   position: absolute;
                   top: 50%;
                   left: 50%;
                   transform: translate(-50%, -50%);
                   font-family: "cursive",Brush Script MT;
                   font-weight:100;
                   font-size:70px;
                   color:#e8ddcf;
                   text-shadow:-3px 3px 3px #000000;

                   }
                   .table {
  font-family:  Goudy Old Style, Garamond, Big Caslon, Times New Roman, serif;
  border-collapse: collapse;
  width: 90%;
  margin-top: 20px;
  margin-left:60px;
  margin-right: 10px;

}
.table th{
    font-size:25px;
    color:#e6b800;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding:10px 0px 10px 30px;
}

.table td{color:#800000;
font-size:20px;}
tr:nth-child(even) {
  background-color: #dddddd;
}

#calc {
    width: 16em;
    margin: 30px;

    padding-top: 3px;
    padding-left: 40px;
    color: #839C29;
    box-shadow: 0.4em 0.4em 0.4em rgba( 0, 0, 0, 0.2 );
     margin-top:50px
 }

#calc div {
    display: table;
    width: 100%;
 }

#calc div span {
    width: 50%;
    display: table-cell;
    border: 0.062em solid #a3c577;
    border-bottom: 0;
    box-sizing: border-box;
    vertical-align: middle;
    text-align: center;

 }
 section canvas {
     border:1px solid #d3d3d3;
     background-image: url("5.jpg");
     margin:50px;
 }
#calc div span:first-of-type,
#calc div:first-of-type span:last-of-type{
    padding: 0.5em 0;

 }
#linku:hover {background-color: black;}
#calc div span:last-of-type {
    border-left: 0;
 }

#calc div:last-of-type span{
    border-bottom: 0.062em solid #a3c577;
 }

#calc input{
    width: 100%;
    height: 4em;
    padding: 0;
    margin: 0;
    border: 0;
    background-color: #fff;
    font-size: 1em;
    color: #839C29;
    text-align: center;
 }

#calc input[type="reset"] {
    border: 0.062em solid #a3c577;
    border-top: 0;
    box-shadow: inset 0 0 1em rgba( 163, 197, 119, 0.5);
 }
 footer {

                    font-family: Goudy Old Style, Garamond, Big Caslon, Times New Roman, serif;
                    padding: 0px;
                    text-align: center;
                     background-color: #e2b240;
                    position: relative;
                    margin:0px;
                    color:white;

                }
                    #title{
                    font-size:28px;


                }
                footer a:link{color:#4d1a00;
                   text-decoration: none;}

               footer  a:hover{color: #ff5500;}
               footer a:visited{color:#1a0900;}

               footer p{font-size:20px;
               color:white;}
               .contact{
                     padding:20px;
                     width:100%;
                   display:inline-block;;
                        width:30%;
               text-align: center;}
               .navigacioni {
                               overflow: hidden;
                               background-color: rgba(0,0,0,0.6);
                             }

               .navigacioni a,.navigacioni p {

                                 float:left;
                                 display:inline-block;
                                 color: #f2f2f2;
                                 text-align: center;
                                 padding: 5px 16px 1px 1em;
                                 text-decoration: none;


                                  }

               .navigacioni a:hover {
                                         text-decoration: overline;
                                         }
                       .myclass{  padding-left:40px;
                                  column-count: 3;
                                 -webkit-column-count: 3;
                                 -o--column-count: 40px;
                                 -moz--column-count: 40px;
                                  column-gap: 40px;
                                 -webkit-column-gap: 40px;
                                  -o--column-gap: 40px;
                                 -moz--column-gap: 40px;
                                  text-align: left;
                                  float:left;
                                  width:96%;

                           }

                             .container {

                                 padding:0px 30px 0px 30px;
                                 -webkit-column-count: 3;
                                  column-count: 3;
                                  -webkit-column-gap: 40px;
                                  column-gap: 40px;
                             }
                             .column{
                                   padding:5px;
                                   width:67%;


                             }
                            .container  p{color:#800000;
                                     font-size:20px;}
                             .container h1{ color: #e6b800;
                                font-size:25px;
                             }
                             .container a:link{
                   float:right;
                   color:#4d1a00;
                   text-decoration: none;
               }
              .container  a:hover{color: #ff5500;}
               .container a:visited{color:#1a0900;}
                             input[type=text],button {   width: 100%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                box-sizing: border-box;
                                width:20%;
                                background-color: rgba(211, 211, 211, 0.3);
                                border: 0;
                                border-bottom: 1px solid #1c2833;
                           }
                         button{

                           width:7%;
                           background: #F08080;
                           background: -webkit-linear-gradient(#F08080, #008B8B);
                           background: -o-linear-gradient(#F08080, #008B8B);
                           background: -moz-linear-gradient(#F08080, #008B8B);
                           background: linear-gradient(#F08080, #008B8B);

                         }

                         .back{
                             background-image: url("back.jpg");
                             background-repeat: repeat;
                             margin:0px;
                         }

</style>


<script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];
          }

       /*  function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("img").src = images[x];
          }*/

          function startTimer() {
              setInterval(displayNextImage, 3000);
          }

          var images = [], x = -1;
          images[0] = "image1.jpg"  ;
          images[1] = "image2.jpg" ;
          images[2] = "Math3.jpg" ;



          (function( d ) {
   'use strict';

   var l = d.getElementById( 'length' );
   var w = d.getElementById( 'width' );

   l.addEventListener( 'keyup', calculate, false );
   w.addEventListener( 'keyup', calculate, false );
function calculate() {
   if ( ( isNaN( l.value ) || ( l.value =='' )) &&
        ( isNaN( w.value ) || ( w.value == '')) ) {
          return;
    }
   else {
          d.getElementById( 'm2' ).value = l.value * w.value;
          d.getElementById( 'panels' ).value = Math.ceil( l.value * w.value / 3.75 );
    }
 }
}(document));

function showFunction(diva, divb) {
    var x = document.getElementById(diva);
    var y = document.getElementById(divb);
          x.style.display = 'block';
          y.style.display = 'none';
}
function showFunction1(diva, divb) {
    var x = document.getElementById(diva);
    var y = document.getElementById(divb);
          x.style.display = 'block';
          y.style.display = 'none';
}
function showFunction2(diva, divb) {
    var x = document.getElementById(diva);
    var y = document.getElementById(divb);
          x.style.display = 'block';
          y.style.display = 'none';
}

      </script>





</head>

<body onload = "startTimer(30) " >


   

  <header>
       <div class="navigacioni">


        <p style="color:#b3b3b3;"> <a href="index.html"   style="text-decoration: none; font-size:25px;">ModernSchool</a></br>Discover MS</p>

         <nav style="float:right">
                  <p><a href="index.html" >HOME</a><br>Internships</p>
                  <p><a href="programs.html" >PROGRAMS</a><br>Get informed</p>
                  <p><a href="Register.html" >REGISTER</a><br>Not a member?</p>
                  <p><a href="www.html" target="_self">ACTIVITIES</a> <br> School activities</p>
                  <p><a href="About.html">ABOUT US</a><br>More</p>



              </nav>


<img id="img" src="girl1.jpg"  width = "1334" height="600">

 <p id="centered">“If you want real peace in the world, start with children.”<br> – Mahatma Gandi</p>

          </div>
  </header>
    <div class="back">
     <div class="wrap">
            <div class="cube">
                <div class="front">



                </div>
                <div class="back">

                </div>
                <div class="top">

                </div>
                <div class="bottom">

                </div>
                <div class="left">

                </div>
                <div class="right">

                </div>
            </div>
        </div>
    </div>
  <div class="container" >
  <article >

     <h1 style="margin-top:0px;">Printable Connect the Dots for Kids</h1>
     <img src="girl1.jpg" class="image" alt="kids"><br>
     <p>A step up from coloring sheets, these printable color by numbers will have your children matching and using a legend to color in a picture.</p>
     <div id="div1">
<p style="color:red;" onclick="showFunction('div2','div1')">show more</p></div>
<div id="div2" style="display:none">

<p>A step up from coloring sheets, these printable color by numbers will have your children matching and using a lege.</p>

<p style="color:red;" onclick="showFunction('div1','div2')">show less</p></div>





</article>


  <article>
      <br>
    <h1 >Printable Color by Number for Kids</h1>

    <img src ="4.png"  class = "image" alt="kid of our school"><br>
<p>A step up from coloring sheets, these printable color by numbers will have your children matching and using a legend to color in a picture.</p>
     <div id="div3">
<p style="color:red;" onclick="showFunction1('div4','div3')">show more</p></div>
<div id="div4" style="display:none">

<p>A step up from coloring sheets, these printable color by numbers will have your children matching and using a legend to color in a picture.</p>

<p style="color:red;" onclick="showFunction1('div3','div4')">show less</p></div>
  </article>

      <br>


<article>

  <h1 id="season">Seasonal Printables for Kids</h1>
  <img src ="2.png"  class="image" alt="kid of our school"><br>
<p>A step up from coloring sheets, these printable color by numbers will have your children matching and using a legend to color in a picture.</p>
     <div id="div5">
<p style="color:red;" onclick="showFunction2('div6','div5')">show more</p></div>
<div id="div6" style="display:none">

<p>A step up from coloring sheets, these printable color by numbers will have your children matching and using a legend to color in a picture.</p>

<p style="color:red;" onclick="showFunction2('div5','div6')"><br><a  id="linku">show less</a></p></div>
</article>
</div>

    <div>
<h1 style="color:#8B4513; text-align:center; font-size:50px;">The price of the activities</h1>
  <table class ="table">

  <tr>
    <th>Activity</th>
    <th>Month</th>
    <th>Price</th>
  </tr>
  <tr>
    <td>Pumpkin craft</td>
    <td>January</td>
    <td>20 &euro;</td>
  </tr>
  <tr>
    <td>Charades</td>
    <td>February</td>
    <td>50 &euro;</td>
  </tr>
  <tr>
    <td>Hangman</td>
    <td>March</td>
    <td>50 &euro;</td>
  </tr>
  <tr>
    <td>Scatter-gories</td>
    <td>April</td>
    <td>50 &euro;</td>
  </tr>
  <tr>
    <td>Bingo</td>
    <td>May</td>
    <td>30 &euro;</td>
  </tr>
  <tr>
    <td>Puzzles</td>
    <td>June</td>
    <td>20 &euro;</td>
  </tr>
</table>
    </div>

<h1 style="color:#8B4513; text-align:center; font-size:50px;">Some types of activities in our school</h1>
<iframe style="width:500px; height:600px;margin:50px;"  src="prove.html"></iframe>


<video  style='margin:50px' width="40%" controls>
<source src="playvideo.mp4"  type="video/mp4">
</video>





<form id="calc" action="#">
   <div>
    <span>
     Pool Size
    </span><span>
     Length/Width Of Your Pool
    </span>
   </div><div>
    <span>
     <label for="length">Length</label>
    </span><span>
     <input id="length" onkeyup="search(this)" type="text" placeholder="In Metres">
    </span>
   </div><div>
    <span>
     <label for="width">Width</label>
    </span><span>
     <input id="width" onkeyup="search(this)"  type="text" placeholder="In Metres">
    </span>
   </div>
    <input type="reset" value="Clear Fields">
  </form>


<div style="margin:50px;">
  <p style="font-size:20px;color:#800000;">Write a number between 5 and 12</p>
  <input type="text"  id="IsNumer">
  <button onclick="RightNumber()"><span>Check</span></button>
  <p id="outputHere"></p>

</div>


<div >

<h2 style="text-align:center">DID YOU KNOW THAT </h2>
<p  style =" text-align: center; font-size:20px; text-shadow: 00, 3px ,#FF0000, 00 ,5px ,#0000FF;"id="wow"></p>
<script>
var interesting=Math.floor(Math.random() * 9) + 1 ;
const arr = [4, 5, 6,100,-12,0];
var dy= 2.56742;
switch(interesting){
case 1:document.getElementById("wow").innerHTML=" PI="+Math.PI;break;
case 2:  document.getElementById("wow").innerHTML=" Blue whale is the lagest animal on earth";break;
case 3:   document.getElementById("wow").innerHTML="Rounding 2.56742 in four digits is "+dy.toExponential(4);break;  //it represents the number of digits after decimal point.
case 4:  document.getElementById("wow").innerHTML=" The largest number in {4,5,6,100,-12,0}  is "+ Math.max.apply(Math, arr);break;
case 5:  document.getElementById("wow").innerHTML= "2 to the power of 10 is  "+Math.pow(2,10) ;break;
case 9:  document.getElementById("wow").innerHTML= "2<sup>1024</sup>  is  "+Number.MAX_VALUE;break;
case 6:  document.getElementById("wow").innerHTML=" America was discoverd by Christopher Columbus ";break;
case 7:  document.getElementById("wow").innerHTML="Sinuse of PI/2 is   "+Math.sin(Math.PI / 2);;break;
case 8:  document.getElementById("wow").innerHTML="Hello in Albanian is &#199kemi\\P&#235rsh&#235ndetje";break;
default:  document.getElementById("wow").innerHTML=" America was discoverd by Christopher Columbus ";break;  //it represents the number of digits after decimal point.
}
</script>

</div>
  <footer >

                  <div class="contact">

                      <p id="title"><i class="fas fa-phone">Phone</i></p>
                  <p> (860)555-1234</p>
                  <p>(860)222-5678
                      </p>
                  </div>


                  <div class="contact">
           <address>
               <p id="title"> <i class="fas fa-map-marker-alt">Address</i></p>
                <p>Atlantic Ave</p>
                <p>Brooklyn</p>

           </address>
                  </div>


<div class="contact">
    <p id="title"> <i class="far fa-envelope">Email</i></p>
              <a href="mailto:modernchool@gmail.com">modernschool@gmail.com</a>.
              <h4 id="dayy" ></h4>
              <h4 id="dayy2" ></h4>
                  </div>

             <div id="last" style="background-color: #dea521;">
                      <p style="text-align:left; font-size: 18px; padding:5px;">Copyright&copy 2018 ModernSchool | All rights reserved.</p>
                  </div>

                  
      <form action="Php/cookie.php" method="post">
    
      
      </form>
   

                  <script>


      const day = new Date().getDay();

switch (day) {
    case 1:
      document.getElementById("dayy").innerHTML="Happy Monday!";
        break;
    case 2:
        document.getElementById("dayy").innerHTML="It's Tuesday. You got this!";
        break;
    case 3:
          document.getElementById("dayy").innerHTML="Hump day already!";
        break;
        case 4:
             document.getElementById("dayy").innerHTML=("Just one more day 'til the weekend!");
             break;
         case 5:
            document.getElementById("dayy").innerHTML=("Happy Friday!");
             break;
         case 6:
             document.getElementById("dayy").innerHTML=("Have a wonderful Saturday!");
             break;
         case 7:
             document.getElementById("dayy").innerHTML=("It's Sunday, time to relax!");
             break;

    default:
          document.getElementById("dayy").innerHTML=("Something went horribly wrong...");
}
        
        </script>
                 
</footer>

</body>
</html>
