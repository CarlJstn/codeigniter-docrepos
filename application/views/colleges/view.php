<?php if($this->session->flashdata('college_updated')): ?>
    <?php echo'<br><p class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('college_updated').'</p>'; ?>
<?php endif; ?>

<h6 style="color:rgb(0,0,0);font-size:25px;"><strong><?php echo $college['college_name']; ?>

<?php if($this->session->userdata('logged_in')): ?>
     <a data-toggle="modal" data-target="#editCourseModal" style="cursor: pointer;">
        <?php if($this->session->userdata('logged_in')): ?>
            <?php if($this->session->userdata('type') == "ADMIN" || $this->session->userdata('username') == $college['username']): ?>
                <i style="float: right;" class="fa fa-edit" style="font-size:20px;"></i>
            <?php endif; ?>
        <?php endif; ?>
    </a>
<?php endif; ?>

</strong> 
</h6>

<label hidden id="colnameforupdate"><?php echo $college['college_name']; ?></label>

<?php echo form_open_multipart('Colleges/update'); ?>
<!-- Modal -->
<div class="modal fade" id="editCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLongTitle"><h4><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit College</h4></h5>
            </div>
            <div class="modal-body">

                    <!-- <div class="form-group">
                        <label>College Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $college['college_name']; ?>" required>
                    </div> -->
                    <div id="namediv2" class="form-group">
                        <label id="namelabel2">College Name</label>
                        <input type="text" class="form-control" name="name" id="checkname2" placeholder="College Name" value="<?php echo $college['college_name']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label>College Initials</label>
                        <input type="text" class="form-control" name="initials" value="<?php echo $college['college_initials']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="selectLib">College Librarian</label>
                        <select class="form-control" id="selectLib" name='librarian' required>
                        <?php foreach($users as $user): ?>
                            <?php if($user['type'] == "LIBRARIAN" && $user['status'] == "active"): ?>
                                <option
                                    <?php if($user['username'] == $college['username']): ?>
                                        selected
                                    <?php endif ?>
                                ><?php echo $user['name']; ?> [<?php echo $user['username']; ?>]</option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </select>
                    </div>
                   
                    <hr>
                    <div class="form-group">
                        <label>College Logo</label>
                        <img  style="height: 140px; width: 140px; margin-left: 36%; border: 2px solid gray; padding: 3px;" id="blah" class="img-circle img-responsive" src="<?php echo base_url(); ?>/assets/images/college_logos/<?php echo $college['image']; ?>" alt="No Image" />
                        <br>
                        <div class="inputWrapper" style="margin-left: 39%;">
                            Change Image
                            <input class="fileInput" name="userfile" type='file' id="imgInp" />
                        </div>
                    </div>

                    <?php if($this->session->userdata('type') == "ADMIN"): ?>
                    <hr>
                    <div class="form-group">
                        <label>Block College</label>
                        <br>&nbsp;&nbsp;
                        <label class="switch">
                          <input type="checkbox" name="block"
                            <?php if ($college['status'] == 'BLOCKED'): ?>
                                checked
                            <?php endif; ?>
                          >
                          <span class="slider round"></span>
                        </label>
                    </div>
                    <?php endif; ?>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="saveBtn">Save</button>
            </div>
        </div>
    </div>

    <input style="visibility: hidden;" class="form-control" type="text" name="collegeNumber" value="<?php echo $college['college_id']; ?>">
    <input style="visibility: hidden;" class="form-control" type="text" name="oldImage" value="<?php echo $college['image']; ?>">
</div>
<?php echo form_close(); ?>

