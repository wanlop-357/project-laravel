<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <?php echo view('inc-css');?>
	<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
            <div class="navbar-box">
                <?php echo view('head');?>
            </div>
            <div class="manuLeft-box">
                <?php echo view('manu');?>
            </div>

            <div class="content-wrapper">
            <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="app">
                            <?php echo view('data');?>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            
            <div class="footer-box">
                <?php echo view('footer');?>
            </div>
        </div>
		
        <?php echo view('model');?>
        <?php echo view('inc-js');?>
        
        <script type="text/javascript">
            qut.getdata();
        </script>
	</body>
</html>
