<div class="row ">

    <section style="margin-top: 1%; margin-bottom: 1%">
        <div class="row col-lg-offset-1">
            <div class="col-md-10">

                <div id="boxshadow">
                    <h3><label><u>Key Characters : </u></label></h3>


                    <?php
                    $habit_value = 0;
                    $bark_texture_value = 0;
                    $bole_value = 0;
                    $thorn_value = 0;
                    $leaf_persistence_value = 0;
                    $petiole_value = 0;
                    $stipules_value = 0;
                    $leaf_type_value = 0;
                    $leaf_arrangement_value = 0;
                    $leaf_venation_value = 0;
                    $inflorescence_value = 0;
                    $floral_symmetry_value = 0;
                    $floral_type_value = 0;
                    $floral_attachment_value = 0;
                    $corolla_aestivation_value = 0;
                    $fruit_value = 0;
                    $sexual_Reproductive_Unit_value = 0;
                    ?>

                    <div class="form-group">
                        <?php
                        foreach ($key_data as $result) {

                            ?>

                            <?php
                            if ($result['root_character'] == 'habit') {
                                if ($habit_value == 0) {
                                    ?>
                                    <br>
                                    <label> Habit : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $habit_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>

                            <?php
                            if ($result['root_character'] == 'bark texture') {
                                if ($bark_texture_value == 0) {
                                    ?>
                                    <br>
                                    <label> Bark texture : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $bark_texture_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>

                            <?php
                            if ($result['root_character'] == 'bole') {
                                if ($bole_value == 0) {
                                    ?>
                                    <br>
                                    <label> Bole : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $bole_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>


                            <?php
                            if ($result['root_character'] == 'thorn') {
                                if ($thorn_value == 0) {
                                    ?>
                                    <br>
                                    <label> Thorn : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $thorn_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>


                            <?php
                            if ($result['root_character'] == 'leaf persistence') {
                                if ($leaf_persistence_value == 0) {
                                    ?>
                                    <br>
                                    <label> Leaf persistence : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $leaf_persistence_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>


                            <?php
                            if ($result['root_character'] == 'petiole') {
                                if ($petiole_value == 0) {
                                    ?>
                                    <br>
                                    <label> Petiole : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $petiole_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>


                            <?php
                            if ($result['root_character'] == 'stipules') {
                                if ($stipules_value == 0) {
                                    ?>
                                    <br>
                                    <label> <?php echo $result['root_character'] ?> : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $stipules_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>


                            <?php
                            if ($result['root_character'] == 'leaf type') {
                                if ($leaf_type_value == 0) {
                                    ?>
                                    <br>
                                    <label> <?php echo $result['root_character'] ?> : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $leaf_type_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>


                            <?php
                            if ($result['root_character'] == 'leaf arrangement') {
                                if ($leaf_arrangement_value == 0) {
                                    ?>
                                    <br>
                                    <label> <?php echo $result['root_character'] ?> : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $leaf_arrangement_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>


                            <?php
                            if ($result['root_character'] == 'leaf venation') {
                                if ($leaf_venation_value == 0) {
                                    ?>
                                    <br>
                                    <label> <?php echo $result['root_character'] ?> : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $leaf_venation_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>


                            <?php
                            if ($result['root_character'] == 'inflorescence') {
                                if ($inflorescence_value == 0) {
                                    ?>
                                    <br>
                                    <label> <?php echo $result['root_character'] ?> : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $inflorescence_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>

                            <?php
                            if ($result['root_character'] == 'floral symmetry') {
                                if ($floral_symmetry_value == 0) {
                                    ?>
                                    <br>
                                    <label> <?php echo $result['root_character'] ?> : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $floral_symmetry_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>


                            <?php
                            if ($result['root_character'] == 'floral type') {
                                if ($floral_type_value == 0) {
                                    ?>
                                    <br>
                                    <label> <?php echo $result['root_character'] ?> : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $floral_type_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>


                            <?php
                            if ($result['root_character'] == 'floral attachment') {
                                if ($floral_attachment_value == 0) {
                                    ?>
                                    <br>
                                    <label> <?php echo $result['root_character'] ?> : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $floral_attachment_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>


                            <?php
                            if ($result['root_character'] == 'corolla aestivation') {
                                if ($corolla_aestivation_value == 0) {
                                    ?>
                                    <br>
                                    <label> <?php echo $result['root_character'] ?> : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $corolla_aestivation_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>

                            <?php
                            if ($result['root_character'] == 'fruit') {
                                if ($fruit_value == 0) {
                                    ?>
                                    <br>
                                    <label> <?php echo $result['root_character'] ?> : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $fruit_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>

                            <?php
                            if ($result['root_character'] == 'sexual Reproductive Unit') {
                                if ($sexual_Reproductive_Unit_value == 0) {
                                    ?>
                                    <br>
                                    <label> Sexual Reproductive Unit : </label>
                                    <?php echo $result['character_sub1']; ?>
                                    <?php
                                    $sexual_Reproductive_Unit_value++;
                                } else {
                                    ?>
                                    <?php echo ", " . $result['character_sub1']; ?>

                                    <?php
                                }
                            }

                            ?>


                            <?php

                        }


                        ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /.box -->
</div>
</div>
<!--/.col (right) -->

<!-- /.row -->


</div>
</div>