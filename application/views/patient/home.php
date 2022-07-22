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
                        <div class="panel-heading">
                             <h3>Doctor's Available</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Drs Name</th>
                                            <th>Specialities</th>
                                            <th>Language</th>
                                            <th>Rate</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach($doctor as $d) 
                                        {
                                        ?> 
                                        <tr class="odd gradeX">
                                            <td><img class="card-img-top" src="<?php  echo base_url().'upload/profile/'.$d['picture']; ?>" alt="Card image" style="width:50px;height:50px;"></td>
                                            <td><?php echo $d['First_Name'].' '.$d['Last_Name'];?></td>
                                            <td>
                                            <?php 
                                                $Especially = explode('|',$d['id_Specialist']);
                                                $turn_cycle  = 0;
                                                foreach( $Especially as $esp) {
                                                if($turn_cycle > 0) {
                                                    echo "<br>";
                                                }
                                                $title_esp = substr($specialities[$esp]['name'],0,30);
                                                echo $title_esp;
                                                $turn_cycle++;
                                                }
                                            ?></td>
                                            <td class="center">
                                            <?php 
                                                $LanguageSpeakes = explode('|',$d['id_Language']);
                                                $turn_cycle  = 0;
                                                foreach( $LanguageSpeakes as $lan) {
                                                if($turn_cycle > 0) {
                                                    echo "<br>";
                                                }
                                                $title_lan = substr($languages[$lan]['name'],0,30);
                                                echo $title_lan;
                                                $turn_cycle++;
                                                }
                                            ?>
                                            </td>
                                            <td class="center">
                                            <?php 
                                            $countrank = 0;
                                            $mountrank = 0;
                                            $promrank=0;
                                            foreach($bookrank as $br) {
                                                if($br['id_Doctor']==$d['id_Doctor']) {
                                                    $countrank++;
                                                    $mountrank+=$br['Rate_Calification'];
                                                }
                                            }
                                            if($countrank>0) {
                                                $promrank = $mountrank / $countrank;
                                            }
                                            $starsnro = 1;
                                            //$rating = 3.5 + 1;
                                            $rating=$promrank + 1; 
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
                                    
                                ?>
                                 <span>Rate: <?php 
                                    //echo $rating;
                                    echo $promrank;  
                                    ?></span>
                                            </td>
                                            <td>
                                                <!-- <a href="#aboutModal?hnombre=<?php echo 'Mi NOMBRE'?>" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-primary btn-sm">Appointment</button>
                                                </a> -->
                                                <a href="<?php echo base_url();?>patient/details/<?php echo $d['id_Doctor']; ?>">
                                                    <button type="button" class="btn btn-primary btn-sm">Appointment</button>
                                                </a>
                                            </td>
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

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title" id="myModalLabel">More About Joe <?php echo "pp";?></h4>
                        </div>
                        <div class="modal-body">
                            <center>
                                <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                                <h3 class="media-heading">Joe Sixpack <small>USA</small></h3>
                                <span><strong>Skills: </strong></span>
                                    <span class="label label-warning">HTML5/CSS</span>
                                    <span class="label label-info">Adobe CS 5.5</span>
                                    <span class="label label-info">Microsoft Office</span>
                                    <span class="label label-success">Windows XP, Vista, 7</span>
                            </center>
                            <hr>
                            <center>
                                <p class="text-left"><strong>Bio: </strong><br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                                <br>
                            </center>
                        </div>
                        <div class="modal-footer">
                            <center>
                            <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about Joe</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin de modal -->

            <!-- End of Table Available Doctors -->

            <div class="row">
                <div class="col-lg-9"><p>&nbsp;</p></div>
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