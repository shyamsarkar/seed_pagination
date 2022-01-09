<?php
include "number_word.php";
include "connection.php";
die;

for ($i = 0; $i < 1500; $i++) {
   $myNumber = rand(1, 9999) + (rand(10, 99) / 100);
   $in_words = ucwords(get_word($myNumber));
   if ($i % 100 == 0) {
      echo "<h1>" . $i . "</h1><br>";
      sleep(1);
   }
   $sql = "INSERT INTO `number_word`(`numbr`, `in_words`) VALUES ('$myNumber','$in_words')";
   $query = mysqli_query($con, $sql);
}
