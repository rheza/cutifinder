
<!-- This is my site!!!!!! -->
<!-- 0730965 -->
<!-- Rheza Pahlevi -->
<html>
<head>
<title>Go holiday!!</title>
<link type="text/css" rel="stylesheet" href="style/css.css">

<script language="javascript" type="text/javascript" src="script/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="script/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="script/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
	window.addEvents({
		'load': function(){
			
			/* banner rotator example */	
			new SlideItMoo({overallContainer: 'SlideItMoo_banners_outer',
							elementScrolled: 'SlideItMoo_banners_inner',
							thumbsContainer: 'SlideItMoo_banners_items',		
							itemsVisible:1,
							itemsSelector: '.banner',
							showControls:0,
							autoSlide: 2000,
							transition: Fx.Transitions.Elastic.easeIn,
							duration: 1800,
							direction:+1
			});
		}
	});
</script>

</head>
<body>

<!--thumbnails slideshow begin-->
	<div id="SlideItMoo_banners_outer">	
		<div id="SlideItMoo_banners_inner">			
			<div id="SlideItMoo_banners_items">
				<img class="banner" src="images/bannerall.png" width="705" height="150" />	
				<img class="banner" src="images/beach.png" width="705" height="150" />	
				<img class="banner" src="images/highland.png" width="705" height="150" />
				<img class="banner" src="images/island.png" width="705" height="150" />	
				<img class="banner" src="images/lake.png" width="705" height="150" />
				<img class="banner" src="images/nationalpark.png" width="705" height="150" />
			</div>			
		</div>
	</div>	
	<!-- banner rotator end -->

<center>

<div class="banner_bg">
&nbsp&nbsp Welcome
</div>

<form action="result.php" method="GET">

<div class="question_bg1">
<br />
Looking for the holiday destination?Wanna make your holiday memorable?Just answer the question below and we'll give you the choices.Click on History to view the other's choices....

</div>
<div class="question_bg2">
<br />
&nbsp <b>Who is accompanying you on your vacation?</b><br/>
&nbsp<input type="radio" name="accompany" value="alone"/>Alone<br/>
&nbsp<input type="radio" name="accompany" value="family"/>Family<br/>
&nbsp<input type="radio" name="accompany" value="friends"  CHECKED  />Friends<br/>
&nbsp<input type="radio" name="accompany" value="partner"/>Partner(husband/wife)<br/><br/>
</div>
<div class="question_bg3">
<br />
&nbsp <b>What are the main reason for you choose the holiday destination?</b><br/>
&nbsp<input type="radio" name="choice" value="Rest and Relaxation" CHECKED/>Rest and Relaxation<br/>
&nbsp<input type="radio" name="choice" value="Culture/History"/>Culture/History<br/>
&nbsp<input type="radio" name="choice" value="Fun/Games"/>Fun/Games<br/>
&nbsp<input type="radio" name="choice" value="Snorkling/Scuba Diving"/>Snorkling/Scuba Diving<br/><br/><br />
</div>
<div class="question_bg4">
<br />
&nbsp <b>What Category are you looking?</b><br/>
&nbsp<input type="radio" name="category" value="Island" CHECKED />Island<br/>
&nbsp<input type="radio" name="category" value="Lake"/>Lake<br/>
&nbsp<input type="radio" name="category" value="National Park"/>National Park<br/>
&nbsp<input type="radio" name="category" value="Highland"/>Highland<br/>
&nbsp<input type="radio" name="category" value="Beach"/>Beach<br/>
&nbsp<input type="radio" name="category" value="All"/>All<br/>
<br />
</div>

<div class="submit_bg"><br />
<input type="submit" class="link2" value="Submit" name="submit" />
<br />
</div>

<?php


mysql_connect("twityitme.db.4326162.hostedresource.com","twityitme","Rhe10za");
mysql_select_db("twityitme");
$query= mysql_query("select date, first_answer, second_answer, Category, link_address from HistoryInfo order by HistoryID desc LIMIT 1;
");
while( $row=mysql_fetch_assoc( $query) ) {

$date = $row['date'];
$first = $row['first_answer'];
$second = $row['second_answer'];
$category = $row['Category'];
$link = $row['link_address'];


print "<div class=\"viewthis_bg\"><br />";
print "<center><a class=\"link1\" href=\"$link\"> Previous Result</a>  <br/>  <a class=\"link1\" href=\"history.php\">All History</a></center>  ";
print "</div>";

}

?>
<br />
</form>




</center>






</body>
</html>


