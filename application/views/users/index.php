<h2><?= $title ?></h2>

<?php if($this->session->flashdata('user_created')): ?>
    <?php echo'<br><p class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('user_created').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('user_blocked')): ?>
    <?php echo'<br><p class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('user_blocked').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('user_unblocked')): ?>
    <?php echo'<br><p class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('user_unblocked').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('user_updated')): ?>
    <?php echo'<br><p class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('user_updated').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('user_image_invalid')): ?>
    <?php echo'<br><p class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('user_image_invalid').'</p>'; ?>
<?php endif; ?>

<hr>

    <div class="row">
        <div class="col">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive" style="overflow-x:auto;" >
                        <table class="table user-list">
                            <thead>
                                <tr>
                                <th><span>User</span></th>
                                <th class="text-center"><span>Username</span></th>
                                <th class="text-center"><span>Status</span></th>
                                <th class="text-center"><span>Contact</span></th>
                                <th class="text-center"><span>Email</span></th>
                                <th class="text-center"><span>Created</span></th>
                                <th class="text-center">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php foreach($users as $user): ?>
	                                <tr>
	                                    <td style="width: 20%;">
	                                        <img class="img-responsive img-circle" src="<?php echo base_url(); ?>/assets/images/users_image/<?php echo $user['image']; ?>" alt="Not available"
	                                        style="object-fit: cover; height: 50px; width: 50px;">
	                                        <label style="font-size: 15px; color: #129DE3;"><?php echo $user['name']; ?></label><br>
	                                        <span class="user-subhead" style="font-size: 14px;"><?php echo $user['type']; ?></span>
	                                    </td>
	                                    <td class="text-center"><?php echo $user['username']; ?></td>
	                                    <td class="text-center">
	                                    	<?php if ($user['status'] == "active") { ?>
											    <span class="label label-success"><?php echo $user['status']; ?></span>
											<?php } else { ?>
											    <span class="label label-danger"><?php echo $user['status']; ?></span>
											<?php } ?>
	                                    </td>
	                                    <td class="text-center"><?php echo $user['contact']; ?></td>
	                                    <td class="text-center">
	                                    	<a href="mailto:<?php echo $user['email']; ?>?subject=BulSU Plagiarism Checker" target="_blank"><?php echo $user['email']; ?></a>
	                                    </td>
	                                    <td class="text-center"><?php echo $user['created_at']; ?></td>
	                                    <td class="text-center" style="width: 20%;">
	                                        <a href="#" data-toggle="modal" data-target="#update<?php echo $user['id']; ?>" class="table-link">
	                                            <span class="fa-stack">
	                                                <i class="fa fa-square fa-stack-2x"></i>
	                                                <i class="fa fa-pencil-alt fa-stack-1x fa-inverse"></i>
	                                            </span>
	                                        </a>
	                                        <?php if ($user['status'] == "active") { ?>
	                                        	<a href="#" data-toggle="modal" data-target="#block<?php echo $user['id']; ?>" class="table-link custom">
	                                        <?php } else { ?>
	                                        	<a href="#" data-toggle="modal" data-target="#unblock<?php echo $user['id']; ?>" class="table-link custom">
	                                        <?php } ?>
	                                            <span class="fa-stack">
	                                                <i class="fa fa-square fa-stack-2x"></i>
	                                                <?php if ($user['status'] == "active") { ?>
	                                                	<i class="fa fa-lock fa-stack-1x fa-inverse"></i>
	                                                <?php } else { ?>
	                                                	<i class="fa fa-lock-open fa-stack-1x fa-inverse"></i>
	                                                <?php } ?>
	                                            </span>
	                                        </a>
	                                    </td>
	                                </tr>

									<?php echo form_open_multipart('users/block'); ?>
								        <!-- Modal college unblock -->
								        <div class="modal fade" id="block<?php echo $user['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
								                <div class="modal-content">
								                    <div class="modal-header">
								                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								                            <span aria-hidden="true">&times;</span>
								                        </button>
								                        <h5 class="modal-title" id="exampleModalLongTitle"><h4><i class="fa fa-user-lock"></i>&nbsp;&nbsp;Block User</h4></h5>
								                    </div>
								                    <div class="modal-body">
								                        <h5>Block <b><?php echo $user['name']; ?></b> ?</h5>
								                    </div>
								                    <div class="modal-footer">
								                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								                        <button type="submit" class="btn btn-primary">Yes</button>
								                    </div>
								                </div>
								                <input style="visibility: hidden;" class="form-control" type="text" name="userId" value="<?php echo $user['id']; ?>">
								            </div>
								        </div>
								    <?php echo form_close(); ?>

								    <?php echo form_open_multipart('users/unblock'); ?>
								        <!-- Modal college unblock -->
								        <div class="modal fade" id="unblock<?php echo $user['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
								                <div class="modal-content">
								                    <div class="modal-header">
								                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								                            <span aria-hidden="true">&times;</span>
								                        </button>
								                        <h5 class="modal-title" id="exampleModalLongTitle"><h4><i class="fa fa-user-lock"></i>&nbsp;&nbsp;Unblock User</h4></h5>
								                    </div>
								                    <div class="modal-body">
								                        <h5>Unblock <b><?php echo $user['name']; ?></b> ?</h5>
								                    </div>
								                    <div class="modal-footer">
								                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								                        <button type="submit" class="btn btn-primary">Yes</button>
								                    </div>
								                </div>
								                <input style="visibility: hidden;" class="form-control" type="text" name="userId" value="<?php echo $user['id']; ?>">
								            </div>
								        </div>
								    <?php echo form_close(); ?>


	                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php if($this->session->userdata('type') == "ADMIN" && $this->session->userdata('logged_in')): ?>
    <div id="mybutton">
        <button data-toggle="modal" data-target="#myModal" class="btn btn-light open-sidebar" type="button" style="height:50px; width: 50px; background-color:#dcdcdc;color:gray;padding-top:6px; padding-right:13px;padding-left:13px; margin-bottom: 0px; border-radius: 100%;"><i class="fa fa-plus"></i></button>
    </div>
