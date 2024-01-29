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
                              <div class="nk-block-head nk-block-head-lg">
                                 <div class="nk-block-head-sub"><a href="support.html" class="text-soft"><span>Contact</span></a></div>
                                 <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">How can we help?</h2>
                                    <div class="nk-block-des">
                                       <p>You can find all of the questions and answers abour secure your account</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="nk-block mb-3">
                                 <div class="card card-bordered">
                                    <div class="card-inner">
                                       <form action="#" class="form-contact">
                                          <div class="row g-4">
                                             <div class="col-md-6">
                                                <div class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="type" id="type-general" checked><label class="custom-control-label" for="type-general">A general enquiry</label></div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="type" id="type-problem"><label class="custom-control-label" for="type-problem">I have a problem need help</label></div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label class="form-label"><span>Category</span></label>
                                                   <div class="form-control-wrap">
                                                      <select class="form-select js-select2" data-search="off" data-ui="lg">
                                                         <option value="general">General</option>
                                                         <option value="billing">Billing</option>
                                                         <option value="technical">Technical</option>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label class="form-label"><span>Priority</span></label>
                                                   <div class="form-control-wrap">
                                                      <select class="form-select js-select2" data-search="off" data-ui="lg">
                                                         <option value="normal">Normal</option>
                                                         <option value="important">Important</option>
                                                         <option value="high">High Piority</option>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group">
                                                   <label class="form-label">Describe the problem you have</label>
                                                   <div class="form-control-wrap"><input type="text" class="form-control form-control-lg" placeholder="Write your problem... "></div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group">
                                                   <label class="form-label"><span>Give us the details </span><em class="icon ni ni-info text-gray"></em></label>
                                                   <p class="text-soft">If you’re experiencing a personal crisis, are unable to cope and need support send message. We will always try to respond to texters as quickly as possible.</p>
                                                   <div class="form-control-wrap">
                                                      <div class="form-editor-custom">
                                                         <textarea class="form-control form-control-lg no-resize" placeholder="Write your message"></textarea>
                                                         <div class="form-editor-action"><a class="link collapsed" data-bs-toggle="collapse" href="#filedown"><em class="icon ni ni-clip"></em> Attach file</a></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="choose-file">
                                                   <div class="form-group collapse" id="filedown">
                                                      <div class="support-upload-box">
                                                         <div class="upload-zone">
                                                            <div class="dz-message" data-dz-message><em class="icon ni ni-clip"></em><span class="dz-message-text">Drag your file</span><span class="dz-message-or"> or</span><button class="btn btn-primary">Select</button></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12"><a href="#" class="btn btn-primary">Email Us</a></div>
                                          </div>
                                       </form>
                                    </div>
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