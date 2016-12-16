<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Add Admin</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <!-- Main content -->

<!--    --><?php //if (isset($my_data)): foreach ($my_data as $row) : ?>

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">

                <div class="box box-primary">

                    <div class="box-body box-profile col-sm-8 col-lg-offset-2">
                        <div class="box-header with-border col-lg-offset-4">
                            <h3 class="box-title " style="text-align: center">General Information</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body ">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Name</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <input class=" fa-th form-control" name="admin_name" id="admin_name" placeholder="Name" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Father Name</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <input class=" fa-th form-control" name="admin_father_name" id="admin_father_name" placeholder="Father Name" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Mother Name</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <input class=" fa-th form-control" name="admin_mother_name" id="admin_mother_name" placeholder="Mother Name" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Present Address</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-street-view"></i>
                                        </div>
                                        <textarea class="form-control" id="admin_address" name="admin_address" rows="3" placeholder="Present Address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <input class="fa-th form-control" name="admin_email" id="admin_phone" placeholder="Contact Email" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">Phone</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input class="fa-th form-control" name="admin_phone" id="admin_phone" placeholder="Contact Number" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Image</label>

                                        <div class="input-group">
                                            <div class="box box-primary">
                                                <div class="box-body box-profile">
                                                    <img class="" name = "admin_image" src="" id = "admin_image" alt="User profile picture">
                                                </div>

                                                <div class="cadmin_a"></div>

                                                <div id="main">
                                                    <h3>Add your Image</h3>
                                                    <p>Click Here</p>
                                                    <input type="file" class ="cmyadmin" value="Upload" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row box-footer">
                                <a href="#" class="btn btn-warning" data-dismiss="modal" role="button">Cancel</a>
                                <input type="submit" class="btn btn-info pull-right" value = "Update" />
                            </div>
                        </div>


                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>