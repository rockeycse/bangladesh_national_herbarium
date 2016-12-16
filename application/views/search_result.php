<?php include 'header/header1.php'; ?>

    <div class="content-wrapper">

        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo base_url(); ?>res/dist/img/beautiful-sampan-eco-resort1.jpg"
                         style="margin-right: 2%; width: 100%;height: 30%">
                    <h1 style="color:black;text-align:center">
                        Bangladesh National Herbarium
                    </h1>
                </div>
            </div>
            <br>
            <h4 style="margin-top: 2%; margin-bottom: 2%; text-align: center">Search Result </h4>

            <br>
            <div id="boxshadow">
                <?php echo $links; ?>
                <table id="t01" style="width: 100%">
                    <tr>
                        <th><strong>Sl No</strong></th>
                        <th><strong>Botanical Name</strong></th>
                        <th><strong>Family Name </strong></th>
<!--                        <th><strong>Vernacular Name </strong></th>-->
<!--                        <th><strong>Description</strong></th>-->
<!--                        <th><strong>Fruits & Flowering Period</strong></th>-->
<!--                        <th><strong>Uses</strong></th>-->

                    </tr>

                    <?php
                    if (!$search_result == NULL) {



                        foreach ($search_result as $row): {
                            ++$page;
                            ?>

                            <tr>

                                <td>
                                    <a href='<?php echo base_url() ?>index.php/manage_tree/view_tree1/<?php echo $row->id ?>'><?php echo $page ?></a>
                                </td>
                                <td><?php echo $row->species ?></td>
                                <td><?php echo $row->family_name ?></td>
<!--                                <td>--><?php //echo $row->local_name1." ".$row->local_name2." ".$row->local_name3." ".
//                                        $row->local_name4." ".$row->local_name5." ".$row->local_name6." ".$row->local_name7." ".$row->local_name8." ".$row->local_name9." ".
//                                        $row->local_name10." ".$row->local_name11." ".$row->local_name12." ".$row->local_name13." ".$row->local_name14." ".$row->local_name15." ".
//                                        $row->local_name16." ".$row->local_name17." ".$row->local_name18." ".$row->local_name19." ".$row->local_name20 ?><!--</td>-->
<!---->
<!--                                <td>--><?php //echo $row->description ?><!--</td>-->
<!--                                <td>--><?php //echo $row->flowering_period ?><!--</td>-->
<!--                                <td>--><?php //echo $row->uses ?><!--</td>-->
                            </tr>

                            <?php
                        }

                        endforeach;
                    } else {
                        echo "<div class='alert alert-success'> No result found </div>";

                    }

                    ?>
                    <tr></tr>
                </table>
            </div>

        </section>

    </div><!-- /.content-wrapper -->
<?php include 'footer/footer1.php'; ?>