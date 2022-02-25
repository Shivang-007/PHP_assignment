
<!-- Temperature Measurment Conversion  -->

<?php include 'links.php' ?>
<?php


if (isset($_POST["submit"])) {
    $input = $_POST['inputNumber'];       //takes input from user
    $output = $_POST['outputNumber'];      //give output
    $iParam = $_POST['InputParam'];         //iParam means input parameter ,input parameter which user has selected
    $oParam = $_POST['OutputParam'];        //oParam means Output parameter ,output parameter which user has selected
    switch ($iParam) {
        case "Celsius":
            if ($oParam == "Celsius") {
                $output = $input;
            } elseif ($oParam == "Kelvin") {
                $output = $input * 274.15;
            } elseif ($oParam == "Fahrenhit") {
                $output = $input * 33.8;
            }
            break;
        case "Kelvin":
            if ($oParam == "Celsius") {
                $output = $input * -272.15;
            } elseif ($oParam == "Kelvin") {
                $output = $input;
            } elseif ($oParam == "Fahrenhit") {
                $output = $input * -457.87;
            }
            break;
        case "Fahrenhit":
            if ($oParam == "Celsius") {
                $output = $input * -17.222222222;
            } elseif ($oParam == "Kelvin") {
                $output = $input * 255.92777778;
            } elseif ($oParam == "Fahrenhit") {
                $output = $input;
            }
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: linear-gradient(#ece9e6, #ffffff);
        }
    </style>
    <title>Temperature Measurement</title>
</head>

<body>
    <h2 class="text-center mt-5">Convert Mass and Weight Parameters</h2>
    <div class="container_conversion mx-auto">
        <form action="" method="post">

            <!-- From Part -->

            <b>From :</b>
            <input type="number" class="inputClass" name="inputNumber" value="<?php echo $input; ?>" required>
            <select name="InputParam" id="length-names">
                <option value="Celsius" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Celsius") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Celsius</option>
                <option value="Kelvin" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Kelvin") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Kelvin</option>
                <option value="Fahrenhit" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Fahrenhit") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Fahrenhit</option>


            </select>
            <br>
            <br> <!-- To Part -->
            <b>To:</b>
            <input type="number" class="OutputClass" name="outputNumber" value="<?php echo $output; ?>">
            <select name="OutputParam" id="length-names">
                <option value="Celsius" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Celsius") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Celsius</option>
                <option value="Kelvin" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Kelvin") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Kelvin</option>
                <option value="Fahrenhit" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Fahrenhit") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Fahrenhit</option>

            </select>
            <br>
            <br>
            <div class="button_container">
                <button type="submit" name="submit" class="btn btn-primary" id="submit">Convert</button>
                <button type="button" class="btn btn-primary" id="submit"><a href="index.php">Back to Home</a></button>
            </div>
        </form>
    </div>
</body>

</html>