<!-- 
  Date    : 16-Agt-2021
  Author  : syukron488@gmail.com 
  Title   : PHP Dasar 
-->
<html>

<head>
  <title>PHP Dasar</title>
</head>

<body>
  <p>PHP Dasar</p>
  <p>Nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86"</p>
  <?php
  $nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
  $expNilai = explode(' ', $nilai);
  $countVal = count($expNilai);


  // Rata-rata
  $sumNilai = array_sum($expNilai);
  $nilaiRatarata = $sumNilai / $countVal;

  // 7 nilai tertinggi
  sort($expNilai, SORT_NUMERIC);
  $maxValue = array_slice($expNilai, -7, 7, true);
  $fixMaxValue = implode(',', $maxValue);

  // 7 Nilai Terendah
  $minValue = array_slice($expNilai, 0, 7, true);
  $fixMinValue = implode(',', $minValue);

  echo "<br /> 1. Nilai Rata-rata= " . round($nilaiRatarata, 2);
  echo "<br />2. 7 Nilai tertinggi = " . $fixMaxValue;
  echo "<br />3. 7 Nilai terendah dari nilai-nilai di atas = " . $fixMinValue;
  ?>
</body>

</html>