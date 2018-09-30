<?php
$nums = explode(' ', readline());
            $rotations = intval(readline());
            $sum = $my_array = array_fill(0, count($nums), 0);;

            for ($i = 0; $i < $rotations; $i++)
            {
                $last = $nums[count($nums) - 1];

                for ($k = count($nums) - 1; $k > 0; $k--)
                {
                    $nums[$k] = $nums[$k - 1];
                }
                $nums[0] = $last;

                for ($j = 0; $j < count($nums); $j++)
                {
                    $sum[$j] += $nums[$j];
                }

            }
            echo implode(' ', $sum);