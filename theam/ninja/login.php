<?php 
   $page_name = "Number History";
   include 'include/header-main.php'; 
   ?>
<style>
   .trx{
   background-color: #ff0013 !important;
   }
   .usdt{
   background-color: #26a17b !important;
   }
   .promo{
   background-color:#383838;
   }
   .mt-10{
   margin-top:10;
   }
   .mb-20{
   margin-bottom:20px;
   }
   .mb-30{
   margin-bottom:30px;
   }
   .mb-50{
   margin-bottom:50px;
   }
   a {
    color: red;
   }
</style>
<input type="hidden" id="token" value="<?php echo $_SESSION['token'];?>">   
<body class="nk-body bg-white npc-subscription has-aside " >
   <div class="nk-app-root">
      <div class="nk-main ">
         <div class="nk-wrap ">
            <?php include 'include/navbar.php'; ?>
            <div class="nk-content ">
               <div class="container wide-xl">
                  <div class="nk-content-inner">
                     <?php include 'include/sidebar.php'; ?>
                     <div class="nk-content-body">
                        
                        <div class="nk-content-wrap">
                           <div class="components-preview wide-md mx-auto">
                              
                              <div class="nk-block nk-block-middle nk-auth-body">
                                    
                                    
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
                                            <div class="form-label-group"><label class="form-label" for="email-address">Email or Username</label><a class="link link-primary link-sm" tabindex="-1" href="instruction">Need Help?</a></div>
                                            <div class="form-control-wrap">
                                                <input type="email" class="form-control form-control-lg" required="" id="email" placeholder="Enter your email address or username" autocomplete="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-label-group"><label class="form-label" for="password">Passcode</label><a class="link link-primary link-sm" tabindex="-1" href="pages/auths/auth-reset.html">Forgot Code?</a></div>
                                            <div class="form-control-wrap">
                                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                    <em class="passcode-icon icon-show icon ni ni-eye"></em><em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                </a>
                                                <input type="password" class="form-control form-control-lg" required="" id="password" autocomplete="password" placeholder="Enter your passcode">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-lg btn-primary btn-block" id="login">
                                                Sign in
                                            </button>
                                        </div>
                                    
                                    <div class="form-note-s2 pt-4">
                                        New on our platform?
                                        <a href="register">Create an account</a>
                                    </div>
                                    
                                 
                                </from></div>
                              </div>
                           
                        </div>
                        <?php include 'include/footer.php'; ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <?php include 'include/footer-main.php'; ?>
   <?php 
include("include/custom_js.php");
?>   
</body>