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


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script>
		/*------------------------------------------------------------------------------*/
		/*Get Row Data in table*/
		function clickMe(id,code,name,username) 
		{
            document.getElementById('id').value = id;
			document.getElementById('code').value = code;
			document.getElementById('name').value = name;
			document.getElementById('username').value = username;
		}
    </script>
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
        <form id="signupForm" method="post">
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
            <div class="animated">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Tables</strong>
                    </div>
                    <div class="card-body">
                        
                        <span id="q"></span>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        </form>
        <form id="signupForm1" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span id="success"></span>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <input type="hidden" id="id" class="is-valid form-control-success form-control" name="id" required>   
                            <div class="has-success form-group">
                                <label for="code" class=" form-control-label">Code</label>
                                <input type="text" id="code" class="is-valid form-control-success form-control" name="code" required>
                            </div>
                            <div class="has-success form-group">
                                <label for="name" class=" form-control-label">Name</label>
                                <input type="text" id="name" class="is-valid form-control-success form-control" name="name" required>
                            </div>
                            <div class="has-success form-group">
                                <label for="username" class=" form-control-label">Username</label>
                                <input type="text" id="username" class="is-valid form-control-success form-control" name="username" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="update" id="update" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
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
    
    setInterval('autoRefreshPage()', 1000);
	$(document).ready(function() 
    {
        repeatAjax();
        function repeatAjax()
        {
            $.ajax(
            {
                url: '<?php echo base_url(); ?>ajax/get_items',
                type: 'get',
                success: function(data)
                {
                    if(data=="NoChangesInDatabase")
                    {
                        //
                    }
                    else
                    {
                        document.getElementById("q").innerHTML = data;
                        $('#bootstrap-data-table').DataTable();
                    }
                },
                complete: function() 
                {
                    //every 10 seconds
                    setTimeout(repeatAjax,10000);
                }
            });
        }
        $("#update").click(function(event)
        {
            event.preventDefault();
            $.ajax({
                url:"<?php echo base_url(); ?>ajax/update",
                type:'POST',
                data: {
                    id: $("#id").val(),
                    code: $("#code").val(),
                    name: $("#name").val(),
                    username: $("#username").val()
                },
                success:function(data)
                {
                    document.getElementById("success").innerHTML = data;
                    repeatAjax();
                }
            });
        });
    });
    </script>
</body>
</html>