<?php endif; ?>

<?php echo form_open_multipart('users/create'); ?>   
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"> <i class="fa fa-user-plus"></i>&nbsp;&nbsp;Add User</h4>
              </div>
              <div class="modal-body">
              		<div class="form-group">
		               <label>User Type</label>
		               <div style="text-align: center;">
		                  <input type="radio" name="usertype" value="ADMIN" style="width: 30%;" required>
		                  <input type="radio" name="usertype" value="LIBRARIAN" style="width: 30%;" required>
		                </div>
		                <div style="text-align: center;">
		                    <label style="width: 30%;">Admin</label>
		                    <label style="width: 30%;">Librarian</label>
		                </div>
		            </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="fullname" placeholder="Fullname" required>
                    </div>
                    <div id="usernamediv" class="form-group">
                        <label id="usernamelabel">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" id="checkusername" pattern=".{6,}" title="Must contain at least six or more characters" required>
                    </div>
					<div class="form-group">
                        <label>Password</label>
                        <input type="Password" class="form-control" name="password" placeholder="Password" pattern="(?=.*\d).{8,}" title="Must contain at least six or more characters and at least one number" required>
                    </div>
                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="number" class="form-control" name="contact" placeholder="Contact no." required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="Email" class="form-control" name="email" placeholder="sample@gmail.com">
                    </div>
                    <hr>
					<div class="form-group">
						<label>Image</label>
						<input type="file" class="form-control-file"  name="userfile">
					</div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="saveBtn">Save</button>
              </div>
            </div>
      </div>
    </div>
<?php echo form_close(); ?>

<?php foreach($users as $user): ?>
	<?php echo form_open_multipart('users/update'); ?>   
	    <div class="modal fade" id="update<?php echo $user['id']; ?>" role="dialog">
	      <div class="modal-dialog">
	            <!-- Modal content-->
	            <div class="modal-content">
	              <div class="modal-header">
	                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                  <span aria-hidden="true">&times;</span>
	                </button>
	                <h4 class="modal-title"> <i class="fa fa-user-edit"></i>&nbsp;&nbsp;Update User Details</h4>
	              </div>
	              <div class="modal-body">
	              		<div class="form-group">
			               <label>User Type</label>
			               <div style="text-align: center;">

			                  <input type="radio" name="usertype" value="ADMIN" style="width: 30%;" <?php if($user['type'] == "ADMIN"): ?> checked <?php endif; ?> required>
			                  <input type="radio" name="usertype" value="LIBRARIAN" style="width: 30%;" <?php if($user['type'] == "LIBRARIAN"): ?> checked <?php endif; ?> required>
			                </div>
			                <div style="text-align: center;">
			                    <label style="width: 30%;">Admin</label>
			                    <label style="width: 30%;">Librarian</label>
			                </div>
			            </div>
	                    <div class="form-group">
	                        <label>Name</label>
	                        <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="<?php echo $user['name']; ?>" required>
	                    </div>
	                    <div class="form-group">
	                        <label>Contact Number</label>
	                        <input type="number" class="form-control" name="contact" placeholder="Contact no." value="<?php echo $user['contact']; ?>"" required>
	                    </div>
	                    <div class="form-group">
	                        <label>Email</label>
	                        <input type="Email" class="form-control" name="email" placeholder="sample@gmail.com" value="<?php echo $user['email']; ?>">
	                    </div>
	                    <div class="form-group">
	                        <label>Image</label>
		                    <input type="file" class="form-control-file"  name="userfile">
	                    </div>
	              </div>
	              <div class="modal-footer">
	                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                <button type="submit" class="btn btn-primary">Save</button>
	              </div>
	            </div>
	      </div>
	      <input style="visibility: hidden;" class="form-control" type="text" name="userId" value="<?php echo $user['id']; ?>">
	      <input style="visibility: hidden;" class="form-control" type="text" name="oldImage" value="<?php echo $user['image']; ?>">
	    </div>
	<?php echo form_close(); ?>
<?php endforeach; ?>
