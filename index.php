<?php 
$year = date('Y');
$name = "Ian Rew";
$copy = "&copy;";
$footer = $copy.' '.$name.' '.$year;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <title>Ians Index</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/content.css">
    </head>
    <body>
        
        <div class="header">
            <div class="container">  
                <h1>Dashboard</h1>
            </div> <!--End of container   -->
        </div>
        <div class="content">
            <div class="container">
                <div class="rows">
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">Development Sites</div>
                            <div class="panel-body">
                                <p><a href="http://localhost/phpmyadmin" target="blank">phpMyadmin</a></p>
                                <p><a href="https://my.justhost.com/web-hosting/cplogin" target="blank">Just host login</a></p>
                                <p><a href="https://github.com/" target="blank">GitHub</a></p>
                                <p><a href="http://localhost/basic_site/" target="new">Basic Site</a></p>
                                <p><a href="http://localhost/basic_site/admin" target="new">Basic Site Admin</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">Live Sites</div>
                            <div class="panel-body">
                                <p><a href="http://www.clwydianbowls.com/" target="blank">Clwydian Bowls</a></p>
                                <p><a href="http://stasaph.clwydianbowls.com/index.php" target="blank">St Asaph</a></p> 
                                <p><a href="http://wcgbars.clwydianbowls.com/index.php" target="new">WCGARS</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">Useful Links</div>
                            <div class="panel-body">
                                <p><a href="http://getbootstrap.com/" target="blank">Bootstrap</a></p>
                                <p><a href="http://jqueryui.com/" target="blank">jquery Ui</a></p>
                                <p><a href="http://jquery.com/" target="blank">jquery</a></p>
                                <p><a href="http://fortawesome.github.io/Font-Awesome/" target="blank">Font Awsome</a></p>
                                <p><a href="https://www.youtube.com/watch?v=VURO2jqy3fw&index=3&list=PLAkMqlQoeMeiwvNWpe3mhgQxAa1jiGwmt" target="blank">Dynamic site tutorial</a></p>
                                <p><a href="https://www.dropbox.com/" target="blank">Dropbox</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        
                        <div class="panel panel-default">
                            <div class="panel-heading">W3 Schools</div>
                            <div class="panel-body">
                                <p><a href="http://www.w3schools.com/html/default.asp" target="blank">HTML</a></p>
                                <p><a href="http://www.w3schools.com/css/default.asp" target="blank">CSS</a></p>
                                <p><a href="http://www.w3schools.com/sql/default.asp" target="blank">SQL</a></p>
                                <p><a href="http://www.w3schools.com/php/default.asp" target="blank">PHP</a></p>
                                <p><a href="http://www.w3schools.com/bootstrap/default.asp" target="blank">Bootstrap</a></p>
                                <p><a href="http://www.w3schools.com/jquery/default.asp" target="blank">Jquery</a></p>
                                <p><a href="http://www.w3schools.com/ajax/default.asp" target="blank">Ajax</a></p>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
        
        <div class="footer">
            <div class="container">
                <p class="center"><?php echo $footer; ?></p>  
            </div>
        </div>
    </body>
</html>
