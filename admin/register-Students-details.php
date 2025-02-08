<?php
require_once '../source/assets/db/config_session_admin.inc.php';


if (isset($_SESSION["admin"])) {

  require_once "../source/assets/db/connection.inc.php";

  require_once "../source/assets/db/fetch-Tables/fetch-students-table.inc.php";

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>

    <?php include "./header-links.php" ?>


    <title>Student Details</title>


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Sidebar -->
      <?php include "admin-sidebar.php" ?>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <?php include "admin-topbar.php" ?>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">


            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Student Details Table</h1>
            <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
              For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Registered Student's Details</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <?php  ?>
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>About</th>
                        <th>Profile Pic</th>

                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>About</th>
                        <th>Profile Pic</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php
                      foreach ($result as $row) { ?>
                        <tr>
                          <td><?php echo htmlspecialchars($row["id"]) ?></td>
                          <td><?php echo htmlspecialchars($row["username"]) ?></td>
                          <td><?php echo htmlspecialchars($row["email"]) ?></td>
                          <td><?php echo htmlspecialchars($row["phone"]) ?></td>
                          <td><?php echo htmlspecialchars($row["about"]) ?></td>
                          <td><?php echo htmlspecialchars($row["profilePic"]) ?></td>
                        </tr>
                      <?php  } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2021</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

  </html>
<?php } else { ?>
  <script>
    window.location.replace("./login.php")
  </script>
<?php
}; ?>