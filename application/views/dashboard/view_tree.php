<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <div class="row">
            <section class="content-header">


                <div class="col-md-12">
                    <img src="<?php echo base_url(); ?>res/dist/img/beautiful-sampan-eco-resort1.jpg"
                         style="margin-right: 2%; width: 95%;height: 30%">
                    <h1 style="color:black;text-align:center">
                        Bangladesh National Herbarium
                    </h1>
                </div>


                <h1 style="color:black;text-align:center">
                    Tree Details
                </h1>
                <br>
            </section>

            <section>
                <div class="row col-lg-offset-1">
                    <!-- left column -->
                    <div class="col-md-10">
                        <!-- general form elements -->
                        <div class="box box-info">

                            <div class="box-body">


                                <div class="form-group">

                                    <label>Family Name : </label>

                                    <?php echo $mz[0]['genus']; ?>

                                    <br>

                                </div>
                                <div class="form-group">

                                    <label>Genus : </label>

                                    <?php echo $mz[0]['genus']; ?>
                                    <br>
                                </div>

                                <div class="form-group">

                                    <label>Species : </label>

                                    <?php echo $mz[0]['species']; ?>
                                    <br>
                                </div>

                                <div class="form-group">
                                    <label>Author Name : </label>
                                    <?php echo $mz[0]['author']; ?>
                                    <br>

                                </div>
                                <div class="form-group">
                                    <label>Synonyms : </label>
                                    <?php echo $mz[0]['synonyms']; ?>
                                    <br>

                                </div>


                                <div class="form-group">
                                    <label>Vernacular Name: </label>
                                    <?php

                                    $count=0;
                                    foreach ( $local_name_data as $row)
                                    {

                                        if (!empty($row->local_name)) {
                                            if ($count!=0)
                                            {
                                                echo ", ";
                                            }
                                            echo $row->local_name." ";
                                        }
                                        $count++;
                                    }
                                    ?>
                                    <br>
                                </div>

                                <div class="form-group">
                                    <label>English Name: </label>
                                    <?php echo $mz[0]['english_name']; ?>
                                    <br>
                                </div>

                                <div class="form-group">
                                    <label>Description : </label>
                                    <?php echo " " . $mz[0]['description']; ?>
                                    <br>
                                </div>


                                <div class="form-group">
                                    <label>Fruits & Flowering Period :</label>
                                    <?php echo " " . $mz[0]['flowering_period']; ?>
                                    <br>
                                </div>


                                <div class="form-group">
                                    <label>Habitat : </label>
                                    <?php echo " " . $mz[0]['habit']; ?>
                                    <br>

                                </div>


                                <div class="form-group">
                                    <label>Distribution : </label>
                                    <?php echo " " . $mz[0]['distribution']; ?>
                                    <br>

                                </div>


                                <div class="form-group">
                                    <label>Uses : </label>
                                    <?php echo " " . $mz[0]['uses']; ?>
                                    <br>
                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="col-md-10">

                        <h3><label><u>Photographs : </u></label></h3>
                        <div id="boxshadow">

                            <table id="t01" style="width: 100%">

                                <tr>
                                    <td>
                                        <a id="example1"
                                           href="<?php echo base_url(); ?>uploads/<?php echo $mz[0]['photographs1']; ?>">

                                            <img
                                                src="<?php echo base_url(); ?>uploads/<?php echo $mz[0]['photographs1']; ?>"
                                                width="200" height="200">
                                        </a>
                                        <div class="form-group">

                                            <?php echo $mz[0]['photographs1_link']; ?>

                                        </div>

                                    </td>

                                    <td>
                                        <a id="example2"
                                            href="<?php echo base_url(); ?>uploads/<?php echo $mz[0]['photographs2']; ?>">

                                            <img
                                                src="<?php echo base_url(); ?>uploads/<?php echo $mz[0]['photographs2']; ?>"
                                                width="200" height="200">
                                        </a>
                                        <div class="form-group">

                                            <?php echo $mz[0]['photographs2_link']; ?>

                                        </div>
                                    </td>

                                    <td>
                                        <a id="example3"
                                           href="<?php echo base_url(); ?>uploads/<?php echo $mz[0]['photographs3']; ?>">

                                            <img
                                                src="<?php echo base_url(); ?>uploads/<?php echo $mz[0]['photographs3']; ?>"
                                                width="200" height="200">
                                        </a>
                                        <div class="form-group">

                                            <?php echo $mz[0]['photographs3_link']; ?>

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a id="example4"
                                           href="<?php echo base_url(); ?>uploads/<?php echo $mz[0]['photographs4']; ?>">

                                            <img
                                                src="<?php echo base_url(); ?>uploads/<?php echo $mz[0]['photographs4']; ?>"
                                                width="200" height="200">
                                        </a>
                                        <div class="form-group">

                                            <?php echo $mz[0]['photographs4_link']; ?>

                                        </div>
                                    </td>

                                    <td>
                                        <a id="example5"
                                           href="<?php echo base_url(); ?>uploads/<?php echo $mz[0]['photographs5']; ?>">

                                            <img
                                                src="<?php echo base_url(); ?>uploads/<?php echo $mz[0]['photographs5']; ?>"
                                                width="200" height="200">
                                        </a>
                                        <div class="form-group">

                                            <?php echo $mz[0]['photographs5_link']; ?>

                                        </div>
                                    </td>

                                    <td>
<!--                                        <a id="example6"-->
<!--                                           href="--><?php //echo base_url(); ?><!--uploads/--><?php //echo $mz[0]['photographs6']; ?><!--">-->
<!---->
<!--                                            <img-->
<!--                                                 src="--><?php //echo base_url(); ?><!--uploads/--><?php //echo $mz[0]['photographs6']; ?><!--"-->
<!--                                                 width="200" height="200">-->
<!--                                        </a>-->

                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>

                    <!-- /.box -->
                </div>
                <!--/.col (right) -->

                <!-- /.row -->
            </section>

        </div>


        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 *   Examples - images
                 */
                $("a#example1").fancybox({
                    'overlayShow': false,
                    'transitionIn': 'elastic',
                    'transitionOut': 'elastic'
                });

                $("a#example2").fancybox({
                    'overlayShow': false,
                    'transitionIn': 'elastic',
                    'transitionOut': 'elastic'
                });

                $("a#example3").fancybox({
                    'overlayShow': false,
                    'transitionIn': 'elastic',
                    'transitionOut': 'elastic'
                });

                $("a#example4").fancybox({
                    'overlayShow': false,
                    'transitionIn': 'elastic',
                    'transitionOut': 'elastic'
                });

                $("a#example5").fancybox({
                    'overlayShow': false,
                    'transitionIn': 'elastic',
                    'transitionOut': 'elastic'
                });

                $("a#example6").fancybox({
                    'overlayShow': false,
                    'transitionIn': 'elastic',
                    'transitionOut': 'elastic'
                });


                $("a[rel=example_group]").fancybox({
                    'transitionIn': 'none',
                    'transitionOut': 'none',
                    'titlePosition': 'over',
                    'titleFormat': function (title, currentArray, currentIndex, currentOpts) {
                        return '<span id="fancybox-title-over"> Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                    }
                });

                /*
                 *   Examples - various
                 */

                $("#various3").fancybox({
                    'width': '75%',
                    'height': '75%',
                    'autoScale': false,
                    'transitionIn': 'none',
                    'transitionOut': 'none',
                    'type': 'iframe'
                });

                $("#various4").fancybox({
                    'padding': 0,
                    'autoScale': false,
                    'transitionIn': 'none',
                    'transitionOut': 'none'
                });
            });
        </script>

