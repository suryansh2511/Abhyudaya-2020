<?php include 'includes/header.php';?>
<link rel="stylesheet" type="text/css" href="css/index.css"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/index.js"></script>

<!--Sidebar-->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#top">Home</a>
  <a href="#introduction">Introduction</a>
  <a href="#countdown">Countdown</a>
  <a href="#teaser">Teaser</a>
  <a href="#aftermovie">Aftermovie</a>
  <!--<a href="#rulebook">Rulebook</a>-->
  <a href="#features">Features</a>
</div>
<div id="main">
  <button class="openbtn" onclick="openNav()">&#9776; A Quick Glance</button><p></p>
    <marquee class="rtl" scrollamount="10">Come! Enjoy! and participate in over <b style="color:chocolate">45 events</b> and win <b style="color:chocolate">prizes worth 2.5L</b> .. Happy <span style="font-family: newrocker; color:chocolate">Abhyudaya</span></marquee>
</div>

<!--Sidebar Ends-->
<br/>
<div>
<!--Before Countdown-->
<div class="parallax2"></div>
<div class="row" style="background-color: black;" id="introduction">
<div class="column1"><br/>
    <h1 style="text-align:center; font-family:newrocker; font-size:42px;">Abhyudaya 2020</h1>
    <p style="text-align:center; font-family: artifika;"> Team <span style="font-family: newrocker;">Abhyudaya</span> is back with the third edition of MMMUT's annual art, literary and cultural
    extravaganza - <span style="font-family: Newrocker; color: chocolate; font-size:28px;">Abhyudaya 2020</span>. The megafest this year will delve into the parallel universe of  <span style="color: chocolate; font-size:28px;">A Tribal Spree</span>.
    With the turn of the hourglass the <span style="color: chocolate;">COUNTDOWN</span> has <span style="color: chocolate;">BEGUN</span></p><br/>
</div>

</div>

<!--Countdown starts-->
<!--<div class="outer" id="countdown">

  <svg viewBox="0 0 140 140" preserveAspectRatio="xMinYMin meet">
    <g>
      <circle r="50%" cx="50%" cy="50%" class="circle-back" />
      <text x="50%" y="50%" text-anchor="middle" dy="0.3em" id="text-center1"></text>
    </g>
  </svg> 
</div>
<div class="outer">
  <svg viewBox="0 0 140 140" preserveAspectRatio="xMinYMin meet">
    <g>
      <circle r="50%" cx="50%" cy="50%" class="circle-back" />
      <text x="50%" y="50%" text-anchor="middle" dy="0.3em" id="text-center2"></text>
    </g>
  </svg> 
</div>
<div class="outer">
  <svg viewBox=" 0 0 140 140" preserveAspectRatio="xMinYMin meet">
    <g>
      <circle r="50%" cx="50%" cy="50%" class="circle-back" />
      <text x="50%" y="50%" text-anchor="middle" dy="0.3em" id="text-center3"></text>
    </g>
  </svg> 
</div>
<div class="outer">
  <svg viewBox="0 0 140 140" preserveAspectRatio="xMinYMin meet">
    <g>
      <circle class="link buzz-out-on-hover" r="50%" cx="50%" cy="50%" class="circle-back" />
      <text x="50%" y="50%" text-anchor="middle" dy="0.3em" id="text-center4"></text>
    </g>
  </svg> 
</div>
<div class="outer"><h1 style="color: rgba(60,179,113,0.9); font-size: 48px; " class="w3-animate-fading"><i>&nbsp;&nbsp;We  are  ROLLING  soon  . . . </i></h1></div>-->
    
<div class="container" id="countdown">
  <ul>
    <li><span id="days"></span>days</li>
    <li><span id="hours"></span>Hours</li>
    <li><span id="minutes"></span>Minutes</li>
    <li><span id="seconds"></span>Seconds</li>
  </ul>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 28, 2020 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("text-center1").innerHTML = days + " DAYS ";
  document.getElementById("text-center2").innerHTML = hours + " HRS ";
  document.getElementById("text-center3").innerHTML = minutes + " MIN";
  document.getElementById("text-center4").innerHTML = seconds + " SEC";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "ABHYUDAYA IS LIVE";
  }
}, 1000);
</script>
<!--Countdown Ends-->

