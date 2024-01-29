<div class="nk-aside" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg" data-toggle-body="true">
<div class="nk-sidebar-menu" data-simplebar>
    <ul class="nk-menu">
        <h6 class="overline-title">Main</h6>
            </li>
            
            <li class="nk-menu-item"><a href="home" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-home"></em></span><span class="nk-menu-text">Home</span></a></li>
            <li class="nk-menu-item"><a href="check-price" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-sign-dollar"></em></em></span><span class="nk-menu-text">Check Price</span></a></li>
            <li class="nk-menu-item"><a href="instruction" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-pen2"></em></span><span class="nk-menu-text">Instruction</span></a></li>
            
            
            
          

        <li class="nk-menu-heading">
        <h6 class="overline-title">Dashboard</h6>
        </li>
        <li class="nk-menu-item"><a href="dashboard" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span><span class="nk-menu-text">Dashboard</span></a></li>
        <?php if($userdata['type']=="admin"){ ?>
        <li class="nk-menu-item"><a href="radium_sahil_op_786_12" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-user-c"></em></span><span class="nk-menu-text">Admin Dashboard</span></a></li>
        <?php } ?>

        <li class="nk-menu-heading">
        <h6 class="overline-title">Services</h6>
        </li>
        
        <li class="nk-menu-item"><a href="buy-number" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-mobile"></em></span><span class="nk-menu-text">Buy Numbers</span></a></li>
        
        <li class="nk-menu-item"><a href="numbers" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-history"></em></span><span class="nk-menu-text">Numbers History</span></a></li>
        
        
        <li class="nk-menu-heading">
        <h6 class="overline-title">Buy</h6>
        </li>
        <li class="nk-menu-item"><a href="recharge" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-bitcoin"></em></span><span class="nk-menu-text">Recharge</span></a></li>
        <li class="nk-menu-item"><a href="transactions" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-coin"></em></span><span class="nk-menu-text">Transaction History</span></a></li>

        


        <li class="nk-menu-heading">
        <h6 class="overline-title">Others</h6>
        </li>
        <li class="nk-menu-item"><a href="ready-made-accounts" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-live"></em></span><span class="nk-menu-text">Ready Made Accounts</span></a></li>
        <li class="nk-menu-item has-sub">
        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-file-code"></em></span><span class="nk-menu-text">API Tools</span></a>
        <ul class="nk-menu-sub" style="display: none;">
            <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>api-tool#balance" class="nk-menu-link"><span class="nk-menu-text">Balance Request</span></a></li>
            <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>api-tool#number" class="nk-menu-link"><span class="nk-menu-text">Request a number  </span></a></li>
            <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>api-tool#changeStatus" class="nk-menu-link"><span class="nk-menu-text">Change activation status</span></a></li>
            <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>api-tool#getStatus" class="nk-menu-link"><span class="nk-menu-text">Get Activation status</span></a></li>
            <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>api-tool#getCountry" class="nk-menu-link"><span class="nk-menu-text">Get Country</span></a></li>
            <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>api-tool#getService" class="nk-menu-link"><span class="nk-menu-text">Get Services</span></a></li>
        </ul>
        </li>
       

        <!-- <li class="nk-menu-item has-sub">
        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-file-code"></em></span><span class="nk-menu-text">Support</span></a>
        <ul class="nk-menu-sub" style="display: none;">
            <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>api-tool#balance" class="nk-menu-link"><span class="nk-menu-text">FAQs</span></a></li>
            <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>api-tool#number" class="nk-menu-link"><span class="nk-menu-text">Contacts  </span></a></li>
            <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>api-tool#changeStatus" class="nk-menu-link"><span class="nk-menu-text">Rules</span></a></li>
            
        </ul>
        </li> -->
        
        <li class="nk-menu-item has-sub">
            <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-users"></em></span><span class="nk-menu-text">For users</span></a>
            <ul class="nk-menu-sub" style="display: none;">
                <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>/docs2/cookies.pdf" target="_blank" class="nk-menu-link"><span class="nk-menu-text">Cookies</span></a></li>
                <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>/docs2/delivery.pdf" target="_blank" class="nk-menu-link"><span class="nk-menu-text">Delivery policy</span></a></li>
                <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>/docs2/terms-and-conditions.pdf" target="_blank" class="nk-menu-link"><span class="nk-menu-text">Terms and conditions</span></a></li>
                <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>/docs2/privacy.pdf" target="_blank" class="nk-menu-link"><span class="nk-menu-text">Privacy policy</span></a></li>
                <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>/docs2/refund.pdf" target="_blank" class="nk-menu-link"><span class="nk-menu-text">Refund policy</span></a></li>
                <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>/docs2/return.pdf" target="_blank" class="nk-menu-link"><span class="nk-menu-text">Return policy</span></a></li>
                <li class="nk-menu-item"><a href="<?php echo WEBSITE_URL; ?>/docs2/payment.pdf" target="_blank" class="nk-menu-link"><span class="nk-menu-text">Payment policy</span></a></li>
            </ul>
        </li>
    </ul>
    <ul class="nk-menu nk-menu-sm">
        <li class="nk-menu-heading"><span>Help Center</span></li>
        <li class="nk-menu-item"><a href="faqs" class="nk-menu-link"><span class="nk-menu-text">FAQs</span></a></li>
        <li class="nk-menu-item"><a href="contact" class="nk-menu-link"><span class="nk-menu-text">Contact</span></a></li>
        <li class="nk-menu-item"><a href="support" class="nk-menu-link"><span class="nk-menu-text">Support</span></a></li>
    </ul>
    
</div>
<div class="nk-aside-close"><a href="#" class="toggle" data-target="sideNav"><em class="icon ni ni-cross"></em></a></div>
</div>  