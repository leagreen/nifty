<?php include 'header.php';?>

<main>
    <section class="Featured">
        <h1>Many Ways to Contact Us</h1>
         <p><em>And we respond fast!</em></p>
        
    <div id="contactinfo" class="Featured col-md-4">
        
                    
            <h2>Nifty Tours</h2>
            <p><img src="images/location.png" height="20px" alt="location">12000 Southwest 49th Avenue</p>
            <p>Portland, Oregon 97219</p>
            <p><img src="images/phone.png" height="20px" alt="phone">&nbsp;(503) 555-1212</p>
            <p><img src="images/mail.png" height="20px" alt="mail">&nbsp;<a href="mailto:tours@nifty.com">tours@nifty.com</a></p>
        
        </div>
        
                <div id="map" class="Featured col-md-4">
            <img id="map" src="images/map.png" width="250" height="250" alt="Nifty Map">
        </div>
        
        <div class="Featured ContactFeatured col-md-4">
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
        

        


    </section>  

     <div class="toplowerbar"></div>
    
    <section class="RelatedLinks FirstLink" style="padding-bottom:30px !important;">

        <h2 style="margin-top: 0">Please Use This Convenient Form</h2>

        <form action="formaction.php" method="post" name="contact" id="contact">
            
            <table id="contactMOBILE" border="0" cellspacing="0" cellpadding="0">
               <tr>
                   <td width="50%"><label for="name">Your name</label></td>
                </tr>
               <tr>
                   <td width="50%"><input type="text" name="name" id="name" required class="formColor"></td>
               </tr>
               <tr>
                   <td><label for="email">Your email</label></td>
               </tr>
               <tr>
                   <td><input type="email" name="email" id="email" required class="formColor"></td>
               </tr>
               <tr>
                   <td><label for="date">Around what date do you want to take the trip? </label></td>
               </tr>
               <tr>
                   <td><input type="date" name="date" id="date" class="formColor"></td>
               </tr>
               <tr>
                   <td><label for="tours[]">Which tours  interest you?</label><br>
                       <em class="emFULL">Hold down Ctrl (Windows) or Cmd (Mac) to select multiple tours</em></td>
                </tr>
               <tr>
                   <td><select name="tours[]" size="4" multiple id="tours[]" style="margin-bottom: 3%;">
                       <option value="Paris" class="formColor">Paris, France</option>
                       <option value="Rome" class="formColor">Rome, Italy</option>
                       <option value="Greece" class="formColor">Athens, Greece</option>
                       <option value="Agra" class="formColor">Taj Mahal</option>
                       <option value="Kyoto" class="formColor">Kyoto, Japan</option>
                       <option value="All" class="formColor">All of the above!</option>
                       <option value="Other" class="formColor">Other (describe below)</option>
                       </select></td>
               </tr>
               <tr>
                   <td><label for="comments">Is there any other travel info we can provide you?</label><br>
                       <em class="emFULL">Click and drag lower right corner of text box to enlarge</em></td>
               </tr>
               <tr>
                   <td><textarea name="comments" id="comments" cols="30" rows="5" class="formColor"></textarea></td>
               </tr>
               <tr>
                   <td>&nbsp;</td>
               </tr>
               <tr>
                   <td id="submitTD"><input type="submit" name="submit" id="submit" value="Click to Send" class="formColor"></td>
               </tr>
            </table>

            
        </form>
    
    </section>


</main>

<?php include 'footer.php';?>