<?php
// be sure lang is loaded...
?>
<div id="global_header">
<?php
if($_SESSION['access']) 
{
?>
	<div id="project-name">Physics Learning Across Contexts &amp; Environments</div>
	<div id="header">
		<ul>
			<li id="welcome">welcome back <span><?php echo $_SESSION['username']?></span></li>
			
		</ul>
	</div><!-- /header -->
	
	<div id="header-search">
		
			<ul>
				<li class="header-li"><a href="/myhome">home</a></li>
				<li class="header-li"><a href="/myhome/preferences">preferences</a></li>
				<li id="search"><form action="#" method="post"><label for="search">search </label><input type="text"/></form></li>
				<li class="header-li"><a href="/logout.php">sign out</a></li>
			</ul>	
		
	</div><!-- /header-search -->
<?php 
} else {
?>
		<div id="header"><h1>PLACE.Web</h1></div>
<?php 
} // end if
?>

	<div class="clear"></div>
</div><!-- /global_header -->

