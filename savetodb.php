<?php
extract($_REQUEST);

print "<html><head><title>savetodb Page</title>";
print "<link type=\"text/css\" rel=\"stylesheet\" href=\"style/css.css\"></head><body><center>";



if ( isset($_POST['submit'])){
mysql_connect("twityitme.db.4326162.hostedresource.com","twityitme","Rhe10za");
mysql_select_db("twityitme");

mysql_query("INSERT INTO historyInfo (first_answer,second_answer, Category, link_address, date)Values ('$first_answer','$second_answer','$third_answer','$link_address', '$date' )" );


print "<div class=\"question_bg1\">";
print "<br/><br/><center>Thanks, Your result has been recorded</center>   <br/>";
print "</div>";
print "<div class=\"submit_bg\"><br/><a class=\"link2\" href=\"$link_address\"> Back to Your Result</a></div>";



print "</center></body></html>";

}


else{

print "<div class=\"question_bg1\"><br /><center>Something Wrong, please go back to main site</center> </div>";



}


?>