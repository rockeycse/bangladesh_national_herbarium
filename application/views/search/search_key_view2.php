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
                //                if (isset($data[0][1]))
                //                {
                //echo "hello";
                //                    die();
                //                }
                if (!$reference == null) {

                    $page = 0;
                    foreach ($reference as $row) : {
                        $refer = $row->reference_of_common;

                        $result = $this->Tree_model->get_tree_data($refer);

                        ++$page;
                        foreach ($result as $row)
                        {
                            ?>
                            <tr>
                                <td>
                                    <a href='<?php echo base_url() ?>index.php/search2/view_tree1/<?php echo $row->id ?>'><?php echo $page ?></a>
                                </td>
                                <td><?php echo $row->species ?></td>
                                <td><?php echo $row->family_name ?></td>

                            </tr>

                            <?php
                        }
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