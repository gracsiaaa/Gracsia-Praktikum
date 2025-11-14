<!DOCTYPE html>
<html>

<head>
  <title>LATIHAN 9 PEMROGRAMAN WEB</title>
</head>

<body>
  <?php
  #CARA PERTAMA MENDEKLARASIKAN ARRAY MULTIDIMENSI
  print "CARA PERTAMA MENDEKLARASIKAN ARRAY MULTIDIMENSI: <br/>";
  $buah = array(
    "apel" => array("rasa" => "manis", "warna" => "merah"),
    "jeruk" => array("rasa" => "asam", "warna" => "kuning"),
    "pisang" => array("rasa" => "manis", "warna" => "kuning")
  );
  print "Buah apel rasanya " . $buah["apel"]["rasa"];
  print " dan warnanya " . $buah["apel"]["warna"] . ".<br/>";
  print "Warna buah pisang adalah " . $buah["pisang"]["warna"] . ".<br/>";
  print "Buah jeruk rasanya " . $buah["jeruk"]["rasa"];

  echo "<hr/><hr/><br/>";

  #CARA KEDUA MENDEKLARASIKAN ARRAY MULTIDIMENSI
  print "CARA KEDUA MENDEKLARASIKAN ARRAY MULTIDIMENSI: <br/>";
  $buah1 = array(
    array("apel", "merah", "manis"),
    array("jeruk", "kuning", "asam"),
    array("pisang", "kuning", "manis")
  );

  echo "Buah " . $buah1[0][0] . " warnanya " . $buah1[0][1] . " rasa " . $buah1[0][2] . ".<br/>";
  echo "Buah " . $buah1[1][0] . " warnanya " . $buah1[1][1] . " rasa " . $buah1[1][2] . ".<br/>";
  ?>
</body>

</html>