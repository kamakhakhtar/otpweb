
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
                           <div class="components-preview wide-md mx-auto">
                              <div class="nk-block nk-block-lg">
                                 <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                       <h4 class="nk-block-title">Recharge Account</h4>
                                       
                                       <div class="nk-block-des">
                                          <p>
                                             Using the most basic table markup, here’s how
                                             <code class="code-class">.table</code> based
                                             tables look by default.
                                          </p>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row g-3">
                                    
                                    <div class="col-md-12 col-12">    
                                        <!-- <a href="#" class="btn btn-xl btn-primary"><span>Action Button</span><em class="icon ni ni-arrow-right"></em></a> -->
                                        
                                    </div>

                                </div>
                                <!-- <div class="card text-white bg-primary">    <div class="card-header">Header</div>    <div class="card-inner">        <h5 class="card-title">Primary card title</h5>        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>    </div></div>

                                <div class="card card-bordered"><div class="card-header border-bottom">Featured Title</div><div class="card-inner"><h5 class="card-title">Special title treatment</h5><p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a></div></div> -->


                            <div class="nk-block mb-20"><div class="card card-bordered"><div class="card-inner"><div class="nk-help"><div class="nk-help-img">
                            <img src="<?php echo WEBSITE_URL; ?>/theam/ninja/images/icons/help.png" width="40" class="card-img-top mb-20" alt="">        
                        </div><div class="nk-help-text"><h5>We’re here to help you!</h5><p class="text-soft">Ask a question or file a support ticketn or report an issues. Our team support team will get back to you by telegram.</p></div><div class="nk-help-action"><a href="https://t.me/TTKLWORLD" class="btn btn-lg btn-outline-primary">Get Support Now</a></div></div></div></div></div>
                                <div class="card card-bordered card-preview">
                                <div class="card-inner">
                                    <div class="row g-gs">
                                        <div class="col-md-6 col-6">
                                            <input type="hidden" name="tokens" id="tokens" value="<?php echo $_SESSION['token']; ?>">
                                            <ul class="custom-control-group custom-control-vertical w-100">
                                                <li>
                                                    <div class="custom-control custom-control-sm custom-checkbox custom-control-pro">
                                                        <input type="radio" class="custom-control-input" id="trx" checked name="user-selection">
                                                        <label class="custom-control-label" for="trx">
                                                            <span class="user-card">
                                                                <span class="user-avatar sq trx">
                                                                    <img src="https://i.ibb.co/hZtsc8W/trx.png" alt="">
                                                                </span>
                                                                <span class="user-info">
                                                                    <span class="lead-text">TRX - TRC20 </span>
                                                                    <span class="sub-text">1 TRX = ₹ <span id="trx-price"></span> &nbsp; (Minimum - <?php echo $site_data['trx_minimum'];?> TRX)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-control-sm custom-checkbox custom-control-pro">
                                                        <input type="radio" class="custom-control-input" id="usdt" name="user-selection">
                                                        <label class="custom-control-label" for="usdt">
                                                            <span class="user-card">
                                                                <span class="user-avatar sq usdt">
                                                                    <img src="https://i.ibb.co/x1MqxSw/usdt.png" alt="">
                                                                </span>
                                                                <span class="user-info">
                                                                    <span class="lead-text">USDT - SOL</span>
                                                                    <span class="sub-text">1 USDT = ₹ <span id="usdt-price"></span> &nbsp; (Minimum - <?php echo $site_data['usdt_minimum'];?> USDT)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-control-sm custom-checkbox custom-control-pro">
                                                        <input type="radio" class="custom-control-input" id="promo" name="user-selection">
                                                        <label class="custom-control-label" for="promo">
                                                            <span class="user-card">
                                                                <span class="user-avatar sq promo">
                                                                    <img src="https://cdn-icons-png.flaticon.com/512/6664/6664427.png" alt="">
                                                                </span>
                                                                <span class="user-info">
                                                                    <span class="lead-text">Promo Code</span>
                                                                    <span class="sub-text">Giveaway</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="code-block">

                                                <h6 class="overline-title title"><span class="badge bg-primary">ADDRESS</span></h6>
                                                <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#badgeDot1" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>

                                                <pre class="prettyprint lang-html" id="badgeDot1"><span class="atn"></span></pre>                                                       

                                            </div>
                                            
                                            <div class="input-group input-group-lg promo-code">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-lg">PROMO CODE</span>
                                                </div>
                                                <input type="text" id="redeem_id" class="form-control">
                                            </div>
                                            <a href="#" class="btn btn-wider btn-primary mt-10" id="generate">
                                                <span>Generate Address</span>
                                                <em class="icon ni ni-arrow-right"></em>
                                            </a>
                                            <a href="#" class="btn btn-wider btn-danger mt-10" id="delete">
                                                <span>Delete Address</span><em class="icon ni ni-arrow-right"></em>
                                            </a>
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

        var token = $("#tokens").val();
        var params = {
        token: token,
        };
        var deleteButton = document.querySelector('.btn-danger');

        var generateButton = $("#generate");

        $(document).ready(function () {
        deleteButton.style.display = 'none';
        // AJAX request to get data from API on page load
        $.ajax({
            type: "GET",
            url: "api/recharge/crypto/getPrice",
            error: function (e) {
                console.log(e);

                toastr.clear(), NioApp.Toast("An error occurred during Connection.", "error", {
                    position: "top-right"
                })
            },
            success: function (data) {

                var json = JSON.parse(data);
                var trxPrice = document.getElementById('trx-price');
                trxPrice.textContent = json.trx;

                var usdtPrice = document.getElementById('usdt-price');
                usdtPrice.textContent = json.usdt;

               
            }
        });
        });

        function usdt_address() {

        generateButton.prop("disabled", true);
        generateButton.html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span><span>Generating Address...</span> ');
        $.ajax({
            type: "GET",
            url: "api/recharge/crypto/generateAddress/usdt",
            data: params,
            error: function (e) {
                console.log(e);
                generateButton.html('<span>Generate Address</span><em class="icon ni ni-arrow-right"></em>');
                generateButton.prop("disabled", false);
                toastr.clear(), NioApp.Toast("An error occurred during Connection.", "error", {
                    position: "top-right"
                })

            },
            success: function (data) {
                generateButton.html('<span>Generate Address</span><em class="icon ni ni-arrow-right"></em>');
                generateButton.prop("disabled", false);
                var json = JSON.parse(data);
                if (json.ok === true) {
                    usdt();
                } else {
                    toastr.clear(), NioApp.Toast(json.message, "error", {
                    position: "top-right"
                    })
                }
            }
        });
        }

        // Function to make AJAX request
        function usdt() {

        $.ajax({
            type: "GET",
            data: params,
            url: "api/recharge/crypto/getAddress/usdt",
            error: function (e) {

                console.log(e);
                toastr.clear(), NioApp.Toast("An error occurred during Connection.", "error", {
                    position: "top-right"
                })
            },
            success: function (data) {
                // Notiflix.Block.remove('#cards_page');
                var json = JSON.parse(data);
                var usdtAddress = document.querySelector('.atn');
                usdtAddress.textContent = json.message;
                // Additional actions based on the data
                deleteButton.style.display = 'block';
                generateButton.style.display = 'none';

            }
        });
        }

        function usdt_cancle_address() {

        var deleteButton = $("#delete");
        deleteButton.prop("disabled", true);
        deleteButton.html('<span class="animate-spin border-2 border-white border-l-transparent rounded-full w-4 h-4 ltr:mr-1 rtl:ml-1 inline-block align-middle"></span>Deleting Address');

        $.ajax({
            type: "GET",
            url: "api/recharge/crypto/cancelAddress/usdt",
            data: params,
            error: function (e) {
                console.log(e);
                toastr.clear(), NioApp.Toast("An error occurred during Connection.", "error", {
                    position: "top-right"
                })
                deleteButton.html('<span>Delete Address</span><em class="icon ni ni-arrow-right"></em>');
                deleteButton.prop("disabled", false);
            },
            success: function (data) {
                deleteButton.html('<span>Delete Address</span><em class="icon ni ni-arrow-right"></em>');
                deleteButton.prop("disabled", false);
                var json = JSON.parse(data);
                if (json.ok === true) {
                    deleteButton.style.display = 'none';
                    generateButton.style.display = 'block';
                } else {
                    toastr.clear(), NioApp.Toast(json.message, "error", {
                    position: "top-right"
                    })
                }
            }
        });
        }

        function trx_address() {
        $.ajax({
            type: "GET",
            url: "api/recharge/crypto/generateAddress/trx",
            data: params,
            error: function (e) {
                console.log(e);
                toastr.clear(), NioApp.Toast("An error occurred during Connection.", "error", {
                    position: "top-right"
                })
            },
            success: function (data) {

                // $('#trx_btn').html("Generate Address");
                // $('#trx_btn').prop("disabled", false);

                var json = JSON.parse(data);
                if (json.ok === true) {
                    trx();
                } else {

                    toastr.clear(), NioApp.Toast(json.message, "error", {
                    position: "top-right"
                    })
                }
            }
        });
        }


        function trx() {
        $.ajax({
            type: "GET",
            data: params,
            url: "api/recharge/crypto/getAddress/trx",
            error: function (e) {

                console.log(e);
                toastr.clear(), NioApp.Toast("An error occurred during Connection.", "error", {
                    position: "top-right"
                })
            },
            success: function (data) {
                // Notiflix.Block.remove('#cards_page');
                var json = JSON.parse(data);
                var trxAddress = document.querySelector('.atn');
                trxAddress.textContent = json.message;
                generateButton.style.display = 'none';
                deleteButton.style.display = 'block';
                // Additional actions based on the data
            }
        });
        }

        function trx_cancle_address() {
        var deleteButton = $("#delete");
        deleteButton.prop("disabled", true);
        deleteButton.html('<span class="animate-spin border-2 border-white border-l-transparent rounded-full w-4 h-4 ltr:mr-1 rtl:ml-1 inline-block align-middle"></span>Deleting Address');

        $.ajax({
            type: "GET",
            url: "api/recharge/crypto/cancelAddress/trx",
            data: params,
            error: function (e) {
                console.log(e);
                toastr.clear(), NioApp.Toast("An error occurred during Connection.", "error", {
                    position: "top-right"
                })
                deleteButton.html('<span>Delete Address</span><em class="icon ni ni-arrow-right"></em>');
                deleteButton.prop("disabled", false);
            },
            success: function (data) {
                deleteButton.html('<span>Delete Address</span><em class="icon ni ni-arrow-right"></em>');
                deleteButton.prop("disabled", false);
                var json = JSON.parse(data);
                if (json.ok === true) {

                    // usdt();
                    generateButton.style.display = 'block';
                    deleteButton.style.display = 'none';
                } else {
                    toastr.clear(), NioApp.Toast(json.message, "error", {
                    position: "top-right"
                    })
                }
            }
        });
        }

        function add_promo() {
        var txn_id = $("#redeem_id").val();
        if (txn_id === '') {
            notyf.error('Please Enter Promocode.');
            return; // Stop execution if email or password is blank
        }


        generateButton.prop("disabled", true);
        generateButton.html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span><span>Checking promocode...</span> ');

        var params = {
            token: token,
            code: txn_id,
        };
        $.ajax({
            type: "POST",
            url: "api/recharge/promocode",
            data: params,
            error: function (e) {
                console.log(e);
                toastr.clear(), NioApp.Toast("An error occurred during Connection.", "error", {
                    position: "top-right"
                })

                $('#recharges1').html("Redeem");
                $('#recharges1').prop("disabled", false);

                generateButton.html('<span>Redeem Code</span><em class="icon ni ni-arrow-right"></em>');
                generateButton.prop("disabled", false);
            },
            success: function (data) {
                generateButton.html('<span>Redeem Code</span><em class="icon ni ni-arrow-right"></em>');
                generateButton.prop("disabled", false);
                var json = JSON.parse(data);
                if (json.status === "200") {
                    var params = {
                    token: token
                    };

                    $.ajax({
                    type: "POST",
                    url: "api/auth/session",
                    data: params,
                    error: function (e) {
                        console.log(e);
                    },
                    success: function (data) {
                        var jsons = JSON.parse(data);
                        // Get a reference to the <span> element by its ID
                        var spanElement = document.getElementById("current_balance");

                        // Set the data (text) you want to display in the <span>
                        spanElement.textContent = jsons.balance;

                    }
                    });
                    
                    toastr.clear(), NioApp.Toast(json.message, "success", {
                    position: "top-right"
                    })
                } else {
                    
                    toastr.clear(), NioApp.Toast(json.message, "error", {
                    position: "top-right"
                    })
                }
            }
        });
        }

        document.addEventListener('DOMContentLoaded', function () {
        // Select elements
        var trxRadio = document.getElementById('trx');
        var usdtRadio = document.getElementById('usdt');
        var promoRadio = document.getElementById('promo');


        var codeBlock = document.querySelector('.code-block');
        var promoInputGroup = document.querySelector('.promo-code');

        // Hide promo input group and delete button initially
        promoInputGroup.style.display = 'none';
        var generateButton = document.querySelector('.btn-primary');
        // Function to handle radio button change
        function handleRadioButtonChange() {
            if (trxRadio.checked || usdtRadio.checked) {
                codeBlock.style.display = 'block';
                generateButton.style.display = 'block';
                promoInputGroup.style.display = 'none';
                generateButton.textContent = 'Generate Address';
                // deleteButton.style.display = 'none';
            } else if (promoRadio.checked) {
                codeBlock.style.display = 'none';
                generateButton.style.display = 'block';
                promoInputGroup.style.display = 'flex';
                generateButton.textContent = 'Redeem Code';
                // deleteButton.style.display = 'none';
            }
        }

        // Add event listeners
        trxRadio.addEventListener('click', handleRadioButtonChange);
        usdtRadio.addEventListener('click', handleRadioButtonChange);
        promoRadio.addEventListener('click', handleRadioButtonChange);

        generateButton.addEventListener('click', function () {
            if (usdtRadio.checked) {
                usdt_address();
            } else if (trxRadio.checked) {
                trx_address();
            }
            else{
                add_promo();
            }

            if (trxRadio.checked || usdtRadio.checked) {
                // deleteButton.style.display = 'block';
            }
        });

        deleteButton.addEventListener('click', function () {
            if (usdtRadio.checked) {
                usdt_address();
            } else if (trxRadio.checked) {
                trx_address();
            }

            if (deleteButton.checked || usdtRadio.checked) {
                // deleteButton.style.display = 'block';
            }
        });

        
        }); 

</script>

<?php include 'include/footer-main.php'; ?>
</body>