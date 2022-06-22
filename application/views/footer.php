 </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url().'assets/plugins/jquery-3.6.0.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jQuery-Multiselect/dist/js/bootstrap-multiselect.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/metisMenu/jquery.metisMenu.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/pace/pace.js';?>"></script>
    <script src="<?php // echo base_url().'assets/scripts/siminta.js';?>"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo base_url().'assets/plugins/dataTables/jquery.dataTables.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/dataTables/dataTables.bootstrap.js';?>"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
            $('#speciality').multiselect({
                columns: 1,
                placeholder: 'Select Languages',
                search: true,
                searchText   :true,  
                showCheckbox :true,
                selectAll: true,
                buttonWidth: '1000px',
                numberDisplayed: 5,

  

  // custom templates
  
  
}); 
        });
    </script>

</body>

</html>