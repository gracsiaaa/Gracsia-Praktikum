<!DOCTYPE html>
<html>

<head>
  <title>LATIHAN 8 PEMROGRAMAN WEB</title>
</head>

<body>

  <?php
  #CARA PERTAMA MENDEKLARASIKAN ARRAY 1 DIMENSI
  print "CARA PERTAMA MENDEKLARASIKAN ARRAY 1 DIMENSI: <br/>";
  $kota[0] = "Surakarta";
  $kota[1] = "Makasar";
  $kota[2] = "Palembang";
  print "Kota $kota[1] adalah kota $kota[2]"; //PRINT ADALAH CARA LAIN MENCETAK SELAIN ECHO
  echo "<hr/><hr/><br/>";

  #CARA KEDUA MENDEKLARASIKAN ARRAY 1 DIMENSI
  print "CARA KEDUA MENDEKLARASIKAN ARRAY 1 DIMENSI: <br/>";
  $kota2 = array("Manado", "Balikpapan", "Surabaya");
  print "Kota $kota2[0] adalah kota $kota2[2]";
  echo "<hr/><hr/><br/>";

  #CARA KETIGA MENGGUNAKAN ARRAY DENGAN INDEX BUKAN ANGKA
  print "CARA KETIGA MENDEKLARASIKAN ARRAY 1 DIMENSI: <br/>";
  $ibukota = array("JBR" => "Bandung", "JTM" => "Semarang", "SBY" => "Surabaya");
  echo "Ibukota JBR adalah Kota " . $ibukota['JBR'];

  ?>
</body>

</html>