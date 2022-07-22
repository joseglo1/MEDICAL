
    <div id="page-wrapper">
        <div class="row">
             <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Report Paypla</h1>
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
                        <form name="reportpay" method="POST" action="<?php echo base_url()?>booking/send_pay_report">
                        <div class="form-group row">
                            <label for="bookid" class="col-sm-2 col-form-label">Id Booking</label>
                            <div class="col-sm-1">
                            <input type="text" name="idbooking" class="form-control" id="idbooking" value="<?php echo $idbooking?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="datepaid" class="col-sm-2 col-form-label">Date Paid</label>
                            <div class="col-sm-2">
                            <input name="datepaid" type="date" class="form-control" id="datepaid">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="reference" class="col-sm-2 col-form-label"># Reference</label>
                            <div class="col-sm-5">
                            <input name="reference" type="text" class="form-control" id="reference">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="amountpay" class="col-sm-2 col-form-label">Amount Pay</label>
                            <div class="col-sm-2">
                            <input name="amountpay" type="number" step= "0.01" value="15.00" class="form-control" id="amountpay">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="note" class="col-sm-2 col-form-label">Notes</label>
                            <div class="col-sm-5">
                            <textarea name="note" cols="20" rows="5" class="form-control" id="note" 
                            placeholder="Important note you need to be inform"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                            <button type="submit" class="btn btn-md btn-success" id="sendreport">SEND REPORT</button>
                            </div>
                        </div>
                        </form>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <?php echo "<center><font color='red'>".$mymessage."</font><center>" ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>