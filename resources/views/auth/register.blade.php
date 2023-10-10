
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="{{ env('APP_NAME') }} - Login to Dashboard">
    <meta name="author" content="{{ env('APP_NAME') }} - Login to Dashboard">
    <meta name="keywords" content="{{ env('APP_NAME') }} - Login to Dashboard">

    <!-- Favicon -->
    <link rel="icon" href="main/assets/img/brand/favicon.ico" type="image/x-icon"/>

    <!-- Title -->
    <title>{{ env('APP_NAME') }} - Create an account</title>

    <!-- Bootstrap css-->
    <link id="style" href="https://app.whirlwindinvts.pro/main/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Icons css-->
    <link href="https://app.whirlwindinvts.pro/main/assets/web-fonts/icons.css" rel="stylesheet"/>
    <link href="https://app.whirlwindinvts.pro/main/assets/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="https://app.whirlwindinvts.pro/main/assets/web-fonts/plugin.css" rel="stylesheet"/>

    <!-- Style css-->
    <link href="https://app.whirlwindinvts.pro/main/assets/css/style.css" rel="stylesheet">
    <link href="https://app.whirlwindinvts.pro/main/assets/css/plugins.css" rel="stylesheet">
    <script src="https://app.whirlwindinvts.pro/plugins/sweetalert/js/sweetalert.min.js"></script>
</head>

<body class="main-body leftmenu ltr dark-theme">
<style>
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:nth-of-type(1), div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:nth-of-type(2), div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:nth-of-type(3){display:none;}

    div#google_translate_element div.goog-te-gadget-simple {margin:0px; padding:10px; display:inline-block; background-color:#000000; border:1px solid #000;}
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value {color:white;}
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value::after{content:"Translate Site"; padding-right:5px;}

    div#google_translate_element div.goog-te-gadget-simple img:nth-of-type(1) {display:none;}

</style>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!-- Loader -->
<div id="global-loader">
    <img src="main/assets/img/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->

