<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
      $(document).ready(function() {
         var token = $("#token").val();
      
         function fillTable() {
            var params = { token: token };
      
            $.ajax({
               url: "api/service/getTransaction",
               method: "GET",
               data: params,
               dataType: "json",
               success: function(response) {
                  if (response.status === "200") {
                     var tableHtml =
                        '<table class="datatable-init table">' +
                        '<thead>' +
                        '<tr>' +
                        '<th>Date</th>' +
                        '<th>Transaction Type</th>' +
                        '<th>Amount</th>' +
                        '<th>Status</th>' +                        
                        '</tr>' +
                        '</thead>' +
                        '<tbody id="numbersTableBody"></tbody>' +
                        '</table>';
      
                     $("#tableContainer").empty().append(tableHtml);
      
                     var tableBodyHtml = "";
                     var success = "<span class='badge bg-secondary'>Success</span>";
                     var pending = "<span class='badge bg-warning'>Pending</span>";
                     var rejected = "<span class='badge bg-danger'>Rejected</span>";
                     $.each(response.data, function(index, row) {
                        
                        var Badge;

                        if (row.status == 1) {
                           Badge = success;
                        } else if (row.status == 2) {
                           Badge = pending;
                        } else if(row.status == 3) {
                           Badge = rejected;
                        }

                        tableBodyHtml +=
                           "<tr>" +
                           "<td> " + row.date + "</td>" +
                           "<td>" + row.type + "</td>" +
                           "<td>" + row.amount + "</td>" +
                           "<td>"+Badge +  "</td>" +
                           "</tr>";
                     });
      
                     // Set the HTML content of the table body
                     $("#numbersTableBody").html(tableBodyHtml);
      
                     // Initialize DataTable after filling the table
                     // $('.datatable-init').DataTable();   
                     // loadOtherScripts();

                     // Initialize DataTable after filling the table
        NioApp.DataTable(".datatable-init", {
            responsive: {
                details: !0
            }
        });

                    
                  } else {
                     console.error("Error fetching numbers history: " + response.message);
                  }
               },
               error: function(xhr, status, error) {
                  console.error("AJAX error: " + status + " - " + error);
               }
            });
         }
      
         // Call the function to fill the table on page load
         fillTable();


      });
</script>
<?php 
   $page_name = "Transaction";
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
                              <div class="toast-header"><strong class="me-auto text-primary">Error</strong><small>a minute ago</small><button type="button" class="close" data-dismiss="toast" aria-label="Close"><em class="icon ni ni-cross-sm"></em></button></div>
                              <div class="toast-body"> Hello, world! This is a toast message. </div>
                           </div>
                        </div>
                        <div class="nk-content-wrap">
                           <div class="components-preview wide-md mx-auto">
                              <div class="nk-block nk-block-lg">
                                 <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                       <h4 class="nk-block-title">Transaction History</h4>
                                       <div class="nk-block-des">
                                          <p>
                                          Explore your financial journey with our <code class="code-class">Transaction History </code> page, providing insights into your transactions and account activities seamlessly.
                                             
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                       <div id="tableContainer"></div>
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

<?php include 'include/footer-main.php'; ?>
   

   <!-- <script src="<?php echo WEBSITE_URL; ?>/theam/ninja/assets/js/libs/datatable-btns.js?ver=3.2.3" defer></script> -->
</body>