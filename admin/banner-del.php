<?php session_start();

include("../include/config.php");

include("../include/functions.php"); 

validate_admin();

$arr =$_POST['ids'];

//print_r($_REQUEST);



$Submit =$_POST['what'];



if(count($arr)>0){

	$str_rest_refs=implode(",",$arr);

	if($Submit=='Delete')

	{

	     $imageArr=$obj->query("select photo from $tbl_banner where id  in ($str_rest_refs)");

		 while($resultImage=$obj->fetchNextObject($imageArr)){

		 @unlink("../upload_images/banner/".$resultImage->photo);

		 @unlink("../upload_images/banner/thumb/".$resultImage->photo);

		   }

		

	    $sql="delete from $tbl_banner where id in ($str_rest_refs)"; 

		$obj->query($sql);

		

		$sess_msg='Selected record(s) deleted successfully';

		$_SESSION['sess_msg']=$sess_msg;

    }

	elseif($Submit=='Enable')

	{	

		$sql="update $tbl_banner set status=1 where id in ($str_rest_refs)";

		$obj->query($sql);

		$sess_msg='Selected record(s) activated successfully';

		$_SESSION['sess_msg']=$sess_msg;

	}

	elseif($Submit=='Disable')

	{		

		 $sql="update $tbl_banner set status=0 where id in ($str_rest_refs)";

		$obj->query($sql);

		$sess_msg='Selected record(s) deactivated successfully';

		$_SESSION['sess_msg']=$sess_msg;

	}

		

	}

	

else{

	$sess_msg="Please select check box";

	$_SESSION['sess_msg']=$sess_msg;

	header("location: ".$_SERVER['HTTP_REFERER']);

	exit();

	}

	header("location: banner-list.php");

	exit();

	

?>