<!-- Page -->
<div class="page main-signin-wrapper">

    <!-- Row -->
    <div class="row signpages text-center">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="row row-sm">
                    <div class="col-lg-6 col-xl-6 col-xs-12 col-sm-12 login_form rounded-start-11">
                        <div class="container-fluid">
                            <div class="row row-sm">
                                <div class="card-body mt-2 mb-2">
                                    <h2 class="text-start mb-2">Sign Up for Free</h2>
                                    <p class="mb-4 text-muted tx-13 ms-0 text-start">It's Free to Sign up and only takes a minute.</p>

                                    <center>	 </center>
                                    <form  action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <input type="hidden" name="referred_by" value="{{ request()->id}}" />


                                        <div class="form-group text-start">
                                            <label class="tx-medium">Firstname</label>
                                            <input class="form-control" placeholder="Enter your Name" type="text" name="firstname" required="">
                                        </div>
                                            <div class="form-group text-start">
                                            <label class="tx-medium">Lastname</label>
                                            <input class="form-control" placeholder="Enter your Name" type="text" name="lastname" required="">
                                        </div>

                                        <div class="form-group text-start">
                                            <label class="tx-medium">Username</label>
                                            <input class="form-control" placeholder="Enter Preferred Username" type="text" name="username" required="">
                                        </div>


                                        <div class="form-group text-start">
                                            <label class="tx-medium">Email</label>
                                            <input class="form-control" placeholder="Enter your email" type="email" autocomplete="username" name="email" required="">
                                        </div>

                                        <div class="form-group text-start">
                                            <label class="tx-medium">Country</label>
                                            <select class="form-control select2" name="country" required="">
                                                <option label="Select Country">
                                                </option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Akrotiri">Akrotiri</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Ashmore and Cartier Is.">Ashmore and Cartier Is.</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Baikonur">Baikonur</option>
                                                <option value="Bajo Nuevo Bank">Bajo Nuevo Bank</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="British Virgin Islands">British Virgin Islands</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Caribbean Netherlands">Caribbean Netherlands</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Clipperton I.">Clipperton I.</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Coral Sea Is.">Coral Sea Is.</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaçao">Curaçao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Cyprus U.N. Buffer Zone">Cyprus U.N. Buffer Zone</option>
                                                <option value="Czechia">Czechia</option>
                                                <option value="DR Congo">DR Congo</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Dhekelia">Dhekelia</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Eswatini">Eswatini</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Europe Union">Europe Union</option>
                                                <option value="Falkland Islands">Falkland Islands</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indian Ocean Ter.">Indian Ocean Ter.</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Ivory Coast">Ivory Coast</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Kosovo">Kosovo</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia">Micronesia</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="N. Cyprus">N. Cyprus</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="North Korea">North Korea</option>
                                                <option value="North Macedonia">North Macedonia</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestine">Palestine</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn Islands">Pitcairn Islands</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Republic of the Congo">Republic of the Congo</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Réunion">Réunion</option>
                                                <option value="Saint Barthélemy">Saint Barthélemy</option>
                                                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Martin">Saint Martin</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Scarborough Reef">Scarborough Reef</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Serranilla Bank">Serranilla Bank</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Siachen Glacier">Siachen Glacier</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Sint Maarten">Sint Maarten</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="Somaliland">Somaliland</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia">South Georgia</option>
                                                <option value="South Korea">South Korea</option>
                                                <option value="South Sudan">South Sudan</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Spratly Is.">Spratly Is.</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="São Tomé and Príncipe">São Tomé and Príncipe</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-Leste">Timor-Leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="USNB Guantanamo Bay">USNB Guantanamo Bay</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="United States Virgin Islands">United States Virgin Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City">Vatican City</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                            </select>
                                        </div>
                                        <div class="form-group text-start">
                                            <label class="tx-medium">Currency</label>
                                            <select class="form-control select2-no-search" name="currency" required="">
                                                <option value="select" disabled selected>Choose Your Currency</option>
                                                <option value="$">USD</option>
                                                <option value="€">EURO</option>
                                                <option value="R">RAND</option>
                                                <option value="R$">REAIS</option>
                                            </select>

                                        </div>
                                        <div class="form-group text-start">
                                            <label class="tx-medium">Mobile No.</label>
                                            <input class="form-control" placeholder="Enter Mobile Numeber (Whatsapp Preferred)" type="" name="phone" required="">
                                        </div>

                                        <div class="form-group text-start">
                                            <label class="tx-medium">Password</label>
                                            <input class="form-control border-end-0" placeholder="Enter your password" autocomplete="new-password" type="password" data-bs-toggle="password" name="password" required="">
                                        </div>


                                        <div class="form-group text-start">
                                            <label class="tx-medium">Confirm Password</label>
                                            <input class="form-control border-end-0" placeholder="Confirm Password" autocomplete="new-password" type="password" data-bs-toggle="password" name="password_confirmation" required="">
                                        </div>

                                        <div class="form-group text-start">
                                            <label class="tx-medium">Referral Code</label>
                                            <input id="referrer" class="form-control" placeholder="Referral Code (Optional)" type="text" name="referrer">
                                        </div>


                                        <button type="submit" name="submits" class="btn btn-primary btn-block">Register</button>

                                    </form>
                                    <div class="text-start mt-4 ms-0 mb-3">
                                        <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 d-none d-lg-block text-center bg-primary details rounded-end-11">
                        <div class="mt-4 pt-5 p-2 pos-relative">
                            <div class="clearfix"></div>
                            <img src="https://app.whirlwindinvts.pro/account/reg.svg" class="ht-250 mb-0" alt="user">
                            <h2 class="mt-4 text-white tx-normal">Create Your Account</h2>
                            <span class="tx-white-6 tx-13 mb-5 mt-xl-0">It's Free to Sign up and only takes a minute</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

</div>
<!-- End Page -->

<!-- Jquery js-->
<script src="https://app.whirlwindinvts.pro/main/assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap js-->
<script src="https://app.whirlwindinvts.pro/main/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="https://app.whirlwindinvts.pro/main/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Bootstrap Show Password js-->
<script src="https://app.whirlwindinvts.pro/main/assets/js/bootstrap-show-password.min.js"></script>

<!-- generate-otp js -->
<script src="https://app.whirlwindinvts.pro/main/assets/js/generate-otp.js"></script>

<!-- Perfect-scrollbar js -->
<script src="https://app.whirlwindinvts.pro/main/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!-- Select2 js-->
<script src="https://app.whirlwindinvts.pro/main/assets/plugins/select2/js/select2.min.js"></script>

<!-- Color Theme js -->
<script src="https://app.whirlwindinvts.pro/main/assets/js/themeColors.js"></script>

<!-- swither styles js -->
<script src="https://app.whirlwindinvts.pro/main/assets/js/swither-styles.js"></script>

<!-- Custom js -->
<script src="https://app.whirlwindinvts.pro/main/assets/js/custom.js"></script>
<!-- Smartsupp Live Chat script -->

</body>
</html>
