<?php    
   include 'include/header-main.php'; 
   ?>
   <style>
       a {
            color: #868687;
         }
      a:hover {
            text-decoration:underline;
            color: #141414;
            
         }
       
      .list li:not(:last-child) {padding:0 }
      .list li:before {color: #eccaa0 ;}
      .list li { padding-left:1.5rem !important}
      .mb-10{
         margin-bottom:30px;
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
                                    <h3 class="mb-30">FAQ - Frequently Asked questions</h3>
                                    <div class="card card-bordered card-preview">
                                       <div class="card-inner">
                                          <dl class="row">
                                             <dt class="col-sm-4 mb-10">General questions</dt>
                                             <dd class="col-sm-8 mb-10">
                                                
                                                <ul class="list">
                                                   <li><a href="">When are new phone numbers added?</a></li>
                                                   <li><a href="">My account got blocked after some time.</a></li>
                                                   <li><a href="">The numbers are listed on the website, but I can't purchase them.</a></li>
                                                   <li><a href=""> What does "temporary disposable numbers" mean?</a></li>
                                                </ul>
                                             </dd>
                                             <dt class="col-sm-4 mb-10">Adding Money</dt>
                                             <dd class="col-sm-8 mb-10">
                                                <ul class="list">
                                                   <li><a href="">How do I add money to my OTP-Ninja account?</a></li>
                                                   <li><a href="">Cost for Payment</a></li>
                                                   <li><a href="">My money didn't show up in my account</a></li>
                                                   <li><a href="">How do I take money out of my OTP-Ninja account?</a></li>
                                                   <li><a href="">Moving money to a different OTP-Ninja account</a></li>
                                                </ul>
                                             </dd>

                                             <dt class="col-sm-4 mb-10">Not enough money, Low rating</dt>
                                             <dd class="col-sm-8 mb-10">
                                               
                                             <ul class="list">
                                                <li><a href="">Message: "Not enough money"</a></li>
                                                <li><a href="">Message: "Poor rating"</a></li>
                                             </ul>
                                             </dd>


                                             <dt class="col-sm-4 mb-10">Sign up, sign in, email</dt>
                                             <dd class="col-sm-8 mb-10" >
                                                <ul class="list">
                                                   <li><a href="">I'm unable to make an account on OTP-Ninha</a></li>
                                                   <li><a href="">I'm having trouble logging into OTP-Ninja with my username and password</a></li>
                                                   <li><a href="">How do I update my email for the OTP-Ninja account?</a></li>
                                                   <li><a href="">What should I do if someone hacked my account?</a></li>
                                                </ul>
                                             </dd>


                                             <dt class="col-sm-4 mb-10">Text messages and verification codes.</dt>
                                             <dd class="col-sm-8 mb-10">
                                                <ul class="list">
                                                   <li><a href="">What to do if you don't get the text message.</a></li>
                                                   <li><a href="">What if the confirmation code is wrong.</a></li>
                                                   <li><a href="">The phone number is already taken.</a></li>
                                                   <li><a href="">How to get the verification code again.</a></li>
                                                   <li><a href="">Getting texts many times in 15 days for Mongolia, Vietnam Virtual7.</a></li>
                                                </ul>
                                             </dd>


                                             <dt class="col-sm-4 mb-10">Information about the API</dt>
                                             <dd class="col-sm-8 mb-10">
                                                <ul class="list">
                                                   <li><a href="">Where to get your API key</a></li>
                                                   <li><a href="">Buying phone numbers through the API</a></li>
                                                   <li><a href="">Your IP address was blocked</a></li>
                                                </ul>
                                             </dd>


                                             <dt class="col-sm-4 mb-10">Working Together:</dt>
                                             <dd class="col-sm-8 mb-10">
                                                <ul class="list">
                                                   <li><a href="">Include OTP-Ninja in your software</a></li>
                                                   <li><a href="">Promoting</a></li>
                                                   <li><a href="">Selling phone numbers on the OTP-Ninja website</a></li>
                                                </ul>
                                             </dd>

                                             <dt class="col-sm-4 mb-10">Make money with OTP-Ninja</dt>
                                             <dd class="col-sm-8 mb-10">
                                                <ul class="list">
                                                   <li><a href="">Give your opinion about OTP-Ninja</a></li>
                                                   <li><a href="">Basic information about OTP-Ninja</a></li>                                                   
                                                </ul>
                                             </dd>
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
   <?php 
include("include/custom_js.php");
?>   
</body>