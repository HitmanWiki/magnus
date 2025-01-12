<?php
session_start();
include_once("../includes/db.php");
$q=$_REQUEST['q'];
$q1=$_REQUEST['q1'];

//echo $q;
//echo $q1;

if($q1=="course_chap")
{
	$fetchchp=$mysqli->query("select * from tbl_chapter where course_sno='$q'");
	while($fetchchpf=mysqli_fetch_assoc($fetchchp))
	{
		echo $fetchchpf['chapter'].", ";
	}
}


if($q1=="courses")
{
	?>
              <select class="form-control" name="chapter" id="chapter" data-rule-required="true" onChange="cats(this.value,'chapters','chapters')">
                <option value="">-- Please select --</option>
                <?php
$chapter=$mysqli->query("select * from tbl_chapter where course_sno='$q' and status='1'");
while($chapter_f=mysqli_fetch_assoc($chapter))
{
?>
           <option value="<?php echo $chapter_f['sno']; ?>"><?php echo $chapter_f['chapter']; ?></option>
                <?php
}
?>

              </select><?php
}



if($q1=="chapters")
{
	?>
          <div class="form-group">
            <label for="select" class="col-sm-3 col-lg-2 control-label">Select Title</label>
            <div class="col-sm-6 col-lg-4 controls">
              <select class="form-control" name="chaptertitle" id="chaptertitle" data-rule-required="true" onChange="cats(this.value,'excercise','excercise')">
              <option value="">--Select--</option>
                <?php
$chapter=$mysqli->query("select * from tbl_chapter_title where chapter='$q' and status='1'");
while($chapter_f=mysqli_fetch_assoc($chapter))
{
?>
           <option value="<?php echo $chapter_f['sno']; ?>"><?php echo $chapter_f['chapter_title']; ?></option>
                <?php
}
?>

              </select>
			  </div></div>
			  
              
			  <?php
}
if($q1=="excercise")
{
?>
<?php
$ex_no=mysqli_fetch_assoc($mysqli->query("select max(excercise_no) as excno from tbl_chapter_details where chapter_title='$q'"));
?>              
              
          <div class="form-group">
            <label class="col-sm-3 col-lg-2 control-label" for="username">Exercise No.:</label>
<div class="col-sm-6 col-lg-4 controls">
 
 <input type="text" class="form-control " name="excercise_no" value="<?php echo $ex_no['excno']+1; ?>" data-rule-required="true" />
  </div>
          </div>
<?php
}
?>