<?php
                                    $tdhaka = "SELECT * FROM `customrer` WHERE City ='Dhaka'; ";
                                    $dhak = mysqli_query($con, $tdhaka);
                                    $dhaka = mysqli_num_rows($dhak);
                                   

                                    
                                    $tkhulna = "SELECT * FROM `customrer` WHERE City ='Khulna'; ";
                                    $khul = mysqli_query($con, $tkhulna);
                                    $khulna = mysqli_num_rows($khul);
                                   

                                    
                                    $trajshahi = "SELECT * FROM `customrer` WHERE City ='Rajshahi'; ";
                                    $rajsha = mysqli_query($con, $trajshahi);
                                    $rajshahi = mysqli_num_rows($rajsha);
                                   

                                   
                                    $trangpur = "SELECT * FROM `customrer` WHERE City ='Rangpur'; ";
                                    $rang = mysqli_query($con, $trangpur);
                                    $rangpur = mysqli_num_rows($rang);



                                    $tbarishal = "SELECT * FROM `customrer` WHERE City ='Barishal'; ";
                                    $bari = mysqli_query($con, $tbarishal);
                                    $barishal = mysqli_num_rows($bari);

                                    $tchattigram = "SELECT * FROM `customrer` WHERE City ='Chattigram'; ";
                                    $chattig = mysqli_query($con, $tchattigram);
                                    $chattigram = mysqli_num_rows($chattig);



                                    $tsylhet = "SELECT * FROM `customrer` WHERE City ='Sylhet'; ";
                                    $sylhe = mysqli_query($con, $tsylhet);
                                    $sylhet = mysqli_num_rows($sylhe);


                                    $tmymenesing = "SELECT * FROM `customrer` WHERE City ='Mymenesing'; ";
                                    $mymenes = mysqli_query($con, $tmymenesing);
                                    $mymenesing = mysqli_num_rows($mymenes);
?>