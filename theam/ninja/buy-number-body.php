<div class="nk-content-wrap">
   <div class="components-preview wide-md mx-auto">
      <div class="nk-block-head nk-block-head-lg wide-sm">
         <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a></div>
            <h2 class="nk-block-title fw-normal">Buy Numbers</h2>
            <div class="nk-block-des">
               <p class="lead">Click the button for a temporary number to receive a one-time password (OTP) for verification. Simple, fast, and secure process.</p>
            </div>
         </div>
      </div>
      <div class="nk-block nk-block-lg">
         <div class="nk-block-head">
            <div class="nk-block-head-content">
               <h4 class="title nk-block-title">Generate Numbers</h4>
               <div class="nk-block-des">
                  <p>Select <code>Server</code> and <code>Service</code> from select option and click on <code>Generate Number</code></p>
               </div>
            </div>
         </div>
         <div class="row g-gs">
            <div class="col-lg-6">
               <div class="card card-bordered h-100">
                  <div class="card-inner">
                     <form action="#">
                        <div class="form-group">
                           <label class="form-label" for="full-name">Choose Server</label>
                           <div class="form-control-wrap">
                              <input type="hidden" id="server_no" value=""> 
                              <input type="hidden" id="token" value="<?php echo $_SESSION['token'];?>">     
                              <select class="selectpicker form-control" id="server-id" data-live-search="true">
                                 <option value="" selected>Choose Server</option>
                                 <?php
                                    foreach($server as $servers)
                                    {
                                        echo "<option value=".$servers['id'].">".$servers['server_name']."</option>";
                                    }
                                    ?>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="email-address">Choose Service</label>
                           <div class="form-control-wrap">
                              <select class="form-select js-select2 js-example-basic-single" data-search="on" id="service-id">
                                 <option value="default_option" >Choose Service</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group"><button type="submit" class="btn btn-wide btn-primary" id="buy-numbers"><span>Generate Number</span><em class="icon ni ni-arrow-right"></em></button></div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="card card-bordered card-full">
                  <div class="card-inner">
                     <div class="nk-cov-wg1">
                        <div class="card-title">
                           <h5 class="title">Number Data - <small>Overall</small></h5>
                        </div>
                        <div class="nk-cov-data">
                           <h6 class="overline-title">Total Buy Number</h6>
                           <div class="amount"><?php echo $numberdata['total'];?></div>
                        </div>
                        <?php
                           // Assuming $numberdata is an associative array with 'total' and 'used' keys
                           
                           $total = $numberdata['total'];
                           $used = $numberdata['used'];
                           $unused = $numberdata['unused'];
                           $usedp =  round(($used / $total) * 100) ;
                           $unusedp = round(($unused / $total) * 100);
                           ?>
                        <div class="nk-cov-wg1-progress">
                           <div class="progress progress-reverse progress-md progress-pill progress-bordered">
                              <div class="progress-bar bg-danger" data-progress="15"\ data-bs-toggle="tooltip" aria-label="Deaths : 15%" data-bs-original-title="Deaths : 15%" style="width: <?php echo $unusedp ?>%;"></div>
                              <div class="progress-bar bg-success" data-progress="85" data-bs-toggle="tooltip" aria-label="Recovered : 30%" data-bs-original-title="Recovered : 30%" style="width: <?php echo $usedp?>%;"></div>
                           </div>
                        </div>
                        <ul class="nk-cov-wg1-data">
                           <li>
                              <div class="title">
                                 <div class="dot dot-lg sq bg-success"></div>
                                 <span>Received OTP</span>
                              </div>
                              <div class="count"><?php echo $numberdata['used'];?></div>
                           </li>
                           <li>
                              <div class="title">
                                 <div class="dot dot-lg sq bg-danger"></div>
                                 <span>Not Received</span>
                              </div>
                              <div class="count"><?php echo $numberdata['unused'];?></div>
                           </li>
                        </ul>
                        <div class="nk-cov-wg-note">The ratio of <code>Received (<?php echo $usedp?>%)</code> &amp; <code>Not received (<?php echo $unusedp ?>%)</code>.</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    
      <div class="nk-block nk-block-lg">
         <div class="card card-bordered card-preview" id="active">
            <div class="card-inner">
               <div class="row" id="activenumber">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>