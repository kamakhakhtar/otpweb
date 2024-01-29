<?php 
   $page_name = "Number History";
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
                        <div class="toast-container position-absolute top-0 end-0 p-3">
                           <div class="toast">
                              <div class="toas  t-header"><strong class="me-auto text-primary">Error</strong><small>a minute ago</small><button type="button" class="close" data-dismiss="toast" aria-label="Close"><em class="icon ni ni-cross-sm"></em></button></div>
                              <div class="toast-body"> Hello, world! This is a toast message. </div>
                           </div>
                        </div>
                        <div class="nk-content-wrap">
                           <div class="components-preview wide-md mx-auto">
                           <div class="nk-block-head nk-block-head-lg wide-sm">
                                    <div class="nk-block-head-content">
                                       <div class="nk-block-head-sub"><a class="back-to" href="../../components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
                                       <h2 class="nk-block-title fw-normal">API Integration Tools</h2>
                                       <div class="nk-block-des">
                                          <p class="lead">Toggle the visibility of content across your project with a few classes and Bootstrap collapse JavaScript plugins. The collapse plugin is used to show &amp; hide content.</p>
                                       </div>
                                    </div>
                                 </div>
                              <div class="nk-block nk-block-lg">
                                    <!-- <div class="nk-block-head">
                                       <div class="nk-block-head-content">
                                          <h4 class="title nk-block-title">Accordion Style3</h4>
                                          <p>Add the class <code>.accordion-s3</code> with <code>.accordion</code> to get this accordion style.</p>
                                       </div>
                                    </div> -->
                                    <div class="card card-bordered card-preview">
                                       <div class="card-inner">
                                          <div id="accordion-2" class="accordion accordion-s3">
                                          <div class="accordion-item">
                                                <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-item-2-0" id="balance">
                                                   <h6 class="title">Balance Request</h6>
                                                   <span class="accordion-icon"></span>
                                                </a>
                                                <div class="accordion-body collapse" id="accordion-item-2-0" data-bs-parent="#accordion-2" >
                                                   <div class="accordion-inner mb-30">

                                                   <div class="code-block">

                                                        <h6 class="overline-title title"><span class="badge bg-primary">GET</span></h6>
                                                        <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#badgeDot1" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                                        
                                                        <pre class="prettyprint lang-html" id="badgeDot1"><span class="atn"><?php echo $website_url;?>/stubs/handler_api.php?api_key=$api_key&action=getBalance</span></pre>                                                       
                                                        
                                                    </div>

                                                    

                                                        <h5 class="mt-30"> <small class="text-soft">Parametrs required:</small></h5>
                                                          <span class="ff-base fw-medium">action<small class="text-soft">&nbsp;&nbsp;&nbsp; getBalance</small></span><br>
                                                        <span class="ff-base fw-medium">$api_key<small class="text-soft">&nbsp;&nbsp;&nbsp; API KEY</small></span><br>

                                                        <h5 class="mt-30"> <small class="text-soft">Possible errors:</small></h5>
                                                        <span class="ff-base fw-medium">BAD_KEY<small class="text-soft">&nbsp;&nbsp;&nbsp; Invalid API key</small></span><br>
                                                        

                                                        <h5 class="mt-30"> <small class="text-soft">Success Response:</small></h5>
                                                        <div class="code-block">
                                                        <pre class="prettyprint lang-html" id="badgeDot1"><span class="atn"><span class="pln">ACCESS_BALANCE:40.84</span></span></pre>

                                                        </div>

                                                      
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="accordion-item">
                                                <a href="#" class="accordion-head" data-bs-toggle="collapse" data-bs-target="#accordion-item-2-1" id="number">
                                                   <h6 class="title">Request a number</h6>
                                                   <span class="accordion-icon"></span>
                                                </a>
                                                <div class="accordion-body collapse show" id="accordion-item-2-1" data-bs-parent="#accordion-2">
                                                   <div class="accordion-inner mb-30">

                                                   <div class="code-block">
                                                        <h6 class="overline-title title"><span class="badge bg-primary">GET</span></h6>
                                                        <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#badgeDot1" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                                        
                                                        <pre class="prettyprint lang-html" id="badgeDot1"><span class="atn"><?php echo $website_url;?>/stubs/handler_api.php?action=getNumber&api_key=$api_key&service=$service&country=$country</span></pre>
                                                    </div>

                                                    

                                                        <h5 class="mt-30"> <small class="text-soft">Parametrs required:</small></h5>
                                                        <span class="ff-base fw-medium">action<small class="text-soft">&nbsp;&nbsp;&nbsp; getNumber</small></span><br>
                                                        <span class="ff-base fw-medium">$api_key<small class="text-soft">&nbsp;&nbsp;&nbsp; API KEY</small></span><br>
                                                        <span class="ff-base fw-medium">$service<small class="text-soft">&nbsp;&nbsp;&nbsp; service code</small></span><br>
                                                        <span class="ff-base fw-medium">$country<small class="text-soft">&nbsp;&nbsp;&nbsp; country code</small></span><br>

                                                        <h5 class="mt-30"> <small class="text-soft">Possible errors:</small></h5>
                                                        <span class="ff-base fw-medium">BAD_KEY<small class="text-soft">&nbsp;&nbsp;&nbsp; Invalid API key</small></span><br>
                                                        <span class="ff-base fw-medium">NO_NUMBERS<small class="text-soft">&nbsp;&nbsp;&nbsp; repeat a request or choose another country.</small></span>

                                                        <h5 class="mt-30"> <small class="text-soft">Success Response:</small></h5>
                                                        <div class="code-block">
                                                            <pre class="prettyprint lang-html" id="badgeDot1"><span class="atn"><span class="pln">ACCESS_NUMBER:38496653:66846426435</span></span></pre>

                                                        </div>

                                                      
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="accordion-item">
                                                <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-item-2-2" id="changeStatus">
                                                   <h6 class="title">Activation status changes</h6>
                                                   <span class="accordion-icon"></span>
                                                </a>
                                                <div class="accordion-body collapse" id="accordion-item-2-2" data-bs-parent="#accordion-2">
                                                   <div class="accordion-inner mb-30">

                                                   <div class="code-block">
                                                        <h6 class="overline-title title"><span class="badge bg-primary">GET</span></h6>
                                                        <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#badgeDot1" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                                        

                                                        <pre class="prettyprint lang-html" id="badgeDot1"><span class="atn"><?php echo $website_url;?>/stubs/handler_api.php?action=setStatus&api_key=$api_key&id=$id&status=$status</span></pre>
                                                        
                                                    </div>

                                                    

                                                        <h5 class="mt-30"> <small class="text-soft">Parametrs required:</small></h5>
                                                          <span class="ff-base fw-medium">action<small class="text-soft">&nbsp;&nbsp;&nbsp; setStatus</small></span><br>
                                                        <span class="ff-base fw-medium">$api_key<small class="text-soft">&nbsp;&nbsp;&nbsp; API KEY</small></span><br>
                                                        <span class="ff-base fw-medium">$id<small class="text-soft">&nbsp;&nbsp;&nbsp; activation id</small></span><br>
                                                        <span class="ff-base fw-medium">$status<small class="text-soft">&nbsp;&nbsp;&nbsp; activation status (8 - cancel activation, 3 - Request another SMS)</small></span><br>

                                                        <h5 class="mt-30"> <small class="text-soft">Possible errors:</small></h5>
                                                        <span class="ff-base fw-medium">BAD_KEY<small class="text-soft">&nbsp;&nbsp;&nbsp; Invalid API key</small></span><br>
                                                        <span class="ff-base fw-medium">NO_ACTIVATION<small class="text-soft">&nbsp;&nbsp;&nbsp; incorrect action</small></span><br>
                                                        <span class="ff-base fw-medium">BAD_STATUS<small class="text-soft">&nbsp;&nbsp;&nbsp; incorrect status</small></span>
                                                        

                                                        <h5 class="mt-30"> <small class="text-soft">Success Response:</small></h5>
                                                        <div class="code-block">
                                                            <pre class="prettyprint lang-html" id="badgeDot1"><span class="atn"><span class="pln">STATUS_CANCEL</span></span></pre>

                                                        </div>

                                                      
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="accordion-item">
                                                <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-item-2-3" id="getStatus">
                                                   <h6 class="title">Get the activation status</h6>
                                                   <span class="accordion-icon"></span>
                                                </a>
                                                <div class="accordion-body collapse" id="accordion-item-2-3" data-bs-parent="#accordion-2">
                                                   <div class="accordion-inner mb-30">

                                                   <div class="code-block">
                                                        <h6 class="overline-title title"><span class="badge bg-primary">GET</span></h6>
                                                        <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#badgeDot1" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                                        
                                                        <pre class="prettyprint lang-html" id="badgeDot1"><span class="atn"><?php echo $website_url;?>/stubs/handler_api.php?action=getStatus&api_key=$api_key&id=$id</span></pre>

                                                        
                                                        
                                                    </div>

                                                    

                                                        <h5 class="mt-30"> <small class="text-soft">Parametrs required:</small></h5>
                                                          <span class="ff-base fw-medium">action<small class="text-soft">&nbsp;&nbsp;&nbsp; getStatus</small></span><br>
                                                        <span class="ff-base fw-medium">$api_key<small class="text-soft">&nbsp;&nbsp;&nbsp; API KEY</small></span><br>
                                                        <span class="ff-base fw-medium">$id<small class="text-soft">&nbsp;&nbsp;&nbsp; activation id</small></span><br>
                                                        

                                                        <h5 class="mt-30"> <small class="text-soft">Possible errors:</small></h5>
                                                        <span class="ff-base fw-medium">BAD_KEY<small class="text-soft">&nbsp;&nbsp;&nbsp; Invalid API key</small></span><br>
                                                        <span class="ff-base fw-medium">NO_ACTIVATION<small class="text-soft">&nbsp;&nbsp;&nbsp; incorrect action</small></span><br>
                                                        
                                                        

                                                        <h5 class="mt-30"> <small class="text-soft">Success Response:</small></h5>
                                                        <div class="code-block">
                                                        <pre class="prettyprint lang-html" id="badgeDot1"><span class="atn"><span class="pln">STATUS_OK:654321</span></span></pre>

                                                        </div>

                                                      
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="accordion-item">
                                                <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-item-2-4" id="getCountry">
                                                   <h6 class="title">Get list of all countries/Servers</h6>
                                                   <span class="accordion-icon"></span>
                                                </a>
                                                <div class="accordion-body collapse" id="accordion-item-2-4" data-bs-parent="#accordion-2">
                                                   <div class="accordion-inner mb-30">

                                                   <div class="code-block">

                                                        <h6 class="overline-title title"><span class="badge bg-primary">GET</span></h6>
                                                        <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#badgeDot1" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                                        
                                                        <pre class="prettyprint lang-html" id="badgeDot1"><span class="atn"><?php echo $website_url;?>/stubs/handler_api.php?action=getCountries&api_key=$api_key</span></pre>                                                       
                                                        
                                                    </div>

                                                    

                                                        <h5 class="mt-30"> <small class="text-soft">Parametrs required:</small></h5>
                                                          <span class="ff-base fw-medium">action<small class="text-soft">&nbsp;&nbsp;&nbsp; getCountries</small></span><br>
                                                        <span class="ff-base fw-medium">$api_key<small class="text-soft">&nbsp;&nbsp;&nbsp; API KEY</small></span><br>

                                                        

                                                        <h5 class="mt-30"> <small class="text-soft">Possible errors:</small></h5>
                                                        <span class="ff-base fw-medium">BAD_KEY<small class="text-soft">&nbsp;&nbsp;&nbsp; Invalid API key</small></span><br>
                                                        <span class="ff-base fw-medium">NO_ACTIVATION<small class="text-soft">&nbsp;&nbsp;&nbsp; incorrect action</small></span><br>
                                                        
                                                        

                                                        <h5 class="mt-30"> <small class="text-soft">Success Response:</small></h5>
                                                        <div class="code-block">
                                                        <pre class="prettyprint lang-html" id="badgeDot1"><span class="atn"><span class="pln">{"1":"USA","22":"India"}</span></span></pre>

                                                        </div>

                                                      
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="accordion-item">
                                                <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-item-2-5" id="getService">
                                                   <h6 class="title">Get list of all services</h6>
                                                   <span class="accordion-icon"></span>
                                                </a>
                                                <div class="accordion-body collapse" id="accordion-item-2-5" data-bs-parent="#accordion-2">
                                                   <div class="accordion-inner mb-30">

                                                   <div class="code-block">

                                                        <h6 class="overline-title title"><span class="badge bg-primary">GET</span></h6>
                                                        <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#badgeDot1" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>
                                                        
                                                        <pre class="prettyprint lang-html" id="badgeDot1"><span class="atn"><?php echo $website_url;?>/stubs/handler_api.php?action=getServices&api_key=$api_key&country=$country</span></pre>                                                       
                                                        
                                                    </div>

                                                    

                                                        <h5 class="mt-30"> <small class="text-soft">Parametrs required:</small></h5>
                                                          <span class="ff-base fw-medium">action<small class="text-soft">&nbsp;&nbsp;&nbsp; getServices</small></span><br>
                                                        <span class="ff-base fw-medium">$api_key<small class="text-soft">&nbsp;&nbsp;&nbsp; API KEY</small></span><br>
                                                        <span class="ff-base fw-medium">$country<small class="text-soft">&nbsp;&nbsp;&nbsp; Country Code</small></span><br>

                                                        <h5 class="mt-30"> <small class="text-soft">Possible errors:</small></h5>
                                                        <span class="ff-base fw-medium">BAD_KEY<small class="text-soft">&nbsp;&nbsp;&nbsp; Invalid API key</small></span><br>
                                                        <span class="ff-base fw-medium">BAD_COUNTRY<small class="text-soft">&nbsp;&nbsp;&nbsp; Invalid country code</small></span><br>
                                                        
                                                        

                                                        <h5 class="mt-30"> <small class="text-soft">Success Response:</small></h5>
                                                        <div class="code-block">
                                                        <pre class="prettyprint lang-html" id="badgeDot1"><span class="atn"><span class="pln">{"ot":"Any Other","idg":"Instagram","tg":"Telegram"}</span></span></pre>

                                                        </div>

                                                      
                                                   </div>
                                                </div>
                                             </div>

                                           
                                           
                                            
                                          </div>
                                       </div>
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

