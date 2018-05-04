<?php $this->load->view('admin/template/head'); ?>
    
<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/scss/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/lib/datatable/dataTables.bootstrap.min.css">
    <!--Start: Animate the Input-Validation-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets2/css/plugins/animate.min.css"/>
    
	<!--End: Animate the Input-Validation-->
    <!--Start: Ajax Code-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

    <!-- Left Panel -->
    <?php $this->load->view('admin/template/left'); ?>
    <!-- Left Panel -->
   
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php $this->load->view('admin/template/header'); ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Advanced</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Search</strong>
                        </div>
                        
                        <div class="card-body">
                        <span id="notif"></span>
                            <form id="signupForm" method="post">
                                <div class="col-md-6">
                                    <div class="has-success form-group">
                                        <label for="code" class=" form-control-label">Code</label>
                                        <input type="text" id="code" class="is-valid form-control-success form-control" name="code" required>
                                    </div>
                                    <div class="has-success form-group">
                                        <label for="name" class=" form-control-label">Name</label>
                                        <input type="text" id="name" class="is-valid form-control-success form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="has-success form-group">
                                        <label for="username" class=" form-control-label">Name</label>
                                        <input type="text" id="username" class="is-valid form-control-success form-control" name="username" required>
                                    </div>
                                    <div class="has-success form-group">
                                        <label for="password" class=" form-control-label">Password</label>
                                        <input type="text" id="password" class="is-invalid form-control-success form-control" name="password" required>
                                    </div>
                                    <div class="has-success form-group">
                                        <label for="confirm_password" class=" form-control-label">Confirm Password</label>
                                        <input type="text" id="confirm_password" class="is-invalid form-control-success form-control" name="confirm_password" required>
                                    </div>
                                    <div align="right">
                                        <input type="submit" class="btn btn-info" value="Save">
                                    </div>
                                </div>
                            </form> 
                                
                               
                            <div id="container">
                            </div>
                        </div>    
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
    <script src="<?php echo base_url(); ?>assets2/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/main.js"></script>

    <!-- Start : to work ajax Code -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- End : to work ajax Code -->

    <script src="<?php echo base_url(); ?>assets2/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/lib/data-table/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/lib/data-table/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/lib/data-table/datatables-init.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
        $("#signupForm").submit(function(event)
        {
            event.preventDefault();
            $.ajax({
                url:'<?php echo base_url(); ?>ajax/adddata',
                type:'POST',
                data: {
                    code: $("#code").val(),
                    name: $("#name").val(),
                    username: $("#username").val(),
                    password: $("#password").val(),
                    confirm_password: $("#confirm_password").val(),
                },
                success:function(data)
                {
                    document.getElementById("notif").innerHTML = data
                    if(data=="<div align='center' class='alert alert-info'>New Data Added to the Record.</div>")
                    {
                        $('#bootstrap-data-table').DataTable();
                    }
                }
            });
        });
	});
    </script>
</body>
</html>
