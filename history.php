<?php
function nicetime($date)
{
    if(empty($date)) {
        return "No date provided";
    }
   
    $periods         = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
    $lengths         = array("60","60","24","7","4.35","12","10");
   
    $now             = time();
    $unix_date         = strtotime($date);
   
       // check validity of date
    if(empty($unix_date)) {   
        return "Bad date";
    }

    // is it future date or past date
    if($now > $unix_date) {   
        $difference     = $now - $unix_date;
        $tense         = "ago";
       
    } else {
        $difference     = $unix_date - $now;
        $tense         = "from now";
    }
   
    for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
        $difference /= $lengths[$j];
    }
   
    $difference = round($difference);
   
    if($difference != 1) {
        $periods[$j].= "s";
    }
   
    return "$difference $periods[$j] {$tense}";
}

print "<html><head><title>History</title>";
print "<link type=\"text/css\" rel=\"stylesheet\" href=\"style/css.css\"></head><body><center>";





mysql_connect("twityitme.db.4326162.hostedresource.com","twityitme","Rhe10za");
mysql_select_db("twityitme");



print "<div class=\"banner_bg\">";
print "&nbsp&nbsp History";
print "</div>";

$query= mysql_query("select HistoryID, first_answer, second_answer, category, date, link_address  from HistoryInfo order by HistoryID DESC");

while( $row=mysql_fetch_assoc( $query) ) {

$first = $row['first_answer'];
$second = $row['second_answer'];
$category = $row['category'];
$date = $row['date'];
$link = $row['link_address'];
$result = nicetime($date);

print "<div class=\"result_bg\"><br /> &nbsp $result,   $first - $second - $category - <a class=\"link1\" href=\"$link\">View This</a> </div> ";
print "</div>";
}


print "<br /><br />";


print "</center></body></html>";

?>