<?php
//To calculate the day left dynamically
function dateDiffInDays($startDay, $endDay){
	$diff = strtotime($endDay) - strtotime($startDay);

	// 1 day = 24 hours
	// 24 * 60 * 60 = 86400 seconds
	return abs(round($diff / 86400));
}
$startDay = date("Y-m-d"); // today date
// $startDay = "2022-04-01";
$endDay = "2022-09-27";
$dateDiff = dateDiffInDays($startDay, $endDay);

$dayLeft = $dateDiff ;

/**-----------------------*/
//Get the two dates to put in the inner square
function getBetweenDates($startDate, $endDate){
	$rangArray = [];

	$startDate = strtotime($startDate);
	$endDate = strtotime($endDate);

	for (
		$currentDate = $startDate;
		$currentDate <= $endDate;
		$currentDate += (86400)
	){
		$date = date('d-m-Y', $currentDate);
		$rangArray[] = $date;
	}

	return $rangArray;
}

$dates = getBetweenDates('30-06-2022', '27-09-2022');

for ($i=0; $i < 90; $i++) {
	$rangeDate = explode('-', $dates[$i]);
	$date = $rangeDate[0] . "/" . $rangeDate[1];
	$dateArr[$i] = $date;
}
?>

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
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/jquery.countdown.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" crossorigin="anonymous"></script>

    <link rel="icon" href="img\cropped-Max-favicon2-01-01-32x32.png">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body class="text-center">

    <div class="container">
        <div class="row" style="margin-top: 30px">
            <br>
			<div class="col-12 col-sm-12 col-md ">
                <div id="outer" class="container">
                    <div id="inner">
                        <h5>We <span>become what we think about</span>
							<br>
							most of the time.
						</h5>

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

            <div class="col-12 col-sm-12 col-md-7">
                <div id="outer" class="container">
                    <div id="inner">

						<h5>Day Left</h5>
                        <h4><?=$dayLeft?></h4>
						<input id="day_left" type="hidden" value="<?=$dayLeft?>">

						<div id="square">
							<?php

							echo "<table border =\"1\" style='border-collapse: collapse'>";
							$no = 91;
							$innerSquareNo = 0;
							for ($row=1; $row <= 9; $row++) {
								echo "<tr id='row-$row'> \n";
								for ($col=1; $col <= 10; $col++) {
									$no = $no - 1;
									echo "<td id='day-$no' class=''>
									<span>$no</span>
									<span class='date'>$dateArr[$innerSquareNo]</span>
									</td> \n";
									$innerSquareNo = $innerSquareNo + 1;
								}
								echo "</tr>";
							}
							echo "</table>";
							?>
						</div>
						<h6 class="right">Day <?=$dayNumber = date("z") + 1; ?> of the year</h6>
						<!-- <h6 class="right small-font">End date: 27-09-22</h6> -->
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <footer class="mastfoot mt-auto">
                    <div class="inner">
                        <p>Powered by Max Liow @ July 2022. Version 0.3.0</p>
                    </div>
                </footer>
            </div>
        </div>
    </div><!--container-->
</div>

<script type="text/javascript" src="js/jquery.plugin.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>

<script>
//countdown refer to http://keith-wood.name/countdown.html
$('.time').countdown({until: new Date(2078, 08-1, 07)});

$(".lived").countdown({since: new Date(1996, 06-1, 18), format: 'd'});

/*--------------- Underline month quarter ------------------*/
$('#row-3, #row-6').addClass('underline');


/*--------------- Day left square ------------------*/

var day_left = parseInt($('#day_left').val()); // Day left from php
var day_active = day_left + 2;
var result = range(day_active, 90); // calculate the date before today -> add active

$('#day-'+ (day_left+1)).addClass('today'); // highlight today

//Add active to previous days
for (var i = 0; i < result.length; i++) {
	$('#day-'+result[i]).addClass('active');
}

/*--------------- function ------------------*/

// get all the number from the different of today, and 90 days
function range(start, end) {
  return Array(end - start + 1).fill().map((_, idx) => start + idx)
}

</script>

</body>
</html>
