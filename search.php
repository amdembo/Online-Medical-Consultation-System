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
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;</li><span>&gt;</span>
                    </li>
                    <li class="women">
                       Search
                    </li>
		   	    </ul>
		   	    <ul class="previous">
               	  <li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
               <center></center>
        <div class="registration-grids">
         <center>
		  <div class="reg-form">
			  <div class="reg">
             <img src="images/consultation.jpg">
					
					 <form name="search" action="proc_search.php" method="get">
<ul>
		      <li class="">RUN A TEST FOR DISEASES&nbsp;(<i>E.g Maleria  etc.</i>):</li>
							 <li><input type="text" value="" name="search" required></li>
						 </ul>						
						 <input type="submit" name="search_button" id="search_button" value="Search">
						 <p class="click">&nbsp;</p>
						 <input type="hidden" name="MM_insert" value="customer">
						 <input type="hidden" name="MM_insert" value="patient"> 
					 </form>
                
				 </div>
			</div>
			</center>
			<div class="clearfix">
		</div>
	</div>

<!-- registration-form -->

		<?php include('foot.inc'); ?>
			
</body>
</html>