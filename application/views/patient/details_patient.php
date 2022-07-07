<!--  page-wrapper -->
<div id="page-wrapper">

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Welcome</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
    <!-- Welcome -->
    <div class="col-lg-12">
        <div class="alert alert-info">
            <i class="fa fa-folder-open"></i><b>&nbsp;Hello! </b>Welcome Back
<i class="fa  fa-pencil"></i><b>&nbsp;2 </b>Appointment are expecting you today;
        </div>
    </div>
    <!--end  Welcome -->
</div>


<div class="row">
    <!--quick info section -->
    <div class="col-lg-3">
        <div class="alert alert-danger text-center">
            <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>20 </b>Total today appointments

        </div>
    </div>
    <div class="col-lg-3">
        <div class="alert alert-success text-center">
            <i class="fa  fa-calendar fa-3x"></i>&nbsp;<b>27 $ </b>Total yesterday appointments  
        </div>
    </div>
    <div class="col-lg-3">
        <div class="alert alert-info text-center">
            <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>1,900</b> Last 7 days appointments

        </div>
    </div>
    <div class="col-lg-3">
        <div class="alert alert-warning text-center">
            <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>2,000 $ </b>Total Appointments
        </div>
    </div>
    <!--end quick info section -->
</div>


<!-- <div class="panel panel-heading"> -->
    <!-- 
    <div class="row">
        <form name="SearhDr" action="" method="POST">
        <div class="col-lg-3">
            <input class="form-control" name="NameDr" type="search" placeholder="Search by Dr Name">
        </div>
        <div class="col-lg-3">
            <select id="langs" name="idLanguage" class="form-control">
            <?php
                /*
                $primero=0;
                foreach($languages as $l) {
                    if($primero==0) {
                        $primero = 1;
                        echo "<option value='' selected>Select Language</option>";
                    }
                    echo "<option value='".$l['id_Language']."'>".$l['name']."</option>";
                }
                */
                ?>
            </select>
        </div> 
        <div class="col-lg-3">
            <select id="specialitys" name="idSpecialist" class="form-control">
            <?php 
                /*
                $primero=0;
                foreach($specialities as $s) {
                    if($primero==0) {
                        $primero=1;
                        echo "<option value='' selected>Select Especialist</option>";
                    }
                    echo "<option value='".$s['id_Specialist']."'>".$s['name']."</option>";
                }
                */
            ?>	
            </select>
        </div>    
        <div class="col-lg-3">
            <input type="submit" name="search" value="SEARCH" class="btn btn-success">
        </div>
        </form> 
    </div>
    -->

    <!-- cards of Doctors -->
    <!-- 
    <div class='row'>
        <?php 
        // foreach($doctor as $d) 
        //{
        ?> 
    
            <div class="col-lg-3">
                <h3><?php // echo $d['First_Name'].' '.$d['Last_Name'];?></h3>
                <p>
                    <?php 
                    /*
                        $Especially = explode('|',$d['id_Specialist']);
                        $turn_cycle  = 0;
                        foreach( $Especially as $esp) {
                           if($turn_cycle > 0) {
                            echo "/n";
                           }
                           $title_esp = substr($specialities[$esp]['name'],0,30);
                           echo $title_esp;
                           $turn_cycle++;
                        }
                    */
                    ?>
                </p>
                <p>
                    <?php 
                        /*
                        $starsnro = 1;
                        $rating = 3.5;
                        while($starsnro<=5) {
                            $ratingf = $rating - $starsnro;
                            if($ratingf >= 1)
                            {
                                echo "<span class='starorange fa fa-star'></span>";
                            }
                            else
                            {
                                if($ratingf > 0) {
                                    echo "<span class='starorange fa fa-star-half-o'></span>";
                                }
                                else {
                                    echo "<span class='fa fa-star'></span>";
                                }
                            }
                            $starsnro++;
                        }
                        */
                    ?>
                     <span>Rate: <?php //echo $rating;  ?></span>
                </p>

                <div class="card" style="width:200px">
                    <img class="card-img-top" src="<?php // echo base_url()."images/"; ?>img_avatar2.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                    <h4 class="card-title"><?php // echo $d['First_Name'].' '.$d['Last_Name'];?></h4>
                    <p class="card-text text-align">
                        <?php 
                        // $resume = substr($d['Resum'],0,200);
                        // echo $resume.' ...'; 
                        ?>
                    </p>
                    <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
    
        <?php
        //}
        ?>
    </div>
    -->
<!-- </div>  -->


<!--- Table of Available Doctors  -->

