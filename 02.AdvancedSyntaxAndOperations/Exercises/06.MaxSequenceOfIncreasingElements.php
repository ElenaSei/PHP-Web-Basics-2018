<?php
$nums = explode(' ', readline());

            $firstPosition = 0;
            $length = 1;
            $maxLength = 0;

            for ($i = count($nums) - 1; $i > 0; $i--)
            {

                if ($nums[$i] - $nums[$i - 1] >= 1)
                {
                    $length++;
                }
                else
                {
                    $length = 1;
                }
                if ($length >= $maxLength)
                {
                    $maxLength = $length;
                    $firstPosition = $i - 1;
                }

            }

            for ($i = $firstPosition; $i < $maxLength + $firstPosition; $i++)
            {
                echo $nums[$i] . " ";
            }