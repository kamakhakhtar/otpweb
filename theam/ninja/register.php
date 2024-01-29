<!DOCTYPE html>
<html lang="zxx" class="js">
    <?php
$page_name = "Register";
include 'include/header-main-auth.php';
?>

    <body class="nk-body bg-white npc-default pg-auth">
    
    
        <div class="nk-app-root">
            <div class="nk-main">
                <div class="nk-wrap nk-wrap-nosidebar">
                    
                    <div class="nk-content">


                    <div class="toast-container position-absolute top-0 end-0 p-3">
                        <div class="toast"><div class="toast-header"><strong class="me-auto text-primary">Error</strong><small>a minute ago</small><button type="button" class="close" data-dismiss="toast" aria-label="Close"><em class="icon ni ni-cross-sm"></em></button></div><div class="toast-body"> Hello, world! This is a toast message. </div></div>
                    </div>

                        <div class="nk-split nk-split-page nk-split-lg">
                            
                            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                                
                                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                    <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                                </div>
                                
                                
                                <div class="nk-block nk-block-middle nk-auth-body">
                                    <div class="brand-logo pb-5">
                                        <a href="index.html" class="logo-link">
                                            <img class="logo-light logo-img logo-img-lg" src="<?php echo WEBSITE_URL; ?>/theam/ninja/images/logo.png" srcset="<?php echo WEBSITE_URL; ?>/theam/ninja/images/logo2x.png 2x" alt="logo" />
                                            <img class="logo-dark logo-img logo-img-lg" src="<?php echo WEBSITE_URL; ?>/theam/ninja/images/logo-dark.png" srcset="<?php echo WEBSITE_URL; ?>/theam/ninja/images/logo-dark2x.png 2x" alt="logo-dark" />
                                        </a>
                                    </div>
                                    
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title">Sign-In</h5>
                                            <div class="nk-block-des">
                                                <p>
                                                    Access the OTP Ninja panel using your email and passcode.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <from>
                                    <div class="form-group">
                                        <label class="form-label" for="name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="name" placeholder="Enter your name">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <div class="form-label-group"><label class="form-label" for="email-address">Email or Username</label><a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a></div>
                                            <div class="form-control-wrap">
                                                <input  type="email" class="form-control form-control-lg" required id="email" placeholder="Enter your email address or username" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-label-group"><label class="form-label" for="password">Passcode</label></div>
                                            <div class="form-control-wrap">
                                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                    <em class="passcode-icon icon-show icon ni ni-eye"></em><em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                </a>
                                                <input  type="password" class="form-control form-control-lg" required id="password" placeholder="Enter your passcode" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <input type="hidden" id="refer_id" value="<?php echo $_GET['ref_id'] ?? ''; ?>">             
                                            <div class="form-label-group"><label class="form-label" for="password">Confirm Passcode</label></div>
                                            <div class="form-control-wrap">
                                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                    <em class="passcode-icon icon-show icon ni ni-eye"></em><em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                </a>
                                                <input  type="password" class="form-control form-control-lg" required id="confirm_password" placeholder="Enter your passcode" />
                                            </div>
                                        </div>
                                        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="<?php echo $site_data['captcha_public_key'];?>"></div>
            </div>
                                        <div class="form-group">
                                            <button class="btn btn-lg btn-primary btn-block" id="register">
                                                Register
                                            </button>
                                        </div>
                                    </form>
                                    <div class="form-note-s2 pt-4"> Already have an account ? <a href="index"><strong>Sign in instead</strong></a></div>
                                    
                                 
                                </div>
                                <div class="nk-block nk-auth-footer">
                                    <div class="nk-block-between">
                                        <ul class="nav nav-sm">
                                            <li class="nav-item">
                                                <a class="link link-primary fw-normal py-2 px-3" href="#">Terms & Condition</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="link link-primary fw-normal py-2 px-3" href="#">Privacy Policy</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="link link-primary fw-normal py-2 px-3" href="#">Help</a>
                                            </li>
                                            <li class="nav-item dropup">
                                                <a class="dropdown-toggle dropdown-indicator has-indicator link link-primary fw-normal py-2 px-3" data-bs-toggle="dropdown" data-offset="0,10"><small>English</small></a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <ul class="language-list">
                                                        <li>
                                                            <a href="#" class="language-item"><img src="<?php echo WEBSITE_URL; ?>/theam/ninja/images/flags/english.png" alt="" class="language-flag" /><span class="language-name">English</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="language-item"><img src="<?php echo WEBSITE_URL; ?>/theam/ninja/images/flags/spanish.png" alt="" class="language-flag" /><span class="language-name">Español</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="language-item"><img src="<?php echo WEBSITE_URL; ?>/theam/ninja/images/flags/french.png" alt="" class="language-flag" /><span class="language-name">Français</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="language-item"><img src="<?php echo WEBSITE_URL; ?>/theam/ninja/images/flags/turkey.png" alt="" class="language-flag" /><span class="language-name">Türkçe</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-3">
                                        <p>&copy; 2023 Otpninja. All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                                <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                    <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                        <div class="slider-item">
                                            <div class="nk-feature nk-feature-center">
                                                <div class="nk-feature-img">
                                                    <img class="round" src="<?php echo WEBSITE_URL; ?>/theam/ninja/images/slides/promo-a.png" srcset="<?php echo WEBSITE_URL; ?>/theam/ninja/images/slides/promo-a2x.png 2x" alt="" />
                                                </div>
                                                <div class="nk-feature-content py-4 p-sm-5">
                                                    <h4>OTP Ninja</h4>
                                                    <p>
                                                        You can start to create your products easily with its user-friendly design & most completed responsive layout.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-dots"></div>
                                    <div class="slider-arrows"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </body>

    <?php
include 'include/footer-main-auth.php';
?>
<?php 
include("include/custom_js.php");
?>   
</html>
