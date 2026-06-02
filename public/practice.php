<?php

echo "Challenge A<br>";

for ($i = 1; $i <= 7; $i += 2) {
    echo str_repeat("*", $i) . "<br>";
}

echo "<br><br>";

echo "Challenge B<br>";

$inputString = "This is my car";
$charCount = [];

for ($i = 0; $i < strlen($inputString); $i++) {

    $char = $inputString[$i];

    if ($char == " ") {
        continue;
    }

    if (isset($charCount[$char])) {
        $charCount[$char]++;
    } else {
        $charCount[$char] = 1;
    }
}

foreach ($charCount as $char => $count) {
    echo $char . " - " . $count . "<br>";
}

echo "<br><br>";

echo "Challenge C<br>";

$inputString = "He!!o W@rld#123";

$cleanString = preg_replace(
    "/[^a-zA-Z0-9]/",
    "",
    $inputString
);

echo "Original: " . $inputString . "<br>";
echo "Cleaned: " . $cleanString . "<br>";

echo "<br><br>";

echo "Challenge D<br>";

$numbers = [1, 2, 3, 4, 5, 10, 20];

$total = array_sum($numbers);

echo "Sum: " . $total . "<br>";

echo "<br><br>";

echo "Challenge E<br>";

$num = 1;

for ($row = 1; $row <= 3; $row++) {

    echo str_repeat("&nbsp;", 4 - $row);

    for ($col = 1; $col <= $row; $col++) {

        echo $num . " ";
        $num++;
    }

    echo "<br>";
}

?>