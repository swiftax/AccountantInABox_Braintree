<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=10" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="">
	<meta name="author" content="">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Accountant In A Box - Automate Your Back Office</title>

    <!-- css -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet">
   <link rel="stylesheet" href="css/validationEngine.jquery.css" />	<!-- This is for the validation engine -->
    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/favicon.png">
	
	<!--open graph-->
    <meta property="og:title" content="Account in a box" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="images/opengraph.jpg" />

    <script type='text/javascript' src='//app.practiceignition.com/ignite.js'></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" id="menuBtn" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#home">Home</a></li>
              <li><a href="#services">About</a></li>
              <li><a href="#pricing">Pricing</a></li>
              <li><a href="#xero">Xero</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
                                    
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
        
      <section id="contact" class="contact-panel">
            <div class="container">
               <div class="row">                    
                    <aside class="col-sm-12 contact-form" style="width:100%;">
                    	
                        <form id="checkout" action="process.php" method="post">
                        	<input type="hidden" name="planid" value="<?php echo $_REQUEST['planid'];?>" />
                            <h2>CHECKOUT</h2>
                            <p>Please enter your credit card information.</p>
                            <p>You have selected <?php echo $_REQUEST['planname'];?> plan for $<?php echo $_REQUEST['price'].'.00';?></p>
                            <div id="success"></div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="firstname" class="form-control validate[required]" placeholder="First Name">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="lastname" class="form-control validate[required]" placeholder="Last Name">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="address" class="form-control validate[required]" placeholder="Address">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="city" class="form-control validate[required]" placeholder="City">
                            </div>
                            
                             <div class="form-group col-sm-6">
                            <select class="form-control  validate[required]" id="country" name="country"> 
                                <option value="">Please Select</option> 
                                <option selected="" value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="UK">United Kingdom</option>
                                <option value="AU">Australia</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BR">Brazil</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, The Democratic Republic of the</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Cote D`Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran (Islamic Republic Of)</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea North</option>
                                <option value="KR">Korea South</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Laos</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macau</option>
                                <option value="MK">Macedonia</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia</option>
                                <option value="MD">Moldova</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="NA">Namibia</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestine Autonomous</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="MP">Saipan</option>
                                <option value="SM">San Marino</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovak Republic</option>
                                <option value="SI">Slovenia</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="KN">St. Kitts/Nevis</option>
                                <option value="LC">St. Lucia</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syria</option>
                                <option value="TW">Taiwan</option>
                                <option value="TI">Tajikistan</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TH">Thailand</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands (British)</option>
                                <option value="VI">Virgin Islands (U.S.)</option>
                                <option value="WF">Wallis and Futuna Islands</option>
                                <option value="YE">Yemen</option>
                                <option value="YU">Yugoslavia</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                            </div>
                            <div class="form-group col-sm-6">
                            <select  class="form-control  validate[required]" id="state" name="state">
                         	<option value="">Please Select State/Province</option>
                          <optgroup label="Australian Provinces">
                              <option value="-AU-NSW">New South Wales</option>
                              <option value="-AU-QLD">Queensland</option>
                              <option value="-AU-SA">South Australia</option>
                              <option value="-AU-TAS">Tasmania</option>
                              <option value="-AU-VIC">Victoria</option>
                              <option value="-AU-WA">Western Australia</option>
                              <option value="-AU-ACT">Australian Capital Territory</option>
                              <option value="-AU-NT">Northern Territory</option>
                          </optgroup>
                          <optgroup label="Canadian Provinces">
                              <option value="AB">Alberta</option>
                              <option value="BC">British Columbia</option>
                              <option value="MB">Manitoba</option>
                              <option value="NB">New Brunswick</option>
                              <option value="NF">Newfoundland</option>
                              <option value="NT">Northwest Territories</option>
                              <option value="NS">Nova Scotia</option>
                              <option value="NVT">Nunavut</option>
                              <option value="ON">Ontario</option>
                              <option value="PE">Prince Edward Island</option>
                              <option value="QC">Quebec</option>
                              <option value="SK">Saskatchewan</option>
                              <option value="YK">Yukon</option>
                          </optgroup>
                          <optgroup label="US States">
                              <option value="AL">Alabama</option>
                              <option value="AK">Alaska</option>
                              <option value="AZ">Arizona</option>
                              <option value="AR">Arkansas</option>
                              <option value="BVI">British Virgin Islands</option>
                              <option value="CA">California</option>
                              <option value="CO">Colorado</option>
                              <option value="CT">Connecticut</option>
                              <option value="DE">Delaware</option>
                              <option value="FL">Florida</option>
                              <option value="GA">Georgia</option>
                              <option value="GU">Guam</option>
                              <option value="HI">Hawaii</option>
                              <option value="ID">Idaho</option>
                              <option value="IL">Illinois</option>
                              <option value="IN">Indiana</option>
                              <option value="IA">Iowa</option>
                              <option value="KS">Kansas</option>
                              <option value="KY">Kentucky</option>
                              <option value="LA">Louisiana</option>
                              <option value="ME">Maine</option>
                              <option value="MP">Mariana Islands</option>
                              <option value="MPI">Mariana Islands (Pacific)</option>
                              <option value="MD">Maryland</option>
                              <option value="MA">Massachusetts</option>
                              <option value="MI">Michigan</option>
                              <option value="MN">Minnesota</option>
                              <option value="MS">Mississippi</option>
                              <option value="MO">Missouri</option>
                              <option value="MT">Montana</option>
                              <option value="NE">Nebraska</option>
                              <option value="NV">Nevada</option>
                              <option value="NH">New Hampshire</option>
                              <option value="NJ">New Jersey</option>
                              <option value="NM">New Mexico</option>
                              <option value="NY">New York</option>
                              <option value="NC">North Carolina</option>
                              <option value="ND">North Dakota</option>
                              <option value="OH">Ohio</option>
                              <option value="OK">Oklahoma</option>
                              <option value="OR">Oregon</option>
                              <option value="PA">Pennsylvania</option>
                              <option value="PR">Puerto Rico</option>
                              <option value="RI">Rhode Island</option>
                              <option value="SC">South Carolina</option>
                              <option value="SD">South Dakota</option>
                              <option value="TN">Tennessee</option>
                              <option value="TX">Texas</option>
                              <option value="UT">Utah</option>
                              <option value="VT">Vermont</option>
                              <option value="USVI">VI  U.S. Virgin Islands</option>
                              <option value="VA">Virginia</option>
                              <option value="WA">Washington</option>
                              <option value="DC">Washington, D.C.</option>
                              <option value="WV">West Virginia</option>
                              <option value="WI">Wisconsin</option>
                              <option value="WY">Wyoming</option>
                          </optgroup>
                           <option value="N/A">Other</option>
                        </select>
                        </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="user_email" class="form-control validate[required,custom[email]]" placeholder="E-mail ID">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="user_phone" class="form-control validate[required]" placeholder="Phone">
                            </div>
                            
                            <div class="form-group col-sm-12">
                                <input type="text" name="full_name" class="form-control validate[required]" placeholder="Card Holder Name">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="card_number" class="form-control validate[required]" placeholder="Credit Card Number">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="card_cvv" class="form-control validate[required]" placeholder="CVC">
                            </div>
                            <div class="form-group col-sm-6">
                                <select name="expiry_month" class="form-control  validate[required]">
                                	<option value="">- Month -</option>
                                  <option value="1">01</option>
                                  <option value="2">02</option>
                                  <option value="3">03</option>
                                  <option value="4">04</option>
                                  <option value="5">05</option>
                                  <option value="6">06</option>
                                  <option value="7">07</option>
                                  <option value="8">08</option>
                                  <option value="9">09</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                            <select name="expiry_year" class="form-control  validate[required]">
                            <option value="">- Year -</option>                      
							  <?php 
                              $y=date("Y");					  
                              for($year=date("Y");$year<$y+10;$year++){?>
                              <option value="<?php echo $year;?>"><?php echo $year;?></option>
                              <?php } ?>                      
                            </select>
                            </div>                           
                            <div class="form-group clear-m-b col-sm-2">
                            <button>PAY NOW</button>
                            </div>
                        </form>
                    </aside>
                </div>
            </div>
        </section>
        <section id="contact">
        <footer>
            <div class="container">
               <div class="footer-first-row">
                    <div class="row">
                        <aside class="col-sm-4 col-lg-5">
                            <figure class="footer-logo"><img src="images/footer-logo.png" alt=""></figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        </aside>
                        <aside class="col-sm-2 col-lg-2">
                            <h3>Site Map</h3>
                            <ul>
                                <li>
                                    <a href="#">HOME</a>
                                </li>
                                <li>
                                    <a href="#">SERVICES</a>
                                </li>
                                <li>
                                    <a href="#">PRICING</a>
                                </li>
                                <li>
                                    <a href="#">XERO</a>
                                </li>
                                <li>
                                    <a href="#">CONTACT</a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="col-sm-3 col-lg-3">
                            <h3>Address</h3>
                            <ul class="address">
                                <li>
                                    <a href="tel:+561-596-2724">+561-596-2724</a>
                                </li>
                                <li>
                                    <a href="mailto:Info@AccountantInABox.com">Info@AccountantInABox.com</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/26%C2%B031'54.5%22N+80%C2%B005'26.1%22W/@26.5317982,-80.0911222,19z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d26.531797!4d-80.090575?hl=en-US" target="_blank">Boynton Beach, FL, USA</a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="col-sm-3 col-lg-2">
                            <h3>Connect with us</h3>
                            <div class="social-links">
                                <a href="#"><img src="images/footer-fb-icon.png" alt=""></a>
                                <a href="https://twitter.com/AccountantBox" target="_blank"><img src="images/footer-twitter-icon.png" alt=""></a>
                                <a href="#"><img src="images/footer-linkedin-icon.png" alt=""></a>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="footer-second-row">
                    <span class="copy-right">&copy; 2016 Accountant In A Box Inc. All rights reserved</span> 
                    <div class="footer-links">
                        <a href="#">Terms of service</a>
                        <a href="#">Privacy Policy</a>
                    </div>
       
                </div>
            </div>
        </footer>
    </section>
        <span id="overlay"></span><!--transparent bg color-->
        
        <!--  ===== Video popup ===== -->
        <!-- popup box Create a new album-->
        <div class="popup-box" id="loveXeroVideo">
            <span class="popup-close-btn"></span>
            <iframe id="vimeoVideo" src="https://player.vimeo.com/video/112207060" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
        </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
    <!-- FOR JQUERY VALIDATION -->
	<script src="js/jquery.validationEngine.js"></script>
	<script src="js/jquery.validationEngine-en.js"></script>
	<!-- FOR JQUERY VALIDATION -->
	<script src="js/common.js"></script>
	<script type="text/javascript">
        $(document).ready(function(){
			$("#checkout").validationEngine({promptPosition : "bottomLeft",scroll:false});
        });
		
    </script>
  </body>
</html>