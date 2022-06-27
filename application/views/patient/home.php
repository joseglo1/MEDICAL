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
 <i class="fa  fa-pencil"></i><b>&nbsp;2 </b>Patienr are expecting you today. nbsp;
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
            

            <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>20 </b>Meetings Sheduled This Month

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-beer fa-3x"></i>&nbsp;<b>27 $ </b>Profit Recorded in This Month  
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        <i class="fa fa-rss fa-3x"></i>&nbsp;<b>1,900</b> New Subscribers This Year

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>2,000 $ </b>Payment Dues For Rejected Items
                    </div>
                </div>
                <!--end quick info section -->
            </div>
            <?php //print_r($doctor); ?>
            <div class="panel panel-heading">
                <div class="row">
                    <form name="SearhDr" action="" method="POST">
                    <div class="col-lg-3">
                        <input class="form-control" name="NameDr" type="search" placeholder="Search by Dr Name">
                    </div>
                    <div class="col-lg-3">
                        <select id="langs" name="idLanguage" class="form-control">
                        <?php
                            $primero=0;
                            foreach($languages as $l) {
                                if($primero==0) {
                                    $primero = 1;
                                    echo "<option value='' selected>Select Language</option>";
                                }
                                echo "<option value='".$l['id_Language']."'>".$l['name']."</option>";
                            }
                            ?>
                        </select>
                    </div> 
                    <div class="col-lg-3">
                        <select id="specialitys" name="idSpecialist" class="form-control">
                        <?php 
                            $primero=0;
                            foreach($specialities as $s) {
                                if($primero==0) {
                                    $primero=1;
                                    echo "<option value='' selected>Select Especialist</option>";
                                }
                                echo "<option value='".$s['id_Specialist']."'>".$s['name']."</option>";
                            }

                        ?>	
                        </select>
                    </div>    
                    <div class="col-lg-3">
                        <input type="submit" name="search" value="SEARCH" class="btn btn-success">
                    </div>
                    </form> 
                </div>

                <!-- cards of Doctors -->
                <div class='row'>
                    <?php 
                    foreach($doctor as $d) 
                    {
                    ?> 
                
                        <div class="col-lg-3">
                            <h3><?php echo $d['First_Name'].' '.$d['Last_Name'];?></h3>
                            <p>Image at the top (card-img-top):</p>
                            <p>
                                <?php 
                                    /* $rating = 3.5;
                                    while($rating>0) {
                                        if($rating >0.5) {
                                            echo "<span class='starorange fa fa-star'></span>";
                                        }
                                        else {
                                            echo "<span class='fa fa-star-half'></span>";
                                        }
                                        $rating--;
                                    }  */
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
                                   
                                ?>
                                 <span>Rate: <?php echo $rating;  ?></span>
                            </p>

                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="<?php echo base_url()."images/"; ?>img_avatar2.png" alt="Card image" style="width:100%">
                                <div class="card-body">
                                <h4 class="card-title"><?php echo $d['First_Name'].' '.$d['Last_Name'];?></h4>
                                <p class="card-text text-align"><?php 
                                    $resume = substr($d['Resum'],0,200);
                                    echo $resume.' ...'; ?></p>
                                <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9"><p>&nbsp;</p></div>
            </div>
            <div class="row">
                <div class="col-lg-8">

                    <!--Simple table example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Resume Activity
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Media</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:29 PM</td>
                                                    <td>Google Meet</td>
                                                </tr>
                                                <tr>
                                                    <td>3325</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:20 PM</td>
                                                    <td>ZOOM</td>
                                                </tr>
                                                <tr>
                                                    <td>3324</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:03 PM</td>
                                                    <td>Facebook Live</td>
                                                </tr>
                                                <tr>
                                                    <td>3323</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:00 PM</td>
                                                    <td>Google Meet</td>
                                                </tr>
                                                <tr>
                                                    <td>3322</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:49 PM</td>
                                                    <td>ZOOM</td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!--End simple table example -->

                </div>

                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body yellow">
                            <i class="fa fa-bar-chart-o fa-3x"></i>
                            <h3>20,741 </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Appointments
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-pencil-square-o fa-3x"></i>
                            <h3>2,060 </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Patients Registers
                            </span>
                        </div>
                    </div>
                    <!--
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body green">
                            <i class="fa fa fa-floppy-o fa-3x"></i>
                            <h3>20 GB</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">New Data Uploaded
                            </span>
                        </div>
                    </div>
                    -->
                    <!--
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body red">
                            <i class="fa fa-thumbs-up fa-3x"></i>
                            <h3>45 </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Patient Registered
                            </span>
                        </div>
                    </div>
                    -->
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