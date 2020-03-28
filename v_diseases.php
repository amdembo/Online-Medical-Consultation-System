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
$query_disease = "SELECT * FROM disease";
$disease = mysql_query($query_disease, $medical) or die(mysql_error());
$row_disease = mysql_fetch_assoc($disease);
$totalRows_disease = mysql_num_rows($disease);
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
                      Diseases
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="admin.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
                 
<table width="691" border="1">
<tr class="xy">
    <td width="33" height="42" align="center" valign="middle"><strong>S/NO</strong></td>
    <td width="135" align="center" valign="middle"><strong>DISEASES</strong></td>
    <td width="161" align="center" valign="middle"><strong>SYMPTOMS</strong></td>
    <td width="185" align="center" valign="middle"><strong>CAUSES</strong></td>
    <td width="143" align="center" valign="middle"><strong>TREATMENT/ DRUGS</strong></td>
    
    </tr>
<?php 
    $counter = 0;
	$a=1;
 do { ?>
   <tr <?php if ($counter++ %2) { echo 'class="color"';} ?>>
   
    <td height="42"><?php echo $a++; echo '.'; ?></td>
    <td><?php echo $row_disease['dname']; ?></td>
    <td><?php echo $row_disease['symptions'];?></td>
    <td><?php echo $row_disease['causes']; ?></td>
    <td><?php echo $row_disease['drugs']; ?></td>
    
    </tr>
            <?php } while($row_disease = mysql_fetch_assoc($disease));?> 
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
mysql_free_result($disease);

?>
