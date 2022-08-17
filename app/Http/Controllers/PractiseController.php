<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PractiseController extends Controller
{
    public function calPoints($ops)
    {
        $newArray = [];
        $totalScore = 0;
        foreach ($ops as $key => $op) {
            if ($op === "C") {
                $popped = array_pop($newArray);
                $totalScore = $totalScore - intval($popped);
            } elseif ($op === "D") {
                $end = intval(end($newArray));
                $doubled = 2 * $end;
                $newArray[] = $doubled;
                $totalScore = $totalScore + $doubled;
            } elseif ($op === "+") {
                $end = end($newArray);
                $prev = prev($newArray);
                $sum = intval($end) + intval($prev);
                $newArray[] = $sum;
                $totalScore = $totalScore + $sum;
            } elseif ($op === "9") {
                $newArray[] = 9;
                $totalScore = $totalScore + 9;
            } else {
                $newArray[] = intval($op);
                $totalScore += $op;
            }
        }
        return $totalScore;
    }
}
