<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Accept the Challenge!</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/jquery.countdown.css">
    <link rel="icon" href="img\cropped-Max-favicon2-01-01-32x32.png">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<style media="screen">
body{
    background: #131722;
    font-family: 'Poppins', sans-serif;
    overflow:hidden;
}

h1{
    color:white;
}

#outer {
    width: 100%;
    height: 85vh;
    display: flex;
}

#inner {
    margin: auto;
    color: white;
    text-align: center;
}

.time{
    color: white;
}

.is-countdown {
    border: none!important;
    background: none!important;
}

hr{
    /* color: white; */
    margin: 50px auto;
    height: 3px;
    border: none;
    background-color: white;
}

h6{
    color:white;
}
footer {
    display: flex;
    align-items: center;
    justify-content: center;
    color:white;
}

.pwidth{
    width: 510px;
}
</style>

<body class="text-center">

    <div class="container">
        <div class="row" style="margin-top: 30px">
            <br>
            <div class="col">
                <div id="outer" class="container">
                    <div id="inner">
                        <h4>Q2 - 90 Days Goal</h4>
                        <p class='pwidth'>Build a website with traffic. <br>
                            💡 At least $100 income <br>
                            💡 500 visitors monthly <br>
                            💡 100 active users
                        </p>
                        <hr />
                        <h4>Today is Day</h4>
                        <h4><?=$dayNumber = date("z") + 1; ?></h4>

                        <hr />
                        <h4>Day Left</h4>

                        <?php
                        function dateDiffInDays($startDay, $endDay){
                            $diff = strtotime($endDay) - strtotime($startDay);

                            // 1 day = 24 hours
                            // 24 * 60 * 60 = 86400 seconds
                            return abs(round($diff / 86400));
                        }
                        // $startDay = date("Y-m-d"); // today date
                        $startDay = "2022-04-01";
                        $endDay = "2022-06-29";
                        $dateDiff = dateDiffInDays($startDay, $endDay);

                        $dayLeft = $dateDiff ;

                        ?>

                        <h4><?=$dayLeft?></h4>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col">
                <div id="outer" class="container">
                    <div id="inner">
                        <!-- <h3>人生很短暂，而我还未到过三亚</h3> -->
                        <h3>今天很美好，可惜我却荒废青春</h3>
                        <hr />
                        <h3>Life Battery</h3>
                        <div class="time"></div>

                        <br>
                        <hr />
                        <h3>Lived</h3>
                        <div class="lived"></div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <footer class="mastfoot mt-auto">
                    <div class="inner">
                        <p>Powered by Max Liow @ Feb 2022. Version 0.2.2</p>
                    </div>
                </footer>
            </div>
        </div>
    </div><!--container-->
</div>

<script type="text/javascript" src="js/jquery.plugin.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
</body>

<script>
//countdown refer to http://keith-wood.name/countdown.html
$('.time').countdown({until: new Date(2078, 08-1, 07)});

$(".lived").countdown({since: new Date(1996, 06-1, 18), format: 'd'});

</script>
</html>
