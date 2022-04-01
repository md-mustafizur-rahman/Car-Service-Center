<?php
                                    $thonda = "SELECT * FROM `cardetail` WHERE Brand ='Honda'; ";
                                    $hond = mysqli_query($con, $thonda);
                                    $honda = mysqli_num_rows($hond);


                                    $ttata = "SELECT * FROM `cardetail` WHERE Brand ='TATA'; ";
                                    $tat = mysqli_query($con, $ttata);
                                    $tata = mysqli_num_rows($tat);

                                    $tbajaj = "SELECT * FROM `cardetail` WHERE Brand ='BAJAJ'; ";
                                    $baja= mysqli_query($con, $tbajaj);
                                    $bajaj= mysqli_num_rows($baja);
                                   
                                    $ttoyota = "SELECT * FROM `cardetail` WHERE Brand ='Toyota'; ";
                                    $toyot= mysqli_query($con, $ttoyota);
                                    $toyota= mysqli_num_rows($toyot);
                                   
                                    $tmazda = "SELECT * FROM `cardetail` WHERE Brand ='Mazda'; ";
                                    $mazd= mysqli_query($con, $tmazda);
                                    $mazda= mysqli_num_rows($mazd);

                                    $taudi = "SELECT * FROM `cardetail` WHERE Brand ='Audi'; ";
                                    $aud= mysqli_query($con, $taudi);
                                    $audi= mysqli_num_rows($aud);

                                    $tford = "SELECT * FROM `cardetail` WHERE Brand ='Ford'; ";
                                    $fore= mysqli_query($con, $tford);
                                    $ford= mysqli_num_rows($fore);
                                   
                                    $tbmw = "SELECT * FROM `cardetail` WHERE Brand ='BMW'; ";
                                    $bm= mysqli_query($con, $tbmw);
                                    $bmw= mysqli_num_rows($bm);
                                   
                                    $tmitsubishi = "SELECT * FROM `cardetail` WHERE Brand ='Mitsubishi'; ";
                                    $mitsubish= mysqli_query($con, $tmitsubishi);
                                    $mitsubishi= mysqli_num_rows($mitsubish);
