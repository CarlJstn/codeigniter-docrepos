<?php if($this->session->userdata('logged_in')): ?>
    <div class="col-lg-14" id="notif">
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