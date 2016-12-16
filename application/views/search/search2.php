<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->

        <section class="content-header">

            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo base_url(); ?>res/dist/img/beautiful-sampan-eco-resort1.jpg"
                         style="margin-right: 2%; width: 95%;height: 30%">
                    <h1 style="color:black;text-align:center">
                        Bangladesh National Herbarium
                    </h1>
                </div>
            </div>

            <h1 style="color:black;text-align:center">
                Search Tree
            </h1>

        </section>
        <?php
        $msg = $this->session->flashdata('msg1');
        if (isset($msg1)) {
            echo "<div class='alert alert-success'>$msg1</div>";
        } ?>
        <?php
        $msg = $this->session->flashdata('msg');
        if (isset($msg)) {
            echo "<div class='alert alert-success'>$msg</div>";
        } ?>
        <?php echo form_open('search2/search_project'); ?>

        <section class="content">
            <div class="row">
                <div class="col-md-10 col-lg-offset-1">
                    <div class="form-group col-sm-3">

                        <input type="text" class="form-control" id="family_id" name="family_name"
                               placeholder="search by Family" onchange="return get_class_subject(this.value)">
                    </div>

                    <div class="form-group col-sm-3">

                        <input type="text" class="form-control" id="genus_id" name="genus_name"
                               placeholder="search by Genus" onchange="return get_class_subject_genus(this.value)">
                    </div>
                    <div class="form-group col-sm-3">

                        <input type="text" class="form-control" id="species_id" name="species_name"
                               placeholder="search by Species" onchange="return get_class_subject_species(this.value)">
                    </div>

                    <div class="form-group col-sm-3">

                        <input type="text" class="form-control" id="local_name_id" name="local_name"
                               placeholder="search by local name">
                    </div>


                    <div class="col-sm-3 col-lg-offset-4">

                        <button type="submit" class="btn btn-primary btn-block btn-flat">Search</button>

                    </div>
                </div>
            </div>
        </section>

        <?php echo form_close(); ?>


        <!--        <form action="--><?php //echo base_url(); ?><!--search/search_project_with_key_character" method="post">-->
        <?php echo form_open('search2/search_project_with_key_character'); ?>
        <section class="content">
            <div class="row">
                <div class="col-md-10 col-lg-offset-1">
                    <div class="form-group col-sm-3">

                        <label for="habit">Habit :</label>
                        <select class="form-control" id="habit" name="habit">
                            <option></option>
                            <?php
                            foreach($habit as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>

                    </div>

                    <div class="form-group col-sm-3">

                        <label for="bark_texture">Bark texture:</label>
                        <select class="form-control" id="bark_texture" name="bark_texture">
                            <option></option>
                            <?php
                            foreach($bark_texture as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>

                    </div>


                    <div class="form-group col-sm-3">

                        <label for="bole">Bole:</label>
                        <select class="form-control" id="bole" name="bole">
                            <option></option>
                            <?php
                            foreach($bole as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>

                    </div>

                    <div class="form-group col-sm-3">

                        <label for="thorn">Thorn:</label>
                        <select class="form-control" id="thorn" name="thorn">
                            <option></option>
                            <?php
                            foreach($thorn as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>
                    </div>

                </div>

                <div class="col-md-10 col-lg-offset-1">
                    <div class="form-group col-sm-3">

                        <label for="leaf_persistence">Leaf persistence:</label>
                        <select class="form-control" id="leaf_persistence" name="leaf_persistence">
                            <option></option>
                            <?php
                            foreach($leaf_persistence as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>

                    </div>

                    <div class="form-group col-sm-3">

                        <label for="petiole">Petiole:</label>
                        <select class="form-control" id="petiole" name="petiole">
                            <option></option>
                            <?php
                            foreach($petiole as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>

                    </div>

                    <div class="form-group col-sm-3">

                        <label for="stipules">Stipules:</label>
                        <select class="form-control" id="stipules" name="stipules">
                            <option></option>
                            <?php
                            foreach($stipules as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>

                    </div>

                    <div class="form-group col-sm-3">

                        <label for="leaf_type">Leaf type:</label>
                        <select class="form-control" id="leaf_type" name="leaf_type">
                            <option></option>
                            <?php
                            foreach($leaf_type as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>

                    </div>

                </div>

                <div class="col-md-10 col-lg-offset-1">
                    <div class="form-group col-sm-3">

                        <label for="leaf_arrangement">Leaf arrangement :</label>
                        <select class="form-control" id="leaf_arrangement" name="leaf_arrangement">
                            <option></option>
                            <?php
                            foreach($leaf_arrangement as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>
                    </div>



                    <div class="form-group col-sm-3">

                        <label for="leaf_venation">Leaf venation :</label>
                        <select class="form-control" id="leaf_venation" name="leaf_venation">
                            <option></option>
                            <?php
                            foreach($leaf_venation as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>
                    </div>

                    <div class="form-group col-sm-3">

                        <label for="inflorescence">Inflorescence:</label>
                        <select class="form-control" id="inflorescence" name="inflorescence">
                            <option></option>
                            <?php
                            foreach($inflorescence as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>

                    </div>

                    <div class="form-group col-sm-3">

                        <label for="floral_symmetry">Floral symmetry:</label>
                        <select class="form-control" id="floral_symmetry" name="floral_symmetry">
                            <option></option>
                            <?php
                            foreach($floral_symmetry as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>

                    </div>

                </div>

                <div class="col-md-10 col-lg-offset-1">


                    <div class="form-group col-sm-3">

                        <label for="floral_type">Floral type:</label>
                        <select class="form-control" id="floral_type" name="floral_type">
                            <option></option>
                            <?php
                            foreach($floral_type as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>

                    </div>

                    <div class="form-group col-sm-3">

                        <label for="floral_attachment">Floral attachment:</label>
                        <select class="form-control" id="floral_attachment" name="floral_attachment">
                            <option></option>
                            <?php
                            foreach($floral_attachment as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>

                    </div>

                    <div class="form-group col-sm-3">

                        <label for="corolla_aestivation">Corolla aestivation:</label>
                        <select class="form-control" id="corolla_aestivation" name="corolla_aestivation">
                            <option></option>
                            <?php
                            foreach($corolla_aestivation as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>

                    </div>

                    <div class="form-group col-sm-3">

                        <label for="fruit">Fruit:</label>
                        <select class="form-control" id="fruit" name="fruit">
                            <option></option>
                            <?php
                            foreach($fruit as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>

                    </div>

                </div>


                <div class="col-md-10 col-lg-offset-1">

                    <div class="form-group col-sm-3">

                        <label for="sexual_Reproductive_Unit">Sexual Reproductive Unit</label>
                        <select class="form-control" id="sexual_Reproductive_Unit" name="sexual_Reproductive_Unit">
                            <option></option>
                            <?php
                            foreach($sexual_Reproductive_Unit as $row):
                                ?>
                                <option value="<?php echo $row->character_sub1;?>"  ><?php echo $row->character_sub1;?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>

                    </div>
                </div>
                <div class="col-sm-3 col-lg-offset-4">

                    <button type="submit" class="btn btn-primary btn-block btn-flat">Search</button>

                </div>
            </div>
        </section>
        <?php echo form_close(); ?>
        <!--        </form>-->

    </div>
</div>

<script type="text/javascript">
    function get_class_subject(family_name) {
        $.ajax({
            url: '<?php echo base_url();?>index.php/search2/get_genus_by_family/' + family_name,
            success: function (response) {
                jQuery('#subject_selection_holder').html(response);
            }
        });
    }
</script>

<script type="text/javascript">
    function get_class_subject_genus(genus_name) {
        $.ajax({
            url: '<?php echo base_url();?>index.php/search2/get_species_by_genus/' + genus_name,
            success: function (response) {
                jQuery('#subject_selection_holder').html(response);
            }
        });
    }
</script>

<script type="text/javascript">
    function get_class_subject_species(species_name) {
        $.ajax({
            url: '<?php echo base_url();?>index.php/search2/get_local_by_species/' + species_name,
            success: function (response) {
                jQuery('#subject_selection_holder').html(response);
            }
        });
    }
</script>

<script type="text/javascript">
    console.log('Out of method Family');
    $(this).ready(function () {
        $("#family_id").autocomplete({

            minLength: 1,
            source: function (req, add) {
                console.log('Inside function source()');
                $.ajax({
                    url: "<?php echo base_url(); ?>index.php/search2/family_name_autocomplete",
                    dataType: 'json',
                    type: 'POST',
                    data: req,
                    success: function (data) {
                        console.log('Inside function success()');
                        if (data.response == "true") {
                            add(data.message);
                            console.log(data.message);
                        }
                    }
                });
            }

        });


    });

    $(this).ready(function () {
        $("#genus_id").autocomplete({

            minLength: 1,
            source: function (req, add) {
                console.log('Inside function source()');
                $.ajax({
                    url: "<?php echo base_url(); ?>index.php/search2/genus_name_autocomplete",
                    dataType: 'json',
                    type: 'POST',
                    data: req,
                    success: function (data) {
                        console.log('Inside function success()');
                        if (data.response == "true") {
                            add(data.message);
                            console.log(data.message);
                        }
                    }
                });
            }

        });
    });

    $(this).ready(function () {
        $("#species_id").autocomplete({

            minLength: 1,
            source: function (req, add) {
                console.log('Inside function source()');
                $.ajax({
                    url: "<?php echo base_url(); ?>index.php/search2/species_name_autocomplete",
                    dataType: 'json',
                    type: 'POST',
                    data: req,
                    success: function (data) {
                        console.log('Inside function success()');
                        if (data.response == "true") {
                            add(data.message);
                            console.log(data.message);
                        }
                    }
                });
            }

        });


    });

    $(this).ready(function () {
        $("#local_name_id").autocomplete({

            minLength: 1,
            source: function (req, add) {
                console.log('Inside function source()');
                $.ajax({
                    url: "<?php echo base_url(); ?>index.php/search2/local_name_autocomplete",
                    dataType: 'json',
                    type: 'POST',
                    data: req,
                    success: function (data) {
                        console.log('Inside function success()');
                        if (data.response == "true") {
                            add(data.message);
                            console.log(data.message);
                        }
                    }
                });
            }

        });


    });

</script>