<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div  id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div>
                    <div>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title" id="myModalLabel">More About <?php echo $doctor['First_Name']; ?></h4>
                        </div>
                        <div class="text-align" style="margin-left: 50px;margin-right: 50px">
                            <center>
                                <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                                <h3 class="media-heading"><?php echo $doctor['First_Name']." ".$doctor['Last_Name']." ";?><small><?php echo $nationality[$doctor['id_Nationality']]['name'];  ?></small></h3>
                                <span><strong>Specialities: </strong></span>
                                    <?php
                                        $cycle=1; 
                                        $my_especialist = array();
                                        $my_especialist = explode('|',$doctor['id_Specialist']);
                                        foreach ($my_especialist as $e) {
                                            if($cycle == 1) {
                                                echo "<span class='label label-warning'>".$specialities[$e]['name']."</span>";
                                            }
                                            if($cycle == 2) {
                                                echo "<span class='label label-info'>".$specialities[$e]['name']."</span>";
                                            }
                                            if($cycle == 3) {
                                                echo "<span class='label label-success'>".$specialities[$e]['name']."</span>";
                                            }
                                            $cycle++;
                                            if($cycle==4) $cycle = 1;
                                        }
                                    ?>
                                    <br>
                                    <span><strong>Languages: </strong></span>
                                    <?php
                                        $cycle=1; 
                                        $my_languages = array();
                                        $my_languages = explode('|',$doctor['id_Language']);
                                        foreach ( $my_languages as $la) {
                                            if($cycle == 1) {
                                                echo "<span class='label label-primary'>".$languages[$la]['name']."</span>";
                                            }
                                            if($cycle == 2) {
                                                echo "<span class='label label-danger'>".$languages[$la]['name']."</span>";
                                            }
                                            if($cycle == 3) {
                                                echo "<span class='label label-secondary'>".$languages[$la]['name']."</span>";
                                            }
                                            $cycle++;
                                            if($cycle==4) $cycle = 1;
                                        }
                                    ?>
                                    <br>
                                    <span><strong>Streaming Tool: </strong></span>
                                    <span class='label label-primary'>
                                        <?php
                                            if($doctor['id_Stream_Tool']>0) {
                                                $query_tool = "SELECT Name FROM stream_tool WHERE id_Stream_Tool = ".$doctor['id_Stream_Tool'].";";
                                                $res = $this->db->query($query_tool);
                                                if ($res->num_rows() > 0)
                                                {
                                                    $row = $res->row();
                                                    $streamingt = $row->Name;
                                                }
                                                else
                                                {
                                                    $streamingt = "Not defined yet";
                                                }
                                            }
                                            else
                                            {
                                                $streamingt = "Not defined yet";
                                            }
                                            echo $streamingt; 
                                        ?>
                                    </span>
                                    <br>
                                    <span><strong>Years of Experience: </strong></span>
                                    <span class='label label-primary'><?php echo $doctor['Experience_Years'];?></span>
                                    <br>
                                    <span><strong>Member Since: </strong></span>
                                    <span class='label label-warning'><?php echo $doctor['Date_Register'];?></span>
                                    <br>
                                    <span><strong>Schedule for Appointments: </strong></span>
                                    <?php
                                        //print_r($doctorservice);
                                        $swapp = 0; 
                                        foreach($doctorserviceh as $ds) {
                                            switch ($ds['Day_Week']) {
                                                case 1:
                                                    echo "<span class='label label-danger'> Sunday </span>";
                                                    $swapp = 1; 
                                                    break;
                                                case 2:
                                                    echo "<span class='label label-danger'> Monday </span>";
                                                    $swapp = 1;
                                                    break;
                                                case 3:
                                                    echo "<span class='label label-danger'> Tuesday </span>";
                                                    $swapp = 1;
                                                    break;
                                                case 4:
                                                    echo "<span class='label label-danger'> Wendsday </span>";
                                                    $swapp = 1;
                                                    break;
                                                case 5:
                                                    echo "<span class='label label-danger'> Thrusday </span>";
                                                    $swapp = 1;
                                                    break;
                                                case 6:
                                                    echo "<span class='label label-danger'> Friday at </span>";
                                                    $swapp = 1;
                                                    break;
                                                case 7:
                                                    echo "<span class='label label-danger'> Saturday </span>";
                                                    $swapp = 1;
                                                    break;    
                                                default:
                                                echo "<span class='label label-danger'> Not defined</span>";
                                            } 
                                        } 
                                        if($swapp==0) {
                                            echo "<span class='label label-danger'> Not defined</span>";
                                        }
                                    ?>                      
                            </center>
                            <hr>
                            <div class="text-align" style="margin-left: 20px;margin-right: 20px">
                                <center>
                                    <p class="text-left ml-3"><strong>About Me: </strong><br><?php echo $doctor['Resum'];  ?></p>
                                    <br>
                                </center>
                            </div>
                            <center>
                            <a href="<?php echo base_url();?>patient/appointment/<?php echo $doctor['id_Doctor']; ?>"><button type="button" class="btn btn-default" data-dismiss="modal">Make Appointment with <?php echo $doctor['First_Name'];?></button></a>
                            <a href="<?php echo base_url();?>patient/home">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Go Back</button>
                            </a>
                            </center>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <!-- fin de modal -->
            
        </div>
        <!--End Advanced Tables -->
    </div>
</div>




<div class="row">
    <div class="col-lg-4">
        
    </div>
    <div class="col-lg-4">
        
    </div>
    <div class="col-lg-4">
        
    </div>
</div>

</div>
<!-- end page-wrapper -->