

<!-- Home Page -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php include 'links.php' ?>    <!--for bootstrap,css etc -->
    <style>
        body,html{
            height: 100%;
            margin:0px;
            background: linear-gradient(#b2fefa,#0ed2f7); 
            background-repeat: no-repeat;
            background-position:fixed;
        }
        
    </style>
    <title>Unit Converter</title>
</head>

<body>
    
    <h1 class="text-center">Measurment Conversion</h1>
    <div class="container col-lg-6 mx-auto">
        <button type="button" class="btn btn-light"><i class="fa-solid fa-ruler-combined"></i><a href="Length_conversion.php">Length and Distance</a></button>
        <button type="button" class="btn btn-light"><i class="fa-solid fa-chart-area"></i><a href="Area_conversion.php">Area</a></button>
        <button type="button" class="btn btn-light"><i class="fa-solid fa-cube"></i><a href="Volume_conversion.php">Volume and Capacity</a></button>
        <button type="button" class="btn btn-light"><i class="fa-solid fa-weight-scale"></i><a href="weight_conversion.php">Mass and Weight</a></button>
        <button type="button" class="btn btn-light"><i class="fa-solid fa-gauge-high"></i><a href="Speed_conversion.php">Speed</a></button>
        <button type="button" class="btn btn-light"><i class="fa-solid fa-temperature-full"></i><a href="Temperature_conversion.php">Temperature</a></button>
    </div>
    
</body>

</html>