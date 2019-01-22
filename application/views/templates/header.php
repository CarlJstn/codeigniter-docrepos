<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bulsu</title>

    <!-- Angular JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">

    <!-- Custom CSS 2 -->
    <link href="<?php echo base_url(); ?>assets/css/style2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>/vendor/morrisjs/morris.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url(); ?>/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom Fonts -->

    <link href="<?php echo base_url(); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Footer-with-button-logo.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Pretty-User-List.css">

    <style>
        .m-progress-bar {
            min-height: 1em;
            background: #12C8AC;
            width: 5%;
        }

        input[type=radio] {
        border: 0px;
        height: 1.3em;
        }
        #formdiv {
          text-align: center;
        }
        #file {
          color: green;
          padding: 5px;
          border: 1px dashed #123456;
          background-color: #f9ffe5;
        }
        #img {
          width: 17px;
          border: none;
          height: 17px;
          margin-left: -20px;
          margin-bottom: 191px;
        }
        .upload {
          width: 100%;
          height: 30px;
        }
        .previewBox {
          text-align: center;
          position: relative;
          width: 150px;
          height: 150px;
          margin-right: 10px;
          margin-bottom: 20px;
          float: left;
        }
        .previewBox img {
          height: 150px;
          width: 150px;
          padding: 5px;
          border: 1px solid rgb(232, 222, 189);
        }
        .delete {
          color: red;
          font-weight: bold;
          position: absolute;
          top: 0;
          cursor: pointer;
          width: 20px;
          height:  20px;
          border-radius: 50%;
          background: #ccc;
        }

        .topRightImageDel {
            position: absolute;
            top: -17px;
            right: 1%;
            font-size: 18px;
        }
    </style>

    <!-- Add research | add images -->
    <script>
    function preview_images() 
    {
        $('#image_preview').empty();
     var total_file=document.getElementById("images").files.length;
     for(var i=0;i<total_file;i++)
     {
      $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
     }
    }
    </script>
    <!-- Add research | add images -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">BulSU</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown" style="cursor: pointer;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                            <?php echo $this->session->userdata('username'); ?>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <?php if(!$this->session->userdata('logged_in')): ?>
                            <li><a href="<?php echo base_url(); ?>users/login"><i class="fa fa-sign-in-alt fa-fw"></i> Sign In</a>
                            </li>
                        <?php endif; ?>

                        <!-- <li class="divider"></li> -->
                        <?php if($this->session->userdata('logged_in')): ?>
                            <?php if($this->session->userdata('type') == "ADMIN"): ?>
                            <li><a href="<?php echo base_url(); ?>users"><i class="fa fa-users fa-fw"></i> All Users</a>
                            </li>
                            <li class="divider"></li>
                            <?php endif; ?>
                            <li><a href="<?php echo base_url(); ?>users/logout"><i class="fa fa-sign-out-alt fa-fw"></i> Logout</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                         <li>
                            <a href="<?php echo base_url(); ?>"><i class="fa fa-tachometer-alt fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>colleges"><i class="fa fa-graduation-cap fa-fw"></i> Colleges</a>
                        </li>

                        <!-- <?php if($this->session->userdata('type') == "ADMIN" && $this->session->userdata('logged_in')): ?>
                            <li>
                                <a href="<?php echo base_url(); ?>colleges/blocked"><i class="fa fa-ban fa-fw"></i> Blocked Colleges</a>
                            </li>
                        <?php endif; ?> -->

                        <li>
                            <a href="<?php echo base_url(); ?>researches"><i class="fa fa-book fa-fw"></i> Researches</a>
                        </li>
                        <?php if($this->session->userdata('logged_in')): ?>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Plagiarism Checker<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>check/local">Local Check</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>check/online">Online Check</a>
                                </li>
                                <li>
                                    <a href="sideCheck.html">Side by Side</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    <?php endif; ?>
                        <!-- <li>
                            <a href="index.html"><i class="fa fa-check-square-o fa-fw"></i> Image to Text</a>
                        </li> -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
               <br>
               <br>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-graduation-cap fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $colcount; ?></div>
                                    <div>Colleges</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <a href="<?php echo base_url(); ?>colleges">
                                <span class="pull-left" style="color: #18639E;">View Details</span>
                                <span class="pull-right" style="color: #18639E;"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $rescount; ?></div>
                                    <div>Research</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <a href="<?php echo base_url(); ?>researches">
                                <span class="pull-left" style="color: #E3AC0E;">View Details</span>
                                <span class="pull-right" style="color: #E3AC0E;"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
               
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-eye fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right" id="totalPageViews">
                                    <div class="huge"><?php echo $visits; ?></div>
                                    <div>Visitors</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <a href="<?php echo base_url(); ?>visits">
                                <span class="pull-left" style="color: #0AA629;">View Details</span>
                                <span class="pull-right" style="color: #0AA629;"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
                  
<!-- ALERTS SESSIONS - START-->
<?php if($this->session->flashdata('login_success')): ?>
    <?php echo'<br><p class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('login_success').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('user_loggedout')): ?>
    <?php echo'<p class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('user_loggedout').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('need_login')): ?>
    <?php echo'<p class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('need_login').'</p>'; ?>
<?php endif; ?>
<!-- ALERTS SESSIONS - END-->