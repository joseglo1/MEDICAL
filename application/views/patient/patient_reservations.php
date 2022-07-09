<!--  page-wrapper -->
<div id="page-wrapper">

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Records</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
    <!-- Welcome -->
    <div class="col-lg-12">
        <div class="alert alert-info">
            <i class="fa fa-folder-open"></i><b>&nbsp;Hello! </b>Here are the
<i class="fa  fa-pencil"></i><b>&nbsp;<?php echo count($booking); ?> </b>Appointment you reserved;
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
<?php //print_r($booking);?>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                    <h3>List of your Reservations</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Doctor's Name</th>
                                <th>Date & Time</th>
                                <th>Stream Tool</th>
                                <th>Link Stream</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach($booking as $b) 
                            {
                                $DoctorService   ="";
                                $mydr= "SELECT * FROM doctor WHERE id_Doctor=".$b['id_Doctor'].";";
                                $querydr = $this->db->query($mydr);
                                if ($querydr->num_rows() > 0)
                                {
                                    $row = $querydr->row();
                                    $DoctorsName = $row->First_Name." ".$row->Middle_Name." ".$row->Last_Name;
                                }
                                $myDateTime   ="";
                                $myds= "SELECT * FROM doctor_service WHERE id_Doctor_Service=".$b['id_Doctor_Service'].";";
                                $queryds = $this->db->query($myds);
                                if ($queryds->num_rows() > 0)
                                {
                                    $row = $queryds->row();
                                    $myDateTime = $b['Date_Booking']." ".$row->initial_Hour;
                                }
                                $myStreamTool   ="";
                                if($b['id_Stream_Tool']<>0) {    
                                    $myst= "SELECT * FROM stream_tool WHERE id_Stream_Tool=".$b['id_Stream_Tool'].";";
                                    $queryst = $this->db->query($myst);
                                    if ($queryst->num_rows() > 0)
                                    {
                                        $row = $queryst->row();
                                        $myStreamTool = $row->Name;
                                    }
                                }
                                else {
                                    $myStreamTool   ="Not define yet";
                                }
                            ?> 
                            <tr class="odd gradeX">
                                <td><?php  echo $b['id_Booking'];?></td>
                                <td><?php echo $DoctorsName?></td>
                                <td><?php echo $myDateTime;?></td>
                                <td><?php echo $myStreamTool;?></td>
                                <td>
                                    <?php
                                        if($b['Link_Stream']<>'') 
                                            echo $b['Link_Stream'];
                                        else
                                            echo "No define yet";
                                    ?>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
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