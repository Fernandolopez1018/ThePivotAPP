<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>The Pivot App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Ranga|Sedgwick+Ave" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!--[if it IE9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> 
    <![endif]-->

</head>
<body>

    
    <?php 
?>
<div class="jumbotroncolor1">
    <h1><center>The Pivot App</center></h1>
<form action="index.php" method="post">
    <label for="formGroupExampleInput">Insert "HIGHEST PRICE"</label>
    <input type="text" name="theHigh" class="form-control" placeholder="Insert the High">
    </br>
    <label for="formGroupExampleInput">Insert "LOWEST PRICE"</label>
    <input type="text" name="theLow" class="form-control" placeholder="Insert the High">
    </br>
    <label for="formGroupExampleInput">Insert "THE CLOSE"</label>
    <input type="text" name="theClose" class="form-control" placeholder="Insert the Close">
    </br>
    <input type="submit" class="btn-lg button1 btn-block fas fa-phone">
    </br>
    </br>
    <input type="reset" class="btn-lg button1 btn-block fas fa-phone">
    </br>
</form>
</div>   

<?php         
    $High              = 0;
    $Low               = 0;
    $Close             = 0;
    if(isset($_POST['theHigh'],$_POST['theLow'],$_POST['theClose'])) {
            $High = $_POST['theHigh'];
            $Low = $_POST['theLow'];
            $Close = $_POST['theClose'];
    }   

    $DailyPivot = $High = $Low + $Close;
    $PreSecondNumber      = $High+$Low;
    $SecondNumber      = $PreSecondNumber /2 ;
    $PivotDifferential = $DailyPivot - $SecondNumber;
    $PivotRange1       = $DailyPivot + $PivotDifferential;
    $PivotRange2       = $DailyPivot - $PivotDifferential;

//echo "This is the Daily Pivot $DailyPivot";
//echo "<br>";
//echo "This is the Second Number $SecondNumber";
//echo "<br>";
//echo "This is the Pivot Differential $PivotDifferential";

?>

<div class="jumbotroncolor2">
</br>
    <h2><center><?php echo "This is the Pivot Range 1 (high) = $PivotRange1"; ?></center></h2>
</br>
</br>
    <h2><center><?php echo "This is the Pivot Range 2 (low) = $PivotRange2"; ?></center></h2>
</div>
 
</body>
</html>
