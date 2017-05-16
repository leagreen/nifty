<?php include 'header.php';?>

<main>
    <section class="Featured ContactFeatured col-md-6">
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
    
    </section>
    
    <section class="Featured col-md-6">
        <h2>Nifty Tours</h2>
        <p>12000 Southwest 49th Avenue</p>
        <p>Portland, Oregon 97219</p>
        <p>&nbsp;</p>
        <p>(503) 555-1212</p>
    </section>
    <div class="toplowerbar"></div>
    
    <section class="RelatedLinks FirstLink">
        <h2>Please Use This Convenient Form</h2>

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
                   <td><label for="tours[]">Which tours  interest you?</label><br><br>
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
    
    </section>


</main>

<?php include 'footer.php';?>