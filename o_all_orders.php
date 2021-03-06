<!-- including header -->
<?php include 'templates/header.php';?>
<body>
    <div id="wrapper">
        <!-- including navbars -->
        <?php include 'templates/navbars.php';?>
        <!-- main wrapper starting from here -->
        <div id="page-wrapper">
            <div id="page-inner">
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <!--   All Top Level Domains -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="text-center">All Customers</h1>
                            <p class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message'];}?></p>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="d_all_domains">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Customer ID</th>
                                            <th>TLD ID</th>
                                            <th>TLD Price</th>
                                            <th>Domain</th>
                                            <th>Package ID</th>
                                            <th>P. Price</th>
                                            <th>Paid</th>
                                            <th>Total</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include 'includes/db_o_all_orders.php';?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  All Top Level Domains -->
                    </div>
                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    <!-- /. WRAPPER  -->
    <!-- including footer -->
    <?php include 'templates/footer.php';?>
    <script>
        function del_customer(o_id){
              var o_id=o_id;
              var result= confirm("Are you sure to delete this order permenently? Click OK if your are sure else cancel. Refresh the page once before pressing the same delete button again. ");
              if(result){
            //   Doing nothing default behaviour of the system. Let the system to destroy the record
              }else{
                //   updating the href of the link to prevent deletion
                  document.getElementById(o_id).href = "#";
              }
        }
    </script>
</body>
</html>
