<h3 style="color:rgb(16,16,16);"><strong><?php echo $research['title']; ?></strong>

	<?php if($this->session->userdata('logged_in')): ?>
		<?php if($this->session->userdata('type') == "LIBRARIAN"): ?>
			<?php foreach($colleges as $college): ?>
				<?php if($college['username'] == $this->session->userdata('username')): ?>
					<?php if($college['college_name'] == $research['college_name']): ?>
						<a style="float: right;" href="#" data-toggle="modal" data-target="#editResModal"><span class="fa fa-edit"></span></a>
					<?php endif; ?>
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>

		<?php if($this->session->userdata('type') == "ADMIN"): ?>
			<a style="float: right;" href="#" data-toggle="modal" data-target="#editResModal"><span class="fa fa-edit"></span></a>
		<?php endif; ?>
	<?php endif; ?>

</h3>

<?php if($this->session->flashdata('error_file_upload')): ?>
    <?php echo'<br><p class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('error_file_upload').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('success_file_upload')): ?>
    <?php echo'<br><p class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('success_file_upload').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('updated')): ?>
    <?php echo'<br><p class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('updated').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('image_deleted')): ?>
    <?php echo'<br><p class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('image_deleted').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('image_added')): ?>
    <?php echo'<br><p class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('image_added').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('no_image_added')): ?>
    <?php echo'<br><p class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('no_image_added').'</p>'; ?>
<?php endif; ?>

<hr>
<h3>Abstract</h3>
<p><?php echo $research['abstract']; ?></p>
<hr>
<h3>Authors</h3>
<?php if($authors) : ?>
	<?php foreach($authors as $author) : ?>
		<p><?php echo $author['name']; ?></p>
	<?php endforeach; ?>

<?php else : ?>
	<p>No authors to display</p>
<?php endif; ?>
<hr>
<h3>Other Details</h3>
<p><b>College:</b> <?php echo $research['college_name']; ?></p>
<p><b>Course:</b> <?php echo $research['course']; ?></p>
<p><b>Added:</b> <?php echo $research['dateUpload']; ?></p>
<p><b>No. of pages:</b> <?php echo $research['pages']; ?></p>
<hr>
<h3>Photos
	<?php if($this->session->userdata('logged_in')): ?>
		<?php if($this->session->userdata('type') == "LIBRARIAN"): ?>
			<?php foreach($colleges as $college): ?>
				<?php if($college['username'] == $this->session->userdata('username')): ?>
					<?php if($college['college_name'] == $research['college_name']): ?>
						<a style="float: right;" href="#" data-toggle="modal" data-target="#addPicModal"><span class="fa fa-plus-circle"></span></a>
					<?php endif; ?>
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>

		<?php if($this->session->userdata('type') == "ADMIN"): ?>
			<a style="float: right;" href="#" data-toggle="modal" data-target="#addPicModal"><span class="fa fa-plus-circle"></span></a>
		<?php endif; ?>
	<?php endif; ?>

	
</h3>
<div class="row">
	<?php if($images) : ?>

		<?php $ctr = 0 ; ?>
		<?php foreach($images as $image) : ?>

			<div class="col-md-3" style="width: 300px; height: 250px; margin: 10px;">
				<a style="cursor: pointer;" href="javascript:void(viewer.show(<?php echo $ctr; ?>))">
					<img src="<?php echo base_url(); ?>assets/images/docu/<?php echo $image['name']; ?>" class="img-responsive img-thumbnail" id="id<?php echo $image['id']; ?>" style="width: 300px; height: 250px;">

						<?php if($this->session->userdata('logged_in')): ?>
							<?php if($this->session->userdata('type') == "LIBRARIAN"): ?>
								<?php foreach($colleges as $college): ?>
									<?php if($college['username'] == $this->session->userdata('username')): ?>
										<?php if($college['college_name'] == $research['college_name']): ?>
											<div class="topRightImageDel">
												<a style="color: red; font-size: 25px;" href="#" data-toggle="modal" data-target="#delPic<?php echo $image['id']; ?>">
													<span class="fa fa-times-circle"></span>
												</a>
											</div>
										<?php endif; ?>
									<?php endif; ?>
								<?php endforeach; ?>
							<?php endif; ?>

							<?php if($this->session->userdata('type') == "ADMIN"): ?>
								<div class="topRightImageDel">
									<a style="color: red; font-size: 25px;" href="#" data-toggle="modal" data-target="#delPic<?php echo $image['id']; ?>">
										<span class="fa fa-times-circle"></span>
									</a>
								</div>
							<?php endif; ?>
						<?php endif; ?>
				</a>

			</div>
			<?php $ctr++; ?>

		<?php endforeach; ?>

	<?php else : ?>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;No images to display</p>
	<?php endif; ?>
