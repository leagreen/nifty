<?php include 'header.php';?>
<main>
    <section class="Featured">
        <div class="row">
                <h1>The Paris Tour</h1>
                <p><em>Eiffel Tower, Louvre, Montmarte and more</em></p>
                <hr>
            <div class="col-md-6">

                <p>Top Paris Activities</p>
                <ul>
                    <li>Spend a few hours losing yourself in the Metro</li>
                    <li>Go to Notre Dame during peak time</li>
                    <li>Attempt to break the speed record for the top 3 exhibits in the Louvre</li>
                    <li>End your day and your feet at the Eiffel Tower!</li>
                </ul>
            </div>

            <div class="col-md-6 feature-photo">
                <img src="images/paris.png" alt="Nifty travel picture" />
            </div>
        </div>
    </section>

    <div class="toplowerbar"></div>
    
    <div class="row match-my-cols">
        
        <section class="RelatedLinks FirstLink col-md-4">
            <h2>Paris!</h2>
            <p>City of Lovers, City of Lights, City of Blisters...<br />
            <br>
            Something for everyone!</p>
            <p><img src="images/paris-mona-greg.jpg" width="250" height="328" alt="Travel Adventure"></p>
            <p><a href="french-translator.php">Need a French-speaking guide or translator?</a></p>
        </section>
        
        <section class="RelatedLinks SecondLink col-md-4">
            <div class="tourvideo" id="quote">
                <h2>A Louvre Moment</h2>
                <p>Watch as a Nifty traveler experiences Paris. This can be your adventure, too!</p>
                <p>&nbsp;</p>

                <!-- Video section  begins -->

                <video id="movie" preload controls>
                    <source src="video/louvre-paris.webm" type="video/webm; codecs='vp8, vorbis'" />
                    <source src="video/louvre-paris.ogv" type="video/ogg; codecs='theora, vorbis'" />
                    <source src="video/louvre-paris.mp4" />
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="360" height="240" id="FLVPlayer">
                        <param name="movie" value="FLVPlayer_Progressive.swf" />
                        <param name="quality" value="high" />
                        <param name="wmode" value="opaque" />
                        <param name="scale" value="noscale" />
                        <param name="salign" value="lt" />
                        <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=video/louvre-paris&amp;autoPlay=false&amp;autoRewind=true" />
                        <param name="swfversion" value="8,0,0,0" />
                        <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
                        <param name="expressinstall" value="video/expressInstall.swf" />
                        <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
                        <!--[if !IE]>-->
                        <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="360" height="240">
                            <param name="quality" value="high" />
                            <param name="wmode" value="opaque" />
                            <param name="scale" value="noscale" />
                            <param name="salign" value="lt" />
                            <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=video/louvre-paris&amp;autoPlay=false&amp;autoRewind=true" />
                            <param name="swfversion" value="8,0,0,0" />
                            <param name="expressinstall" value="video/expressInstall.swf" />
                            <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                            <div>
                              <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
                            </div>
                        </object>
                    </object>
                    <p>Your browser may not support this video format. You can download the video to play on your own PC as <a href="video/louvre-paris.mp4">MP4</a>, <a href="video/louvre-paris.webm">WebM</a>, or <a href="video/louvre-paris.ogv">Ogg</a>.</p>
                </video>
                <script type="text/javascript">swfobject.registerObject("FLVPlayer");</script>

                <!-- Video section ends -->

                <p><a href="nifty-tours-blog/" class="emphasized">More moments in our blog...</a></p>
            </div>
        </section>
        
        
        
        <section class="RelatedLinks ThirdLink col-md-4">
            <h2>Day Trips</h2>
            <p>Five day plan for a magical trip!</p>
	 
            <table border="1">
                <tr>
                  <th scope="col" id="DayTable">Day</th>
                  <th scope="col">AM</th>
                  <th scope="col">PM</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Eiffel Tower (inside and to the top)</td>
                  <td>Pompidou Center</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Louvre Museum</td>
                  <td>Dining and shopping on the<br />
                    Champs Elysees</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Notre Dame Cathedral</td>
                  <td>Dining outside the Arc de Triomphe</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Montmartre</td>
                  <td>Moulin Rouge</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Walk along the Seine River</td>
                  <td>Eiffel Tower (outside at night)</td>
                </tr>
            </table>
            <p><a href="nifty-services.php" class="emphasized">More about Nifty services...</a></p>
        </section>
        
    </div>
</main>                            
                                                       
<?php include 'footer.php';?>
                                                       