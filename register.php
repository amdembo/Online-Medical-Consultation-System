<?php require_once('Connections/medical.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "patient")) {
  $insertSQL = sprintf("INSERT INTO patient (fn, ln, em, un, pw, ph) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['fn'], "text"),
                       GetSQLValueString($_POST['ln'], "text"),
                       GetSQLValueString($_POST['em'], "text"),
                       GetSQLValueString($_POST['un'], "text"),
                       GetSQLValueString($_POST['pw'], "text"),
                       GetSQLValueString($_POST['ph'], "text"));

  mysql_select_db($database_medical, $medical);
  $Result1 = mysql_query($insertSQL, $medical) or die(mysql_error());

    $msg="<center><h1 style='color:red';><i>SUCCESSFULLY REGISTERED !</i></h1></center>";

  $insertGoTo = "register.php?msg=".$msg;
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<?php include('head.inc'); ?>
	<!--/.navbar-->
</div>
	</div>
		</div>
		<!-- registration-form -->
<div class="registration-form">
	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Registration
                    </li>
                </ul> 
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
               <center><?php if (isset($_GET['msg'])){
			 echo $_GET['msg']; 
			}
			?> </center>
		<h2> Registration </h2>
        <img src="images/s1.jpg">
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
					 <p>Welcome, please enter the following details to continue.</p>
					 
					 <form name="patient" action="<?php echo $editFormAction; ?>" method="POST">
						 <ul>
							 <li class="text-info">First Name: </li>
							 <li><input type="text" value="" name="fn" required></li>
						 </ul>
						 <ul>
							 <li class="text-info">Last Name: </li>
							 <li><input type="text" value="" name="ln" required></li>
						 </ul>				 
						<ul>
							 <li class="text-info">Email: </li>
							 <li><input type="email" value="" name="em" required></li>
						 </ul>
						 <ul>
							 <li class="text-info">Username: </li>
							 <li><input type="text" value="" name="un" required></li>
						 </ul>
						 <ul>
							 <li class="text-info"> Password:</li>
							 <li><input type="password" value="" name="pw" required></li>
						 </ul>
						 <ul>
							 <li class="text-info">Mobile Number:</li>
							 <li><input type="text" value="" name="ph" required></li>
						 </ul>						
						 <input type="submit" value="REGISTER NOW">
						 <p class="click">By clicking the <b>Register Now</b> button, you are agreeing to the <a href="#">Policy, Terms and Conditions.</a></p>
						 <input type="hidden" name="MM_insert" value="customer">
						 <input type="hidden" name="MM_insert" value="patient"> 
					 </form>
				 </div>
			</div>
			
			<div class="clearfix">
		</div>
	</div>

<!-- registration-form -->

		<?php include('foot.inc'); ?>
			
</body>
</html>
