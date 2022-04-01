<?php
include "db_connect.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>
    <link rel="stylesheet" href="css/Dashboard.css">
</head>

<body>

    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="car"></ion-icon>
                        </span>
                        <span class="title">Car Shop</span>
                    </a>
                </li>

                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Category</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Report</span>
                    </a>
                </li>

        </div>


        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">

                </div>

            </div>


            <div class="content">
                <div class="category">
                    <div class="box">
                        <h1>Total User</h1>
                        <?php
                        $selectquery = "SELECT * FROM customrer ";
                        $query = mysqli_query($con, $selectquery);
                        $num = mysqli_num_rows($query);
                        echo "<h1>$num </h2>";
                        // res=mysqli_fetch_array(query);
                        // while ($res = mysqli_fetch_array($query)) {
                        //     echo $res['Name'];
                        // }
                        ?>

                    </div>
                    <div class="box">

                        <?php
                        $selectquery = "SELECT * FROM cardetail WHERE MONTH('4')";
                        $query = mysqli_query($con, $selectquery);
                        $num = mysqli_num_rows($query);
                        echo $num;
                        // res=mysqli_fetch_array(query);
                        // while ($res = mysqli_fetch_array($query)) {
                        //     echo $res['Name'];
                        // }
                        ?>
                    </div>





                    <div class="box">

                        <?php
                        $selectquery = "SELECT * FROM customrer ";
                        $query = mysqli_query($con, $selectquery);
                        $num = mysqli_num_rows($query);
                        echo $num;
                        // res=mysqli_fetch_array(query);
                        // while ($res = mysqli_fetch_array($query)) {
                        //     echo $res['Name'];
                        // }
                        ?>
                    </div>
                    <div class="box">

                        <?php
                        $selectquery = "SELECT * FROM customrer ";
                        $query = mysqli_query($con, $selectquery);
                        $num = mysqli_num_rows($query);
                        echo $num;
                        // res=mysqli_fetch_array(query);
                        // while ($res = mysqli_fetch_array($query)) {
                        //     echo $res['Name'];
                        // }
                        ?>
                    </div>



                </div>
                <div class="category">


                    <div id="box1">
                        <div>
                            <canvas id="myChart" style=" width: 500px;height: 400px;"></canvas>

                        </div>


                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


                        <script>
                            const labels = [
                                'Business',
                                'Givernment Job Holder',
                                'Private Job Holder',
                                'Student',
                            ];

                            const labelpie = [
                                'Dhaka',
                                'Khulna',
                                'Rajshahi',
                                'Chattigram',
                                'Barishal',
                                'Sylhet',
                                'Mymenesing',
                            ];


                            const data = {
                                labels: labels,
                                datasets: [{
                                    label: 'User Designation',
                                    backgroundColor: ["#00a3fe", "green", "orange", "black", ],

                                    <?php
                                    include "designation.php";
                                    ?>

                                    data: [<?php echo "$business" ?>, <?php echo "$gjob" ?>, <?php echo "$pjob" ?>, <?php echo "$student" ?>],
                                }]
                            };







                            const data1 = {
                                labels: labelpie,
                                datasets: [{
                                    label: 'Designation',
                                    backgroundColor: ["#00a3fe", "#ffbf00", "#9132a8", "#000000", "#0000ff", "green", "red"],

                                    <?php
                                    include "city.php";
                                    ?>

                                    data: [<?php echo "$dhaka" ?>, <?php echo "$khulna" ?>, <?php echo "$rajshahi" ?>, <?php echo "$chattigram" ?>, <?php echo "$barishal" ?>, <?php echo "$sylhet" ?>, <?php echo "$mymenesing" ?>],
                                }]
                            };





                            const config = {
                                type: 'bar',
                                data: data,
                                options: {}
                            };
                            const config1 = {

                                type: 'doughnut',
                                data: data1,
                                options: {}
                            };
                        </script>
                        <script>
                            const myChart = new Chart(
                                document.getElementById('myChart'),
                                config
                            );
                        </script>


                    </div>






                    <div id="box2">

                        <div>
                            <canvas id="pieChart"></canvas>
                        </div>

                        <script>
                            const pieChart = new Chart(
                                document.getElementById('pieChart'),
                                config1
                            );
                        </script>


                    </div>


                </div>

                <div class="category">
                    <script>
                        const labelline = [
                            'Only For Wash',
                            'AC Problem',
                            'Start Problem',
                            'CNG Conversation',
                            'light Problem',
                            'Tire Change',

                        ];


                        const data2 = {
                            labels: labelline,
                            datasets: [{
                                label: 'Car Problem',
                                backgroundColor: ["#00a3fe", "green", "orange", "black", ],

                                <?php
                                include "carProblem.php";
                                ?>


                                data: [<?php echo "$onlywash" ?>, <?php echo "$acproblem" ?>, <?php echo "$startproblem" ?>, <?php echo "$cngconversation" ?>, <?php echo "$lightproblem" ?>, <?php echo "$sylhet" ?>, <?php echo "$tirechange" ?>],
                            }]
                        };







                        const config2 = {

                            type: 'line',
                            data: data2,
                            options: {



                                display: true,
                                text: (ctx) => 'Point Style: ' + ctx.chart.data.datasets[0].pointStyle,



                            },
                        };
                    </script>


                    <div id="box3">
                        <div>
                            <canvas width="700px" id="lineChart"></canvas>
                        </div>

                        <script>
                            const lineChart = new Chart(
                                document.getElementById('lineChart'),
                                config2
                            );
                        </script>


                    </div>
                </div>
























                <section class="category">


                    <div id="box2">
                        <div>
                            <canvas id="duoChart" style=" width: 300px;height: 400px;"></canvas>

                        </div>




                        <script>
                            const labelduo = [
                                'Honda',
                                'TATA',
                                'BAJAJ',
                                'Toyota',
                                'Mazda',
                                'Audi',
                                'Ford',
                                'BMW',
                                'Mitsubishi',
                            ];




                            const data3 = {
                                labels: labelduo,
                                datasets: [{
                                    label: 'Designation',
                                    backgroundColor: ["#00a3fe", "green", "orange", "black",'red','#34e8eb','#eb34eb','#ebd234','#34eb8f'],

                                    <?php
                                    include "brand.php";
                                    ?>

                                    data: [<?php echo "$honda" ?>, <?php echo "$tata" ?>, <?php echo "$bajaj" ?>, <?php echo "$toyota" ?>, <?php echo "$mazda" ?>, <?php echo "$audi" ?>, <?php echo "$ford" ?>,<?php echo "$bmw" ?>,<?php echo "$mitsubishi" ?>],
                                }]
                            };


                           
                        const labelbar2 = [
                            'Jan.',
                            'Feb.',
                            'Mar.',
                            'Apr.',
                            'May.',
                            'Jun.',
                            'Jul.',
                            'Aug.',
                            'Sep.',
                            'Oct.',
                            'Nov.',
                            'Dec.'
                        ];

                            const data4 = {
                                labels: labelbar2,
                                datasets: [{
                                    label: 'Booking',
                                    backgroundColor: ["#00a3fe", "green", "orange", "black",'red','#34e8eb','#eb34eb','#ebd234','#34eb8f'],

                                    <?php
                                    include "brand.php";
                                    ?>

                                    data: [<?php echo "$honda" ?>, <?php echo "$tata" ?>, <?php echo "$bajaj" ?>, <?php echo "$toyota" ?>, <?php echo "$mazda" ?>, <?php echo "$audi" ?>, <?php echo "$ford" ?>,<?php echo "$bmw" ?>,<?php echo "$mitsubishi" ?>],
                                }]
                            };













                            const config3 = {
                                type: 'pie',
                                data: data3,
                                options: {}
                            };
                        
                            const config4 = {

                                type: 'bar',
                                data: data4,
                                options: {}
                            };
                        </script>
                        <script>
                            const duoChart = new Chart(
                                document.getElementById('duoChart'),
                                config3
                            );
                        </script>


                    </div>






                    <div id="box1">

                        <div>
                            <canvas id="lastChart" style=" width: 500px;height: 400px;"></canvas>
                        </div>



                        <script>
                            const lastChart = new Chart(
                                document.getElementById('lastChart'),
                                config4
                            );
                        </script>


                    </div>

                 



                      
                    </script>


                </section>

















            </div>
        </div>
    </div>










    <script src="js/main.js"></script>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>