</div>
<hr>
<h3>File
	<?php if($this->session->userdata('logged_in')): ?>
		<?php if($this->session->userdata('type') == "LIBRARIAN"): ?>
			<?php foreach($colleges as $college): ?>
				<?php if($college['username'] == $this->session->userdata('username')): ?>
					<?php if($college['college_name'] == $research['college_name']): ?>
						<a style="float: right;" href="#" data-toggle="modal" data-target="#uploadFileModal"><span class="fa fa-file-upload"></span></a>
					<?php endif; ?>
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>

		<?php if($this->session->userdata('type') == "ADMIN"): ?>
			<a style="float: right;" href="#" data-toggle="modal" data-target="#uploadFileModal"><span class="fa fa-file-upload"></span></a>
		<?php endif; ?>
	<?php endif; ?>
</h3>

<?php if($research['file'] == ""): ?>
	<?php if($this->session->userdata('logged_in')): ?>
		<p>No file is uploaded for this research</p>
	<?php else : ?>
		<p>No file is uploaded for this research</p>
	<?php endif; ?>
<?php else : ?>
	<?php echo $research['file']; ?>
	<button type="button" style="cursor: pointer;" class="btn btn-secondary" onclick="location.href='<?php echo base_url(); ?>assets/documents/<?php echo $research['file']; ?>';" target="_blank">Download</button>
<?php endif; ?>
<br>
<br>

<?php echo form_open_multipart('Researches/update'); ?>
	<div class="modal fade" id="editResModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title"> <i class="fa fa-book"></i>&nbsp;&nbsp;Edit Research</h4>
				</div>
			<div class="modal-body">
	            <div class="form-group">
	               <label>Type of Research</label>
	               <div style="text-align: center;">
	               	<?php if($research['type'] == "thesis"): ?>
	                  <input type="radio" name="type" value="thesis" style="width: 30%;" checked required>
	                  <input type="radio" name="type" value="undergrad" style="width: 30%;" required>
	                <?php else: ?>
	                  <input type="radio" name="type" value="thesis" style="width: 30%;" required>
	                  <input type="radio" name="type" value="undergrad" style="width: 30%;" checked required>
	                <?php endif; ?>
	                </div>
	                <div style="text-align: center;">
	                    <label style="width: 30%;">Thesis</label>
	                    <label style="width: 30%;">UnderGrad Research</label>
	                </div>
	            </div>
	            <hr>
	            <div class="form-group">
	                <label>Research Title</label>
	                <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $research['title']; ?>" required>
	            </div>

	            <div class="form-group">
	                <div class="row">
	                    <div class="col-md-6">
	                    <label for="collegeSelect">College:</label>
	                      <select class="form-control" id="collegeSelect" name='college' required>
	                        <?php foreach($colleges as $college): ?>
	                        	<?php if($research['college_name'] == $college['college_name']): ?>
	                        		<option selected><?php echo $college['college_name']; ?></option>
	                        	<?php else: ?>
	                        		<option><?php echo $college['college_name']; ?></option>
	                        	<?php endif; ?>
	                        <?php endforeach; ?>
	                      </select>
	                    </div>

	                     <div class="col-md-6">
	                      <label for="courseSelect">Course:</label>
	                        <select class="form-control" id="courseSelect" name='course' required>
	                        <?php foreach($courses as $course): ?>
	                        	<?php if($research['course'] == $course['course_name']): ?>
	                        		<option selected><?php echo $course['course_name']; ?></option>
	                        	<?php else: ?>
	                        		<option><?php echo $course['course_name']; ?></option>
	                        	<?php endif; ?>
	                        <?php endforeach; ?>
	                        </select>
	                    </div>
	                </div>
	            </div>

	            <hr>
	            <div class="form-group">
	                <label>Authors</label>
						<?php foreach($authors as $author) : ?>
	                     <input type="text" class="form-control" name="existAuthor[]" placeholder="Author" value="<?php echo $author['name']; ?>">
	                     <br>
						<?php endforeach; ?>
	                <div ng-app="myApp" ng-controller="myCtrl">
	                <ul style="list-style-type:none">
	                  <li ng-repeat="element in elements">
						<input type="text" class="form-control authorField" name="authors[]" placeholder="Author" ng-model="element.value"><br>
	                  </li>
	                </ul>
	                  <button type="button" class="btn btn-primary" style="float: right;" ng-click="newItem()">Add Author</button><br>
	               <!--  <b>Click here to see ng-model value:</b><br/>
	                <input type="button" value="submit" ng-click="show(elements)"> -->
	                </div>

	            </div>
	            <hr>
	            <div class="form-group">
	                <label>Abstract</label>
	                <textarea class="form-control" rows="20" name="abstract" required><?php echo $research['abstract']; ?></textarea>
	            </div>
	            <div class="form-group">
	                <label>Pages</label>
	                <input type="number" class="form-control" name="pages" placeholder="No. of pages" value="<?php echo $research['pages']; ?>" required>
	            </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
			</div>
		</div>
	</div>
	<input style="visibility: hidden;" class="form-control" type="text" name="researchId" value="<?php echo $research['id']; ?>">
