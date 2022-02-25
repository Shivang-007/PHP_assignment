<!-- Length Measurment Conversion  -->


<?php include 'links.php' ?>
<?php


if (isset($_POST["submit"])) {
    $input = $_POST['inputNumber'];         //takes input from user
    $output = $_POST['outputNumber'];       //Give Output
    $iParam = $_POST['InputParam'];         //iParam means input parameter ,input parameter which user has selected
    $oParam = $_POST['OutputParam'];         //oParam means Output parameter ,Output parameter which user has selected


    switch ($iParam) {
        case "Kilometer":                //when Kilometer is selected as input in dropdown
            if ($oParam == "Kilometer") {       //when Kilometer is selected as output in dropdown
                $output = $input;
            } elseif ($oParam == "Meter") {        //when meter is selected as output in dropdown
                $output = $input * 1000;
            } elseif ($oParam == "Centimeter") { //when Centimeter is selected as output in dropdown
                $output = $input * 100000;
            } elseif ($oParam == "Milimeter") {  //when Milimeter is selected as output in dropdown
                $output = $input * 1000000;
            } elseif ($oParam == "Micrometer") {   //when Microometer is selected as output in dropdown
                $output = $input * 1000000000;
            } elseif ($oParam == "Nanometer") {  //when nanometer is selected as output in dropdown
                $output = $input * 1000000000000;
            } elseif ($oParam == "Mile") {     //when Mile is selected as output in dropdown
                $output = $input * 0.6214;
            } elseif ($oParam == "Yard") {       //when Yard is selected as output in dropdown
                $output = $input * 1093.613298;
            } elseif ($oParam == "Foot") {       //when Foot is selected as output in dropdown
                $output = $input * 3280.84;
            } elseif ($oParam == "Inch") {         //when Inch is selected as output in dropdown
                $output = $input * 39370.07874;
            }
            break;

            // All Of the Following are as Above

        case "Meter":
            if ($oParam == "Kilometer") {
                $output = $input / 1000;
            } elseif ($oParam == "Meter") {
                $output = $input;
            } elseif ($oParam == "Centimeter") {
                $output = $input * 100;
            } elseif ($oParam == "Milimeter") {
                $output = $input * 1000;
            } elseif ($oParam == "Micrometer") {
                $output = $input * 1000000;
            } elseif ($oParam == "Nanometer") {
                $output = $input * 1000000000;
            } elseif ($oParam == "Mile") {
                $output = $input * 0.000621371;
            } elseif ($oParam == "Yard") {
                $output = $input * 1.09361;
            } elseif ($oParam == "Foot") {
                $output = $input * 3.28084;
            } elseif ($oParam == "Inch") {
                $output = $input * 39.3701;
            }
            break;
        case "Centimeter":
            if ($oParam == "Kilometer") {
                $output = $input / 100000;
            } elseif ($oParam == "Meter") {
                $output = $input / 100;
            } elseif ($oParam == "Centimeter") {
                $output = $input;
            } elseif ($oParam == "Milimeter") {
                $output = $input * 10;
            } elseif ($oParam == "Micrometer") {
                $output = $input * 10000;
            } elseif ($oParam == "Nanometer") {
                $output = $input * 10000000;
            } elseif ($oParam == "Mile") {
                $output = $input * 6.21371e-6;
            } elseif ($oParam == "Yard") {
                $output = $input * 0.0109361;
            } elseif ($oParam == "Foot") {
                $output = $input * 0.0328084;
            } elseif ($oParam == "Inch") {
                $output = $input * 0.393701;
            }
            break;
        case "Milimeter":
            if ($oParam == "Kilometer") {
                $output = $input / 1000000;
            } elseif ($oParam == "Meter") {
                $output = $input * 1000;
            } elseif ($oParam == "Centimeter") {
                $output = $input * 10;
            } elseif ($oParam == "Milimeter") {
                $output = $input;
            } elseif ($oParam == "Micrometer") {
                $output = $input * 1000;
            } elseif ($oParam == "Nanometer") {
                $output = $input * 1000000;
            } elseif ($oParam == "Mile") {
                $output = $input * 6.21371e-7;
            } elseif ($oParam == "Yard") {
                $output = $input * 0.00109361;
            } elseif ($oParam == "Foot") {
                $output = $input * 0.00328084;
            } elseif ($oParam == "Inch") {
                $output = $input * 0.0393701;
            }
            break;
        case "Micrometer":
            if ($oParam == "Kilometer") {
                $output = $input * 9.999999999E-10;
            } elseif ($oParam == "Meter") {
                $output = $input * 0.000001;
            } elseif ($oParam == "Centimeter") {
                $output = $input * 0.0001;
            } elseif ($oParam == "Milimeter") {
                $output = $input * 0.001;
            } elseif ($oParam == "Micrometer") {
                $output = $input;
            } elseif ($oParam == "Nanometer") {
                $output = $input * 1000;
            } elseif ($oParam == "Mile") {
                $output = $input * 6.213688756E-10;
            } elseif ($oParam == "Yard") {
                $output = $input * 0.0000010936;
            } elseif ($oParam == "Foot") {
                $output = $input * 0.0000032808;
            } elseif ($oParam == "Inch") {
                $output = $input * 0.0000393701;
            }
            break;
        case "Nanometer":
            if ($oParam == "Kilometer") {
                $output = $input * 1.E-12;
            } elseif ($oParam == "Meter") {
                $output = $input * 1.E-9;
            } elseif ($oParam == "Centimeter") {
                $output = $input * 1.E-7;
            } elseif ($oParam == "Milimeter") {
                $output = $input * 0.000001;
            } elseif ($oParam == "Micrometer") {
                $output = $input * 0.001;
            } elseif ($oParam == "Nanometer") {
                $output = $input;
            } elseif ($oParam == "Mile") {
                $output = $input * 6.213688756E-13;
            } elseif ($oParam == "Yard") {
                $output = $input * 1.093613298E-9;
            } elseif ($oParam == "Foot") {
                $output = $input * 3.280839895E-9;
            } elseif ($oParam == "Inch") {
                $output = $input * 3.280839895E-9;
            }
            break;
        case "Mile":
            if ($oParam == "Kilometer") {
                $output = $input * 1.60934;
            } elseif ($oParam == "Meter") {
                $output = $input * 1609.34;
            } elseif ($oParam == "Centimeter") {
                $output = $input * 160934;
            } elseif ($oParam == "Milimeter") {
                $output = $input * 1.609e+6;
            } elseif ($oParam == "Micrometer") {
                $output = $input * 1609350000;
            } elseif ($oParam == "Nanometer") {
                $output = $input * 1609350000000;
            } elseif ($oParam == "Mile") {
                $output = $input;
            } elseif ($oParam == "Yard") {
                $output = $input * 1760;
            } elseif ($oParam == "Foot") {
                $output = $input * 5280;
            } elseif ($oParam == "Inch") {
                $output = $input * 63360;
            }
            break;
        case "Yard":
            if ($oParam == "Kilometer") {
                $output = $input * 0.0009144;
            } elseif ($oParam == "Meter") {
                $output = $input * 0.9144;
            } elseif ($oParam == "Centimeter") {
                $output = $input * 91.44;
            } elseif ($oParam == "Milimeter") {
                $output = $input * 914.4;
            } elseif ($oParam == "Micrometer") {
                $output = $input * 914400;
            } elseif ($oParam == "Nanometer") {
                $output = $input * 914400000;
            } elseif ($oParam == "Mile") {
                $output = $input * 0.000568182;
            } elseif ($oParam == "Yard") {
                $output = $input;
            } elseif ($oParam == "Foot") {
                $output = $input * 3;
            } elseif ($oParam == "Inch") {
                $output = $input * 36;
            }
            break;
        case "Foot":
            if ($oParam == "Kilometer") {
                $output = $input * 0.0003048;
            } elseif ($oParam == "Meter") {
                $output = $input * 0.3048;
            } elseif ($oParam == "Centimeter") {
                $output = $input * 30.48;
            } elseif ($oParam == "Milimeter") {
                $output = $input * 304.8;
            } elseif ($oParam == "Micrometer") {
                $output = $input * 304800;
            } elseif ($oParam == "Nanometer") {
                $output = $input * 304800000;
            } elseif ($oParam == "Mile") {
                $output = $input * 0.000189394;
            } elseif ($oParam == "Yard") {
                $output = $input * 0.333333;
            } elseif ($oParam == "Foot") {
                $output = $input;
            } elseif ($oParam == "Inch") {
                $output = $input * 12;
            }
            break;
        case "Inch":
            if ($oParam == "Kilometer") {
                $output = $input * 2.54e-5;
            } elseif ($oParam == "Meter") {
                $output = $input * 0.0254;
            } elseif ($oParam == "Centimeter") {
                $output = $input * 2.54;
            } elseif ($oParam == "Milimeter") {
                $output = $input * 25.4;
            } elseif ($oParam == "Micrometer") {
                $output = $input * 25400;
            } elseif ($oParam == "Nanometer") {
                $output = $input * 25400000;
            } elseif ($oParam == "Mile") {
                $output = $input * 1.57828e-5;
            } elseif ($oParam == "Yard") {
                $output = $input * 0.0277778;
            } elseif ($oParam == "Foot") {
                $output = $input * 0.0833333;
            } elseif ($oParam == "Inch") {
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
    <title>Length Measurement</title>
</head>

<body>
    <h2 class="text-center mt-5">Convert Length and Distance</h2>
    <div class="container_conversion mx-auto">
        <form action="" method="post">

            <!-- From Part -->

            <b>From :</b>
            <input type="number" class="inputClass" name="inputNumber" value="<?php echo "$input"; ?>" required>
            <select name="InputParam" id="length-names">
                <option value="Kilometer" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Kilometer") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Kilometer</option>
                <option value="Meter" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Meter") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Meter</option>
                <option value="Centimeter" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Centimeter") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Centimeter</option>
                <option value="Milimeter" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Milieter") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Milimeter</option>
                <option value="Micrometer" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Micrometer") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Micrometer</option>
                <option value="Nanometer" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Nanometer") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Nanometer</option>
                <option value="Mile" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Mile") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Mile</option>
                <option value="Yard" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Yard") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Yard</option>
                <option value="Foot" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Foot") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Foot</option>
                <option value="Inch" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Inch") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Inch</option>
            </select>
            <br>
            <br>

            <!-- To Part -->


            <b>To:</b>
            <input type="number" class="OutputClass" name="outputNumber" value="<?php echo "$output"; ?>">
            <select name="OutputParam" id="length-names">
                <option value="Kilometer" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Kilometer") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Kilometer</option>
                <option value="Meter" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Meter") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Meter</option>
                <option value="Centimeter" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Centimeter") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Centimeter</option>
                <option value="Milimeter" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Milieter") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Milimeter</option>
                <option value="Micrometer" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Micrometer") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Micrometer</option>
                <option value="Nanometer" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Nanometer") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Nanometer</option>
                <option value="Mile" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Mile") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Mile</option>
                <option value="Yard" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Yard") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Yard</option>
                <option value="Foot" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Foot") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Foot</option>
                <option value="Inch" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Inch") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Inch</option>
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