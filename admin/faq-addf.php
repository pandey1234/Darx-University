<?php
session_start();
include("../include/config.php");
include("../include/functions.php");
include("../include/simpleimage.php");
validate_admin();

if ($_REQUEST['submitForm'] == 'yes') {
  $ques = $obj->escapestring($_POST['ques']);
  $ans = $obj->escapestring($_POST['ans']);

  // $sqls = $obj->query("select * from $tbl_faq where ques='$ques' and ans='$ans'",-1); //die;
  // // $results = $obj->fetchNextObject($sqls);

  // $rowcount = mysqli_num_rows($sqls);

  // if ($rowcount = 0) {

    if ($_REQUEST['id'] == '') {
      $obj->query("insert into $tbl_faq set ques='$ques',ans='$ans'", -1); //die;
      $_SESSION['sess_msg'] = 'FAQ added sucessfully';
    } else {
      $obj->query("update $tbl_faq set ques='$ques',ans='" . $ans . "' where id=" . $_REQUEST['id'], $debug = -1); //die;
      $_SESSION['sess_msg'] = 'FAQ updated successfully';
    }
    header("location:faq-list.php");
    exit();
    
  // } else {
  //   echo "data is taken";
  // }
}


if ($_REQUEST['id'] != '') {
  $sql = $obj->query("select * from $tbl_faq where id=" . $_REQUEST['id']);
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
        <h1>
          <?php if ($_REQUEST['id'] != '') { ?>Update
          <?php } else { ?> Add
          <?php } ?> FAQ
        </h1>
        <ol class="breadcrumb">
          <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="faq-list.php">View FAQ List</a></li>
        </ol>
      </section>
      <section class="content">
        <div class="box box-primary">
          <form name="frm" id="frm" method="POST" enctype="multipart/form-data" action=""
            onSubmit="return validate(this)">
            <input type="hidden" name="submitForm" value="yes" />
            <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>" />
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="ques" value="<?php echo stripslashes($result->ques); ?>"
                      class="required form-control">
                  </div>
                </div>

                <div class="col-md-12 col-mb-12">
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="ans" value="<?php echo stripslashes($result->ans); ?>"
                      class="form-control">
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
    $(document).ready(f unction () {
      $("#frm").validate();   })
  </script>
</body>

</html>