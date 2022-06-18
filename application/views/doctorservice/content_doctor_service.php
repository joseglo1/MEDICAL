<?php //echo form_open('doctor/signup',array("class"=>"form-horizontal")); ?>

    <div id="page-wrapper">
        <div class="row">
             <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Doctor Schedule</h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                               <h3> Add a Schedule - My Time Zone is <?php
                                echo date_default_timezone_get();
                                ?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form action="<?php echo base_url().'/doctorservice/add';?>" method="post" enctype="multipart/form-data">
                            <div class="col-lg-10 align-content-center">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Day of the Week</label>
                                            <select name="day_week" class="form-control" required>
                                                <option value="" selected>Choice a day you are available</option>
                                                <option value='2'>Monday</option>
                                                <option value='3'>Tuesday</option>
                                                <option value='4'>Wendsday</option>
                                                <option value='5'>Thrusday</option>
                                                <option value='6'>Friday</option>
                                                <option value='7'>Saturday</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <input type="hidden" value="<?php echo $doctor[0]['id_Doctor']; ?>" name="idDoctor">
                                <input type="hidden" value="<?php
                                echo date_default_timezone_get();
                                ?>" name="MYGMT">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Initial Hour</label>
                                            <select name="hour" class="form-control" required>
                                                <option value="" selected>Choice the Initial Hour</option>
                                                <option value='7:00am'>7:00am</option>
                                                <option value='7:30am'>7:30am</option>
                                                <option value='8:00am'>8:00am</option>
                                                <option value='8:30am'>8:30am</option>
                                                <option value='9:00am'>9:00am</option>
                                                <option value='9:30am'>9:30am</option>
                                                <option value='10:00am'>10:00am</option>
                                                <option value='10:30am'>10:30am</option>
                                                <option value='11:00am'>11:00am</option>
                                                <option value='11:30am'>11:30am</option>
                                                <option value='12:00am'>12:00am</option>
                                                <option value='12:30am'>12:30am</option>
                                                <option value='1:00pm'>1:00pm</option>
                                                <option value='1:30pm'>1:30pm</option>
                                                <option value='2:00pm'>2:00pm</option>
                                                <option value='2:30pm'>2:30pm</option>
                                                <option value='3:00pm'>3:00pm</option>
                                                <option value='3:30pm'>3:30pm</option>
                                                <option value='4:00pm'>4:00pm</option>
                                                <option value='4:30pm'>4:30pm</option>
                                                <option value='5:00pm'>5:00pm</option>
                                                <option value='5:30pm'>5:30pm</option>
                                                <option value='6:00pm'>6:00pm</option>
                                                <option value='6:30pm'>6:30pm</option>
                                                <option value='7:00pm'>7:00pm</option>
                                                <option value='7:30pm'>7:30pm</option>
                                                <option value='8:00pm'>8:00pm</option>
                                                <option value='8:30pm'>8:30pm</option>
                                                <option value='9:00pm'>9:00pm</option>
                                                <option value='9:30pm'>9:30pm</option>
                                                <option value='10:00pm'>10:00pm</option>
                                                <option value='10:30pm'>10:30pm</option>
                                                <option value='11:00pm'>11:00pm</option>
                                                <option value='11:30pm'>11:30pm</option>
                                                <option value='12:00pm'>12:00pm</option>
                                                <option value='12:30pm'>12:30pm</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <input class="form-control btn btn-primary" name="SEND" value="SEND" type="submit" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 align-content-center">
                            <?php if($mymessage<>null) { ?>
                            <h4 style="color: red;"><?php print ($mymessage); ?></h4>
                                <?php }  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3>Documents Attach</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Day Week</th>
                                        <th>Initial Hour</th>
                                        <th>GMT</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach($doctorservice as $d) { ?>
                                    <tr class="odd gradeX">
                                        <td >
                                        <?php
                                        switch ($d['Day_Week']) {
                                            case 2:
                                                echo "Monday";
                                                break;
                                            case 3:
                                                echo "Tuesday";
                                                break;
                                            case 4:
                                                echo "Wendsday";
                                                break;
                                            case 5:
                                                echo "Thrusday";
                                                break;
                                            case 6:
                                                echo "Friday";
                                                break;
                                            case 7:
                                                echo "Saturday";
                                                break;    
                                            default:
                                                echo "Undefined";
                                        } 
                                        ?> 
                                        </td>
                                        <td><?php echo $d['initial_Hour'];?></td>
                                        <td><?php echo $d['GMT'];?></td>
                                        <td>
                                            <a href='<?php echo 'doctorservice/edit/'.$d['id_Doctor_Service'];  ?>'>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="<?php echo 'doctorservice/remove/'.$d['id_Doctor_Service'];  ?>">Delete</a></td>
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
<?php //echo form_close(); ?>