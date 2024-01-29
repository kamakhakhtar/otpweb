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
                        <div class="toast-container position-absolute top-0 end-0 p-3">
                           <div class="toast">
                              <div class="toas  t-header"><strong class="me-auto text-primary">Error</strong><small>a minute ago</small><button type="button" class="close" data-dismiss="toast" aria-label="Close"><em class="icon ni ni-cross-sm"></em></button></div>
                              <div class="toast-body"> Hello, world! This is a toast message. </div>
                           </div>
                        </div>
                        <div class="nk-content-wrap">
                           <div class="components-preview wide-md mx-auto">
                              <div class="nk-block">
                                 <article class="entry">
                                    <h3 class="mb-30">How-To Guide</h3>
                                    <h4 class="mt-10 mb-30">How to Get a Phone Number for Receiving SMS:</h4>
                                    <div class="card card-bordered card-preview">
                                       <div class="card-inner">
                                          <dl class="row">
                                             <dt class="col-sm-4 mb-10">1. Complete the Sign-Up or Login Process</dt>
                                             <dd class="col-sm-8 mb-10">Easily  <a href=""> <strong> Register </strong> </a> a new account or  <a href=""> <strong>Signin</strong> </a> into an existing profile.</dd>
                                             <dt class="col-sm-4">2. Add Funds to Your Account</dt>
                                             <dd class="col-sm-8">
                                                <p>To add money to your electronic balance, click on the profile icon and select <a href=""> <strong> "Top up balance." </strong> </a> You can use any of the available payment methods.</p>
                                             </dd>

                                             <dt class="col-sm-4 mb-10">3. Choose the Desired Service</dt>
                                             <dd class="col-sm-8 mb-10">
                                                <p>In the left-hand menu click <a href=""> <strong>Buy Numbers</strong> </a>, pick the service (website or app) where you need to receive an SMS. If you can't find the specific service you're looking for, choose the "Other" option. Alternatively, click on "Arrangement" to get a phone number from a specific country.</p>
                                             </dd>


                                             <dt class="col-sm-4 mb-10">4. Choose a Country</dt>
                                             <dd class="col-sm-8 mb-10" >
                                                <p>Select the country for the virtual phone number.</p>
                                             </dd>


                                             <dt class="col-sm-4 mb-10">5. Pick an Operator and Buy</dt>
                                             <dd class="col-sm-8 mb-10">
                                                <p>Choose a mobile operator and click "Buy". Prices vary by operator. Each one shows the success rate of SMS delivery from your chosen website or app. We recommend selecting the operator with the highest success rate.</p>
                                             </dd>


                                             <dt class="col-sm-4 mb-10">6. Use Your Number</dt>
                                             <dd class="col-sm-8 mb-10">
                                                <p>After buying, click "Copy" to use the number. You can:</p>
                                                <ul>
                                                    <li>Click "Cancel" to stop the purchase.</li>
                                                    <li>Click "Ban" if the number is already used.</li>
                                                </ul>
                                             </dd>


                                             <dt class="col-sm-4 mb-10">7. Receive SMS</dt>
                                             <dd class="col-sm-8 mb-10">
                                                <p>Once you have the number, you can receive unlimited SMS from a website or app for 5-30 minutes. If an SMS doesn't arrive in 5 minutes, the order may be canceled automatically. Note that some combinations of service, country, and operator allow only one SMS.</p>
                                             </dd>
                                            
                                             <p>If an error has occurred and you can not solve it yourself-write to <a href="<?php echo $site_data['support_url'];?>"> support </a>  service.</p>
                                          </dl>
                                       </div>
                                    </div>
                                 </article>
                              </div>
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
</body>