<?php
$count = 1;
while ($count < 101) {
  if ($count % 15 === 0) {
    echo "FizzBuzz\n";
  } elseif ($count % 3 === 0) {
    echo "Fizz\n";
  } elseif ($count % 5 === 0) {
    echo "Buzz\n";
  } else {
    echo $count;
    echo "\n";
  }
    $count++;
}

$output = [];
for ($i = 1; $i < 101; $i++) {
    if ($i % 15 === 0) {
    array_push($output, "FizzBuzz");
  } elseif ($i % 3 === 0) {
    array_push($output, "Fizz");
  } elseif ($i % 5 === 0) {
    array_push($output, "Buzz");
  } else {
    array_push($output, $i);
  }
}
foreach ($output as $value) {
  echo $value . "\n";
}

foreach ($output as $value) {
  if ($value === "Fizz") {
    continue;
  } elseif ($value === "FizzBuzz") {
    echo $value;
    break;
  } else {
    echo $value . "\n";
  }
}