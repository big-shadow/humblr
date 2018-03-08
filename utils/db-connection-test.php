<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
# uses extension=mysqli 

$dbname = 'ray_roomservicedev1';
$dbuser = 'ray_roomservice';
$dbpass = 'Roomservice123!';
$dbhost = 'mkybox.com';

//$dbname = 'roomservicedev';
//$dbuser = 'roomservice';
//$dbpass = 'Roomservice123!';
//$dbhost = 'sumac.websavers.ca';

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");
$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($link, $test_query);
$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}
if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}