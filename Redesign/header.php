<?php
echo "<!DOCTYPE html>
        <html lang='en'>
            <head>
                <meta charset='utf-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                
                <link rel='stylesheet/less' type='text/css' href='styles.less' />
                <script src='//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js'></script>

                <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
                
                <link href='flexslider.less' rel='stylesheet' type='text/css'>
                <link href='flexslider.css' rel='stylesheet' type='text/css'>
                
                
                <script
                  src='https://code.jquery.com/jquery-3.2.1.min.js'
                  integrity='sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4='
                  crossorigin='anonymous'>
                </script>
                
                
                <script>
                    <!--
                    function dollarConverter(){
                    document.converter.euro.value = document.converter.dollar.value * 0.90
                    document.converter.yuan.value = document.converter.dollar.value * 6.86
                    document.converter.pesos.value = document.converter.dollar.value * 18.48
                    }
                    function euroConverter(){
                    document.converter.dollar.value = document.converter.euro.value * 1.12
                    document.converter.yuan.value = document.converter.euro.value * 7.66
                    document.converter.pesos.value = document.converter.euro.value * 20.63
                    }
                    function pesosConverter(){
                    document.converter.dollar.value = document.converter.pesos.value * 0.054
                    document.converter.euro.value = document.converter.pesos.value * 0.048
                    document.converter.yuan.value = document.converter.pesos.value * 0.37
                    }
                    function yuanConverter(){
                    document.converter.dollar.value = document.converter.yuan.value * 0.15
                    document.converter.pesos.value = document.converter.yuan.value * 2.69
                    document.converter.euro.value = document.converter.yuan.value * 0.13
                    }
                    //-->
                </script>
                
                <script>
                  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                  ga('create', 'UA-100036825-1', 'auto');
                  ga('send', 'pageview');

                </script>
                
                <script src='responsiveslides.js'></script>
                <script src='jquery.flexslider-min.js'></script>
                <script>
                $(document).ready(function() {
                  $('.flexslider').flexslider({
                    animation: 'slide'
                  });
                });
                </script>

                <script>
                  $(function() {
                    $('.rslides').responsiveSlides({
                        pager: false,           // Boolean: Show pager, true or false
                        nav: true,             // Boolean: Show navigation, true or false
                    });
                  });

                </script>
                
                <!-- Bootstrap core CSS -->
                <link href='bootstrap-3.3.7/docs/dist/css/bootstrap.min.css' rel='stylesheet'>

                <title>Nifty Travel Tours</title>
            </head>

            <body>
            
            <div id='fb-root'></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9';
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
            
                <header>
                    <nav class='navbar navbar-fixed-top'>
                        <div class='container-fluid'>
                            <div class='navbar-header'>
                                <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
                                    <span class='sr-only'>Toggle navigation</span>
                                    <span class='icon-bar'></span>
                                    <span class='icon-bar'></span>
                                    <span class='icon-bar'></span>
                                </button>
                                <a class='navbar-brand' href='niftyindex.php'><p>Nifty Tours</p></a>
                            </div> <!-- /.navbar-header -->
                        <div id='navbar' class='collapse navbar-collapse'>
                          <ul class='nav navbar-nav navbar-right'>
                            <li class='active'><a class='top-level-link' href='niftyindex.php'>Welcome</a></li>
                            <li class='dropdown'>
                                <a class='dropdown-toggle top-level-link' data-toggle='dropdown' role='button' href='#'>Tours
                                <span class='caret'></span></a>
                                <ul class='dropdown-menu'>
                                    <li><a href='nifty-best-tours.php'>Best Tours</a></li>
                                    <li><a href='paris.php'>Paris</a></li>
                                </ul>
                            </li>
                            <li class='dropdown'>
                                <a class='dropdown-toggle top-level-link' data-toggle='dropdown' href='#'>Services
                                <span class='caret'></span></a>
                                <ul class='dropdown-menu'>
                                    <li><a href='nifty-services.php'>Services We Provide</a></li>
                                    <li><a href='converter.php'>Currency Exchange</a></li>
                                    <li role='separator' class='divider'></li>
                                    <li><a href='translators.php'>Translators</a></li>
                                    <li><a href='french-translator.php'>French</a></li>
                                    <li><a href='spanish-translator.php'>Spanish</a></li>
                                    <li><a href='chinese-translator.php'>Chinese (Mandarin)</a></li>
                                </ul>
                            </li>
                            <li><a href='contact.php' class='top-level-link'>Contact</a></li>
                            <li id='phone'>Come With Us!<br><i>(503)-555-1212</i></li>
                          </ul>
                        </div><!--/.nav-collapse -->
                        
                    </div><!--/.container-fluid -->
                    <div class='topupperbar'></div><!--divider -->
                </nav>
                    
                </header>"
?>