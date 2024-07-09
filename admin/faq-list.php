<?php
ob_start();
session_start(); 
include('../include/config.php');
include("../include/functions.php");
validate_admin();
?>
<!DOCTYPE html>
<html>
<?php include("head.php"); ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include("header.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
 <?php include("menu.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
            <div class="row">
      	<div class="col-md-3 listpage"><h4>Manage faq's</h4></div>
      	<div class="col-md-6"><p style="text-align:center"><?php if($_SESSION['sess_msg']){ ?><span class="box-title" style=" font-size:12px;color:#a94442"><strong><?php echo $_SESSION['sess_msg'];$_SESSION['sess_msg']='';?></strong></span> <?php }?></p></div>
      	<div class="col-md-3"><p style="text-align:right">
      		<span><input type="button" name="add" value="Add faq"  class="button btn-success" onClick="location.href='faq-addf.php'" /></span>	
      		</p>
      	</div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
		<form name="frm" method="post" action="faq-del.php" enctype="multipart/form-data">
          <div class="box">
            <div class="box-body">
              <table id="banner-list" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="50px"><div class="squaredFour">
                      <input name="check_all" type="checkbox"  id="check_all" value="check_all" />
                      <label for="check_all"></label>
                    </div>
                  </th>
                  <th>Title </th>
                  <th>Description</th>
				  <th>Status</th>
				  <th>Action</th>
				 
                </tr>
                </thead>
                <tbody>
				<?php
				$i=1;
				$sql=$obj->query("select * from $tbl_faq where 1=1",$debug=-1);
				while($line=$obj->fetchNextObject($sql)){?>
                <tr>
					<td>
						<div class="squaredFour">
			            <input type="checkbox" class="checkall" id="squaredFour<?php echo $line->id;?>" name="ids[]" value="<?php echo $line->id;?>" />
			            <label for="squaredFour<?php echo $line->id;?>"></label>
			          </div>
					</td>
					<td><?php echo ucfirst(stripslashes($line->ques)); ?></td>
					<td><?php echo ucfirst(stripslashes($line->ans)); ?></td>
					

					<td align="center">
					<label class="switch">
		              <input type="checkbox" class="chkstatus" value="<?php echo $line->id;?>" <?php echo ($line->status=="1")?'checked':'' ?> data-one="<?php echo $tbl_faq?>">
		              <div class="slider round"></div>
		            </label>

			          </td>
			          <td><a href="faq-addf.php?id=<?php echo $line->id;?>" class="btn btn-primary" ques="edit"> <i class="fa fa-pencil"></i></a>
			          </td>
					
                </tr>
				<?php $i++; }?>
				
                </tbody>
				
                <tfoot>
                </tfoot>
				
              </table>
            </div>
				

			
            <!-- /.box-body -->
          </div>
		  <div class="row">
		      <!-- <div class="col-md-9"></div> -->
		      <div class="col-md-12">
		      <input type="hidden" name="what" value="what" />
		      <input type="submit" name="Submit" value="Enable" class="button btn-success" onClick="return del_prompt(this.form,this.value)" />
		      <input type="submit" name="Submit" value="Disable" class="button btn-warning" onClick="return del_prompt(this.form,this.value)" />
		      <?php if($_SESSION['user_type']=='superadmin'){?>
		      <input type="submit" name="Submit" value="Delete" class="button btn-danger" onClick="return del_prompt(this.form,this.value)" />
		      <?php }?>
		      </div>
		      </div>
				</form>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




<?php include("footer.php"); ?>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#banner-list").DataTable();
  });
</script>
<script>
	function del_prompt(frmobj,comb)
		{
		//alert(comb);
			if(comb=='Delete'){
				if(confirm ("Are you sure you want to delete record(s)"))
				{
					frmobj.action = "faq-del.php";
					frmobj.what.value="Delete";
					frmobj.submit();
					
				}
				else{ 
				return false;
				}
		}
		else if(comb=='Disable'){
			frmobj.action = "faq-del.php";
			frmobj.what.value="Disable";
			frmobj.submit();
		}
		else if(comb=='Enable'){
			frmobj.action = "faq-del.php";
			frmobj.what.value="Enable";
			frmobj.submit();
		}
		
	}

</script>
<script type="text/javascript">
function showOnhome(id,chk){
	$.ajax({
		url:"showBannerOnHome.php",
		data:{id:id,chk:chk},
		success:function(data){
			
			$("#msg").php("Record updated successfully").show().fadeOut('slow');
		}
		
		})
}
</script>
<script src="js/change-status.js"></script> 

</body>
</html>
