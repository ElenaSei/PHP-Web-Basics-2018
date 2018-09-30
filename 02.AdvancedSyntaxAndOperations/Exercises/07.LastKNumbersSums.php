<?php
$lenght = intval(readline());
            $k = intval(readline());

            $lastK = [];
            $lastK[0] = 1;

            for ($i = 1; $i < $lenght; $i++)
            {
                for ($l = $i; $l >= $i - $k && $l >= 0; $l--)
                {
                    $lastK[$i] += $lastK[$l];
                }

            }
            echo implode(' ', $lastK);

            //DOESN'T WORK