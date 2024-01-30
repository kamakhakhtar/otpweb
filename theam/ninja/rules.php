<?php    
   include 'include/header-main.php'; 
   ?>
   <style>
      .mui-style-1ouyyzj {
    list-style-type: decimal;
    list-style-position: inside;
    margin-bottom:10px;
    
}
a {
   color:red;
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
                              <div class="nk-block">
                                 <article class="entry">
                                    <h3 class="mb-30">Rules</h3>
                                    
                                    <div class="card card-bordered card-preview">
                                       <div class="card-inner">
                                       <ol class="mui-style-1ouyyzj">
                                          <li class="mui-style-1ouyyzj">Payment for any service (website or app) is debited immediately upon purchase of a phone number. For the purposes of this Website, "purchase" should mean getting access to the base for using phone numbers.</li>
                                          <li class="mui-style-1ouyyzj">You can use the received phone number only to receive SMS from the selected service, all the rest SMS from other services will be discarded.</li>
                                          <li class="mui-style-1ouyyzj">The quantity of received SMS within the allotted time (5-30 minutes) is unlimited.<br>IMPORTANT! There are directions (service, country, operator), on which it is possible to receive only 1 (one) SMS. See the information on <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineHover mui-style-1w8y7w7" href="/faq/sms-verification-codes/how-do-i-receive-verification-code-again">the options for receiving SMS</a>.</li>
                                          <li class="mui-style-1ouyyzj">The payment is refunded, if you canceled the order or, in some cases, about 5 minutes the SMS did not arrive. In the case of abusing this rule, restrictions will be imposed on Your account.</li>
                                          <li class="mui-style-1ouyyzj">The website has a rating system. In case of mass abuse of the right not to receive SMS to a dedicated phone number within the specified time, restrictions will be imposed on your account for 1 (one) hour.</li>
                                          <li class="mui-style-1ouyyzj">It is prohibited to use the services of the website for any illegal purposes, as well as not to take actions, detrimental to the Contractor and (or) the third parties.<br><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineHover mui-style-1w8y7w7" href="https://otp-ninja.com/v1/guest/blacklist/senders" target="_blank">The names of the senders, from which you will not be able to receive SMS.</a><br><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineHover mui-style-1w8y7w7" href="https://otp-ninja.com/v1/guest/blacklist/words" target="_blank">Prohibited keywords in the text or in the name of the sms sender.</a></li>
                                          <li class="mui-style-1ouyyzj">It is prohibited to use the services of the website for the implementation of paid subscriptions.</li>
                                          <li class="mui-style-1ouyyzj">We are not responsible for incorrect use of API functions or for other software bugs, that the user makes upon using the API functions incorrectly. Refund for software bugs made by users is not stipulated.</li>
                                          <li class="mui-style-1ouyyzj">The task of the website is to provide you with a virtual number and code. We are not responsible for the ban of registered accounts, since ban is affected by many factors. If you are not satisfied with the number, click on the "Cancel" button. Refund for banned accounts is not stipulated.<br><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineHover mui-style-1w8y7w7" href="/faq/general-questions/the-created-account-was-banned-after-a-while">General recommendations upon account registration on a foreign number.</a></li>
                                          <li class="mui-style-1ouyyzj">Your account will be deleted, if you do not use it for more than 1 year, the balance is not restored. Transferring the balance from account to account is prohibited.</li>
                                          <li class="mui-style-1ouyyzj">Refund for blocked and used numbers of OK.ru, Olx, Telegram (2FA authorization), that accept SMS, is not stipulated.</li>
                                          <li class="mui-style-1ouyyzj">The fee of payment systems upon depositing funds to an electronic balance is indicated in the "Top up balance" section or when going to the payment system page.</li>
                                          <li class="mui-style-1ouyyzj">In case of violating the terms of the Agreement by the Customer and also upon receiving information from the third parties on the violation of the terms of the Agreement by the Customer, the Contractor has the right to suspend, restrict or terminate the Customer's access to all or any of the sections of the website at any time for any reason or without explaining the reasons, with or without a prior notice, without being responsible for any harm that may be caused to the Customer by such an action. The Contractor reserves the right to delete the Customer's profile and/or suspend, restrict or terminate the Customer's access to any of the website sections if the Contractor finds out that, in his opinion, the Customer poses a threat to the website and/or its users. The Contractor is not responsible for the temporary blocking or deletion of information, carried out in accordance with these Rules, or the deletion of the Customer's personal page (termination of registration).</li>
                                          <li class="mui-style-1ouyyzj">Username, Password, API key, Sign in with Google are considered to be Customer’s simple digital signature. The Customer uses Username, Password, API key, Sign in with Google in the Personal Account on the Website. The Customer is personally responsible for the safety and proper use of the Username, Password, API key, Sign in with Google.</li>
                                       </ol>
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
   <?php 
include("include/custom_js.php");
?>   
</body>