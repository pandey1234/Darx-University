<?php
session_start();
include("../include/config.php");
include("../include/functions.php");
include("../include/simpleimage.php");
validate_admin();

if ($_REQUEST['submitForm'] == 'yes') {
  $title = $obj->escapestring($_POST['title']);
  $description = $obj->escapestring($_POST['description']);
  $target_url = $obj->escapestring($_POST['target_url']);

  if ($_FILES['image_upload_file']['tmp_name']) {
    $path[0] = $_FILES['image_upload_file']['tmp_name'];
    $file = pathinfo($_FILES['image_upload_file']['name']);
    $fileType = $file["extension"];
    $desiredExt = 'jpg';
    $fileNameNew = rand(333, 999) . time() . ".$desiredExt";
    move_uploaded_file($_FILES['image_upload_file']['tmp_name'], "../upload_images/banner/" . $fileNameNew);
  }

  if ($_REQUEST['id'] == '') {
    $obj->query("insert into $tbl_banner set title='$title',description='$description',target_url='$target_url',photo='$fileNameNew'", -1); //die;
    $_SESSION['sess_msg'] = 'Banner added sucessfully';
  } else {
    $obj->query("update $tbl_banner set title='$title',description='" . $description . "',target_url='$target_url',photo='" . $fileNameNew . "',status=1 where id=" . $_REQUEST['id'], $debug = -1); //die;
    $_SESSION['sess_msg'] = 'Banner updated successfully';
  }
  header("location:banner-list.php");
  exit();
}


if ($_REQUEST['id'] != '') {
  $sql = $obj->query("select * from $tbl_banner where id=" . $_REQUEST['id']);
  $result = $obj->fetchNextObject($sql);
}

?>
<!DOCTYPE html>
<html>
<?php include("head.php"); ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include("header.php"); ?>
    <?php include("menu.php"); ?>
    <div class="content-wrapper">
      <section class="content-header">
        <h1><?php if ($_REQUEST['id'] != '') { ?>Update <?php } else { ?> Add <?php } ?> Banner</h1>
        <ol class="breadcrumb">
          <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="banner-list.php">View banner List</a></li>
        </ol>
      </section>
      <section class="content">
        <div class="box box-primary">
          <form name="frm" id="frm" method="POST" enctype="multipart/form-data" action="" onSubmit="return validate(this)">
            <input type="hidden" name="submitForm" value="yes" />
            <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>" />
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" value="<?php echo stripslashes($result->title); ?>" class="required form-control">
                  </div>
                </div>

                <div class="col-md-12 col-mb-12">
									<div class="form-group">
										<label>Description</label>
										<input type="text" name="description" value="<?php echo stripslashes($result->description); ?>" class="form-control">
									</div>
								</div>

                <!-- <div class="col-md-6">
             <div class="form-group">
              <label>Target URL</label>
                <input type="text" name="target_url" value="<?php echo stripslashes($result->target_url); ?>" class="form-control">
              </div>
          </div>   -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Banner Image (500px X 500px)</label>
                    <input type="hidden" name="imagename" value="<?php echo $result->photo; ?>">
                    <input type="file" name="image_upload_file" class='form-control required' value="<?php echo $result->photo; ?>"/><br />
                    <?php if (is_file("../upload_images/banner/" . $result->photo)) { ?>
                      <img src="../upload_images/banner/<?php echo $result->photo; ?>" width="100px" /><?php } ?>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="box-footer">
          <input type="submit" name="submit" value="Submit" class="button" border="0" />&nbsp;&nbsp;
          <input name="Reset" type="reset" id="Reset" value="Reset" class="button" border="0" />
        </div>
        </form>
    </div>
    </section>
  </div>
  <?php include("footer.php"); ?>
  <div class="control-sidebar-bg"></div>
  </div>
  <script src="js/jquery-2.2.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.min.js"></script>
  <script src="js/demo.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#frm").validate();
    })
  </script>
</body>

</html>