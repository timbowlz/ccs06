<?php
// 1. Grading List (If-Elseif-Else)
$score = 86;
if ($score >= 90) {
    echo "Grade: A <br>";
} elseif ($score >= 0) {
    echo "Grade: B <br>" ;
} else {
    echo "Grade: C <br>";
}

// 2. Strict (===) vs. Loose (==)
$user = "42";
if ($user === 42) {
    echo "Strict: Match! <br>";
} elseif ($user == 42) {
    echo "Loose: Match! <br>";
}

// 3. Logical Operators
$isMember = true;
$total = 101;
if ($isMember && $total > 100) {
    echo "Discount Applied <br>";
}
?>