

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact Us for a Great Trip | Nifty Tours</title>
<link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
<link href="assets/nifty-main-style.css" rel="stylesheet" type="text/css">
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
</head>

<body>
<div id="topupperbar"></div>
<div id="toplowerbar"></div>
<div id="mainblock">
  <div class="centerwrap">
    <header>
      <nav>
        <ul class="level1">
          <li><a href="index.html">Welcome</a></li>
          <li class="submenu"><a href="nifty-best-tours.html">Tours
            </a>
            <ul class="level2">
              <li><a href="paris.html">Paris</a></li>
              <li><a href="#">Rome</a></li>
              <li><a href="#">Taj Mahal</a></li>
              <li><a href="#">Athens</a></li>
              <li><a href="#">Kyoto</a></li>
            </ul>
          </li>
          <li class="submenu"><a href="nifty-services.html">Services
            </a>
            <ul class="level2">
              <li><a href="#">Guides</a></li>
              <li class="submenu"><a href="translators.html">Translators
                </a>
                <ul class="level3">
                  <li><a href="french-translator.html">French</a></li>
                  <li><a href="chinese-translator.html">Chinese (Mandarin)</a></li>
                  <li><a href="spanish-translator.html">Spanish</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="nifty-tours-blog">Stories</a></li>
          <li class="submenu"><a class="current" href="#">Contact Us
            </a>
            <ul class="level2">
              <li class="submenu"><a href="#">Reservations
                </a>
                <ul class="level3">
                  <li><a href="#">Airline</a></li>
                  <li><a href="#">Cruise Ship</a></li>
                  <li><a href="#">Hotels</a></li>
                  <li><a href="#">Rental Cars</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <div id="logo"><img src="assets/images/nifty-tours-logo.png" width="225" height="201" alt="Nifty Tours logo"></div>
      <div id="action">
        <p><a href="contact.html">Come with us!</a> <span class="emphasized">503-555-1212</span></p>
      </div>
    </header>
    <div class="clearit"></div>
	<div id="about">
	  <h1>Many Ways to Contact Us</h1>
	  <p><em>And we respond fast!</em></p>
	  <hr>
<p>Our expert  staff can answer questions about</p>
	  <ul>
	    
        <li>Tour Packages and Prices</li>
        <li>Airplane schedules</li>
        <li>Car rentals</li>
        <li>Hotel availability</li>
        <li>Language issues</li>
        <li>and much more</li>
      </ul>
    </div>
    <div id="slideshow"><img src="assets/images/contact.png" width="522" height="340" alt="Nifty travel picture" /></div>
    <div class="clearit"></div>
  </div>
</div>
<div id="midbar"></div>
<div id="midtextblock">
  <div class="centerwrap">
    <div id="tours">
      <h2>Nifty Tours</h2>
      <p>12000 Southwest 49th Avenue</p>
<p>Portland, Oregon 97219</p>
<p>&nbsp;</p>
      <p>(503) 555-1212</p>
      <p>&nbsp;</p>
      <p><img src="assets/images/nifty-contact.png" width="123" height="23"></p>
    </div>
	<div class="contactspecial" id="special">
	  <h2>Please Use This Convenient Form</h2>
	  <p>&nbsp;</p>
	  <form action="formaction.php" method="post" name="contact" id="contact">
	    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	      <tr>
	        <td width="33%"><label for="name">Your name</label></td>
	        <td width="67%"><input type="text" name="name" id="name" required></td>
          </tr>
	      <tr>
	        <td><label for="email">Your email</label></td>
	        <td><input type="email" name="email" id="email" required></td>
          </tr>
	      <tr>
	        <td><label for="date">Around what date do you want to take the trip? </label></td>
	        <td><input type="date" name="date" id="date"></td>
          </tr>
	      <tr>
	        <td><label for="tours[]">Which tours interest you?</label><br><br>
            <em>Hold down Ctrl (Windows) or Cmd (Mac) to select multiple tours</em></td>
	        <td><select name="tours" size="4" multiple id="tours">
                <option value="Paris">Paris, France</option>
                <option value="Rome">Rome, Italy</option>
                <option value="Greece">Athens, Greece</option>
                <option value="Agra">Taj Mahal</option>
                <option value="Kyoto">Kyoto, Japan</option>
                <option value="All">All of the above!</option>
                <option value="Other">Other (describe below)</option>
            </select></td>
          </tr>
	      <tr>
	        <td><label for="comments">Is there any other travel info we can provide you?</label></td>
	        <td><textarea name="comments" id="comments" cols="40" rows="5"></textarea></td>
          </tr>
	      <tr>
	        <td>&nbsp;</td>
	        <td><input type="submit" name="submit" id="submit" value="Click to Send"></td>
          </tr>
        </table>
	  </form>
	</div>
	<div class="removeit" id="quote"></div>
    <div class="clearit"></div>
  </div>
</div>
<div id="footerbar">
  <div class="centerwrap">
    <footer>
	  <div id="social">
      <a href="http://www.facebook.com/NiftyTours" target="_blank"><img src="assets/images/facebook-logo.png" width="18" height="25" alt="Facebook link"><span>Facebook</span></a>
      <a href="https://twitter.com/NiftyTours" target="_blank"><img src="assets/images/twitter-logo.png" width="34" height="25" alt="Twitter link"><span>Twitter</span></a>
      </div>
      <div id="copyright">
        <p>Nifty Tours &copy; 2003-2013<br />
          Website Designed by Jane Doe</p>
      </div>
    </footer>   
    <div class="clearit"></div>
  </div>
</div>
</body>
</html>

<? include("formaction.php"); ?>