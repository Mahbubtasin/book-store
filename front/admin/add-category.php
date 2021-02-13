<!DOCTYPE html>

<?php

$pageRoot= '../../';
/*include_once ($_SERVER["DOCUMENT_ROOT"].'/book-store/vendor/autoload.php');*/
include_once ('../../vendor/autoload.php');
/*echo $_SERVER['DOCUMENT_ROOT'];*/
use General\admin\category;
$obj = new category();
$categories = $obj->showCategory();



?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!--pages-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Login Screens:</h6>
                <a class="dropdown-item" href="login.php">Login</a>
                <a class="dropdown-item" href="register.html">Admin Register</a>
                <a class="dropdown-item" href="forgot-password.php">Forgot Password</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Other Pages:</h6>
                <a class="dropdown-item" href="404.php">404 Page</a>
                <a class="dropdown-item" href="blank.html">Blank Page</a>
            </div>
        </li>
        <!--Manage User-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span> Manage User</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <!-- <h6 class="dropdown-header">Login Screens:</h6>-->
                <a class="dropdown-item" href="all-user.php">Show all user </a>
                <!--          <a class="dropdown-item" href="all-product.php">Show all product</a>-->
                <!--          <a class="dropdown-item" href="add-product.php">Add Product</a>-->
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Other Pages:</h6>
                <a class="dropdown-item" href="404.php">404 Page</a>
                <a class="dropdown-item" href="blank.php">Blank Page</a>
            </div>
        </li>

        <!--        Manage Product-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Manage Product</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <!-- <h6 class="dropdown-header">Login Screens:</h6>-->
                <!--                <a class="dropdown-item" href="all-user.php">Show all user </a>-->
                <a class="dropdown-item" href="all-product.php">Show all product</a>
                <a class="dropdown-item" href="add-product.php">Add Product</a>
                <a class="dropdown-item" href="add-category.php">Add Category</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Other Pages:</h6>
                <a class="dropdown-item" href="404.php">404 Page</a>
                <a class="dropdown-item" href="blank.php">Blank Page</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tables.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li>
    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>

            <!--product reg form-->
            <div class="container">
                <div class="card card-product mx-auto mt-5">
                    <h3><div class="card-header text-center" style="font-weight: bold">Category Add Page</div></h3>
                    <div class="row justify-content-center" style="height: 150px;">
                        <div class="col-6">

                            <form method="post" enctype="multipart/form-data"  name="form1">
                                <div class="form-group">
                                    <label for="category">Category Name</label>
                                    <input type="text" class="form-control" id="category" name="category_name" value="" aria-describedby="booknameHelp" placeholder="Enter category name">
                                <p id="empty_field"></p>
                                </div>
                                <a  onclick="submitCategoryAdd()" class="btn btn-primary">Submit</a>
                            </form>

                        </div>

                    </div>
                </div>
                <div class="card mb-3" style="margin-top: 10px;">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Category Table</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Category-ID</th>
                                    <th>Category Name</th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Category-ID</th>
                                    <th>Category Name</th>
                                    <th> Action </th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php foreach ($categories as $category){ ?>
                                    <tr>
                                        <td><?php echo $category['book-category-id']?></td>
                                        <td><p><?php echo $category['book-category-name']?></p></td>
                                        <td><a class="btn btn-success"  onclick="categoryEdit('<?= $category['book-category-id']?>')"><i class="fas fa-edit"></i></a> |
                                            <a class="btn btn-danger" onclick="categoryDelete('<?= $category['book-category-id']?>')"><i class="fas fa-trash-alt"></i></a> </td>
                                    </tr>
                                <?php } ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div>
                <div id="edit" style=" display: none;   margin-top: -791px;margin-left: 313px;height: 100px; width: 480px; position: absolute;z-index: 1;">
                    <div class="card card-product mx-auto mt-5">
                        <h3><div class="card-header text-center" style="font-weight: bold">Category Add Page</div></h3>
                        <div class="row justify-content-center" style="height: 150px;">
                            <div class="col-6">
                                <form method="post" enctype="multipart/form-data"  name="form2">
                                    <div class="form-group">
                                        <label for="category">Category Name</label>
                                        <div id="value_put">
                                            <input type="hidden" class="form-control" id="category" name="category_id" value="">

                                            <input type="text" class="form-control" id="category" name="category_name" value="" aria-describedby="booknameHelp" placeholder="Enter category name">

                                        </div>
                                        <p id="empty_field_t"></p>
                                    </div>
                                    <a  onclick="submitEdit()" class="btn btn-primary">Submit</a>
                                    <a class="btn btn-danger" onclick="divClose()">close</a>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>





            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <!--<footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2019</span>
                    </div>
                </div>
            </footer>-->

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script>
        function submitCategoryAdd() {
            console.log('ami asi');
            if( form1.category_name.value==''){
                document.getElementById('empty_field').innerHTML ='Field is empty';
            }
            let category_name =form1.category_name.value;
            let xmlhttp = new XMLHttpRequest();

            xmlhttp.open('GET', 'add_category_side.php?category_name='+category_name,true);
            xmlhttp.send();
            $("#dataTable").load("add-category.php #dataTable");
        }
    </script>
    <script>
        function categoryDelete(id) {
            var id= id;
            console.log(id);
            $.ajax({
                type: "POST",
                url: "categoryDelete.php",
                data: {
                    id: id
                },
                success: function (value) {
                    $("#dataTable").load("add-category.php #dataTable");
                    /*$("#cart_count").html($slNo),*/
                }
            });
        }
    </script>
    <script>
        function categoryEdit(id) {
            var id= id;
            console.log(id);
            $.ajax({
                type: "POST",
                url: "categoryUpdate.php",
                data: {
                    id: id
                },
                success: function (value) {
                    $("#value_put").html(value);
                    /*$("#cart_count").html($slNo),*/
                }
            });
            console.log('hoche');

            $('#edit').show();
        }
    </script>
    <script>
        function submitEdit() {
            /*console.log('ami asi');*/
            if( form2.category_name.value==''){
                document.getElementById('empty_field').innerHTML ='Field is empty';
            }
            let category_name =form2.category_name.value;
            let category_id =form2.category_id.value;
            let xmlhttp = new XMLHttpRequest();

            xmlhttp.open('GET', 'edit_submit.php?category_id_t='+category_id+'&category_name_t='+category_name,true);
            xmlhttp.send();
            $("#dataTable").load("add-category.php #dataTable");

        }
    </script>
    <script>
        function divClose() {
            $('#edit').hide();

        }
    </script>


</body>

</html>
