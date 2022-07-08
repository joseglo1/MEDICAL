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
<?php
    # define initial value por the calendar

    $month=date("n");
    if($month<10) $month1 ="0".$month;
    else $month1 = $month;
    $year=date("Y");
    $diaActual=date("j");
    if($diaActual<10) $diaActual1 ="0".$diaActual;
    else $diaActual1 = $diaActual;

    # Get the first day of the week
    # retiurn 0 for Sunday and 6 for Saturday

    $diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;

    # Get the last day of the month 

    $ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));

    $meses=array(1=>"January", "Febrary", "March", "April", "May", "June", "July",

    "Agoust", "September", "Octuber", "November", "December");   

?>

<!--- Table of Available Doctors  -->
<form name="booking" method="post" action="<?php echo base_url();?>/booking/add">
<div class="row">
    <div class="col-lg-12 panel panel-default">
        <div class="col-lg-12 modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title" id="myModalLabel">Details Reserve Appointment with <?php echo $doctor['First_Name']; ?></h4>
        </div>
        <div class="col-lg-5 modal-header">              
            <div class="text-align" style="margin-left: 50px;margin-right: 50px">
                <center>
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading"><?php echo $doctor['First_Name']." ".$doctor['Last_Name']." ";?><small><?php echo $nationality[$doctor['id_Nationality']]['name'];  ?></small></h3>
                </center>
            </div>
        </div>
        <input name="iddoctor" type="hidden" value="<?php echo $doctor['id_Doctor']?>">
        <input name="idpatient" type="hidden" value="<?php echo $patient['id_Patient']?>">
        <div class="col-lg-7 modal-header style="margin-left: 50px;margin-right: 50px">  
                <span><strong>Specialities: </strong></span><br>
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
                        echo "<br>";
                    }
                ?>

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
                <span><strong>Date to Appointments: </strong></span>
                <span class='label label-danger'>&nbsp;&nbsp;&nbsp;<?php echo $dateappointment; ?>&nbsp;&nbsp;</span>
                <input name="dateappointment" type="hidden" value="<?php echo $dateappointment; ?>">
                                      
            <hr>
        </div>
        <div class="col-lg-12 modal-header">
            <!--
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="StreamTool">Choose the Stream Tool</label>
                        <select class="form-control form-control-md" name="StreamTool">
                            <?php
                            /*   
                            foreach($streamtool as $st) {

                                if($doctor['id_Stream_Tool']== st['id_Stream_Tool']) {
                                    echo "<option value='".$st['id_Stream_Tool']."' selected>".$st['Name']."</option>";
                                }
                                echo "<option value='".$st['id_Stream_Tool']."'>".$st['Name']."</option>";                 
                            }
                            */
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="StreamTool"><h4>Choose the Hour</h4></label>
                        <!--
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">First radio</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">Second radio</label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                            <label class="form-check-label" for="gridRadios3">Third disabled radio</label>
                        </div>
                        -->
                        <?php
                            $firstitem = 0;
                            foreach($doctorservice as $ds) {
                                if($ds['Status']==0) {
                                    if($firstitem==0) {
                                        $firstitem = 1;
                                    ?>
                                        <div class='form-check'>
                                        <input class="form-check-input" type="radio" name="iddoctorservice" id="doctorservice" value="<?php echo $ds['id_Doctor_Service']; ?>" checked>
                                        <label class="form-check-label" for="gridRadios3"><?php echo $ds['initial_Hour']; ?>&nbsp;&nbsp;<font color="green">Available</font></label>
                                        </div>
                                    <?php
                                    }
                                    else 
                                    {
                                ?>
                                    <div class='form-check'>
                                    <input class="form-check-input" type="radio" name="iddoctorservice" id="doctorservice" value="<?php echo $ds['id_Doctor_Service']; ?>">
                                    <label class="form-check-label" for="gridRadios3"><?php echo $ds['initial_Hour']; ?>&nbsp;&nbsp;<font color="green">Available</font></label>
                                    </div>
                                <?php
                                    }
                                }
                                else {
                        ?>
                                <div class='form-check disabled'>
                                <input class="form-check-input" type="radio" name="iddoctorservice" id="doctorservice" value="<?php echo $ds['id_Doctor_Service']; ?>" disabled>
                                <label class="form-check-label" for="gridRadios3"><?php echo $ds['initial_Hour']; ?>&nbsp;&nbsp;<font color="red">Not Available</font></label>
                                </div>
                        <?php   }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <a href="<?php echo base_url();?>booking/add">
                            <button type="submit" class="btn btn-default" data-dismiss="modal">Reserve Now your Appointment with <?php echo $doctor['First_Name']." ".$doctor['Last_Name'];?></button>
                        </a>
            </form>
                        <a href="<?php echo base_url();?>patient/appointment/<?php echo $doctor['id_Doctor'];?>">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Go Back</button>
                        </a>
                    </div>
            </div>
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