<h2><?= $title ?></h2>

<?php if($this->session->flashdata('research_created')): ?>
    <?php echo'<br><p class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('research_created').'</p>'; ?>
<?php endif; ?>

<br>

<?php echo form_open_multipart('Researches/create'); ?>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"> <i class="fa fa-book"></i>&nbsp;&nbsp;Add Research</h4>
      </div>
      <div class="modal-body">
            <div class="form-group">
               <label>Type of Research</label>
               <div style="text-align: center;">
                  <input type="radio" name="type" value="thesis" style="width: 30%;" required>
                  <input type="radio" name="type" value="undergrad" style="width: 30%;" required>
                </div>
                <div style="text-align: center;">
                    <label style="width: 30%;">Thesis</label>
                    <label style="width: 30%;">UnderGrad Research</label>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label>Research Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title" required>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                    <label for="collegeSelect">College:</label>
                      <select class="form-control" id="collegeSelect" name='college' required>
                        <option value="" selected disabled hidden>Choose College</option>
                        <?php foreach($colleges as $college): ?>
                          <?php if($college['status'] == "ACTIVE"): ?>
                            <option><?php echo $college['college_name']; ?></option>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      </select>
                    </div>

                     <div class="col-md-6">
                      <label id="co" for="courseSelect">Course:</label>
                        <select class="form-control" id="courseSelect" name='course' required>
                          <option value="" selected disabled hidden>Choose Course</option>
                          <?php foreach($courses as $course): ?>
                            <option><?php echo $course['course_name']; ?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>

            <hr>
            <div class="form-group">
                <label>Authors</label>
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
                <textarea class="form-control" rows="20" name="abstract" required></textarea>
            </div>
            <div class="form-group">
                <label>Pages</label>
                <input type="number" class="form-control" name="pages" placeholder="No. of pages" required>
            </div>
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
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </div>

  </div>
</div>
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
                                        <th class="col-lg-6">Title</th>
                                        <th class="col-lg-3">College</th>
                                        <th style="text-align: center;" class="col-lg-1">Pages</th>
                                        <th style="text-align: center;" class="col-lg-3">Date Uploaded</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($researches as $research): ?>
                                            <tr class="odd gradeX college" id="<?php echo $research['id']; ?>" style="cursor: pointer;">
                                                <td ><?php echo $research['title']; ?></td>
                                                <td ><?php echo $research['college_name']; ?></td>
                                                <td style="text-align: center;"><?php echo $research['pages']; ?></td>
                                                <td style="text-align: center;"><?php echo date("m-d-Y l, h:i A", strtotime($research['dateUpload'])); ?></td>
                                            </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <br>
            <br>
            <br>