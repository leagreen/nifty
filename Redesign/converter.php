<?php include 'header.php';?>

<main>        
    <section class="Featured">
        <h1>One Way, or Another</h1>
            <h2>A Nifty Currency Exchange Tool</h2>
        
        <div class="col-md-6">

            <p>Our online currency exchange calculator is a free tool available for your convenience. Simple enter the amount of cash readily available for your trip, select the desired currency, and Voila!</p>
        
        
        <div id="currency-converter">
            <form name="converter">
            <table border="0">
                
            <tr>
            <td>US Dollar: </td><td><input type="text" name="dollar" onChange="dollarConverter()" /></td>
            </tr>
            <tr>
            <td>Euro: </td><td><input type="text" name="euro" onChange="euroConverter()" /></td>
            </tr>
            <tr>
            <td>Mexican Peso:</td><td><input type="text" name="pesos" onChange="pesosConverter()" /></td>
            </tr>
            <tr>
            <td>Chinese Yuan: </td><td><input type="text" name="yuan" onChange="yuanConverter()" /></td>
            </tr>
            <tr>
            <td colspan="2" align="center"><input type="button" value="Convert!" /></td>
            </tr>
            </table>
            </form>
        </div>
            </div>
        
          <div class="col-md-6 feature-photo"><img src="images/money.png" alt="international currency"></div>
    </section>

    <div class="toplowerbar"></div>
    
    <div class="row match-my-cols">
    <section class="RelatedLinks FirstLink col-md-4">
            <h2>See the World!</h2>
            <p>Go places and do things you only dreamed about and see wonderous creatures that you only heard about in legends...<br>
            <br>
            Look, but don't touch! </p>
            <p>&nbsp;</p>
            <p><img src="images/loch-ness.jpg" width="250" height="300" alt="Travel Adventure"></p>
            <p>&nbsp;</p>
            <p><a href="contact.php">Tell us about your dream trip...</a></p>
    </section>

    <section class="RelatedLinks SecondLink col-md-4">
            <h2>Guides</h2>
            <p>Experienced guides that go with you every step of the way, and stay by your side, even when it may seem inappropriate...<br>
            <br>
            Travel the Nifty way!</p>
            <p>&nbsp;</p>
            <p><img src="images/guides.png" width="230" height="335" alt="Travel Adventure"></p>
            <p>&nbsp;</p>
            <p><a href="nifty-best-tours.php">Tours you'll never forget...</a></p>
    </section>

    <section class="RelatedLinks ThirdLink col-md-4">
            <h2>Expert Translators</h2>
            <p>Nifty has you covered with Chinese, Spanish and French -- over half of the major world languages! (Well, we're counting English, too.)</p>
            <p>&nbsp;</p>
            <p>Major world languages spoken by 
            native and second language speakers</p>

            <p>&nbsp;</p>
            <p><a href="translators.php">What kind of  translator do you need?</a></p>
            <p>&nbsp;</p>
            <p>We've done some crazy things over the years, and we're not proud of all of it, but we'd probably do it again if you ask us to.</p>
            <p>&nbsp;</p>
            <p><a href="contact.php">Call about our other  services...</a></p>
    </section>
    </div>
</main>
        
<?php include 'footer.php';?>