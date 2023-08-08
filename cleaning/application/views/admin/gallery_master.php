<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?= base_url('Admin/dashboard')?>" class="link">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Gallary Master</li>
                        </ol>
                    </nav>
                </div>
                <h4 class="page-title">Gallery Upload Images Form</h4>
            </div>
            <div class="col-5 align-self-center text-right">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><i data-feather="refresh-cw"></i></li>
                    <li class="list-inline-item"><i data-feather="settings"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <?php if( $error=$this->session->flashdata('msg')):   ?>
        <div class="alert alert-dismissible alert-success" style="height: 50px;padding: 14px 22px;">
            <button type="button" class="close" data-dismiss="alert" style="padding: 2px 15px;">&times;</button>
            <?=$error;  ?>
        </div>
        <?php endif; ?>

        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Gallery Form</h4>
                        <h5 class="card-subtitle"> Upload all type of images </h5>
                        <form class="form" method="POST" action="<?= base_url('Admin/add_image') ?>"
                            enctype="multipart/form-data">
                            <div class="form-group mt-5 row">
                                <label for="example-text-input" class="col-2 col-form-label text-dark">Image title
                                    :</label><br><br>
                                <input class="form-control border-secondary" type="text" name="image_title" value=""
                                    id="example-text-input" placeholder="Enter image title">
                                <br>
                                <br><br>
                                <label class="text-dark">Upload image file</label>
                                <input type="file" name="image_name" class="form-control border-secondary"><br><br><br>

                                <button type="submit" class="btn btn-success mr-2">Upload</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->


        <!-- ============================================================== -->

        <!-- table Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Gallery images Table</h4>
                        <h6 class="card-subtitle">All uploaded images with title</h6>
                        <div class="table-responsive mt-3">

                            <table class="table">

                                <thead>
                                    <tr>
                                        <th>Sr no.</th>
                                        <th>Image id</th>
                                        <th>Image title</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($data as $value): ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $value->image_id ;?></td>
                                        <td><?= $value->image_title ; ?></td>
                                        <td><img src="<?= base_url($value->image_name); ?>" style="width: 200px;"></td>


                                        <td>
                                            <form method="POST" action="<?= base_url('Admin/edit_image')?>">
                                                <input type="hidden" name="id" value="<?= $value->image_id ;?>">
                                                <button class="btn btn-info" data-toggle="modal"
                                                    data-target="#exampleModalCenter">Edit</button>
                                            </form>

                                        </td>

                                        <td>
                                            <form method="POST" action="<?= base_url('Admin/delete_image')?>">
                                                <input type="hidden" name="id" value="<?= $value->image_id ;?>">
                                                <input type="hidden" name="old_image"
                                                    value="<?= $value->image_name ;?>">
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php $i++; endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <!-- All Jquery -->
                    <!-- ============================================================== -->
                    <script src="<?= base_url('assets/admin/assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
                    <!-- Bootstrap tether Core JavaScript -->
                    <script src="<?= base_url('assets/admin/assets/libs/popper.js/dist/umd/popper.min.js'); ?>">
                    </script>
                    <script src="<?= base_url('assets/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js'); ?>">
                    </script>
                    <!-- apps -->
                    <script src="<?= base_url('assets/admin/dist/js/app.min.js'); ?>"></script>
                    <script src="<?= base_url('assets/admin/dist/js/app.init.js'); ?>"></script>
                    <script src="<?= base_url('assets/admin/dist/js/app-style-switcher.js'); ?>"></script>
                    <!-- slimscrollbar scrollbar JavaScript -->
                    <script
                        src="<?= base_url('assets/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'); ?>">
                    </script>
                    <!--Wave Effects -->
                    <script src="<?= base_url('assets/admin/dist/js/waves.js'); ?>"></script>
                    <!--Menu sidebar -->
                    <script src="<?= base_url('assets/admin/dist/js/sidebarmenu.js'); ?>"></script>
                    <script src="<?= base_url('assets/admin/dist/js/feather.min.js'); ?>"></script>
                    <!--Custom JavaScript -->
                    <script src="<?= base_url('assets/admin/dist/js/custom.min.js'); ?>"></script>
                    <!--This page JavaScript -->
                    <!--chartis chart-->
                    <script src="<?= base_url('assets/admin/assets/libs/chartist/dist/chartist.min.js'); ?>"></script>
                    <script
                        src="<?= base_url('assets/admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js'); ?>">
                    </script>
                    <!--c3 charts -->
                    <script src="<?= base_url('assets/admin/assets/extra-libs/c3/d3.min.js'); ?>"></script>
                    <script src="<?= base_url('assets/admin/assets/extra-libs/c3/c3.min.js'); ?>"></script>
                    <script
                        src="<?= base_url('assets/admin/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>">
                    </script>
                    <script src="<?= base_url('assets/admin/dist/js/pages/dashboards/dashboard1.js'); ?>"></script>
                    <script>
                    $('.datepicker').datepicker({
                        autoclose: true,
                        todayHighlight: true
                    });
                    </script>