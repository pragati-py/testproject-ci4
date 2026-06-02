<?php

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

?>