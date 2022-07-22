
    <div id="page-wrapper">
        <div class="row">
             <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Confirmation Booking</h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3>Doctor Available Schedule</h3>
                    </div>
                    <?php //print_r($doctorservice);?>
                    <div class="panel-body">
                       <?php 
                           // print_r($booking);
                        ?>
                        <div class="row">
                            <center>
                                <form name="Formapp" method= "POST" action="<?php echo base_url();?>booking/confirm/<?php echo $booking[0]['id_Booking'];?>">
                                <div class="col-sm-9">
                                    <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Appointment Data</h3>
                                        <p class="card-text">Please Check the details of the appointment</p>
                                        <p class="card-text">Number Appointment: <?php echo $booking[0]['id_Booking']; ?></p>
                                        <p class="card-text">Name Patient      : <?php echo $booking[0]['Patient_Name']; ?></p>
                                        <p class="card-text">Date              : <?php echo $booking[0]['Date_Booking']; ?></p>
                                        <p class="card-text">Hour              : <?php echo $booking[0]['Hour_Booking']; ?></p>
                                        <input type="hidden" name="idbooking"       value="<?php echo $booking[0]['id_Booking'];?>">
                                        <input type="hidden" name="idpatient"       value="<?php echo $booking[0]['id_Patient'];?>">
                                        <input type="hidden" name="datebooking"     value="<?php echo $booking[0]['Date_Booking'];?>">
                                        <input type="hidden" name="iddoctorservice" value="<?php echo $booking[0]['id_Doctor_Service'];?>">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-lg-5">
                                                    <label>Choose Stream Tool</label>
                                                    <select class="selectpicker form-control" name="Stream_Tool">
                                                        <?php
                                                        foreach($streamtool as $st) {
                                                            if($st['id_Stream_Tool']<>0)
                                                            echo "<option value='".$st['id_Stream_Tool']."'>".$st['Name']."</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-7">
                                                    <label>Choose Stream Link <font color='red'>Required</font></label>
                                                    <input type="text" id="streamlink" class="form-control" name="Stream_Link" placeholder="https://zoom-us?re=dsddsd" onblur="validaenlace();">
                                                </div> 
                                            </div>
                                        </div>
                                        <br>
                                        <button class="btn btn-primary" type="submit">Confirm</button>
                                        <a href="<?php echo base_url(); ?>booking/doctors_booking"><button class="btn btn-danger">GO BACK</button></a>
                                    </div>
                                    </div>
                                </div>
                                </form>
                            </center>
                        </div>
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>
    <script>
        function validaenlace() {
            var thelink = document.getElementById('streamlink').value;
            if(thelink=='')
            alert("You must need a Stream Link");
        }
    </script>