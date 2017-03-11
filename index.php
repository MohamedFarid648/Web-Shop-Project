<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8 (Without BOM)" />
        <title> Web Shop</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="CSSfiles/reset-min.css" rel="stylesheet" type="text/css" />
        <link href="CSSfiles/fonts-min.css" rel="stylesheet" type="text/css" />
        <link href="CSSfiles/style.css" rel="stylesheet" type="text/css" />
        <!-- JQuery -->
        <!--[if lte IE 8]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
        <!--<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" title="no title" charset="utf-8">
        
        <link href='http://fonts.googleapis.com/css?family=Antic+Slab' rel='stylesheet' type='text/css'>
        -->
        <!-- Use jQuery for best compatibility with other CSS3 enabled browsers -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>

        <script src="flux.js" type="text/javascript" charset="utf-8"></script>

        <script type="text/javascript" charset="utf-8">
            $(function () {
                if (!flux.browser.supportsTransitions)
                    alert("Flux Slider requires a browser that supports CSS3 transitions");

                window.f = new flux.slider('#slider', {
                    pagination: true,
                    controls: true,
                    transitions: ['tiles3d'], //'explode', 'tiles3d', 'bars3d', 'cube','turn'

                    autoplay: true
                });

                $('.transitions').click(function (event) {
                    event.preventDefault();
                    window.f.next($(event.target).data('transition'), $(event.target).data('params'));
                });
            });
        </script>
    </head>

    <body>
        <div id="MyWebsite">
            <div id="header" style="background-image:  url(backgrondWrabber-1.jpg);" >
                <div id="logo">
               <img src="logo_1811421_web.jpg" alt="backgrondWrabber4"/>

                </div>

                <div id="menue" >
                    <ul>
                        <li><a href="?page=MainPage">HOME</a></li>
                        <li><a href="?page=About_Website">About Website</a></li>
                        <li><a href="?page=MyCompanies">Companies</a></li>
                        <li><a href="?page=product">Products</a></li>

                        <?php
                        session_start();
                        if (isset($_SESSION['useremail'])) {
                            // session_start();
                            echo'<li><a href="?page=user_switch">My Account</a></li>';
                        } else {
                            echo '<li><a href="?page=RegisterController">Register</a></li>';
                        }
                        ?>
                        <li ><a href="?page=ContactUs">Contact Us</a></li>

                    </ul>
                    <div id="SocialLinks">
                        <h1>Follow us:</h1>
                        <img src="facebook_32.png" width="32" height="32" alt="facebook_32"/>
                        <img src="twitter_32.png" width="32" height="32" alt="twitter_32"/>
                        <img src="youtube2-128.png" width="32" height="32" alt="youtube2-128"/>


                    </div>
                </div>
            </div>
                <!-- End of Header-->


            <div id="contents">

                <div id="SideBar">


                    <div class="Side" style="      background: url(backgroundSide2.jpg) repeat;">
                        <div class="Side_head" style="           background:url(SideHead7.png) no-repeat;">

                            <h1>New Companies:</h1>
                        </div><!-- End of Side_head -->
                        <div class="Side_body"> 
                            <ul>

                                <?php

                              include "Display.php";
                                $dataUser = new Display('user');
                                $DisplayAllDataCompanyVariable = $dataUser->DisplayLastDataByUsrType(3);
                                // print_r($DisplayAllDataVariable);
                                if ($DisplayAllDataCompanyVariable) {
                                    for ($i = 0; $i < count($DisplayAllDataCompanyVariable); $i++) {
                                        
                                        
                                        
                                    echo"<li><a href='?page=Companypage&Name=" . $DisplayAllDataCompanyVariable[$i]['Name'] .
                                        "&user_email=" . $DisplayAllDataCompanyVariable[$i]['user_email'] .
                                        "&Tel=" . $DisplayAllDataCompanyVariable[$i]['Tel'] . "'>";

                                        echo $DisplayAllDataCompanyVariable[$i]['Name'];
                                        echo"</a>";
                                        echo"</li>";
                                    }//end of for loop
                                }//end of $DisplayAllDataVariable
                                else {
                                    echo '<li><a href=""><font color="blue">There is no Companies untill now ^_^ </font></a></li>';
                                }
                                ?>
                            </ul>

                        </div><!-- End of Side_body -->

                    </div><!-- End of Side -->
                   <div class="Side" style="      background: url(backgroundSide2.jpg) repeat;">
                        <div class="Side_head" style="           background:url(SideHead7.png) no-repeat;">

                            <h1>New Products:</h1>
                        </div><!-- End of Side_head -->
                        <div class="Side_body"> 
                            <ul>              
                                <?php

                                $dataProduct = new Display('product');
                                $num = 5;
                                $DisplayAllDataVariable = $dataProduct->DisplayLastProducts($num);
                                if ($DisplayAllDataVariable) {
                                    for ($i = 0; $i < count($DisplayAllDataVariable); $i++) {
                           echo"<li><a href='?page=ProductPage&id=" . $DisplayAllDataVariable[$i]['product_code'] . "'>";

                                        /*    echo"<li><a href='?page=ProductPage&Company_Name=" . $DisplayAllDataVariable[$i]['c_name'] .
                                          "&Company_Email=" . $DisplayAllDataVariable[$i]['c_mail'] .
                                          "&Price=" . $DisplayAllDataVariable[$i]['price'] .
                                          "&Date=" . $DisplayAllDataVariable[$i]['date'] .
                                          "&Name=" . $DisplayAllDataVariable[$i]['name'] .
                                          "&product_image=" . $DisplayAllDataVariable[$i]['product_image'] . "'>"; */

                                        echo $DisplayAllDataVariable[$i]['name'];
                                        echo"</a>";
                                        echo"</li>";
                                    }//end of for loop
                                }//end of $DisplayAllDataVariable
                                else {
                                    echo '<li><a href=""><font color="blue">There is no products untill now ^_^ </font></a></li>';
                                }
                                ?>

                            </ul>

                        </div><!-- End of Side_body -->

                    </div><!-- End of Side -->
                   <div class="Side" style="      background: url(backgroundSide2.jpg) repeat;">
                        <div class="Side_head" style="           background:url(SideHead7.png) no-repeat;">


                            <h1>Login Form:</h1>
                        </div><!-- End of Side_head -->
                        <div class="Side_body">
                            <?php
