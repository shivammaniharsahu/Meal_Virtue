<?php 
$conn = mysqli_connect("localhost", "root", "", "suraksha"); 


if(isset($_POST['harash_contact']))
{
    $email = "champa@gmail.com";
    $hname = $_POST['name'];
    $hsname = $_POST['surname'];
    $hphone = $_POST['phone_no'];
    $hfrequency = $_POST['frequency'];
    $hcontext = $_POST['context'];
    $ha_rating = $_POST['a_rating'];
    $hh_rating = $_POST['h_rating'];
    $facebook_handle = $_POST['facebook_handle'];
    $insta_handle = $_POST['insta_handle'];

    $sql = "INSERT INTO `spammers`(`user_mail`,`firstname`,`lastname`,`facebook_handle`, `insta_handle` , `phone_no`, `frequency`, `context`, `a_rating`, `h_rating`)
    VALUES ('$email','$hname','$hsname','$facebook_handle','$insta_handle','$hphone','$hfrequency','$hcontext','$ha_rating','$hh_rating');";
    $result = mysqli_query($conn, $sql);

    $sql = "SELECT * FROM `spammers` where `phone_no` = '$hphone' OR `insta_handle` = '$insta_handle' OR `facebook_handle`='$facebook_handle'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    echo $num.'<br>';
    if($num)
    {
       $row = mysqli_fetch_assoc($result);
       $frequency = 1 + $row['comp_frequency'];
       $sql = "UPDATE `spammers` SET `comp_frequency` ='$frequency' WHERE `phone_no` = '$hphone' OR `insta_handle` = '$insta_handle' OR `facebook_handle`='$facebook_handle'";
       mysqli_query($conn, $sql);
    }
   
    
    if($result)
    {echo '<script>console.log("successfull")</script>';}
    else
    {echo "blal bla";}

    echo "
    <script>
    alert('Thankyou for your co-operation.    Your complain is being successfully registered!!    Police cyber cell will look into the case');
    </script>
    ";               
}

?>


<?php
 $conn = mysqli_connect("localhost", "root", "", "suraksha");
 
$result = mysqli_query($conn, "SELECT DISTINCT `facebook_handle` FROM spammers");
 $facebooknum = mysqli_num_rows($result);
 $result = mysqli_query($conn, "SELECT DISTINCT `insta_handle` FROM spammers");
 $instagrannum = mysqli_num_rows($result);
 $result = mysqli_query($conn, "SELECT DISTINCT `phone_no` FROM spammers");
 $phonenum   =   mysqli_num_rows($result);
 $phonepercent = $phonenum/($phonenum + $instagrannum + $facebooknum);
 $instapercent = $instagrannum/($phonenum + $instagrannum + $facebooknum);
 $facepercent = $facebooknum/($phonenum + $instagrannum + $facebooknum);
 $dataPoints = array( 
     array("label"=>"facebook", "y"=>$facepercent*100),
     array("label"=>"instagram", "y"=>$instapercent*100),
     array("label"=>"phone calls", "y"=>$phonepercent*100),
 );

$result = mysqli_query($conn, "SELECT DISTINCT `phone_no` from spammers GROUP BY `phone_no` 
                         ORDER BY MAX(`comp_frequency`) ASC, `phone_no`");
 
    $dataPoints1 = array(); 
        while($row = mysqli_fetch_assoc($result))
       { 
           $dummy = $row['phone_no'];
           $res = mysqli_query($conn, "SELECT * FROM spammers WHERE `phone_no`='$dummy'");
           $res = mysqli_fetch_assoc($res);
           $comp_frequency =  $res['comp_frequency'];
           if($comp_frequency>=5)
	array_push($dataPoints1, array("y" => $comp_frequency,"label" => $row['phone_no']));
       }

$result = mysqli_query($conn, "SELECT DISTINCT `insta_handle` from spammers GROUP BY `insta_handle` 
       ORDER BY MAX(`comp_frequency`) ASC, `insta_handle`");

        $dataPoints2 = array(); 
        while($row = mysqli_fetch_assoc($result))
        { 
        $dummy = $row['insta_handle'];
        $res = mysqli_query($conn, "SELECT * FROM spammers WHERE `insta_handle`='$dummy'");
        $res = mysqli_fetch_assoc($res);
        $comp_frequency =  $res['comp_frequency'];
        if($comp_frequency>=5)
        array_push($dataPoints2, array("y" => $comp_frequency,"label" => $row['insta_handle']));
        } 
        
$result = mysqli_query($conn, "SELECT DISTINCT `facebook_handle` from spammers GROUP BY `facebook_handle` 
        ORDER BY MAX(`comp_frequency`) ASC, `facebook_handle`");

        $dataPoints3 = array(); 
        while($row = mysqli_fetch_assoc($result))
        { 
        $dummy = $row['facebook_handle'];
        $res = mysqli_query($conn, "SELECT * FROM spammers WHERE `facebook_handle`='$dummy'");
        $res = mysqli_fetch_assoc($res);
        $comp_frequency =  $res['comp_frequency'];
        if($comp_frequency>=5)
        array_push($dataPoints3, array("y" => $comp_frequency,"label" => $row['facebook_handle']));
        }

?>

<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
        text: "Spammers active in phone calls, instagram, and facebook"
    },
    subtitles: [{
        text: "Data upto present day"
    }],
    data: [{
        type: "pie",
        yValueFormatString: "#,##0.00\"%\"",
        indexLabel: "{label} ({y})",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();

var chart1 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	title:{
		text: "BLACK LISTED PHONE CALLS"
	},
	axisY: {
		title: "Frequency of report",
		includeZero: true,
		prefix: "",
		suffix:  ""
	},
	data: [{
		type: "bar",
		yValueFormatString: "#,##0",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart1.render();

var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
	title:{
		text: "BLACK LISTED FACEBOOK HANDLES"
	},
	axisY: {
		title: "Frequency of report",
		includeZero: true,
		prefix: "",
		suffix:  ""
	},
	data: [{
		type: "bar",
		yValueFormatString: "#,##0",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
    }
]
});
chart3.render();

var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title:{
		text: "BLACK LISTED INSTAGRAM HANDLES"
	},
	axisY: {
		title: "Frequency of report",
		includeZero: true,
		prefix: "",
		suffix:  ""
	},
	data: [{
		type: "bar",
		yValueFormatString: "#,##0",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();
}
</script>