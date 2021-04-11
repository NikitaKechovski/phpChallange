<?php

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
    else return 0;
}

function compare_ratinglo($l, $r)
{
    if ($l->rating < $r->rating) {
        return -1;
    }

    else if ($l->rating > $r->rating) {
        return 1;
    }
    else return 0;
}

function compare_datenew($l, $r)
{
    if ($l->reviewCreatedOnDate> $r->reviewCreatedOnDate) {
        return -1;
    }

    else if ($l->reviewCreatedOnDate < $r->reviewCreatedOnDate) {
        return 1;
    }
    else return 0;

}

function compare_dateold($l, $r)
{
    if ($l->reviewCreatedOnDate < $r->reviewCreatedOnDate) {
        return -1;
    }

    else if ($l->reviewCreatedOnDate > $r->reviewCreatedOnDate) {
        return 1;
    }
    else return 0;

}



$rating=$_GET["rating"];
$date=$_GET["date"];
$min_rating=$_GET["min_rating"];
$text=$_GET["text"];

$data = file_get_contents('reviews.json',true);
$string = str_replace("\xEF\xBB\xBF",'',$data);
$myarray = json_decode($string);



$Filtered= array();
for ($x=0;$x<count($myarray);$x++)
{
    if($min_rating<=$myarray[$x]->rating)
    {
        array_push($Filtered,$myarray[$x]);
    }
}


if ($date=="new")
{
    usort($Filtered, "compare_datenew" );
}
else
{
    usort($Filtered, "compare_dateold" );
}
if($rating=="high")
{
    usort($Filtered, "compare_ratinghi" );
}
else
{
    usort($Filtered, "compare_ratinglo" );
}
if($text=="true")
{
    usort($Filtered, "compare_textyes" );
}



for($x=0;$x<count($Filtered);$x++)
{

    echo  $Filtered[$x]->reviewText ;
    echo $Filtered[$x]->rating;
    echo $Filtered[$x]->reviewCreatedOnDate;
    echo "<br>";
}

?>



