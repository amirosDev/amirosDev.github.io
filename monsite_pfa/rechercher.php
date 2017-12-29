<?php
if (session_status()== PHP_SESSION_NONE){
    session_start();
}
require_once "db.php";
require "fonctions.php";
require("class/Client.php");


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home Cars</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Myriad_Pro_400.font.js" type="text/javascript"></script>
    <script src="js/Myriad_Pro_600.font.js" type="text/javascript"></script>
    <script src="js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
    <script src="js/NewsGoth_BT_700.font.js" type="text/javascript"></script>
    <script src="js/NewsGoth_Dm_BT_400.font.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <!--[if lt IE 7]>
    <script type="text/javascript" src="js/ie_png.js"></script>
    <script type="text/javascript">ie_png.fix('.png, #header .row-2 ul li a, .extra img, #search-form a, #search-form a em, #login-form .field1 a, #login-form .field1 a em, #login-form .field1 a b');</script>
    <link href="css/ie6.css" rel="stylesheet" type="text/css" />
    <![endif]-->

</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div id="main">
    <div id="header">
        <div class="row-1">
            <div class="fleft"><a href="#"><img src="images/logo.gif" alt="" /></a></div>
            <div class="fright">
                <ul>
                    <li><a href="racing.php"><img src="images/icon1-act.gif" alt="" /></a></li>
                    <li><a href="contact-us.php"><img src="images/icon2.gif" alt="" /></a></li>
                    <li><a href="administrateur.php"><img src="images/icon3.gif" alt="" /></a></li>
                </ul>
            </div>
        </div>

        <?php

        if(isset($_SESSION['auth']))

            echo'<p align ="right"><strong> Bonjour '.' '.$_SESSION['auth']['prenom'].' '.$_SESSION['auth']['nom'].'&nbsp;&nbsp;  '.'<a href="about-us.php">Accéder à votre compte </a>'.' &nbsp;&nbsp;&nbsp; '.'<a href="logout.php">Se déconnecter</a>'.'</strong></p>';

        ?>

        <div class="row-2">
            <div class="left">
                <ul>
                    <li><a href="racing.php" ><span>home</span></a></li>
                    <li><a href="contact-us.php"><span>contact</span></a></li>
                    <li><a href="articles.php"><span>annonces</span></a></li>
                    <li><a href="about-us.php"><span>mon compte</span></a></li>
                    <li class="last"><a href="mecanicien.php"><span>espace mécanicien</span></a></li>
                </ul>
            </div>
        </div>
        <div class="row-3">
            <div class="inside">
                <h2>SpeedRacing  <b> Get the best</b></h2>
                <p><strong>Voulez-vous acheter une voiture et vous ne savez pas comment optimiser votre choix? </strong></p>
                <p> <strong> Nous vous offront la meilleure opportunité pour satisfaire votre besoin!! </strong> <p>
            </div>
        </div>
        <div class="extra"><img src="images/header-img.png" alt="" /></div>
    </div>


    <!--content-->


    <div id="content">
        <div class="indent">
            <div class="wrapper">
                <div class="col-1">
                    <br/><br/>
                    <h3><b>Chercher</b> Annonce</h3>
                    <form id="contacts-form" action="articles.php" method="POST">
                        <fieldset>
                            <p> </p>
                            <div class="field">

                                <label>Marque :</label>
                                <select  name="marque" >

                                    <option value="*" selected="selected">Tous</option>
                                    <option value="Alfa romeo">Alfa romeo</option>
                                    <option value="Alpina">Alpina</option>
                                    <option value="Aston martin">Aston martin</option>
                                    <option value="Audi">Audi</option>
                                    <option value="Bentley">Bentley</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Cadillac">Cadillac</option>
                                    <option value="Chevrolet">Chevrolet</option>
                                    <option value="Chrysler">Chrysler</option>
                                    <option value="Citroën">Citroën</option>
                                    <option value="Dacia">Dacia</option>
                                    <option value="Daewoo">Daewoo</option>
                                    <option value="Daihatsu">Daihatsu</option>
                                    <option value="Dodge">Dodge</option>
                                    <option value="Ferrari">Ferrari</option>
                                    <option value="Fiat">Fiat</option>
                                    <option value="Ford">Ford</option>
                                    <option value="GMC">GMC</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Hummer">Hummer</option>
                                    <option value="Hyundai">Hyundai</option>
                                    <option value="Infiniti">Infiniti</option>
                                    <option value="Isuzu">Isuzu</option>
                                    <option value="Jaguar">Jaguar</option>
                                    <option value="Jeep">Jeep</option>
                                    <option value="Kia">Kia</option>
                                    <option value="Lada">Lada</option>
                                    <option value="Lamborghini">Lamborghini</option>
                                    <option value="Lancia">Lancia</option>
                                    <option value="Land Rover">Land Rover</option>
                                    <option value="Lexus">Lexus</option>
                                    <option value="Lotus">Lotus</option>
                                    <option value="Maserati">Maserati</option>
                                    <option value="Maybach">Maybach</option>
                                    <option value="Mazda">Mazda</option>
                                    <option value="Mercedes-Benz">Mercedes-Benz</option>
                                    <option value="MG">MG</option>
                                    <option value="Mini">Mini</option>
                                    <option value="Mitsubishi">Mitsubishi</option>
                                    <option value="Nissan">Nissan</option>
                                    <option value="Opel">Opel</option>
                                    <option value="Peugeot">Peugeot</option>
                                    <option value="Pontiac">Pontiac</option>
                                    <option value="Porsche">Porsche</option>
                                    <option value="Renault">Renault</option>
                                    <option value="Rolls Royce">Rolls Royce</option>
                                    <option value="Rover">Rover</option>
                                    <option value="Saab">Saab</option>
                                    <option value="Seat">Seat</option>
                                    <option value="Skoda">Skoda</option>
                                    <option value="Smart">Smart</option>
                                    <option value="Ssangyong">Ssangyong</option>
                                    <option value="Subaru">Subaru</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Volkswagen">Volkswagen</option>
                                    <option value="Volvo">Volvo</option>
                                </select>

                            </div>
                            <p> </p><br/>
                            <div class="field">
                                <label>Kilometrage : Maximum </label>
                                <select  name="kilometrage" >
                                    <option value="*" selected="selected">Tous</option>
                                    <option value="5000">5 000</option>
                                    <option value="10000">10 000</option>
                                    <option value="20000">20 000</option>
                                    <option value="30000">30 000</option>
                                    <option value="40000">40 000</option>
                                    <option value="50000">50 000</option>
                                    <option value="60000">60 000</option>
                                    <option value="70000">70 000</option>
                                    <option value="80000">80 000</option>
                                    <option value="90000">90 000</option>
                                    <option value="100000">100 000</option>
                                    <option value="125000">125 000</option>
                                    <option value="150000">150 000</option>
                                    <option value="200000">200 000</option>
                                    <option value="250000">250 000</option>
                                    <option value="300000">300 000</option>
                                    <option value="350000">350 000</option>
                                    <option value="450000">450 000</option>
                                    <option value="500000">500 000</option>
                                    <option value="600000">600 000</option>
                                    <option value="700000">700 000</option>
                                    <option value="800000">800 000</option>
                                    <option value="900000">900 000</option>
                                </select>

                            </div>
                            <p> </p><br/>
                            <div class="field">
                                <label>Année : Minimum </label>
                                <select  name="annee" >

                                    <option value="*" selected="selected">Tous</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                    <option value="1922">1922</option>
                                    <option value="1921">1921</option>
                                    <option value="1920">1920</option>
                                    <option value="1919">1919</option>
                                    <option value="1918">1918</option>
                                    <option value="1917">1917</option>
                                    <option value="1916">1916</option>
                                    <option value="1915">1915</option>
                                    <option value="1914">1914</option>
                                    <option value="1913">1913</option>
                                    <option value="1912">1912</option>
                                    <option value="1911">1911</option>
                                    <option value="1910">1910</option>
                                    <option value="1909">1909</option>
                                    <option value="1908">1908</option>
                                    <option value="1907">1907</option>
                                    <option value="1906">1906</option>
                                    <option value="1905">1905</option>
                                    <option value="1904">1904</option>
                                    <option value="1903">1903</option>
                                    <option value="1902">1902</option>
                                    <option value="1901">1901</option>
                                    <option value="1900">1900</option>
                                </select>
                            </div>
                            <p> </p><br/>
                            <div class="field">
                                <label>Carburant :</label>
                                <select  name="carburant" >
                                    <option value="*" selected="selected">Tous</option>
                                    <option value="Essence">Essence</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="GPL">GPL</option>
                                    <option value="Hybride">Hybride</option>
                                    <option value="Electrique">Electrique</option>
                                </select>

                            </div>
                            <p> </p><br/>
                            <div class="field">
                                <label>Prix Maximum :  </label>
                                <select  name="prix" >
                                    <option value="*" selected="selected">Tous</option>
                                    <option value="500">500</option>
                                    <option value="1000">1 000</option>
                                    <option value="2000">2 000</option>
                                    <option value="3000">3 000</option>
                                    <option value="4000">4 000</option>
                                    <option value="5000">5 000</option>
                                    <option value="6000">6 000</option>
                                    <option value="7000">7 000</option>
                                    <option value="8000">8 000</option>
                                    <option value="9000">9 000</option>
                                    <option value="10000">10 000</option>
                                    <option value="11000">11 000</option>
                                    <option value="12000">12 000</option>
                                    <option value="13000">13 000</option>
                                    <option value="14000">14 000</option>
                                    <option value="15000">15 000</option>
                                    <option value="16000">16 000</option>
                                    <option value="17000">17 000</option>
                                    <option value="18000">18 000</option>
                                    <option value="19000">19 000</option>
                                    <option value="20000">20 000</option>
                                    <option value="22000">22 000</option>
                                    <option value="25000">25 000</option>
                                    <option value="27000">27 000</option>
                                    <option value="30000">30 000</option>
                                    <option value="35000">35 000</option>
                                    <option value="40000">40 000</option>
                                    <option value="45000">45 000</option>
                                    <option value="50000">50 000</option>
                                    <option value="55000">55 000</option>
                                    <option value="60000">60 000</option>
                                    <option value="70000">70 000</option>
                                    <option value="80000">80 000</option>
                                    <option value="90000">90 000</option>
                                    <option value="100000">100 000</option>
                                    <option value="250000">250 000</option>
                                    <option value="500000">500 000</option>
                                </select>
                            </div>
                            <p> </p><br/>

                            <div class="field">
                                <label>Gouvernorat :  </label>
                                <select  name="gouvernorat" >
                                    <option value="*" selected="selected">Tous</option>
                                    <option value="Ariana">Ariana</option>
                                    <option value="Beja">Béja</option>
                                    <option value="Ben Arous">Ben Arous</option>
                                    <option value="Bizerte">Bizerte</option>
                                    <option value="Gabès">Gabès</option>
                                    <option value="Gafsa">Gafsa</option>
                                    <option value="Jendouba">Jendouba</option>
                                    <option value="Kairouan">Kairouan</option>
                                    <option value="Kasserine">Kasserine</option>
                                    <option value="Kébili">Kébili</option>
                                    <option value="Kef">Kef</option>
                                    <option value="Mahdia">Mahdia</option>
                                    <option value="Manouba">Manouba</option>
                                    <option value="Mednine">Médenine</option>
                                    <option value="Monastir">Monastir</option>
                                    <option value="Nabeul">Nabeul</option>
                                    <option value="Sfax">Sfax</option>
                                    <option value="Sidi Bouzid">Sidi Bouzid</option>
                                    <option value="Siliana">Siliana</option>
                                    <option value="Sousse">Sousse</option>
                                    <option value="Tataouine">Tataouine</option>
                                    <option value="Tozeur">Tozeur</option>
                                    <option value="Tunis">Tunis</option>
                                    <option value="Zaghouan">Zaghouan</option>
                                </select>
                            </div>

                            <p> </p> <br/>
                            <div class="wrapper"><a href="#" onclick="document.getElementById('contacts-form').submit()" class="link1"><em><b>SUBMIT</b></em></a></div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>






    <!-- FOOTER -->
    <div id="footer">
        <div class="footer-nav">
            <div class="left">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Annonces</a></li>
                    <li><a href="#">Compte</a></li>
                    <li><a href="#">méca</a></li>
                </ul>
            </div>
        </div>
        <div class="footerlink">

            <div style="clear:both;"></div>
        </div>
    </div>

</div>

<script type="text/javascript"> Cufon.now(); </script>


</body>
</html>
