<?php //echo form_open('doctor/signup',array("class"=>"form-horizontal")); ?>

    <div id="page-wrapper">
        <div class="row">
             <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Upload Credentials</h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                               <h3> Uploads Documents</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form action="<?php echo base_url().'/doctor/loadmydocument';?>" method="post" enctype="multipart/form-data">
                            <div class="col-lg-10 align-content-center">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-10">
                                            <label>Type of Documents</label>
                                            <select name="idDocument" class="form-control">
                                            <?php 
                                                $primero = 0;
                                                foreach($documents as $d) {
                                                    if($primero==0) {
                                                        echo "<option value='".$d['id_Document']."' selected>".$d['Name']."</option>";
                                                        $primero = 1;
                                                    }
                                                    else
                                                    {
                                                    echo "<option value='".$d['id_Document']."'>".$d['Name']."</option>";
                                                    }
                                                } 
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <input type="hidden" value="<?php echo $doctor[0]['id_Doctor']; ?>" name="idDoctor">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <label>Load Yor Document gif | jpg | png | jpeg | pdf</label>
                                            <input class="form-control" name="mydocument" type="file" required /> 
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Important Notes of the Document</label>
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="notes" col="30" rows="3"></textarea> 
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <input class="form-control btn btn-primary" name="loadoc" value="UPLOAD DOCUMENT" type="submit" required />
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
                                        <th>Document</th>
                                        <th>Type Document</th>
                                        <th>Notes</th>
                                        <th>Approve</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($credentials as $c) {
                                        $extension_type = explode('.',$c['Document']);
                                        $urlimg = base_url().'upload/drs/Doc-'.$c['id_Credentials'].'-'.$c['Document'];

                                        $urlpdf = base_url().'upload/drs/logopdf.png';
                                        //print_r($urlimg);
                                    ?>
                                        <tr class="odd gradeX">
                                            <td style="height: 80px; width: 80px;">
                                            <?php 
                                            if($extension_type[1]<>"pdf") { ?>
                                            <a href="<?php echo $urlimg;?>" target="_blank"><img height="80px" width="80" src="<?php echo $urlimg;?>"/></a>
                                            <?php }
                                            else
                                            { ?>
                                            <a href="<?php echo $urlimg;?>" target="_blank"><img height="80px" width="80" src="<?php echo $urlpdf;?>"</a>
                                            </td>
                                            <?php } ?>
                                            <td><?php echo $c['requirement']; ?></td>
                                            <td><?php echo $c['Note']; ?></td>
                                            <td class="center"><?php echo $urlpdf; ?></td>
                                            <td class="center"><a href="<?php echo base_url().'credentials/remove/'.$c['id_Credentials'];  ?>">Delete</a></td> 
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
    </div>
<?php //echo form_close(); ?>