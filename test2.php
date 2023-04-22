<?php
$url = 'https://lh5.googleusercontent.com/p/AF1QipOZfj4Rrpm20SMWjEOVYA23plS8SnXAK9FgMlLp=w260-h175-n-k-no';
// $destination = 'image.jpg';

$image = file_get_contents($url);

$imges = file_put_contents("image.jpg", $image);
echo $imges;
