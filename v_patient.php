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

mysql_select_db($database_medical, $medical);
$query_patient = "SELECT * FROM patient";
$patient = mysql_query($query_patient, $medical) or die(mysql_error());
$row_patient = mysql_fetch_assoc($patient);
$totalRows_patient = mysql_num_rows($patient);
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
                      Patients
                   </li>
                </ul>
                <ul class="previous">
                	<li><a href="admin.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
                 
<table width="870" border="1">
<tr class="xy">
    <td width="30" height="42" align="center" valign="middle"><strong>S/NO</strong></td>
    <td width="119" align="center" valign="middle"><strong>FIRST NAME</strong></td>
    <td width="100" align="center" valign="middle"><strong>LAST NAME</strong></td>
    <td width="143" align="center" valign="middle"><strong>EMAIL</strong></td>
    <td width="119" align="center" valign="middle"><strong>USERNAME</strong></td>
    <td width="120" align="center" valign="middle"><strong>PASSWORD</strong></td>
    <td width="119" align="center" valign="middle"><strong>PHONE NUMBER</strong></td>
       
    </tr>
<?php 
    $counter = 0;
	$a=1;
 do { ?>
   <tr <?php if ($counter++ %2) { echo 'class="color"';} ?>>
   
    <td height="42"><?php echo $a++; echo '.'; ?></td>
    <td><?php echo $row_patient['fn']; ?></td>
    <td><?php echo $row_patient['ln'];?></td>
    <td><?php echo $row_patient['em']; ?></td>
    <td><?php echo $row_patient['un']; ?></td>
    <td><?php echo $row_patient['pw']; ?></td>
    <td><?php echo $row_patient['ph']; ?></td>
    </tr>
            <?php } while($row_patient = mysql_fetch_assoc($patient));?> 
      </table>
             
            </center>
			
              </form>

			    </div>
			
			
			<div class="clearfix">
		</div>
	
<!-- registration-form -->

		<?php include('foot.inc'); ?>
			
</body>
</html>
<?php
mysql_free_result($patient);
?>
