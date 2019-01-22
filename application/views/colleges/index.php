<h2><?= $title ?></h2>

<?php if($this->session->userdata('type') == "ADMIN" && $this->session->userdata('logged_in')): ?>
    <a style="color: red;" href="colleges/blocked">Blocked Colleges</a>
<?php endif; ?>

<?php if($this->session->flashdata('college_updated')): ?>
    <?php echo'<br><p class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('college_updated').'</p>'; ?>
<?php endif; ?>

<?php echo form_open_multipart('Colleges/create'); ?>          
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"> <i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;Add College</h4>
              </div>
              <div class="modal-body">
                    <div id="namediv" class="form-group">
                        <label id="namelabel">College Name</label>
                        <input type="text" class="form-control" name="name" id="checkname" placeholder="College of Nursing" required>
                    </div>
                    <div id="colinitdiv" class="form-group">
                        <label id="colinitlabel">College Initials</label>
                        <input type="text" class="form-control" name="initials" id="checkcolinit" placeholder="CON" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label >College Logo</label>
                        <img  style="height: 140px; width: 140px; margin-left: 36%; border: 2px solid gray; padding: 3px;" id="blah" class="img-circle img-responsive" src="<?php echo base_url(); ?>/assets/images/college_logos/noimage.png" alt="No Image" />
                        <br>
                        <div class="inputWrapper" style="margin-left: 39%;">
                            Change Image
                            <input class="fileInput" name="userfile" type='file' id="imgInp"/>
                        </div>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="saveBtn">Save</button>
              </div>
            </div>
      </div>
    </div>
    <input style="visibility: hidden;" class="form-control" type="text" name="username" value="<?php echo $this->session->userdata('username'); ?>">
<?php echo form_close(); ?>

<?php if($this->session->userdata('logged_in')): ?>
    <div id="mybutton">
        <button data-toggle="modal" data-target="#myModal" class="btn btn-light open-sidebar" type="button" style="height:50px; width: 50px; background-color:#dcdcdc;color:gray;padding-top:6px; padding-right:13px;padding-left:13px; margin-bottom: 0px; border-radius: 100%;"><i class="fa fa-plus"></i></button>
    </div>
<?php endif; ?>

            <div class="row">
                <div class="col-lg-12">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;" class="col-lg-1">Logo</th>
                                        <th class="col-lg-6">College Name</th>
                                        <th style="text-align: center;" class="col-lg-1">Number of Courses</th>
                                        <th style="text-align: center;" class="col-lg-1">Number of Researches</th>
                                        <th style="text-align: center;" class="col-lg-1">Number of Journals</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($colleges as $college): ?>
                                        <?php if($college['status'] == "ACTIVE"): ?>
                                            <tr class="odd gradeX college" id="activeColleges<?php echo $college['college_id']; ?>" style="cursor: pointer;">
                                                <td><img src="<?php echo base_url(); ?>/assets/images/college_logos/<?php echo $college['image']; ?>" style="width: 30px;" class="img-responsive center-block"></td>
                                                <td><?php echo $college['college_name']; ?></td>
                                                <td style="text-align: center;"><?php echo $college['course_total']; ?></td>
                                                <td class="center" style="text-align: center;"><?php echo $college['research_total']; ?></td>
                                                <td class="center" style="text-align: center;"><?php echo $college['journal_total']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
