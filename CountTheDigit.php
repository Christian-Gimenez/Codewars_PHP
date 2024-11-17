<?php
/**
 * Counts the number of times a digit "d" appears in the squares of integers from 0 to "n".
 *
 * @param int $n The upper bound number. It must be greater than or equal to 0.
 * @param int $d The digit to count. It must be between 0 and 9 (inclusive).
 * 
 * @return int|false If the input parameters do not meet the requirements, it returns false.
 *                   Otherwise, it returns the count of occurrences of digit $d in the squared numbers between 0 and $n.
 */
function nbDig(int $n, int $d): int|false {
  if ($n < 0 || $d < 0 || $d > 9) { 
    return false;
	}
	$count = 0;
	$dString = (string) $d;
  for($i = 0; $i <= $n; $i++) {
    $sqr = (string)$i * $i;
	$count += substr_count(haystack: $sqr, $dString);
  }
  return $count;
}