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
            <div class="col-md-8">

                <div class="box box-primary">

                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>res/dist/img/user2-160x160.jpg" alt="User profile picture">
                        <h3 class="profile-username text-center"> Md. Rockey Ahmed</h3>
                        <!--                        --><?php //echo $row->admin_name;?>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <i class="fa fa-th-large"></i>
                                <b>Father Name : </b> <a class="">Late. Tofazzal Hossain</a>
                            </li>
                            <!--                            --><?php //echo $row->admin_father_name;?>
                            <li class="list-group-item">
                                <i class="fa fa-th-large"></i>
                                <b>Mother Name : </b> <a class="">Rabeya Khatun</a>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-street-view"></i>
                                <b>Address : </b> <a class="">Panthapath, Dhaka, Bangladesh</a>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-envelope"></i>
                                <b>Email : </b> <a class="">rockeycse@gmail.com</a>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-phone"></i>
                                <b>Phone : </b> <a class="">0147893652</a>
                            </li>
                        </ul>

                        <a data-toggle="modal" data-target="#myModal"
                           data-admin_name=""
                           data-admin_father_name=""
                           data-admin_mother_name=""

                           data-admin_address=""
                           data-admin_email=""
                           data-admin_phone=""
                           data-admin_image=""
                           class="btn btn-app minec">
                            <i class="fa fa-edit"></i> Edit
                        </a>

                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Admin Profile</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Main content -->
                                        <section class="content">
                                            <!-- Small boxes (Stat box) -->
                                            <div class="row">
                                                <div class="col-md-10 form-horizontal">

                                                    <!--                                                    --><?php //echo form_open_multipart('Update/do_admin_update',array('class' => 'admin_update_form')); ?>

                                                    <!--   <form class="form-horizontal"> -->
                                                    <!-- Horizontal Form -->
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title">General Information</h3>
                                                    </div>
                                                    <!-- /.box-header -->
                                                    <!-- form start -->
                                                    <div class="box-body box box-info">
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
                                                                                <h1>Add your Image</h1>
                                                                                <p>Click Here</p>
                                                                                <input type="button" class ="cmyadmin" value="Upload" />
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
                                                    <!--    </form> -->


                                                    <div class="jrError"></div>

                                                    <!--                                                    --><?php //echo form_close(); ?>

                                                </div>
                                            </div>
                                        </section>
                                        <!-- /.content -->
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
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