<pre>

<?php
$employees = [
    'Beth' => 1030,
    'Tamekia' => 1800,
    'Nicolle' => 1200,
    'Stacee' => 2000,
    'Rex' => 1950,
    'Kecia' => 1750,
    'Estela' => 2000,
    'Karly' => 1050,
    'Ciara' => 1500,
    'Christopher' => 1200,
];

$minValue = min($employees);
$maxValue = max($employees);

echo "Max values: <br>";
foreach ($employees as $name => $value) {
	if ($value == $maxValue)
	{
		echo $name . ": " . $value . "<br>";
	}
}

echo "<br>Min values: <br>";
foreach ($employees as $name => $value) {
	if ($value == $minValue)
		echo $name . ": " . $value . "<br>";
}

$summ = 0;
foreach ($employees as $name => $value) {
	$summ += $value;
}

echo "<br>Summ of values: $summ<br>";

$sorted = $employees;
arsort($sorted);
var_dump($sorted);