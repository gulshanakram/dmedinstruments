<?php
define("_VALID_PHP", true);
require_once ("xpertspanel/init.php");
$core->getVisitors(); // visitor counter
$id =getFlyPageid();
if($_POST['sub_mit_cnt'] == 1){submitCnt();}
?>


<html lang="en" class="gr__blueiceindustry_com">
<head>
<?=getHead("cms",$id)?>

<link href="<?=WEBROOT?>css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Start Custom Stylesheets -->
<link href="<?=WEBROOT?>css/main.css" rel="stylesheet">
<link href="<?=WEBROOT?>css/animate.min.css" rel="stylesheet">
<!-- Fonts Awesome (Icons) -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Owl Carousel Assets -->
<link href="<?=WEBROOT?>css/owl.carousel.css" rel="stylesheet">
<link href="<?=WEBROOT?>css/owl.theme.css" rel="stylesheet">
<!-- Slide Coin -->
<link rel="stylesheet" type="text/css" href="<?=WEBROOT?>front.css">
<link rel="stylesheet" href="<?=WEBROOT?>css/leftmenu.css" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body data-gr-c-s-loaded="true">

<? require_once("includes/header.php");?>




<div class="container containerrr22">

<?=getcmsB($id);?>

<div class="col-md-3">
      <div class="left02">
            <ul>

                                                
            <li><a href="<?=WEBROOT?>page/about-us.html">About Us</a></li>

            
            <li><a href="<?=WEBROOT?>page/board-of-directors.html">Board of Directors</a></li>

            
            <li><a href="<?=WEBROOT?>page/contact-us.html">Contact Us</a></li>

                                                
        </ul>
      </div>
</div>


<div class="col-md-9">
<div class="lasani2">
<h4 class="nextpagel-headings"><?=getcmsN($id);?></h4>
<!--<p>Shah-e-Lasani...</p>-->


