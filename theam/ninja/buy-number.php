<?php 
include 'include/header-main.php'; 
?>
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
                                <div class="toast"><div class="toast-header"><strong class="me-auto text-primary">Error</strong><small>a minute ago</small><button type="button" class="close" data-dismiss="toast" aria-label="Close"><em class="icon ni ni-cross-sm"></em></button></div><div class="toast-body"> Hello, world! This is a toast message. </div></div>
                            </div>

                            

                            <?php include 'buy-number-body.php'; ?>
                           
                            <?php include 'include/footer.php'; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      
      <?php include 'include/footer-main.php'; ?>

      <script src="js/main.js?v=55448535"></script>
  <script type="module" src="js/sms.js?v=052"></script>
 <script src="js/xy.js?v=22929"></script>
   </body>