<hr>
    <div class="card">
        <div class="card-body">
            <div class="media">
                <div class="row" style="padding-top: 25px; ">

                        <div class="col-sm-3"><img class="rounded-circle mr-3" src="<?php echo base_url(); ?>assets/images/college_logos/<?php echo $college['image']; ?>" style="height:150px;width:150px;">
                        </div>

                        <div class="col-sm-6" style="padding-top: 10px;">
                            <div class="media-body">
                                <ul class="list-unstyled fa-ul">

                                    <li><i style="font-size:14.5px; color: #373737;" class="fa fa-user fa-li"></i><label style="font-size:14.5px; color: #373737;">Librarian: <?php echo $college['college_librarian']; ?>&nbsp;</label></li>

                                    <li><i style="font-size:14.5px; color: #373737;" class="fa fa-graduation-cap fa-li"></i><label style="font-size:14.5px; color: #373737;">Total Courses: <?php echo $college['course_total']; ?></label></li>

                                    <li><i style="font-size:14.5px; color: #373737;" class="fa fa-book fa-li"></i><label style="font-size:14.5px; color: #373737;">Total Researches: <?php echo $college['research_total']; ?></label></li>

                                    <li><i style="font-size:14.5px; color: #373737;" class="fa fa-newspaper-o fa-li"></i><label style="font-size:14.5px; color: #373737;">Total Journals: <?php echo $college['journal_total']; ?></label></li>

                                    <!-- <li><i style="font-size:14.5px; color: #373737;" class="fa fa-check-circle fa-li"></i><label style="font-size:14.5px; color: #373737;">Status: <?php echo $college['status']; ?></label></li> -->

                                    <li><i style="font-size:14.5px; color: #373737;" class="fa fa-rotate-left fa-li"></i><label style="font-size:14.5px; color: #373737;">Last Update: <?php echo date("l, M-d-Y h:i A", strtotime($college['last_update'])); ?></label></li>

                                </ul>
                            </div>
                        </div>

                    </div>
                   <!--  &nbsp;&nbsp; <a href="#" class="btn btn-info" role="button">View Documents</a> -->
                </div>
                <div>
                    <hr>
                </div>

                  <?php echo form_open_multipart('courses/create'); ?>
                    <!-- Modal -->
                    <div class="modal fade" id="createCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <h5 class="modal-title" id="exampleModalLongTitle"><h4><i class="fa fa-bookmark"></i>&nbsp;&nbsp;Add Course</h4></h5>
                          </div>
                          <div class="modal-body">
                            <label>Course Name</label>
                            <input type="text" id="courseNameField" class="form-control" name="name" placeholder="Bachelor in Science of Information and Communications Technology" required><br>
                            <label>Course Initials</label>
                            <input type="text" class="form-control" name="initials" placeholder="BSIT" required>
                           
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                         <input style="visibility: hidden;" class="form-control" type="text" name="collegeNumber" value="<?php echo $college['college_id']; ?>">
                      </div>
                    </div>
                    <?php echo form_close(); ?>

                    
                        <h6 style="color:rgb(0,0,0);font-size:25px;">Courses
                            <a class="float-right" data-toggle="modal" data-target="#createCourseModal" style="cursor: pointer;">
                                <?php if($this->session->userdata('logged_in')): ?>
                                    <?php if($this->session->userdata('type') == "ADMIN" || $this->session->userdata('username') == $college['username']): ?>
                                        <i style="float: right;" class="fa fa-plus" style="font-size:30px;">
                                        </i>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </a>
                        </h6>
                        
                        <hr>

                    <?php if($this->session->flashdata('course_created')): ?>
                        <?php echo'<br><p class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('course_created').'</p>'; ?>
                    <?php endif; ?>

                    <?php if($this->session->flashdata('course_deleted')): ?>
                        <?php echo'<br><p class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('course_deleted').'</p>'; ?>
                    <?php endif; ?>

                    <?php if($this->session->flashdata('course_updated')): ?>
                        <?php echo'<br><p class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('course_updated').'</p>'; ?>
                    <?php endif; ?>

                        <?php if($courses) : ?>
                            <?php foreach($courses as $course) : ?>

                                <?php echo form_open_multipart('courses/delete'); ?>
                                    <!-- Delete course modal -->
                                    <div class="modal fade" id="del<?php echo $course['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h5 class="modal-title" id="exampleModalLongTitle"><h4><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete Course</h4></h5>
                                          </div>
                                          <div class="modal-body">
                                            
                                            <h5>Delete <b><?php echo $course['course_name']; ?></b> ?</h5>

                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Yes</button>
                                          </div>
                                        </div>
                                      </div>
                                      <input style="visibility: hidden;" class="form-control" type="text" name="collegeNumber" value="<?php echo $college['college_id']; ?>">
                                            <input style="visibility: hidden;" class="form-control" type="text" name="courseId" value="<?php echo $course['id']; ?>">
                                    </div>
                                <?php echo form_close(); ?>

                                <?php echo form_open_multipart('courses/update'); ?>
                                    <!-- Delete course modal -->
                                    <div class="modal fade" id="edit<?php echo $course['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h5 class="modal-title" id="exampleModalLongTitle"><h4><i class="fa fa-pencil-alt"></i>&nbsp;&nbsp;Update Course</h4></h5>
                                          </div>
                                          <div class="modal-body">
                                            <div class="form-group">
                                                <label>Course Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Course Name" value="<?php echo $course['course_name']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Course Initials</label>
                                                <input type="text" name="initials" class="form-control" placeholder="Course Initials" value="<?php echo $course['course_initials']; ?>" required>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                          </div>
                                        </div>
                                      </div>
                                      <input style="visibility: hidden;" class="form-control" type="text" name="collegeNumber" value="<?php echo $college['college_id']; ?>">
                                      <input style="visibility: hidden;" class="form-control" type="text" name="courseId" value="<?php echo $course['id']; ?>">
                                    </div>
                                <?php echo form_close(); ?>

                                <div class="row user-list">
                                    <div class="col user-item">
                                        <div class="user-container" style="padding-bottom:19px;">
                                            <a class="user-avatar"></a>
                                            <p class="user-name"><a><?php echo $course['course_initials']; ?></a>
                                            <span style="font-size:16px;"><?php echo $course['course_name']; ?></span></p>
                                            <?php if($this->session->userdata('logged_in')): ?>
                                                <?php if($this->session->userdata('type') == "ADMIN" || $this->session->userdata('username') == $college['username']): ?>
                                                    <a style="font-size: 14px; cursor: pointer;" data-toggle="modal" data-target="#del<?php echo $course['id']; ?>" class="user-delete"> <i class="fa fa-trash-alt"></i></a>
                                                    <a style="font-size: 14px; cursor: pointer;" data-toggle="modal" data-target="#edit<?php echo $course['id']; ?>" class="user-edit"> <i class="fa fa-pencil-alt"></i></a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>No Course To Display</p>
                        <?php endif; ?>
                   
                    <br>
                </div>
            </div>