//   session_start();
//  $_SESSION['useremail'];

                            if (!isset($_SESSION['useremail'])) {
                                ?>

                                <form action="logincontroller.php" method="POST">
                                    <input type="email" placeholder="Enter Your Email" required="required" name="login_user_mail" value="" />
                                    <br /> <input type="password" required="required" placeholder="Enter Your Password" name="login_user_password" value=""  />
                                    <br /><input type="submit" value="Login" name="login" />

                                </form>
                                <?php
                            } else {

                                echo "<h2>Welcome</h2> <h1>" . $_SESSION['useremail'] . "</h1><br>";
                                echo'  <form action="controller/logout.php" method="POST">
                                           <br /><input type="submit" value="Logout" name="logout" />

                            </form>';
                            }
                            ?>


                        </div><!-- End of Side_body -->

                    </div><!-- End of Side -->
                    <div class="Side" style="      background: url(backgroundSide2.jpg) repeat;">
                        <div class="Side_head" style="           background:url(SideHead7.png) no-repeat;">


                            <h1>Send Email:</h1>
                        </div><!-- End of Side_head -->
                        <div class="Side_body">
                            <form action="controller/SendEmail.php" method="POST">
                                <input type="text" placeholder="Enter Your Name" name="Send_User_Name" value="" />
                                <br />
                                <input type="email" placeholder="Enter Your Email" name="Send_User_Email" value="" />
                                <br />

                                <textarea name="Message" placeholder="Enter Your Message Here  ^_^ ">
                                 Enter Your Message Here  ^_^ 
                                </textarea>
                                <br /><input type="submit" value="Send" name="Send" />

                            </form>

                        </div><!-- End of Side_body -->

                    </div><!-- End of Side -->
                </div><!-- End of SideBar -->

                <div id="context">

                    <?php
                    if (@$_GET['page']) {

                        $url = $_GET['page'] . '.php';
                        if (is_file($url)) {
                            include $url;
                        } else {

                            echo"this page not found";
                        }
                    } else {

               include 'MainPage.php';
                    }
                        ?>

                </div><!-- End of Context -->
            </div><!-- End of contents -->


            <div id="footer">
                <p>
                    All rights reseved to ©  Web  Shop 2015<br>
Thanks Eng /<a href="https://www.youtube.com/user/ali7amdi/playlists" target="_blank">Ali Hamdi</a> ^_^

                </p>
                <div id="SendEmail"></div>
                <div id="Contacts"></div>
            </div><!-- End of footer -->
            <?php ?>
        </div><!-- End of Mywebsite -->

    </body>
</html>
