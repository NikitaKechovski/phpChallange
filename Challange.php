<?php
// text = yes rating=highest date=newest


function compare_textyes($l, $r)
{
    if ($l->reviewText != "" && $r->reviewText == "") {
        return -1;
    } else if ($l->reviewText == "" && $r->reviewText != "") {
        return 1;
    }
    else return 0;
}

function compare_ratinghi($l, $r)
{
    if ($l->rating > $r->rating) {
        return -1;
    }

    else if ($l->rating<$r->rating) {
        return 1;
    }
}

function compare_datenew($l, $r)
{
    if ($l->reviewCreatedOnDate> $r->reviewCreatedOnDate) {
        return -1;
    }

    else if ($l->reviewCreatedOnDate < $r->reviewCreatedOnDate) {
        return 1;
    }
}



$rating=$_GET["rating"];
$date=$_GET["date"];
$min_rating=$_GET["min_rating"];
$text=$_GET["text"];

$data = file_get_contents('reviews.json',true);
$string = str_replace("\xEF\xBB\xBF",'',$data);
$myarray = json_decode($string);

//var_dump($myarray);

/*for($x=0;$x<count($myarray);$x++)
{
    $temp=$myarray[$x];
    echo  $temp->reviewText ;
    echo "<br>";

}*/

$Filtered= array();
for ($x=0;$x<count($myarray);$x++)
{
    if($min_rating<=$myarray[$x]->rating)
    {
        array_push($Filtered,$myarray[$x]);
    }
}

usort($Filtered, "compare_datenew" );
usort($Filtered, "compare_ratinghi" );
usort($Filtered, "compare_textyes" );



for($x=0;$x<count($Filtered);$x++)
{

    echo  $Filtered[$x]->reviewText ;
    echo $Filtered[$x]->rating;
    echo $Filtered[$x]->reviewCreatedOnDate;
    echo "<br>";
}

?>



