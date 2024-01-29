<div class="nk-content-wrap">
    <div class="nk-block-head nk-block-head-lg">
        <div class="nk-block-between-md g-4">
        <div class="nk-block-head-content">
            <h2 class="nk-block-title fw-normal">Welcome Back!</h2>
            <div class="nk-block-des">
                <p>Welcome to our dashboard. Manage your account and buy numbers.</p>
            </div>
        </div>
        </div>
    </div>
    
    <div class="nk-block">
        <div class="row g-gs">
        <div class="col-md-6">
            <div class="card card-bordered card-full">
                <div class="nk-wg1">
                    <div class="nk-wg1-block">
                    <div class="nk-wg1-img">
                        <img src="<?php echo WEBSITE_URL; ?>/theam/ninja/images/icons/wallet.png" alt="" srcset="">
                    </div>
                    <div class="nk-wg1-text">
                        <h5 class="title">Available Balance :</h5>
                        <p class="dashboard-data"><?php echo $userwallet['balance'];?></p>
                    </div>
                    </div>
                    <div class="nk-wg1-action"><a href="recharge" class="link"><span>Recharge Your Account</span> <em class="icon ni ni-chevron-right"></em></a></div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card card-bordered card-full">
                <div class="nk-wg1">
                    <div class="nk-wg1-block">
                    <div class="nk-wg1-img">
                    <img src="<?php echo WEBSITE_URL; ?>/theam/ninja/images/icons/billing.png" alt="" srcset="">
                    </div>
                    <div class="nk-wg1-text">
                        <h5 class="title">Billing History</h5>
                        <p>Check out all your payment history. You can also download or print your invoice.</p>
                    </div>
                    </div>
                    <div class="nk-wg1-action"><a href="transaction" class="link"><span>Payment History</span> <em class="icon ni ni-chevron-right"></em></a></div>
                </div>
            </div>
        </div>
        
        </div>
    </div>
    
    <div class="nk-block">
        <div class="card card-bordered">
        <div class="card-inner">
            <div class="nk-help">
                <div class="nk-help-img">
                <img src="<?php echo WEBSITE_URL; ?>/theam/ninja/images/icons/numbers.png" alt="" srcset="">
                </div>
                <div class="nk-help-text">
                    <h5>Buy Numbers</h5>
                    <p class="text-soft">Click the button for a temporary number to receive a one-time password (OTP) for verification. Simple, fast, and secure process.</p>
                </div>
                <div class="nk-help-action"><a href="buy-number" class="btn btn-lg btn-outline-primary">Get Start Now</a></div>
            </div>
        </div>
        </div>
    </div>
    <?php if($recent_history){ ?>
    <div class="nk-block">
        <div class="card card-bordered">
        <div class="card-inner card-inner-md">
            <div class="card-title-group">
                <h6 class="card-title">Payment History</h6>
                <div class="card-action"><a href="payment" class="link link-sm">See All <em class="icon ni ni-chevron-right"></em></a></div>
            </div>
        </div>
        <table class="table table-tranx">
            <thead>
                <tr class="tb-tnx-head">
                    <th class="tb-tnx-id"><span class="">#</span></th>
                    <th class="tb-tnx-info"><span class="tb-tnx-desc d-none d-sm-inline-block"><span>Transaction Type</span></span><span class="tb-tnx-date d-md-inline-block d-none"><span class="d-md-none">Transaction Date</span><span class="d-none d-md-block"><span>Transaction Date</span></span></span></th>
                    <th class="tb-tnx-amount"><span class="tb-tnx-total">Total</span><span class="tb-tnx-status d-none d-md-inline-block">Status</span></th>
            </thead>
            <tbody>
            
            <?php 
            $i = 1;
            foreach($recent_history as $transaction){  
            if($transaction['status'] == "1"){
                $stat ='<span class="badge badge-dot bg-success">Success</span>';
                }elseif($transaction['status'] == "2"){
                $stat ='<span class="badge badge-dot bg-warning">Pending</span>';
                }else{
                $stat ='<span class="badge badge-dot bg-danger">Cancelled</span>';                                                                     
                }   
        $timestamp = strtotime($transaction['date']);
        $formattedDate = date("M d, Y - h:i A", $timestamp);

                ?>    
                <tr class="tb-tnx-item">
                    <td class="tb-tnx-id"><a href="#"><span><?php echo $i;?></span></a></td>
                    <td class="tb-tnx-info">
                    <div class="tb-tnx-desc"><span class="title"><?php echo $transaction['type'];?></span></div>
                    <div class="tb-tnx-date"><span class="date"><?php echo $formattedDate;?></span></div>
                    </td>
                    <td class="tb-tnx-amount">
                    <div class="tb-tnx-total"><span class="amount">₹<?php echo $transaction['amount'];?></span></div>
                    <div class="tb-tnx-status"><?php echo $stat;?></div>
                    </td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
        </div>
    </div>
    <?php } ?>

    
</div>