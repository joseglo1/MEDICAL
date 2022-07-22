
    <div id="page-wrapper">
        <div class="row">
             <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Report Pay </h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3>Take note Id Booking and Pay reference</h3>
                    </div>
                    <?php //print_r($booking);?>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Hour</th>
                                        <th>Doctor Name</th>
                                        <th>Link Stream</th>
                                        <th>Stream Tool</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach($booking as $b) { 
                                    if($b['id_Status_Meeting']!==2)  // Appointments confirmed by Dr
                                        continue;
                                ?>
                                    <tr class="odd gradeX">
                                        <td ><?php echo $b['id_Booking']?></td>
                                        <td><?php echo $b['Date_Booking'];?></td>
                                        <td><?php echo $b['Hour_Booking'];?></td>
                                        <td><?php echo $b['Doctor_Name'];?></td>
                                        <td><?php echo $b['Link_Stream'];?></td>
                                        <td><?php echo $b['Stream_Tool'];?></td>
                                        <td><?php echo $b['Status_Meeting'];?></td>
                                        <td>
                                            <a href="<?php echo base_url().'booking/patient_pay_report/'.$b['id_Booking'];  ?>">REPORT</a></td>
                                        </td>
                                    </tr>
                                   <?php } ?>
                                </tbody>
                            </table>
                        </div>   
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>