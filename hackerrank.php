<?php
/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

/*
 * Complete the timeConversion function below.
 */
function timeConversion($s) {
    /*
     * Write your code here.
     */
    return date("H:i:s", strtotime($s));
}
echo timeConversion("07:05:45PM");