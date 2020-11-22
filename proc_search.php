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
$query_search = "SELECT * FROM disease";
$search = mysql_query($query_search, $medical) or die(mysql_error());
$row_search = mysql_fetch_assoc($search);
$totalRows_search = mysql_num_rows($search);

/*if (!isset($_SESSION)) {
  session_start();
/*if (!isset($_SESSION['MM_Username']))
  {
  	header("location: Index.php");
  }*/

$search=$_GET['search'];
//we perform filtering
$search=strtoupper($search);
$search=strip_tags($search);
$search=trim($search);
if(!empty($search)) {

mysql_select_db($database_medical, $medical);
$query_search = "SELECT * FROM disease WHERE dname like '%$search%' ";
$search = mysql_query($query_search, $medical) or die(mysql_error());
}
else {
	echo "Cannot Search Empty Value";	
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
                      Search Results
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="search.php">Back to Previous Page</a></li>
                </ul>
                
                <div class="clearfix"></div>
			   </div>
                 <center> <h1 class="x">Search Results</h1></center>
		      <form method="get" name="search">
                        
			<center>	
            
             <?php 
$anymatches=@mysql_num_rows($search);
if ($anymatches==00)
{echo '<div class="warning">';
echo "Sorry no Matches Found. Please contact a doctor or visit the hospital.";
echo '</div>';
}
else {
?>
<table width="691" border="1">
<tr class="xy">
    <td width="33" height="42" align="center" valign="middle"><strong>S/NO</strong></td>
    <td width="135" align="center" valign="middle"><strong>DISEASE NAME</strong></td>
    <td width="161" align="center" valign="middle"><strong>SYMPTOMS</strong></td>
    <td width="185" align="center" valign="middle"><strong>CAUSES</strong></td>
    <td width="143" align="center" valign="middle"><strong>DRUGS</strong></td>
       
    </tr>
<?php 
	$counter = 0; 
$a=1; 
 while($result=mysql_fetch_array($search))
{ 
$t_id = $result['D_id'];
	
?>    
    
   <tr <?php if ($counter++ %2) { echo 'class="color"';} ?>>
    <td height="42"><?php echo $a++; echo '.'; ?></td>
    <td><?php echo $result['dname']; ?></td>
    <td><?php echo $result['symptions'];?></td>
    <td><?php echo $result['causes']; ?></td>
    <td><?php echo $result['drugs']; ?></td>
    </tr>
            <?php } while($row_search = mysql_fetch_assoc($search));?> 
             </table>
             <?php }?>
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
mysql_free_result($search);
?>
