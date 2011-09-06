<?php

?>
<?php 
if($_SESSION['profile']=="STUDENT")
{
?>

<div id="home-columns">
	<div id="home-col1" style="float:left;width:20%;">
		<div id="comment-score" class="dashlet-box-simple">
			<div class="dashlet-title">Comment Score</div>
			<div>+25</div>
		</div>

		<div id="tag-score" class="dashlet-box-simple">
			<div class="dashlet-title">Tag Score</div>
			<div>+17</div>
		</div>
	</div><!-- /home-col1 -->
<?php 
} // end if student
?>
	
	<div id="home-col2" style="float:left;width:40%;">
		<div id="my-updates" class="dashlet-box">
			<div class="dashlet-title">My Updates</div>
			<div>
				<ul class="ul-for-data">
					<li>Item 1</li>
					<li>Item 2</li>
					<li>Item 3</li>
					<li>Item 4</li>
				</ul>
			</div>
		</div>

		<div id="my-recent-activity" class="dashlet-box">
			<div class="dashlet-title">My Recent Activity</div>
			<div>
				<ul class="ul-for-data">
					<li>Item 1</li>
					<li>Item 2</li>
					<li>Item 3</li>
					<li>Item 4</li>
				</ul>
			</div>
		</div>	
	</div><!-- /home-col2 -->
	
	<div id="home-col3" style="float:left;width:40%;">
		<div id="recent-class-activity" class="dashlet-box">
			<div class="dashlet-title">Recent Class Activity</div>
			<div>
				<ul class="ul-for-data">
					<li>Item 1</li>
					<li>Item 2</li>
					<li>Item 3</li>
					<li>Item 4</li>
				</ul>
			</div>
		</div>	
		<div id="course-actions">
			<div class="dashlet-box"><a href="/student/example/addform">Create New Example</a></div>
			<?php 
			if($_SESSION['profile']=="TEACHER")
			{
			?>
			<div class="dashlet-box"><a href="/teacher/question/add">Create New Question</a></div>
			<div class="dashlet-box"><a href="/teacher/class/showlist">See Class List</a></div>
			<?php } // end if teacher?>
			
			<div class="dashlet-box">
				<a href="/home/web">Launch Associative Web</a>
			</div>
			<div class="dashlet-box">
				<a href="/home/discussion">Launch Associative Web (text version)</a>
			</div>
		</div>	
	</div><!-- /home-col3 -->
		
</div>