<div><br/></div>

<div class="financingBlock" >
        <div class="left">
                  <div class="financingText">

      <p style="text-align: center; font-family: vogue; color: crimson; font-size: 36px; line-height: 1.5;">Bringing forth <span style="font-family: newrocker">Abhyudaya</span> 2020, better than ever</p>
      <p style="text-align: center; font-family: artifika; color: white; font-size:14px;">The enthralling moves, canvas adorning hues of imagination, loud speaking countenance, penned emotions and honey sweet voices marred the soporific effect of chilling winters. These days enshrouded events like duet dance, nukkad natak, mono-act, duet-singing, battle of bands, graffiti, poem writing, House of Commons, sketching, painting, street dance, face-off, group dance and a lot more.   </p>

                   </div>

                </div>
      <div class="right">
                   <div class="financingText"><br/><br/>
                      <p style="text-align: center; font-family: artifika; color: white; font-size:14px;">Also witnessed was active participation from various colleges and universities, including little champs discovering their talents in the successful event named chote-ustaad.</p><br/>
      <p style="text-align: center; font-family: rustico; color: crimson; font-size: 36px; line-height: 1.5;">Presenting the Teaser of <span style="font-family: newrocker">Abhyudaya</span> 2020 and the aftermovie of <span style="font-family: newrocker">Abhyudaya</span> 2019</p><br/>
      <!--<p style="text-align: center; font-family: rustico; color: chocolate; font-size: 36px; line-height: 1.5;">After Movie of <br/> Abhyudaya 2019 is here now!</p>-->
                  </div>
                </div>

  <div class="clearer"></div><br/>

</div>

<div class="financingBlock" id="aftermovie">
          <div class="left">
                    <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe width="560" height="600" src="https://www.youtube.com/embed/kQr2qXsILgc" frameborder="0" allowfullscreen>                             </iframe>
                    </div>
                </div>
        <div class="right">
             <div class="videoWrapper" id="teaser">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe width="560" height="600" src="https://www.youtube.com/embed/qXmzr9hM1Us" frameborder="0" allowfullscreen>                             </iframe>
                    </div>
                  

                </div>

  <div class="clearer"></div><br/>

</div>

 <!--   
<div class="row" id="teaser">
  
  <div class="column" style="text-align: center;">
      <h2 class="teaser-head">Bringing forth <span style="color: crimson; font-size: 36px; font-family: Newrocker">Abhyudaya</span><span style="color: chocolate; font-size: 36px; font-family: Newrocker;"> 2020</span></h2>
      <h3 class="teaser-sub-head">The <span style="color: chocolate; font-size: 26px;">TEASER</span> is now better than <span style="color: crimson; font-size: 30px;">BEFORE</span></h3><br/>
      <p class="teaser-para" style="text-align: center; font-family: cursive;">The enthralling moves, canvas adorning hues of imagination, loud speaking countenance, penned emotions and honey sweet voices marred the soporific effect of chilling winters. These days enshrouded events like duet dance, nukkad natak, mono-act, duet-singing, battle of bands, graffiti, poem writing, House of Commons, sketching, painting, street dance, face-off, group dance and a lot more. Also witnessed was active participation from various colleges and universities, including little champs discovering their talents in the successful event named chote-ustaad.  </p></div>
    
    <div class="column">
    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" width="700" height="405" src="https://www.youtube.com/embed/qXmzr9hM1Us" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
</div>
</div>-->
<div class="parallax3"></div>



    <div class="strip" id="features">
<section class="buttons">
  <button class="spin thick">3 EDITIONS</button>

  <button class="spin thick">10k+<br/> FOOTFALL</button>

  <button class="spin thick">45+<br/> EVENTS</button>

  <button class="spin thick">20+<br/> COLLEGES</button>

  <button class="spin thick">PRIZES<br/> WORTH 2.5L</button>

  <button class="spin thick">2 FEST <br/>NIGHTS</button>
</section>
</div>
<br/>

<?php include 'includes/footer.php';?>
    