<h2><?= $title ?></h2>

<?php if($this->session->flashdata('college_updated')): ?>
    <?php echo'<br><p class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$this->session->flashdata('college_updated').'</p>'; ?>
<?php endif; ?>

<?php foreach($colleges as $college): ?>
    <?php echo form_open_multipart('Colleges/unblock'); ?>
        <!-- Modal college unblock -->
        <div class="modal fade" id="a<?php echo $college['college_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title" id="exampleModalLongTitle"><h4><i class="fa fa-ban"></i>&nbsp;&nbsp;Unblock College</h4></h5>
                    </div>
                    <div class="modal-body">
                        <h5>Unblock <b><?php echo $college['college_name']; ?></b> ?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </div>
                <input style="visibility: hidden;" class="form-control" type="text" name="collegeNumber" value="<?php echo $college['college_id']; ?>">
            </div>
        </div>
    <?php echo form_close(); ?>
<?php endforeach; ?>
<div class="row">
    <div class="col-lg-12">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
            <tr>
            <th class="col-lg-1">Logo</th>
            <th class="col-lg-10">College Name</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($colleges as $college): ?>
                    <?php if($college['status'] == "BLOCKED"): ?>
                        <tr class="odd gradeX college">
                            <td><img src="<?php echo base_url(); ?>/assets/images/college_logos/<?php echo $college['image']; ?>" style="width: 30px;" class="img-responsive center-block"></td>
                            <td><?php echo $college['college_name']; ?>
                                <button type="button" id="<?php echo $college['college_id']; ?>" style="float: right;" class="btn btn-danger" data-toggle="modal" data-target="#a<?php echo $college['college_id']; ?>"> 
                                    Unblock
                                </button>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
