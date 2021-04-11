<html>
<div>

    Order by rating: <?php echo $_GET["rating"];?>
    Order by date: <?php echo $_GET["date"];?>
    Order by minimum rating: <?php echo $_GET["min_rating"];?>
    Order by text: <?php echo $_GET["text"];?>

</div>


<?php

$data = file_get_contents('reviews.json',true);

$string = str_replace("\xEF\xBB\xBF",'',$data);

$myarray = json_decode($string);

//var_dump($myarray);

for($x=0;$x<count($myarray);$x++)
{
    var_dump($myarray[$x]);
    echo "<br>";

}
?>
</html>

class Review
{
    public $id = 0;
    public $reviewId = "";
    public $reviewFullText = "";
    public $reviewText = "";
    public $numLikes = 0;
    public $numComments = 0;
    public $numShares = 0;
    public $rating = 0;
    public $reviewCreatedOn = "";
    public $reviewCreatedOnDate;//"reviewCreatedOnDate": "2021-01-25T13:00:35+00:00",
    public $reviewCreatedOnTime = 0; //  $timestamp = 1394003958; echo(date("F d, Y h:i:s", $timestamp));
    public $reviewerId = null;
    public $reviewerUrl = null;
    public $reviewerName = "";
    public $reviewerEmail = null;
    public $sourceType = "";
    public $isVerified = false;
    public $source = "";
    public $sourceName = "";
    public $sourceId = "";
    public $tags = [];
    public $href = null;
    public $logoHref = null;
    public $photos = [];
}
?>