<?php echo form_close(); ?>

<?php echo form_open_multipart('Researches/addFile'); ?>
	<div class="modal fade" id="uploadFileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title"> <i class="fa fa-file-upload"></i>&nbsp;&nbsp;
						<?php if($research['file'] == ""): ?>
							Add File
						<?php else : ?>
							Change File
						<?php endif; ?>
					</h4>
				</div>
			<div class="modal-body">
				<div class="form-group">
					<input name="userfile" type='file'/>
					<br>
					<i>Note: upload only PDF file.</i>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit"  class="btn btn-primary">Save</button>
			</div>
			</div>
		</div>
	</div>
	<input style="visibility: hidden;" class="form-control" type="text" name="researchId" value="<?php echo $research['id']; ?>">
<?php echo form_close(); ?>

<?php foreach($images as $image) : ?>
	<?php echo form_open_multipart('Researches/removeImage'); ?>
		<div class="modal fade" id="delPic<?php echo $image['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title"> <i class="fa fa-images"></i>&nbsp;&nbsp;Remove Image</h4>
					</div>
					<div class="modal-body">
						<h5>Delete Image?</h5>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit"  class="btn btn-danger">Remove</button>
					</div>
				</div>
			</div>
		</div>
		<input style="visibility: hidden;" class="form-control" type="text" name="imageId" value="<?php echo $image['id']; ?>">
	<?php echo form_close(); ?>
<?php endforeach; ?>

<?php echo form_open_multipart('Researches/addImage'); ?>
	<div class="modal fade" id="addPicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title"> <i class="fa fa-image"></i>&nbsp;&nbsp;Add Image
					</h4>
				</div>
			<div class="modal-body">
	            <div class="form-group">
	                <label>Add Image/s</label>
	                <div class="row">
	                 <form method="post" enctype="multipart/form-data">
	                  <div class="col-md-12">
	                      <input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple/>
	                  </div>
	                 </form>
	                 </div>
	                 <div class="row" id="image_preview"></div>
	            </div>
				<input style="visibility: hidden;" class="form-control" type="text" name="researchId" value="<?php echo $research['id']; ?>">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit"  class="btn btn-primary">Save</button>
			</div>
			</div>
		</div>
	</div>
<?php echo form_close(); ?>