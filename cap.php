<?php
                            $arr = array_merge(range("a","z"), range("A",  "Z"));
                            $captcha = "";
                           
                            for ($i = 1; $i <= 4; $i++) {
                                $ch =$arr[array_rand($arr)];
                                
                               
                                $captcha .= $ah;
                            }
                            echo $captcha; 
                            ?>