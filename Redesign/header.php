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
                
                <script>
                    $(document).ready(function(){
                        $('#convert').click(function(e){
                         $('#quan').html("");
                            $('#quan').html('Processing...');
                            var amt = $('#amt').val();
                            var from = $('#from').val();
                            var to = $('#to').val();

                            $.post('convert.php',{amt:amt, from:from, to:to}, function(res){
                            $('#quan').html(amt +'('+ from +') = ');
                            $('#quan_res').html(res + '(' +to +')');		
                            });		
                        });
                    });
                </script>

                <!-- Bootstrap core CSS -->
                <link href='bootstrap-3.3.7/docs/dist/css/bootstrap.min.css' rel='stylesheet'>

                <title>Nifty Travel Tours</title>
            </head>

            <body>
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
                                <a class='navbar-brand' href='#'><p>Nifty Tours</p></a>
                            </div> <!-- /.navbar-header -->
                        <div id='navbar' class='collapse navbar-collapse'>
                          <ul class='nav navbar-nav navbar-right'>
                            <li class='active'><a class='top-level-link' href='niftyindex.php'>Welcome</a></li>
                            <li class='dropdown'>
                                <a class='dropdown-toggle top-level-link' data-toggle='dropdown' role='button' href='#'>Tours & Locations
                                <span class='caret'></span></a>
                                <ul class='dropdown-menu'>
                                    <li><a href='nifty-best-tours.php'>Best Tours</a></li>
                                    <li><a href='paris.php'>Paris</a></li>
                                </ul>
                            </li>
                            <li class='dropdown'>
                                <a class='dropdown-toggle top-level-link' data-toggle='dropdown' href='#'>We're Here to Help
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
                            <li><a class='top-level-link' href='#'>Stories</a></li>
                            <li><a href='contact.php' class='top-level-link'>Contact</a></li>
                            <li id='phone'>Come With Us! (503)-555-1212</li>
                          </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
                    <div class='topupperbar'></div><!--divider -->
                </header>"
?>