<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-sm-10">

            </div>
        </div>
        <img src="<?php echo base_url(); ?>res/dist/img/beautiful-sampan-eco-resort1.jpg"
             style=" width: 100%;height: 30%">
        <h1 style="color:black;text-align:center">
            Bangladesh National Herbarium
        </h1>

        <h4 class="" style="margin-top: 2%; margin-bottom: 2%; text-align: center">List of Tree </h4>


        <div id="boxshadow">
            <?php echo $links; ?>
            <table id="t01" style="width: 100%">
                <tr>
                    <th><strong>Sl No</strong></th>
                    <th><strong>Botanical Name</strong></th>
                    <th><strong>Family Name </strong></th>

                </tr>
                <?php
                if (!$search_result == NULL) {
                    foreach ($search_result as $row): {
                        ++$page;
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
                    endforeach;
                }
                ?>
                <tr></tr>
            </table>
        </div>

    </section>

</div><!-- /.content-wrapper -->