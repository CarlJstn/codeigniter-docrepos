<h2><?= $title ?></h2>
       <div class="row">
                <!-- /.col-lg-8 -->
                <?php if($this->session->userdata('logged_in')): ?>
                    <div class="col-lg-8">
                <?php endif; ?>
                <?php if(!$this->session->userdata('logged_in')): ?>
                    <div class="col-lg-12">
                <?php endif; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Chart
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <?php if($this->session->userdata('logged_in')): ?>
                                    <div class="col-sm-10 col-sm-offset-1">
                                <?php endif; ?>
                                <?php if(!$this->session->userdata('logged_in')): ?>
                                    <div class="col-sm-5 col-sm-offset-1">
                                <?php endif; ?> 
                                    <canvas id="doughnut-chart-research" width="800" height="450"></canvas>
                                </div>

                                <?php if($this->session->userdata('logged_in')): ?>
                                    <div class="col-sm-10 col-sm-offset-1">
                                    <hr>
                                <?php endif; ?>
                                <?php if(!$this->session->userdata('logged_in')): ?>
                                    <div class="col-sm-5 col-sm-offset-1">
                                <?php endif; ?> 
                                    <canvas id="doughnut-chart-journals" width="800" height="450"></canvas>
                                </div>

                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>

                <?php if($this->session->userdata('logged_in')): ?>
                    <div class="col-lg-4" id="notif">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i> Recent Activities
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="list-group">
                                    <?php foreach($activities as $activity): ?>
                                    <a class="list-group-item">
                                        <i class="fa fa-<?php echo $activity['type']; ?> fa-fw"></i><?php echo $activity['title']; ?>
                                        <span class="pull-right text-muted small"><em><?php echo date("l, M-d-Y h:i A", strtotime($activity['date'])); ?></em>
                                        </span>
                                    </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
        </div>
