
<!-- Speed Measurment Conversion  -->


<?php include 'links.php' ?>
<?php


if (isset($_POST["submit"])) {
    $input = $_POST['inputNumber'];            //takes input from user
    $output = $_POST['outputNumber'];           //Give Output
    $iParam = $_POST['InputParam'];             //iParam means input parameter ,input parameter which user has selected
    $oParam = $_POST['OutputParam'];            //oParam means Output parameter ,output parameter which user has selected
    switch ($iParam) {
        case "meter/second":         
            if ($oParam =="meter/second") {
                $output = $input;
            } elseif ($oParam == "Kilometer/hour") {
                $output = $input * 3.6;
            } elseif ($oParam == "Mile/hour") {
                $output = $input * 2.2369362921;
            } elseif ($oParam == "Kilometer/second") {
                $output = $input *0.001;
            } elseif ($oParam == "Foot/hour") {
                $output = $input *11811.023622;
            }break;
        case "Kilometer/hour":
            if ($oParam == "meter/second") {
                $output = $input * 0.2777777778;
            } elseif ($oParam == "Kilometer/hour") {
                $output = $input;
            } elseif ($oParam == "Mile/hour") {
                $output = $input *0.6213711922;
            } elseif ($oParam == "Kilometer/second") {
                $output = $input * 0.0002777778;
            } elseif ($oParam == "Foot/hour") {
                $output = $input * 3280.839895;
            }break;
        case "Mile/hour":
            if ($oParam == "meter/second") {
                $output = $input * 0.44704;
            } elseif ($oParam == "Kilometer/hour") {
                $output = $input *1.609344;
            } elseif ($oParam == "Mile/hour") {
                $output = $input;
            } elseif ($oParam == "Kilometer/second") {
                $output = $input *0.00044704;
            } elseif ($oParam == "Foot/hour") {
                $output = $input * 5280;
            }break;
        case "Kilometer/second":
            if ($oParam == "meter/second") {
                $output = $input *1000;
            } elseif ($oParam == "Kilometer/hour") {
                $output = $input *3600;
            } elseif ($oParam == "Mile/hour") {
                $output = $input * 2236.9362921;
            } elseif ($oParam == "Kilometer/second") {
                $output = $input;
            } elseif ($oParam == "Foot/hour") {
                $output = $input *11811023.622;
            }break;
        case "Foot/hour":
            if ($oParam == "meter/second") {
                $output = $input *0.0000846667;
            } elseif ($oParam == "Kilometer/hour") {
                $output = $input *0.0003048;
            } elseif ($oParam == "Mile/hour") {
                $output = $input * 0.0001893939;
            } elseif ($oParam == "Kilometer/second") {
                $output = $input *8.466666666E-8;
            } elseif ($oParam == "Foot/hour") {
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
    <title>Speed Measurement</title>
</head>

<body>
    <h2 class="text-center mt-5">Convert Mass and Weight Parameters</h2>
    <div class="container_conversion mx-auto">
        <form action="" method="post">
                  <!-- From Part -->

            <b>From :</b>
            <input type="number" class="inputClass" name="inputNumber" value="<?php echo $input; ?>" required>
            <select name="InputParam" id="length-names">
                <option value="meter/second" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "meter/second") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>meter/second</option>
                <option value="Kilometer/hour" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Kilometer/hour") {
                                                    echo 'selected="selected"';
                                                }
                                                ?>>Kilometer/hour</option>
                <option value="Mile/hour" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Mile/hour") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Mile/hour</option>
                <option value="Kilometer/second" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Kilometer/second") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Kilometer/second</option>
                <option value="Foot/hour" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Foot/hour") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Foot/hour</option>
    
            </select>
            <br>
            <br>        <!-- To Part -->
            <b>To:</b>
            <input type="number" class="OutputClass" name="outputNumber" value="<?php echo $output; ?>">
            <select name="OutputParam" id="length-names">
                <option value="meter/second" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "meter/second") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>meter/second</option>
                <option value="Kilometer/hour" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Kilometer/hour") {
                                                    echo 'selected="selected"';
                                                }
                                                ?>>Kilometer/hour</option>
                <option value="Mile/hour" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Mile/hour") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Mile/hour</option>
                <option value="Kilometer/second" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Kilometer/second") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Kilometer/second</option>
                <option value="Foot/hour" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Foot/hour") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Foot/hour</option>
        
                
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