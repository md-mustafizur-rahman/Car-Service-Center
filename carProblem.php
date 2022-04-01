<?php
                                    $tonlywash = "SELECT * FROM `cardetail` WHERE `Problem of car` ='Only For Wash'; ";
                                    $onlywas= mysqli_query($con, $tonlywash);
                                    $onlywash= mysqli_num_rows($onlywas);
                                   

                                    
                                    $tacproblem= "SELECT * FROM `cardetail` WHERE `Problem of car` ='AC Problem'; ";
                                    $acproble = mysqli_query($con, $tacproblem);
                                    $acproblem = mysqli_num_rows($acproble);


                                    $tstartproblem= "SELECT * FROM `cardetail` WHERE `Problem of car` ='Start Problem'; ";
                                    $startproble = mysqli_query($con, $tstartproblem);
                                    $startproblem = mysqli_num_rows($startproble );

                                    $tcngconversation= "SELECT * FROM `cardetail` WHERE `Problem of car` ='CNG Conversation'; ";
                                    $cngconversatio = mysqli_query($con, $tcngconversation);
                                    $cngconversation = mysqli_num_rows($cngconversatio);


                                    $tlightproblem= "SELECT * FROM `cardetail` WHERE `Problem of car` ='Light Problem'; ";
                                    $lightprobl = mysqli_query($con, $tlightproblem);
                                    $lightproblem = mysqli_num_rows($lightprobl);

                                    $ttirechange= "SELECT * FROM `cardetail` WHERE `Problem of car` ='Tire Change'; ";
                                    $tirechang = mysqli_query($con, $ttirechange);
                                    $tirechange= mysqli_num_rows($tirechang);
?>