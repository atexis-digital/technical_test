<?php

namespace App\Service;

class InterviewFile06
{

    /** Refactor this code to make it more legible */
    function function06($entrada)
    {
        $a = explode(",", $entrada);
        for ($i = 0; $i < count($a); $i++) {
            if ($a[$i] % 2 == 0) {
                $a[$i] = $a[$i] * 2;
            } else {
                $a[$i] = $a[$i] + 1;
            }
        }
        $b = "";
        for ($j = 0; $j < count($a); $j++) {
            if ($j % 2 == 0) {
                $b .= $a[$j] . "-";
            } else {
                $b .= $a[$j] . "_";
            }
        }
        $b = rtrim($b, "-_");
        return strtoupper(str_replace("_", "X", $b));
    }

}