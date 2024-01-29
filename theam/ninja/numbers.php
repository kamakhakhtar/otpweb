<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
      $(document).ready(function() {
         var token = $("#token").val();
      
         function fillTable() {
            var params = { token: token };
      
            $.ajax({
               url: "api/service/getNumbers_history",
               method: "GET",
               data: params,
               dataType: "json",
               success: function(response) {
                  // $("#tableContainer").empty().append('<div class="spinner-border" role="status">  <span class="visually-hidden">Loading...</span></div>');
                  if (response.status === "200") {
                     var tableHtml =
                        '<table class="datatable-init table">' +
                        '<thead>' +
                        '<tr>' +
                        '<th>Number</th>' +
                        '<th>Service</th>' +
                        '<th>Amount</th>' +
                        '<th>Date</th>' +
                        '<th>Code</th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody id="numbersTableBody"></tbody>' +
                        '</table>';
      
                     $("#tableContainer").empty().append(tableHtml);
      
                     var tableBodyHtml = "";
      
                     $.each(response.data, function(index, row) {
                        tableBodyHtml +=
                           "<tr>" +
                           "<td> +" + row.number + "</td>" +
                           "<td>" + row.service_name + "</td>" +
                           "<td>" + row.amount + "</td>" +
                           "<td>" + row.date + "</td>" +
                           "<td>" + row.sms_text + "</td>" +
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
                              <div class="nk-block nk-block-lg">
                                 <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                       <h4 class="nk-block-title">Number History</h4>
                                       <div class="nk-block-des">
                                          <p>
                                             Using the most basic table markup, here’s how
                                             <code class="code-class">.table</code> based
                                             tables look by default.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                       <!-- <div class="spinner-border" role="status">  <span class="visually-hidden">Loading...</span></div> -->
                                       <div id="tableContainer">
                                          
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

<?php include 'include/footer-main.php'; ?>
   

   <!-- <script src="<?php echo WEBSITE_URL; ?>/theam/ninja/assets/js/libs/datatable-btns.js?ver=3.2.3" defer></script> -->
</body>