<?php

$input = trim(stream_get_contents(STDIN));
$parts = preg_split('/\s+/', $input);

if (count($parts) < 2) {
    fwrite(STDERR, "Введите, пожалуйста, число");
    exit(1);
}

$aRaw = $parts[0];
$bRaw = $parts[1];

$a = filter_var($aRaw, FILTER_VALIDATE_INT);
$b = filter_var($bRaw, FILTER_VALIDATE_INT);

if ($a === false || $b === false) {
    fwrite(STDERR, "Введите, пожалуйста, число");
    exit(1);
}

if ((int)$b === 0) {
    fwrite(STDERR, "Делить на 0 нельзя");
    exit(1);
}

echo ($a / $b);
