<?php
// Assuming $userdata['name'] contains the user's name
if(isset($_SESSION['token'])){
	// header('location: index');

$userName = $userdata['name'];

// Function to get initials from a name
function getInitials($name) {
    $words = explode(' ', $name);
    $initials = '';
    foreach ($words as $word) {
        $initials .= strtoupper(substr($word, 0, 1));
    }
    return $initials;
}

// Get initials from the user's name
$initials = getInitials($userName);
}
?>
<div class="nk-header nk-header-fixed is-light  nk-header-fixed">
                  <div class="container-lg wide-xl">
                     <div class="nk-header-wrap">
                        <div class="nk-header-brand"><a href="<?php echo WEBSITE_URL; ?>/theam/ninja/subscription/index.html" class="logo-link"><img class="logo-light logo-img" src="<?php echo WEBSITE_URL; ?>/theam/ninja/images/logo.png" srcset="<?php echo WEBSITE_URL; ?>/theam/ninja/images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img" src="<?php echo WEBSITE_URL; ?>/theam/ninja/images/logo-dark.png" srcset="<?php echo WEBSITE_URL; ?>/theam/ninja/images/logo-dark2x.png 2x" alt="logo-dark"></a></div>
                        
                       
                        <div class="nk-header-tools">
                           <ul class="nk-quick-nav">
                           <li class="nk-menu-item"><a href="blog" class="nk-menu-link"><span class="nk-menu-text">Blog</span></a></li>
                           <?php if(isset($_SESSION['token'])){ ?>
                           <li class="dropdown user-dropdown">
                              <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                 <div class="user-toggle">
                                    <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                                    <div class="user-name dropdown-indicator d-none d-sm-block"><?php echo $userdata['name'];?></div>
                                 </div>
                              </a>
                              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                 <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                    <div class="user-card">
                                       <div class="user-avatar"><span><?php echo $initials; ?></span></div>
                                       <div class="user-info"><span class="lead-text"><?php echo $userdata['name'];?></span><span class="sub-text"><?php echo $userdata['email'];?></span></div>
                                       <div class="user-action"><a class="btn btn-icon me-n2" href="<?php echo WEBSITE_URL; ?>/theam/ninja/subscription/profile-setting.html"><em class="icon ni ni-setting"></em></a></div>
                                    </div>
                                 </div>
                                 <div class="dropdown-inner">
                                    <ul class="link-list">
                                       <li><a href="#"><em class="icon ni ni-coins"></em><span>Balance :<span id="current_balance">55</span></span></a></li>
                                       <li><a href="<?php echo WEBSITE_URL; ?>/theam/ninja/subscription/profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                       <li><a href="<?php echo WEBSITE_URL; ?>/theam/ninja/subscription/profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                       <li><a href="<?php echo WEBSITE_URL; ?>/theam/ninja/subscription/profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                    </ul>
                                 </div>
                                 <div class="dropdown-inner">
                                    <ul class="link-list">
                                       <li><a href="logout"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <?php } else{ ?>
                              
                              
                              <li class="dropdown user-dropdown">
                                 <a href="#" class="dropdown-toggle me-lg-n1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-toggle">
                                       <div class="user-avatar sm"><em class="icon ni ni-user-list-fill"></em></div>
                                    </div>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1" style="">
                                    
                                 <div class="dropdown-inner">
                                    <ul class="link-list">
                                       <li><a href="login"><em class="icon ni ni-signin"></em><span>Sign-in</span></a></li>
                                       <li><a href="register"><em class="icon ni ni-user-add"></em><span>Register</nspan></a></li>
                                    </ul>
                                 </div>
                                 
                              </div>
                           </li>
                           <?php }?>
                              <li class="d-lg-none"><a href="#" class="toggle nk-quick-nav-icon me-n1" data-target="sideNav"><em class="icon ni ni-menu"></em></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>