
    <div id="page-wrapper">
        <div class="row">
             <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Appointment Calification</h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3>Please fill all the form</h3>
                    </div>
                    <div class="panel-body">
                        <form name="reportpay" method="POST" action="<?php echo base_url()?>booking/send_eval">
                        <div class="form-group row">
                            <label for="bookid" class="col-sm-2 col-form-label">Id Booking</label>
                            <div class="col-sm-1">
                            <input type="text" name="idbooking" value="<?php echo $idbooking;  ?>" class="form-control" id="idbooking"  readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="range" class="col-sm-2 col-form-label">Your Calification</label>
                            <div class="col-sm-4">
                            <input name="range" type="range" min="1" max="5" step= "1" value="1" class="form-control" id="valor">
                            <strong><font color='blue'><span>YOU SELECT A CALIFICATION OF >>>> </span></font>
                            <font color='red'><span id="temp">1</span></font></strong>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                            <button type="submit" class="btn btn-md btn-success" id="sendreport">SEND EVALUATION</button>
                            </div>
                        </div>
                        </form>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <?php echo "<center><font color='red'>".$mymessage."</font><center>" ?>
                            </div>
                        </div>
                        </form>
                    </div>
                    <script>
                        addEventListener('load',inicio,false);

                        function inicio()
                        {
                            document.getElementById('valor').addEventListener('change',cambioValor,false);
                        }

                        function cambioValor()
                        {    
                            document.getElementById('temp').innerHTML=document.getElementById('valor').value;
                        }
                    </script>  
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>