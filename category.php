<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location: ./login.php");
}
include "./inc/head.php"; ?>
<title>Categories</title>
<?php include "./inc/process.php"; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="./dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span><strong>Dashboard</strong></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./post.php">
                    <i class="fas fa-newspaper"></i>
                    <span><strong>Posts</strong></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./add-post.php">
                    <i class="fas fa-pen"></i>
                    <span><strong>Add New Posts</strong></span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="./category.php">
                    <i class="fas fa-tags"></i>
                    <span><strong>Categories</strong></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./comment.php">
                    <i class="far fa-comment"></i>
                    <span><strong>Comments</strong></span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="./users.php">
                    <i class="fas fa-user"></i>
                    <span><strong>Users</strong></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./add-user.php">
                    <i class="fas fa-user-plus"></i>
                    <span><strong>Add New User</strong></span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Greetings -->
                    <div>
                        <h3> Hi, <?php echo $_SESSION["user"]["name"]; ?></h3>
                    </div>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">




                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["user"]["name"]; ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row mb-4">
                        <div class="col-4 d-flex">
                            <h1 class="h3 mb-0 text-gray-800">Category</h1> <button class="btn btn-primary ml-3" data-toggle="modal" data-target="#add_category">Add New Category</button>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4">
                            <?php
                            if (isset($success_category)) {
                            ?>
                                <div class="alert alert-info alert-dismissible fade show p-2" role="alert">
                                    <strong><?php echo $success_category; ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true" class="mb-3">×</span>
                                    </button>
                                </div>
                                <script>
                                    // Automatically close the alert after 5 seconds
                                    setTimeout(function() {
                                        $('.alert').alert('close');
                                    }, 5000);
                                </script>
                            <?php
                            } elseif (isset($success)) {
                            ?>
                                <div class="alert alert-info alert-dismissible fade show p-2" role="alert">
                                    <strong><?php echo $success; ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true" class="mb-3">×</span>
                                    </button>
                                </div>
                                <script>
                                    // Automatically close the alert after 5 seconds
                                    setTimeout(function() {
                                        $('.alert').alert('close');
                                    }, 5000);
                                </script>
                            <?php
                            } elseif (isset($error)) {
                            ?>
                                <div class="alert alert-info alert-dismissible fade show p-2" role="alert">
                                    <strong><?php echo $error; ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="container">

                            <table class="table">
                                <thead class="text-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM category";
                                    $query = mysqli_query($connection, $sql);
                                    while ($result = mysqli_fetch_assoc($query)) {
                                        $categoryId = $result["id"];
                                    ?>
                                        <tr>
                                            <th scope="row" class="text-dark">1</th>
                                            <td><?php echo $result["name"]; ?></td>
                                            <td>
                                                <a href="javascript:;" data-toggle="modal" data-target="#edit_category_<?php echo $categoryId; ?>" class="btn btn-primary btn-small mr-1">Edit</a>
                                                <a href="category.php?delete_category=<?php echo $result["id"]; ?>" class="btn btn-primary btn-small">Delete</a>
                                            </td>
                                        </tr>

                                        <!--- Edit Category Modal --->
                                        <div class="modal fade" id="edit_category_<?php echo $categoryId; ?>" tabindex="-1" role="dialog" aria-labelledby="editCategoryLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editCategoryLabel">Edit Category</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="POST">
                                                            <div class="form-group">
                                                                <label for="editCategoryName">Title</label>
                                                                <input type="text" class="form-control" id="editCategoryName" name="name" value="<?php echo $result["name"]; ?>" required>
                                                                <input type="hidden" name="id" value="<?php echo $categoryId; ?>">
                                                            </div>
                                                            <button type="submit" name="edit_category" class="btn btn-primary">Save Changes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                        ?>
                                </tbody>
                            </table>

                        </div>

                    </div>








                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "./inc/footer.php" ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->



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
                <div class="modal-body">Are you sure you want to logout?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                    <a class="btn btn-primary" href="./logout.php">Yes</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Add New Category Modal-->
    <div class="modal fade" id="add_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Title" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="add_category" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</body>

</html>