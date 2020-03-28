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
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['un'])) {
  $loginUsername=$_POST['un'];
  $password=$_POST['pw'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "admin.php";
  $MM_redirectLoginFailed = "#";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_medical, $medical);
  
  $LoginRS__query=sprintf("SELECT un, pw FROM login WHERE un=%s AND pw=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $medical) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
				$error = "<h3 style='color:red'><i>Your Username or Password is Invalid !</i></h3>";
			}
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
                       Login
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
      </div>
              
	  <h2>Administrator Login</h2>
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
					 <center>
                     <?php 
					if(isset($error)){
						echo $error;
					}
			 ?>
                     </center>
				  <form name="log"  action="<?php echo $loginFormAction; ?>" method="POST">
						 <ul>
							 <li class="text-info">Username: </li>
							 <input type="text" value="" name="un" required/>
						 </ul>
						 <ul>
							 <li class="text-info"> Password:</li>
							 <input type="password" value="" name="pw" required/>
						 </ul>
											
		            <input type="submit" value="LOGIN" name="log"/>
						 
						  
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