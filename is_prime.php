<?php
// Checks for prime numbers
function IsPrime($Num)
{
        $No = 0;
        for($CurrNum = 2; $CurrNum <= $Num; $CurrNum++)
        {
                for($Divisor = 2; $Divisor < $CurrNum; $Divisor++)
                {
                        $Res = $CurrNum / $Divisor;
                        if($Res != 1 && intval($Res) == $Res)
                        {
                                $No = 1;
                                $Divisor = $CurrNum;
                        }
                }
                if($No != 1)
                {
                        $Result = $CurrNum;
                }
                $No = 0;
        }
 
        // If the only divisor is the number itself, it's prime
        if($Result == $Num)
        {
                return TRUE;
        }
        else
        {
                return FALSE;
        }
}
 
?>