

<!-- Weight Measurment Conversion  -->
<?php include 'links.php' ?>
<?php


if (isset($_POST["submit"])) {
    $input = $_POST['inputNumber'];            //takes input from user
    $output = $_POST['outputNumber'];         //give output
    $iParam = $_POST['InputParam'];           //iParam means input parameter ,input parameter which user has selected
    $oParam = $_POST['OutputParam'];         //oParam means Output parameter ,output parameter which user has selected  
    switch ($iParam) {
        case "Kilogram":
            if ($oParam =="Kilogram") {
                $output = $input;
            } elseif ($oParam == "Gram") {
                $output = $input * 1000;
            } elseif ($oParam == "Miligram") {
                $output = $input * 1000000;
            } elseif ($oParam == "Metric Ton") {
                $output = $input *0.001;
            } elseif ($oParam == "Long Ton") {
                $output = $input *0.0009842073;
            } elseif ($oParam == "Short Ton") {
                $output = $input * 0.0011023122;
            }break;
        case "Gram":
            if ($oParam == "Kilogram") {
                $output = $input * 0.001;
            } elseif ($oParam == "Gram") {
                $output = $input;
            } elseif ($oParam == "Miligram") {
                $output = $input * 1000;
            } elseif ($oParam == "Metric Ton") {
                $output = $input * 0.000001;
            } elseif ($oParam == "Long Ton") {
                $output = $input * 9.842073304E-7;
            } elseif ($oParam == "Short Ton") {
                $output = $input * 0.0000011023;
            }break;
        case "Miligram":
            if ($oParam == "Kilogram") {
                $output = $input * 0.000001;
            } elseif ($oParam == "Gram") {
                $output = $input * 0.001;
            } elseif ($oParam == "Miligram") {
                $output = $input;
            } elseif ($oParam == "Metric Ton") {
                $output = $input * 9.999999999E-10;
            } elseif ($oParam == "Long Ton") {
                $output = $input * 9.842073304E-10;
            } elseif ($oParam == "Short Ton") {
                $output = $input * 1.10231221E-9;
            }break;
        case "Metric Ton":
            if ($oParam == "Kilogram") {
                $output = $input * 1000;
            } elseif ($oParam == "Gram") {
                $output = $input *1000000;
            } elseif ($oParam == "Miligram") {
                $output = $input * 1000000000;
            } elseif ($oParam == "Metric Ton") {
                $output = $input;
            } elseif ($oParam == "Long Ton") {
                $output = $input * 0.9842073304;
            } elseif ($oParam == "Short Ton") {
                $output = $input * 1.1023122101;
            }break;
        case "Long Ton":
            if ($oParam == "Kilogram") {
                $output = $input *1016.04608;
            } elseif ($oParam == "Gram") {
                $output = $input * 1016046.08;
            } elseif ($oParam == "Miligram") {
                $output = $input * 1016046080;
            } elseif ($oParam == "Metric Ton") {
                $output = $input * 1.01604608;
            } elseif ($oParam == "Long Ton") {
                $output = $input;
            } elseif ($oParam == "Short Ton") {
                $output = $input * 1.12;
            }break;
        case "Short Ton":
            if ($oParam == "Kilogram") {
                $output = $input * 907.184;
            } elseif ($oParam == "Gram") {
                $output = $input * 907184;
            } elseif ($oParam == "Miligram") {
                $output = $input * 907184000;
            } elseif ($oParam == "Metric Ton") {
                $output = $input * 0.907184;
            } elseif ($oParam == "Long Ton") {
                $output = $input * 0.8928571429;
            } elseif ($oParam == "Short Ton") {
                $output = $input;
            }break;
         
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
        body{
            background: linear-gradient(#ece9e6,#ffffff);
        }
    </style>
    <title>Weight Measurement</title>
</head>

<body>
    <h2 class="text-center mt-5">Convert Mass and Weight Parameters</h2>
    <div class="container_conversion mx-auto">
        <form action="" method="post">
 
           <!-- From Part -->
            <b>From :</b>          
            <input type="number" class="inputClass" name="inputNumber" value="<?php echo $input; ?>" required>
            <select name="InputParam" id="length-names">
                <option value="Kilogram" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Kilogram") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Kilogram</option>
                <option value="Gram" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Gram") {
                                                    echo 'selected="selected"';
                                                }
                                                ?>>Gram</option>
                <option value="Miligram" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Miligram") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Miligram</option>
                <option value="Metric Ton" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Metric Ton") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Metric Ton</option>
                <option value="Long Ton" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Long Ton") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Long Ton</option>
                <option value="Short Ton" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Short Ton") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Short Ton</option>
                
            </select>
            <br>
            <br>        <!-- To Part -->
            <b>To:</b>
            <input type="number" class="OutputClass" name="outputNumber" value="<?php echo $output; ?>">
            <select name="OutputParam" id="length-names">
                <option value="Kilogram" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Kilogram") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Kilogram</option>
                <option value="Gram" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Gram") {
                                                    echo 'selected="selected"';
                                                }
                                                ?>>Gram</option>
                <option value="Miligram" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Miligram") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Miligram</option>
                <option value="Metric Ton" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Metric Ton") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Metric Ton</option>
                <option value="Long Ton" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Long Ton") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Long Ton</option>
                <option value="Short Ton" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Short Ton") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Short Ton</option>
                
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