<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->


        <?php echo form_open_multipart('manage_tree/change_password'); ?>

        <section class="content">
<!--            --><?php
//            $msg = $this->session->flashdata('msg');
//            if (isset($msg)) {
//                echo "<div class='alert alert-success'>$msg</div>";
//            } ?>
<!--            --><?php //echo validation_errors('<p style="color: red" class="errormsg">'); ?>

            <div class="row">
                <img src="<?php echo base_url(); ?>res/dist/img/beautiful-sampan-eco-resort1.jpg"
                     style="margin-right: 2%; width: 95%;height: 30%">
                <h3 style="color:black;text-align:center">
                    Change Your Password
                </h3>
                <!-- left column -->
                <div class="col-md-6 col-sm-3 col-lg-offset-3">
                    <!-- general form elements -->
                    <div class="box box-info">

                        <div class="box-body">
                            <label>Current Password <span style="color:red;font-size:16px;">*</span></label>
                            <div class="form-group">

                                <input type="password" class="form-control" id="current_password" name="current_password"
                                       placeholder="Current Password" required>
                            </div>
                            <label>New Password <span style="color:red;font-size:16px;">*</span></label>
                            <div class="form-group">

                                <input type="password" class="form-control" id="new_password" name="new_password"
                                       placeholder="New Password" required>
                            </div>
                            <label>Confirm New Password <span style="color:red;font-size:16px;">*</span></label>
                            <div class="form-group">

                                <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password"
                                       placeholder="Confirm New Password" required>
                            </div>

                            <label>Confirm New Password Again<span style="color:red;font-size:16px;">*</span></label>
                            <div class="form-group">

                                <input type="password" class="form-control" id="confirm_new_password2" name="confirm_new_password2"
                                       placeholder="Confirm New Password Again" required>
                            </div>

                        </div>
                    </div>

                </div>



            </div>

            <!-- /.row -->
        </section>

        <!-- /.content -->
        <div class="col-sm-3 col-lg-offset-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>

            <br>

        </div>
        <br>
        <!--        </form>-->
        <?php echo form_close(); ?>
    </div>
</div>
