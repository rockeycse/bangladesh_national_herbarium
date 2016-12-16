<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->


        <?php echo form_open_multipart('manage_tree/insert_tree_data'); ?>

        <section class="content">
            <?php
            $msg = $this->session->flashdata('msg');
            if (isset($msg)) {
                echo "<div class='alert alert-success'>$msg</div>";
            } ?>
            <?php echo validation_errors('<p style="color: red" class="errormsg">'); ?>

            <div class="row">
                <img src="<?php echo base_url(); ?>res/dist/img/beautiful-sampan-eco-resort1.jpg"
                     style="margin-right: 2%; width: 95%;height: 30%">
                <h1 style="color:black;text-align:center">
                    Bangladesh National Herbarium
                </h1>
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-info">

                        <div class="box-body">
                            <label>Botanical Name <span style="color:red;font-size:16px;">*</span></label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="genus" name="genus"
                                       placeholder="Genus" required>
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" id="species" name="species"
                                       placeholder="Species" required>
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" id="author" name="author"
                                       placeholder="Author">
                            </div>


                            <label>Family Name <span style="color:red;font-size:16px;">*</span></label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="family_name" name="family_name"
                                       placeholder="Family name" required>
                            </div>

                            <label>Synonyms</label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="synonyms" name="synonyms"
                                       placeholder="Synonyms">
                            </div>

                            <label>English Name </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="english_name" name="english_name"
                                       placeholder="English Name">
                            </div>

                            <div class="form-group">
                                <label>Description <span style="color:red;font-size:16px;">*</span></label>
                                <textarea rows="4" class="form-control" placeholder="Description"
                                          name="description"></textarea>
                            </div>

                            <label>Fruits & Flowering Period <span style="color:red;font-size:16px;">*</span></label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="flowering_period" name="flowering_period"
                                       placeholder="Fruits & Flowering Period" required>
                            </div>

                            <label>Habitat </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="habit" name="habit"
                                       placeholder="Habitat">
                            </div>

                            <label>Distribution </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="distribution" name="distribution"
                                       placeholder="Distribution">
                            </div>


                        </div>
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="box box-info">
                        <div class="box-body">

                            <label>Uses</label>
                            <div class="form-group">

                                <textarea rows="4" class="form-control" placeholder="Uses." name="uses"></textarea>

                            </div>

                            <div class="form-group">
                                <label for="photographs1">Photographs no 1</label>
                                <input type="file" id="photographs1" name="photographs1">
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" id="photographs1_link" name="photographs1_link"
                                       placeholder="photographs1 link">
                            </div>
                            <div class="form-group">
                                <label for="photographs6">Photographs no 2</label>
                                <input type="file" id="photographs2" name="photographs2">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" id="photographs2_link" name="photographs2_link"
                                       placeholder="photographs2 link">
                            </div>

                            <div class="form-group">
                                <label for="photographs6">Photographs no 3</label>
                                <input type="file" id="photographs3" name="photographs3">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" id="photographs3_link" name="photographs3_link"
                                       placeholder="photographs3 link">
                            </div>

                            <div class="form-group">
                                <label for="photographs6">Photographs no 4</label>
                                <input type="file" id="photographs4" name="photographs4">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" id="photographs4_link" name="photographs4_link"
                                       placeholder="photographs4 link">
                            </div>

                            <div class="form-group">
                                <label for="photographs6">Photographs no 5</label>
                                <input type="file" id="photographs5" name="photographs5">
                            </div>

                            <div class="form-group ">

                                <input type="text" class="form-control" id="photographs5_link" name="photographs5_link"
                                       placeholder="photographs5 link">
                            </div>

                        </div>
                    </div>

                    <!-- /.box -->
                </div>
            </div>
            <div class="row">

                <h4 style="color:black;text-align:center">
                    Additional Vernacular Name
                </h4>
                <div class="col-md-6">

                    <div class="box box-info">
                        <div class="box-body">
                            <label>Local Name 1 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name1" name="local_name1"
                                       placeholder="Local Name 1">
                            </div>

                            <label>Local Name 2 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name2" name="local_name2"
                                       placeholder="Local Name 2">
                            </div>

                            <label>Local Name 3 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name3" name="local_name3"
                                       placeholder="Local Name 3">
                            </div>

                            <label>Local Name 4 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name4" name="local_name4"
                                       placeholder="Local Name 4">
                            </div>

                            <label>Local Name 5 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name5" name="local_name5"
                                       placeholder="Local Name 5">
                            </div>

                            <label>Local Name 6 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name6" name="local_name6"
                                       placeholder="Local Name 6">
                            </div>

                            <label>Local Name 7 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name7" name="local_name7"
                                       placeholder="Local Name 7">
                            </div>


                            <label>Local Name 8 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name8" name="local_name8"
                                       placeholder="Local Name 8">
                            </div>

                            <label>Local Name 9 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name9" name="local_name9"
                                       placeholder="Local Name 9">
                            </div>

                            <label>Local Name 10 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name10" name="local_name10"
                                       placeholder="Local Name 10">
                            </div>

                        </div>
                    </div>

                    <!-- /.box -->
                </div>

                <div class="col-md-6">

                    <div class="box box-info">
                        <div class="box-body">
                            <label>Local Name 11 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name11" name="local_name11"
                                       placeholder="Local Name 11">
                            </div>

                            <label>Local Name 12 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name12" name="local_name12"
                                       placeholder="Local Name 12">
                            </div>

                            <label>Local Name 13 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name13" name="local_name13"
                                       placeholder="Local Name 13">
                            </div>

                            <label>Local Name 14 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name1" name="local_name14"
                                       placeholder="Local Name 14">
                            </div>

                            <label>Local Name 15 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name15" name="local_name15"
                                       placeholder="Local Name 15">
                            </div>

                            <label>Local Name 16 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name16" name="local_name16"
                                       placeholder="Local Name 16">
                            </div>

                            <label>Local Name 17 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name17" name="local_name17"
                                       placeholder="Local Name 17">
                            </div>

                            <label>Local Name 18 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name18" name="local_name18"
                                       placeholder="Local Name 18">
                            </div>

                            <label>Local Name 19 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name19" name="local_name19"
                                       placeholder="Local Name 19">
                            </div>

                            <label>Local Name 20 </label>
                            <div class="form-group">

                                <input type="text" class="form-control" id="local_name20" name="local_name20"
                                       placeholder="Local Name 20">
                            </div>

                        </div>
                    </div>

                    <!-- /.box -->
                </div>
                <!--/.col (right) -->

            </div>
            <!-- /.row -->
        </section>
        <section class="content">

            <h3 class="box-title" style="text-align: center">Taxonomic characters</h3>

            <div class="row">

                <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="box box-info">

                        <div class="box-body">

                            <label>1. Habit </label>
                            <fieldset>
                                <div class="form-group">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="climber" id="climber"
                                                   value="Climber">
                                            Climber
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="epiphyte" id="epiphyte"
                                                   value="epiphyte">
                                            Epiphyte
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="herb" id="herb"
                                                   value="herb">
                                            Herb
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="parasite" id="parasite"
                                                   value="parasite">
                                            Parasite
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="shrub" id="shrub"
                                                   value="shrub">
                                            Shrub
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="tree" id="tree"
                                                   value="tree">
                                            Tree
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="undershrub" id="undershrub"
                                                   value="undershrub">
                                            Undershrub
                                        </label>
                                    </div>
                                </div>
                            </fieldset>

                            <label>2. Bark texture </label>


                            <fieldset>
                                <div class="form-group">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="exfoliating" id="exfoliating"
                                                   value="exfoliating">
                                            Exfoliating
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="fissured" id="fissured"
                                                   value="fissured">
                                            Fissured
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="plated" id="plated"
                                                   value="plated">
                                            Plated
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ringed" id="ringed"
                                                   value="ringed">
                                            Ringed
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="shreddy" id="shreddy"
                                                   value="shreddy">
                                            Shreddy
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="smooth" id="smooth"
                                                   value="smooth">
                                            Smooth
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="winged" id="winged"
                                                   value="winged">
                                            Winged
                                        </label>
                                    </div>


                                </div>

                            </fieldset>


                            <label>3. Bole </label>

                            <fieldset>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="branched" id="branched"
                                                   value="branched">
                                            Branched
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="unbranched" id="unbranched"
                                                   value="unbranched">
                                            Unbranched
                                        </label>
                                    </div>

                                </div>

                            </fieldset>


                            <label>4. Thorn </label>

                            <fieldset>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="absent" id="absent"
                                                   value="absent">
                                            Absent
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="present" id="present"
                                                   value="present">
                                            Present
                                        </label>
                                    </div>

                                </div>

                            </fieldset>


                            <label>5. Leaf persistence </label>

                            <fieldset>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="deciduous" id="deciduous"
                                                   value="deciduous">
                                            Deciduous
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="evergreen" id="evergreen"
                                                   value="evergreen">
                                            Evergreen
                                        </label>
                                    </div>

                                </div>

                            </fieldset>


                            <label>6. Petiole </label>

                            <fieldset>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="petiolate" id="petiolate"
                                                   value="petiolate">
                                            Petiolate
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="sessile" id="sessile"
                                                   value="sessile">
                                            Sessile
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="subsessile" id="subsessile"
                                                   value="subsessile">
                                            Subsessile
                                        </label>
                                    </div>

                                </div>

                            </fieldset>

                            <label>7. Stipules</label>

                            <fieldset>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="absent_stipulates" id="absent"
                                                   value="absent">
                                            Absent
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="present_stipulates" id="present"
                                                   value="present">
                                            Present
                                        </label>
                                    </div>
                                </div>

                            </fieldset>


                        </div>
                    </div>


                </div>

                <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="box box-info">

                        <div class="box-body">


                            <div class="form-group">

                                <label>8. Leaf type</label>

                                <fieldset>

                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="compound" id="compound"
                                                       value="compound">
                                                Compound
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="simple" id="simple"
                                                       value="simple">
                                                Simple
                                            </label>
                                        </div>
                                    </div>

                                </fieldset>

                                <label>9. Leaf arrangement </label>
                                <fieldset>

                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="alternate" id="alternate"
                                                       value="alternate">
                                                Alternate
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="decussate" id="decussate"
                                                       value="decussate">
                                                Decussate
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="distichous" id="distichous"
                                                       value="distichous">
                                                Distichous
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="opposite" id="opposite"
                                                       value="opposite">
                                                Opposite
                                            </label>
                                        </div>


                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="whorl" id="whorl"
                                                       value="whorl">
                                                Whorl
                                            </label>
                                        </div>
                                    </div>

                                </fieldset>


                                <label> 10. Leaf venation </label>

                                <fieldset>

                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="palmate" id="palmate"
                                                       value="palmate">
                                                Palmate
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="parallel"
                                                       id="parallel"
                                                       value="parallel">
                                                Parallel
                                            </label>
                                        </div>


                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="pinnate" id="pinnate"
                                                       value="pinnate">
                                                Pinnate
                                            </label>
                                        </div>

                                    </div>

                                </fieldset>


                                <label> 11. Inflorescence </label>

                                <fieldset>

                                    <div class="form-group">

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="capitulum" id="capitulum"
                                                       value="capitulum">
                                                Capitulum
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="catkin"
                                                       id="catkin"
                                                       value="catkin">
                                                Catkin
                                            </label>
                                        </div>


                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="corymb" id="corymb"
                                                       value="corymb">
                                                Corymb
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="cymose" id="cymose"
                                                       value="cymose">
                                                Cymose
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="panicle"
                                                       id="panicle"
                                                       value="panicle">
                                                Panicle
                                            </label>
                                        </div>


                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="raceme" id="raceme"
                                                       value="raceme">
                                                Raceme
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="solitary" id="solitary"
                                                       value="solitary">
                                                Solitary
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="spadix"
                                                       id="spadix"
                                                       value="spadix">
                                                Spadix
                                            </label>
                                        </div>


                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="spike" id="spike"
                                                       value="spike">
                                                Spike
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="spikelet" id="spikelet"
                                                       value="spikelet">
                                                Spikelet
                                            </label>
                                        </div>


                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="thyrse" id="thyrse"
                                                       value="thyrse">
                                                Thyrse
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="umbel" id="umbel"
                                                       value="umbel">
                                                Umbel
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="verticillaster" id="verticillaster"
                                                       value="verticillaster">
                                                Verticillaster
                                            </label>
                                        </div>

                                    </div>

                                </fieldset>


                                <label>12. Floral symmetry</label>

                                <fieldset>

                                    <div class="form-group">

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="actinomorphic" id="actinomorphic"
                                                       value="actinomorphic">
                                                Actinomorphic
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="amorphic" id="amorphic"
                                                       value="amorphic">
                                                Amorphic
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="zygomorphic" id="zygomorphic"
                                                       value="zygomorphic">
                                                Zygomorphic
                                            </label>
                                        </div>

                                    </div>

                                </fieldset>


                                <label>13. Floral attachment</label>

                                <fieldset>

                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="gamopetalous" id="gamopetalous"
                                                       value="gamopetalous">
                                                Gamopetalous
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="polypetalous" id="polypetalous"
                                                       value="polypetalous">
                                                Polypetalous
                                            </label>
                                        </div>

                                    </div>

                                </fieldset>


                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-body">


                            <label>14. Floral type</label>

                            <fieldset>

                                <div class="form-group">


                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="others" id="others"
                                                   value="others">
                                            Others
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="pentamerous" id="pentamerous"
                                                   value="pentamerous">
                                            Pentamerous
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="tetramerous" id="tetramerous"
                                                   value="tetramerous">
                                            Tetramerous
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="trimerous" id="trimerous"
                                                   value="trimerous">
                                            Trimerous
                                        </label>
                                    </div>

                                </div>

                            </fieldset>

                            <label>15. Corolla aestivation</label>
                            <fieldset>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="descending" id="descending"
                                                   value="descending">
                                            Descending
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="imbricate" id="imbricate"
                                                   value="imbricate">
                                            Imbricate
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="open" id="open"
                                                   value="open">
                                            Open
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="quincuncial" id="Quincuncial"
                                                   value="quincuncial">
                                            Quincuncial
                                        </label>
                                    </div>


                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="twisted" id="twisted"
                                                   value="twisted">
                                            Twisted
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="valvate" id="valvate"
                                                   value="valvate">
                                            Valvate
                                        </label>
                                    </div>
                                </div>

                            </fieldset>

                            <label>16. Fruit</label>

                            <fieldset>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="achene" id="achene"
                                                   value="achene">
                                            Achene
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="berry" id="berry"
                                                   value="berry">
                                            Berry
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="capsule"
                                                   id="capsule"
                                                   value="capsule">
                                            Capsule
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="caryopsis" id="caryopsis"
                                                   value="caryopsis">
                                            Caryopsis
                                        </label>
                                    </div>


                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="coenocarpium" id="coenocarpium"
                                                   value="coenocarpium">
                                            Coenocarpium
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="cypsela" id="cypsela"
                                                   value="cypsela">
                                            Cypsela
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="drupe" id="drupe"
                                                   value="drupe">
                                            Drupe
                                        </label>
                                    </div>


                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="follicle" id="follicle"
                                                   value="follicle">
                                            Follicle
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="hep" id="hep"
                                                   value="hep">
                                            Hep
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="hesperidium" id="hesperidium"
                                                   value="hesperidium">
                                            Hesperidium
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="legume"
                                                   id="legume"
                                                   value="legume">
                                            Legume
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="lomentum" id="lomentum"
                                                   value="lomentum">
                                            Lomentum
                                        </label>
                                    </div>


                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="nut" id="nut"
                                                   value="nut">
                                            Nut
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="pome" id="pome"
                                                   value="pome">
                                            Pome
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="pseudocarp" id="pseudocarp"
                                                   value="pseudocarp">
                                            Pseudocarp
                                        </label>
                                    </div>


                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="samara" id="samara"
                                                   value="samara">
                                            Samara
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="silicula" id="silicula"
                                                   value="silicula">
                                            Silicula
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="silique" id="silique"
                                                   value="silique">
                                            Silique
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="sorosis"
                                                   id="sorosis"
                                                   value="sorosis">
                                            Sorosis
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="syconium" id="syconium"
                                                   value="syconium">
                                            Syconium
                                        </label>
                                    </div>


                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="utricle" id="utricle"
                                                   value="utricle">
                                            Utricle
                                        </label>
                                    </div>

                            </fieldset>

                            <label>17. Sexual Reproductive Unit </label>

                            <fieldset>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="covered_seed"
                                               id="covered seed"
                                               value="covered seed">
                                        Covered seed
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="naked_seed" id="naked seed"
                                               value="naked seed">
                                        Naked seed
                                    </label>
                                </div>


                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="spore" id="spore"
                                               value="spore">
                                        Spore
                                    </label>
                                </div>
                            </fieldset>


                        </div>
                    </div>

                    <!-- /.box -->
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
   