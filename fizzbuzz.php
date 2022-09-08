<?php
abstract class FizzBuzz
{
    static function get_fizzbuzz($separator) {
        for ($i=1;$i<=100;$i++) {
            if ($i%3==0 && $i%5==0) {
                $ret .= "FizzBuzz$separator";
                continue;
            }
            if ($i%3==0) {
                $ret .= "Fizz$separator";
                continue;
            }
            if ($i%5==0) {
                $ret .= "Buzz$separator";
                continue;
            }
            $ret .= "$i$separator";
        }
        return $ret;
    }
}
?>