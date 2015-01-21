<?php
function compare($grade,$temp)
{
    $compare = array_diff_assoc($grade[0],$temp[0]);
    if ($compare != null) {
        return $grade;
    }
}