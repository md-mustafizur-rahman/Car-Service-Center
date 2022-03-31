<?php
                                    $tbusiness = "SELECT * FROM `customrer` WHERE Designation ='Business'; ";
                                    $busine = mysqli_query($con, $tbusiness);
                                    $business = mysqli_num_rows($busine);
                                   

                                    
                                    $tstudent = "SELECT * FROM `customrer` WHERE Designation ='Student'; ";
                                    $stud = mysqli_query($con, $tstudent);
                                    $student = mysqli_num_rows($stud);
                                   

                                    
                                    $tgjob = "SELECT * FROM `customrer` WHERE Designation ='Government Job Holder'; ";
                                    $gj = mysqli_query($con, $tgjob);
                                    $gjob = mysqli_num_rows($gj);
                                   

                                   
                                    $tpjob = "SELECT * FROM `customrer` WHERE Designation ='Private Job Holder'; ";
                                    $pj = mysqli_query($con, $tpjob);
                                    $pjob = mysqli_num_rows($pj);
