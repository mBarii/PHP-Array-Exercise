<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Arrays Exercise</title>
</head>
<body>
<?php

$weather = array("rain","sunshine","clouds","hail","sleet","snow","wind");

echo "<h2>"."PHP Arrays Ex. 1<br>"."</h2>";
echo "We've seen all kinds of weather this month. At the 
beginning of the month, we had $weather[5] and $weather[6]. Then 
came $weather[1] with a few $weather[2] and some $weather[0]. At least 
we didn't get any $weather[3] or $weather[4].<br><br>";

echo "<h2>"."PHP Arrays Ex. 2<br>"."</h2>";
$city = array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London");

foreach ($city as $value) {
    echo "$value, ";
}
echo "<br><br>";

?>

<p>

<?php
echo "<h4>"."Created an array, sorted and listed in unordered fashion.<br><br>"."</h4>";
sort($city);
echo "<ul>";
foreach ($city as $value) {
    echo "<li>".$value."</li>"."<br>";
}	

?></p>

<p>
<?php
echo "<h4>"."Added a few cities and sorted afterwards.<br><br>"."</h4>";
array_push($city,"Los Angeles","Calcutta","Osaka","Beijing");
sort($city);

echo "<ul>";
foreach ($city as $value) {
    echo "<li>".$value."</li>"."<br>";
}
 ?></p>


</body>
</html>

