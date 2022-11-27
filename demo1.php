<?php
include_once 'common.php';
$score = rand(0, 100);
echo $score;
if ($score >= 85):
    echo '优秀';
elseif ($score >= 75):
    echo '良好';
elseif ($score >= 60):
    echo '及格';
else:
    echo '不及格';
endif;
?>