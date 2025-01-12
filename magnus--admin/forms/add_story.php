<?php
$fetch=mysqli_fetch_assoc($mysqli->query("select * from tbl_country where countryID='$_REQUEST[sno]'"));
?>
<!-- BEGIN Main Content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="fa fa-bars"></i>Add Success</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form action="queries/insert.php" class="form-horizontal" id="validation-form" method="post" enctype="multipart/form-data">
                   
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label" for="username">Image:</label>
                        <div class="col-sm-6 col-lg-4 controls">
                            <input type="file" name="story" id="story" class="form-control" accept="image/jpeg" />
                            <span style="color:#F00;">Only jpg images</span>
                        </div>
                    </div>
                    <input type="hidden" name="query" value="story">
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Main Content -->