<script>
   var current ;
    function handleAccordion(targetHash = window.location.hash.substring(1)) {
    // Array of accordion IDs
    var accordionIds = ['balance', 'number', 'changeStatus', 'getStatus', 'getCountry', 'getService'];
        
    // Check if the targetHash is in the accordionIds array
    var index = accordionIds.indexOf(targetHash);
    current = targetHash;

    if (index !== -1) {
        // Loop through the array
        for (var i = 0; i < accordionIds.length; i++) {
            currentId = accordionIds[i];

            // Check if the current index matches the targetHash index
            if (i === index) {
                // Remove the 'collapsed' class and add the 'show' class
                $('#' + encodeURIComponent(currentId)).removeClass('collapsed');
                $('#accordion-item-2-' + i).addClass('show');
            } else {
                // Add the 'collapsed' class and remove the 'show' class for other IDs
                $('#' + encodeURIComponent(currentId)).addClass('collapsed');
                $('#accordion-item-2-' + i).removeClass('show');
            }
        }
    }
}
    $(document).ready(function(){
        handleAccordion();
        setInterval(function () {
            var targetHash = window.location.hash.substring(1);
            
            if(current != targetHash ){

                handleAccordion(targetHash);
            }
        }, 200);
    });
</script>
<?php include 'include/footer-main.php'; ?>
</body>