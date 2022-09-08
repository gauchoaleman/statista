<?php
include "./fizzbuzz.php";
//This is the test string from https://bitbucket.org/statista/fizzbuzz/src/master/README.md
$test_str = "1\n2\nFizz\n4\nBuzz\nFizz\n7\n8\nFizz\nBuzz\n11\nFizz\n13\n14\nFizzBuzz\n16\n17\nFizz\n19\nBuzz";

$passed = true;
try {
    $result = FizzBuzz::get_fizzbuzz("\n");
    $passed = strpos($result,$test_str) === 0;
} catch (Exception $e) { 
    $passed = false;
}

echo $passed?'Test passed':'Test failed';
?>