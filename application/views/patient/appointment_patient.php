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

<div class="row">
    <div class="col-lg-12 panel panel-default">
        <div class="col-lg-12 modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title" id="myModalLabel">Reserve Appointment with <?php echo $doctor['First_Name']; ?></h4>
        </div>
        <div class="col-lg-5 modal-header">              
            <div class="text-align" style="margin-left: 50px;margin-right: 50px">
                <center>
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading"><?php echo $doctor['First_Name']." ".$doctor['Last_Name']." ";?><small><?php echo $nationality[$doctor['id_Nationality']]['name'];  ?></small></h3>
                </center>
            </div>
        </div>
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
                <span><strong>Reserve Appointments: </strong></span>
                <?php
                    //echo $year."-".$month1."-".$diaActual1;
                    $swapp = 0; 
                    $daysweek = array();
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
                                echo "<span class='label label-danger'> Friday </span>";
                                $swapp = 1;
                                break;
                            case 7:
                                echo "<span class='label label-danger'> Saturday </span>";
                                $swapp = 1;
                                break;    
                            default:
                            echo "<span class='label label-danger'> Not defined</span>";
                        } 
                        $daysweek[] = $ds['Day_Week'] - 1;
                    } 
                    if($swapp==0) {
                        echo "<span class='label label-danger'> Not defined</span>";
                    }
                ?>                      
            </center>
            <hr>
        </div>
        <!--End Advanced Tables -->
    </div>

    <?PHP 
    if($swapp<>0) {
    ?>
    <div class="col-lg-12 modal-header" style="background-color:aliceblue">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title" id="myModalLabel">Click on blue boxes to reserve appointment</h4>
    </div>
    <div class="col-lg-6 panel panel-default">
        <div class="table-responsive">
            <table class="table table-striped" id="calendar2">
                <caption><h3><?php echo $meses[$month]." ".$year?></h3></caption>
                <thead>
                    <tr>
                        <th>&nbsp;&nbsp;Monday&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Tuesday&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Wendsday&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Thrusday&nbsp;&nbsp;</th>
                        <th>&nbsp;&nbsp;Friday&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Saturday&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Sunday&nbsp;&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr bgcolor="silver">
                        <?php
                        $last_cell=$diaSemana+$ultimoDiaMes;
                        // hacemos un bucle hasta 42, que es el máximo de valores que puede
                        // haber... 6 columnas de 7 dias
                        for($i=1;$i<=42;$i++)
                        {
                            if($i==$diaSemana)
                            {
                                // determinamos en que dia empieza
                                $day=1;
                            }
                            if($i<$diaSemana || $i>=$last_cell)
                            {
                                // celca vacia
                                echo "<td>&nbsp;</td>";
                            }
                            else
                            {
                            //$nwday = date('l', strtotime($theday));
                            $day1 =$day;
                            if($day<10) {
                                $day1 = "0".$day;
                            }
                            $fec = $year."-".$month1."-".$day1;
                            $nday = date('N', strtotime($fec)) ;

                            if (in_array($nday,  $daysweek)) {
                                
                                echo "<td class='hoy'><center><a href='#' style='color:#ffffff'><a href='".base_url()."patient/reserv/".$doctor['id_Doctor']."/".$patient[0]['id_Patient']."/$year-$month-$day'>$day</a></center></td>";
                            }
                            else
                            {
                                echo "<td><center>$day</center></td>";
                            }

                        /*
                        if($day==$diaActual) {
                            
                            echo "<td class='hoy'><center>$day</center></td>";
                        }
                        else
                        {
                            echo "<td><center>$day</center></td>";
                        } */
                        $day++;
                        }
                        // cuando llega al final de la semana, iniciamos una columna nueva
                        if($i%7==0)
                        {
                            echo "</tr><tr>\n";
                        }
                    }
                    ?>
                    </tr>
                </tbody>
            </table>
            <br>
        </div>
    </div>

    <div class="col-lg-6 panel panel-default">
        <?php
            $month=date("n");
            $month=$month + 1;
            if($month == 13) {
                $month = 12;
                $year=$year + 1;
            }
            if($month<10) $month1 ="0".$month;
            else $month1 = $month;
            
            $diaActual=date("j");
            if($diaActual<10) $diaActual1 ="0".$diaActual;
            else $diaActual1 = $diaActual;

            $diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;
            $ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));
        ?>
        <div class="table-responsive">
            <table class="table table-striped" id="calendar2">
                <caption><h3><?php echo $meses[$month]." ".$year?></h3></caption>
                <thead>
                    <tr>
                        <th>&nbsp;&nbsp;Monday&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Tuesday&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Wendsday&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Thrusday&nbsp;&nbsp;</th>
                        <th>&nbsp;&nbsp;Friday&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Saturday&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Sunday&nbsp;&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr bgcolor="silver">
                        <?php
                        $last_cell=$diaSemana+$ultimoDiaMes;
                        // hacemos un bucle hasta 42, que es el máximo de valores que puede
                        // haber... 6 columnas de 7 dias
                        for($i=1;$i<=42;$i++)
                        {
                            if($i==$diaSemana)
                            {
                                // determinamos en que dia empieza
                                $day=1;
                            }
                            if($i<$diaSemana || $i>=$last_cell)
                            {
                                // celca vacia
                                echo "<td>&nbsp;</td>";
                            }
                            else
                            {
                            //$nwday = date('l', strtotime($theday));
                            $day1 =$day;
                            if($day<10) {
                                $day1 = "0".$day;
                            }
                            $fec = $year."-".$month1."-".$day1;
                            $nday = date('N', strtotime($fec)) ;

                            if (in_array($nday,  $daysweek)) {
                                
                                echo "<td class='hoy'><center><a href='#' style='color:#ffffff'><a href='".base_url()."patient/reserv/".$doctor['id_Doctor']."/".$patient[0]['id_Patient']."/$year-$month-$day'>$day</a></center></td>";
                            }
                            else
                            {
                                echo "<td><center>$day</center></td>";
                            }

                            /*
                            if($day==$diaActual) {
                                
                                echo "<td class='hoy'><center>$day</center></td>";
                            }
                            else
                            {
                                echo "<td><center>$day</center></td>";
                            } */
                            $day++;
                            }
                            // cuando llega al final de la semana, iniciamos una columna nueva
                            if($i%7==0)
                            {
                                echo "</tr><tr>\n";
                            }
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
            <br>
        </div>
               
    </div>
    <?php
    }
    ?>
    <div class="col-lg-12 modal-header" style="background-color:aliceblue">
        <hr>
        <center>
            <?php 
            if($swapp<>0) { ?>
            <a href="<?php echo base_url();?>patient/home">
                <button type="button" class="btn btn-default" data-dismiss="modal">Make Appointment with <?php echo $doctor['First_Name'];?></button>
            </a>
            <?php } ?>
            <a href="<?php echo base_url();?>patient/home">
                <button type="button" class="btn btn-default" data-dismiss="modal">Go Back</button>
            </a>
        </center>
    </div>

</div>
<?php
    function know_day($nombredia) {
        $numberday = date('N', strtotime($nombredia));
        return $numberday;
    }
?>


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