<? if($id !=0){ ?>
            <!--- for contact page ---->
            <? if($id == 39){ ?>
            <?=getLogs();?>
            <?=cleanOut(getcmsF($id));?>
            <div class="col-lg-12 mt-15" style="background:#fff; margin-bottom:20px;">   
            <form method="post" class="quote-form">
            
            <div class="col-md-6">
            
            <div class="form-group">
            
            <label for="name">Full Name:</label>
            
            <input type="text" required class="form-control" id="name" name="iname" placeholder="Enter Your Full Name">
            
            </div>
            
            </div><!--/.col-6-->
            
            <div class="col-md-6">
            
            <div class="form-group">
            
            <label for="phone">Phone:</label>
            
            <input type="text" required class="form-control" id="phone" name="iphone" placeholder="Enter Your Phone Number">
            
            </div>
            
            </div><!--/.col-6-->
            
            <div class="col-md-6">
            
            <div class="form-group">
            
            <label for="email">Email Address:</label>
            
            <input type="email" required class="form-control" id="email" name="iemail" placeholder="Enter Your Email Address">
            
            </div>
            
            </div><!--/.col-6-->
            
            <div class="col-md-6">
            
            <div class="form-group">
            
            <label for="subject">Subject:</label>
            
            <input type="text" required class="form-control" id="subject" name="isubject" placeholder="Enter Your Subject">
            
            </div>
            
            </div><!--/.col-6-->
            
            <div class="col-md-6">
            
            <div class="form-group">
            
            <label for="add">Address:</label>
            
            <input type="text" required class="form-control" id="add" name="iaddress" placeholder="Enter Your Address">
            
            </div>
            
            </div><!--/.col-6-->
            
            <div class="col-md-6">
            
            <div class="form-group">
            
            <label for="country">Country:</label>
            
            <select name="icountry" class="form-control" id="country">
            
            <option value="">Select Country</option>
            
            <option value="Afghanistan"> Afghanistan</option>
            
            <option value="Albania"> Albania</option>
            
            <option value="Algeria"> Algeria</option>
            
            <option value="Andorra"> Andorra</option>
            
            <option value="Angola"> Angola</option>
            
            <option value="Antigua and Barbuda"> Antigua and Barbuda</option>
            
            <option value="Argentina"> Argentina</option>
            
            <option value="Armenia"> Armenia</option>
            
            <option value="Australia"> Australia</option>
            
            <option value="Austria"> Austria</option>
            
            <option value="Azerbaijan"> Azerbaijan</option>
            
            <option value="Bahrain"> Bahrain</option>
            
            <option value="Bangladesh"> Bangladesh</option>
            
            <option value="Barbados"> Barbados</option>
            
            <option value="Belarus"> Belarus</option>
            
            <option value="Belgium"> Belgium</option>
            
            <option value="Belize"> Belize</option>
            
            <option value="Benin"> Benin</option>
            
            <option value="Bhutan"> Bhutan</option>
            
            <option value="Bolivia"> Bolivia</option>
            
            <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina</option>
            
            <option value="Botswana"> Botswana</option>
            
            <option value="Brazil"> Brazil</option>
            
            <option value="Brunei"> Brunei</option>
            
            <option value="Bulgaria"> Bulgaria</option>
            
            <option value="Burkina Faso"> Burkina Faso</option>
            
            <option value="Burundi"> Burundi</option>
            
            <option value="Cambodia"> Cambodia</option>
            
            <option value="Cameroon"> Cameroon</option>
            
            <option value="Canada"> Canada</option>
            
            <option value="Cape Verde"> Cape Verde</option>
            
            <option value="Central African Republic"> Central African Republic</option>
            
            <option value="Chad"> Chad</option>
            
            <option value="Chile"> Chile</option>
            
            <option value="China"> China</option>
            
            <option value="Colombia"> Colombia</option>
            
            <option value="Comoros"> Comoros</option>
            
            <option value="Costa Rica"> Costa Rica</option>
            
            <option value="Cote d'Ivoire"> Cote d'Ivoire</option>
            
            <option value="Croatia"> Croatia</option>
            
            <option value="Cuba"> Cuba</option>
            
            <option value="Cyprus"> Cyprus</option>
            
            <option value="Czech Republic"> Czech Republic</option>
            
            <option value="Denmark"> Denmark</option>
            
            <option value="Djibouti"> Djibouti</option>
            
            <option value="Dominica"> Dominica</option>
            
            <option value="Dominican Republic"> Dominican Republic</option>
            
            <option value="East Timor"> East Timor</option>
            
            <option value="Ecuador"> Ecuador</option>
            
            <option value="Egypt"> Egypt</option>
            
            <option value="El Salvador"> El Salvador</option>
            
            <option value="Equatorial Guinea"> Equatorial Guinea</option>
            
            <option value="Eritrea"> Eritrea</option>
            
            <option value="Estonia"> Estonia</option>
            
            <option value="Ethiopia"> Ethiopia</option>
            
            <option value="Federated States of Micronesia"> Federated States of Micronesia</option>
            
            <option value="Fiji"> Fiji</option>
            
            <option value="Finland"> Finland</option>
            
            <option value="France"> France</option>
            
            <option value="Gabon"> Gabon</option>
            
            <option value="Georgia"> Georgia</option>
            
            <option value="Germany"> Germany</option>
            
            <option value="Ghana"> Ghana</option>
            
            <option value="Greece"> Greece</option>
            
            <option value="Grenada"> Grenada</option>
            
            <option value="Guatemala"> Guatemala</option>
            
            <option value="Guinea"> Guinea</option>
            
            <option value="Guinea-Bissau"> Guinea-Bissau</option>
            
            <option value="Guyana"> Guyana</option>
            
            <option value="Haiti"> Haiti</option>
            
            <option value="Honduras"> Honduras</option>
            
            <option value="Hungary"> Hungary</option>
            
            <option value="Iceland"> Iceland</option>
            
            <option value="India"> India</option>
            
            <option value="Indonesia"> Indonesia</option>
            
            <option value="Iran"> Iran</option>
            
            <option value="Iraq"> Iraq</option>
            
            <option value="Ireland"> Ireland</option>
            
            <option value="Italy"> Italy</option>
            
            <option value="Jamaica"> Jamaica</option>
            
            <option value="Japan"> Japan</option>
            
            <option value="Jordan"> Jordan</option>
            
            <option value="Kazakhstan"> Kazakhstan</option>
            
            <option value="Kenya"> Kenya</option>
            
            <option value="Kiribati"> Kiribati</option>
            
            <option value="Kosovo"> Kosovo</option>
            
            <option value="Kuwait"> Kuwait</option>
            
            <option value="Kyrgyzstan"> Kyrgyzstan</option>
            
            <option value="Laos"> Laos</option>
            
            <option value="Latvia"> Latvia</option>
            
            <option value="Lebanon"> Lebanon</option>
            
            <option value="Lesotho"> Lesotho</option>
            
            <option value="Liberia"> Liberia</option>
            
            <option value="Libya"> Libya</option>
            
            <option value="Liechtenstein"> Liechtenstein</option>
            
            <option value="Lithuania"> Lithuania</option>
            
            <option value="Luxembourg"> Luxembourg</option>
            
            <option value="Macedonia"> Macedonia</option>
            
            <option value="Madagascar"> Madagascar</option>
            
            <option value="Malawi"> Malawi</option>
            
            <option value="Malaysia"> Malaysia</option>
            
            <option value="Maldives"> Maldives</option>
            
            <option value="Mali"> Mali</option>
            
            <option value="Malta"> Malta</option>
            
            <option value="Marshall Islands"> Marshall Islands</option>
            
            <option value="Mauritania"> Mauritania</option>
            
            <option value="Mauritius"> Mauritius</option>
            
            <option value="Mexico"> Mexico</option>
            
            <option value="Moldova"> Moldova</option>
            
            <option value="Monaco"> Monaco</option>
            
            <option value="Mongolia"> Mongolia</option>
            
            <option value="Montenegro"> Montenegro</option>
            
            <option value="Morocco"> Morocco</option>
            
            <option value="Mozambique"> Mozambique</option>
            
            <option value="Myanmar"> Myanmar</option>
            
            <option value="Namibia"> Namibia</option>
            
            <option value="Nauru"> Nauru</option>
            
            <option value="Nepal"> Nepal</option>
            
            <option value="Netherlands"> Netherlands</option>
            
            <option value="New Zealand"> New Zealand</option>
            
            <option value="Nicaragua"> Nicaragua</option>
            
            <option value="Niger"> Niger</option>
            
            <option value="Nigeria"> Nigeria</option>
            
            <option value="North Korea"> North Korea</option>
            
            <option value="Norway"> Norway</option>
            
            <option value="Oman"> Oman</option>
            
            <option value="Pakistan"> Pakistan</option>
            
            <option value="Palau"> Palau</option>
            
            <option value="Panama"> Panama</option>
            
            <option value="Papua New Guinea"> Papua New Guinea</option>
            
            <option value="Paraguay"> Paraguay</option>
            
            <option value="Peru"> Peru</option>
            
            <option value="Philippines"> Philippines</option>
            
            <option value="Poland"> Poland</option>
            
            <option value="Portugal"> Portugal</option>
            
            <option value="Qatar"> Qatar</option>
            
            <option value="Republic of the Congo"> Republic of the Congo</option>
            
            <option value="Romania"> Romania</option>
            
            <option value="Russia"> Russia</option>
            
            <option value="Rwanda"> Rwanda</option>
            
            <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis</option>
            
            <option value="Saint Lucia"> Saint Lucia</option>
            
            <option value="Saint Vincent"> Saint Vincent</option>
            
            <option value="Samoa"> Samoa</option>
            
            <option value="San Marino"> San Marino</option>
            
            <option value="Sao Tome and Principe"> Sao Tome and Principe</option>
            
            <option value="Saudi Arabia"> Saudi Arabia</option>
            
            <option value="Senegal"> Senegal</option>
            
            <option value="Serbia"> Serbia</option>
            
            <option value="Seychelles"> Seychelles</option>
            
            <option value="Sierra Leone"> Sierra Leone</option>
            
            <option value="Singapore"> Singapore</option>
            
            <option value="Slovakia"> Slovakia</option>
            
            <option value="Slovenia"> Slovenia</option>
            
            <option value="Solomon Islands"> Solomon Islands</option>
            
            <option value="Somalia"> Somalia</option>
            
            <option value="South Africa"> South Africa</option>
            
            <option value="South Korea"> South Korea</option>
            
            <option value="Spain"> Spain</option>
            
            <option value="Sri Lanka"> Sri Lanka</option>
            
            <option value="Sudan"> Sudan</option>
            
            <option value="Suriname"> Suriname</option>
            
            <option value="Swaziland"> Swaziland</option>
            
            <option value="Sweden"> Sweden</option>
            
            <option value="Switzerland"> Switzerland</option>
            
            <option value="Syria"> Syria</option>
            
            <option value="Taiwan"> Taiwan</option>
            
            <option value="Tajikistan"> Tajikistan</option>
            
            <option value="Tanzania"> Tanzania</option>
            
            <option value="Thailand"> Thailand</option>
            
            <option value="The Bahamas"> The Bahamas</option>
            
            <option value="The Gambia"> The Gambia</option>
            
            <option value="Togo"> Togo</option>
            
            <option value="Tonga"> Tonga</option>
            
            <option value="Trinidad and Tobago"> Trinidad and Tobago</option>
            
            <option value="Tunisia"> Tunisia</option>
            
            <option value="Turkey"> Turkey</option>
            
            <option value="Turkmenistan"> Turkmenistan</option>
            
            <option value="Tuvalu"> Tuvalu</option>
            
            <option value="Uganda"> Uganda</option>
            
            <option value="Ukraine"> Ukraine</option>
            
            <option value="United Arab Emirates"> United Arab Emirates</option>
            
            <option value="United Kingdom"> United Kingdom</option>
            
            <option value="United States of America"> United States of America</option>
            
            <option value="Uruguay"> Uruguay</option>
            
            <option value="Uzbekistan"> Uzbekistan</option>
            
            <option value="Vanuatu"> Vanuatu</option>
            
            <option value="Vatican City"> Vatican City</option>
            
            <option value="Venezuela"> Venezuela</option>
            
            <option value="Vietnam"> Vietnam</option>
            
            <option value="Yemen"> Yemen</option>
            
            <option value="Zambia"> Zambia</option>
            
            <option value="Zimbabwe"> Zimbabwe</option>
            
            </select>
            
            </div>
            
            </div><!--/.col-6-->
            
            
            
            <div class="col-md-12">
            
            <div class="form-group">
            
            <label for="captcha"><i class="fa fa-shield"></i> Captcha / Security Code:</label>
            
            <div style="position:relative">
            
            <img src="<?=ADMINURL?>/captcha.php" alt="captcha" style="position:absolute; right:0; top:4px;" />
            
            <input type="text" required class="form-control" id="captcha" name="captcha" placeholder="Enter Security code">
            
            </div>
            
            </div>
            
            </div><!--/.col-12-->
            
            
            
            <div class="col-md-12">
            
            <div class="form-group">
            
            <label for="message">Message:</label>
            
            <textarea class="form-control" id="message" rows="4" name="imessage" placeholder="Enter Your Message"></textarea>
            
            </div>
            
            </div><!--/.col-12-->
            
            
            
            
            
            <div class="col-md-12">
            
            <div class="form-group">
            
            <input type="hidden" name="sub_mit_cnt" value="1">
            
            <input type="hidden" name="pgid" value="<?=$id?>">
            
            <button type="submit" class="btn btn-default">Submit</button>
            
            </div>
            
            </div><!--/.col-12-->
            
            </form>
            
            </div>
            

            
           
<? }else{?>
<?=cleanOut(getcmsF($id));?>
<? }}else{echo "<p class=\"bg-danger xmsgred\">no page found</p>";} ?>


</div>
</div>

</div><!--container-->


<? require_once("includes/footer.php");?>
<? require_once("includes/script.php");?>
<?=getBtm()?>



</body>
</html>