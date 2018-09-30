<?php
$nums = explode(' ', readline());
            $condensed = [];

            if (count($nums) == 1)
            {
                echo $nums[0];
                return;
            }
            for ($i = 0; $i < count($nums); $i++)
            {
                for ($k = 0; $k < count($nums) - 1; $k++)
                {
                    $condensed[$k] = $nums[$k] + $nums[$k + 1];
                }
                $nums = $condensed;
            }
            echo $condensed[0];