<?php
print "<html><head><title>Result Page</title>";
print "<link type=\"text/css\" rel=\"stylesheet\" href=\"style/css.css\"></head><body><center>";

extract($_REQUEST);
if($category=="Highland")
{
$images= "images/highland.png";

}
elseif($category=="Lake")
{
$images= "images/lake.png";
}
elseif($category=="Island")
{
$images= "images/island.png";
}
elseif($category=="National Park")
{
$images= "images/nationalpark.png";
}
elseif($category=="Beach")
{
$images= "images/beach.png";
}
else
{
$images= "images/bannerall.png";
}



print "<img src=\"$images\" />";

mysql_connect("twityitme.db.4326162.hostedresource.com","twityitme","Rhe10za");
mysql_select_db("twityitme");

if ( isset($_GET['submit'])){

if ( $category == 'All' ) {
	$newcategory = "";
} else {
	$newcategory = " where category = '$category'";
}

$query= mysql_query("select location_nm, Category, Description from Location $newcategory order by location_nm ASC");
while( $row=mysql_fetch_assoc( $query) ) {


$locname = $row['location_nm'];
$category = $row['Category'];
$description = $row['Description'];

print "<div class=\"result_bg\"><b><br /> &nbsp  $locname - $category </b> </div> <div class=\"result_desc\">";
print "&nbsp &nbsp ";
print "<br /> $description<br />";
print "</div>";
}
$date = date("Y-m-d H-i-s");;

$link_address ='http://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
print "<form action=\"savetodb.php\" method=\"POST\">";
print "<input type=\"hidden\" name=\"first_answer\" value=\"$accompany\">";
print "<input type=\"hidden\" name=\"second_answer\" value=\"$choice\">";
print "<input type=\"hidden\" name=\"third_answer\" value=\"$category\">";
print "<input type=\"hidden\" name=\"link_address\" value=\"$link_address\">";
print "<input type=\"hidden\" name=\"date\" value=\"$date\">";
print "<div class=\"submit_bg\"><br />";
print "<input type=\"submit\" class=\"link2\" value=\"Save Result\" name=\"submit\" />";
print "</div>";
print "</form>";

}

else{

print "<div class=\"question_bg1\"><br /><center>Something Wrong, please go back to main site</center> </div>";



}


?>