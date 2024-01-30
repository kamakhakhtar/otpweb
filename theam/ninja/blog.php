<?php    
   include 'include/header-main.php'; 
   ?>
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