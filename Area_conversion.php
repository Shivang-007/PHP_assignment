

<!-- Area Measurment Conversion  -->

<?php include 'links.php' ?>
<?php


if (isset($_POST["submit"])) {
    $input = $_POST['inputNumber'];      //takes input from user
    $output = $_POST['outputNumber'];     //Give Output
    $iParam = $_POST['InputParam'];         //iParam means input parameter ,input parameter which user has selected
    $oParam = $_POST['OutputParam'];       //oParam means Output parameter ,Output parameter which user has selected
    switch ($iParam) {
        case "Square Kilometer":
            if ($oParam =="Square Kilometer") {
                $output = $input;
            } elseif ($oParam == "Square Meter") {
                $output = $input * 1000000;
            } elseif ($oParam == "Square Centimeter") {
                $output = $input * 1e+10;
            } elseif ($oParam == "Square Milimeter") {
                $output = $input * 1e+12;
            } elseif ($oParam == "Square Mile") {
                $output = $input * 0.386102;
            } elseif ($oParam == "Square Yard") {
                $output = $input * 1.196e+6;
            } elseif ($oParam == "Square Foot") {
                $output = $input * 1.076e+7;
            } elseif ($oParam == "Square Inch") {
                $output = $input * 1.55e+9;
            }
            elseif ($oParam == "Acre") {
                $output = $input*247.10538147;
            }break;
        case "Square Meter":
            if ($oParam == "Square Kilometer") {
                $output = $input / 1000000;
            } elseif ($oParam == "Square Meter") {
                $output = $input;
            } elseif ($oParam == "Square Centimeter") {
                $output = $input * 10000;
            } elseif ($oParam == "Square Milimeter") {
                $output = $input * 1000000;
            } elseif ($oParam == "Square Mile") {
                $output = $input * 3.86102e-7;
            } elseif ($oParam == "Square Yard") {
                $output = $input * 1.19599;
            } elseif ($oParam == "Square Foot") {
                $output = $input * 10.7639;
            } elseif ($oParam == "Square Inch") {
                $output = $input * 1550;
            }
            elseif ($oParam == "Acre") {
                $output = $input*0.0002471054;
            }break;
        case "Square Centimeter":
            if ($oParam == "Square Kilometer") {
                $output = $input * 1e-10;
            } elseif ($oParam == "Square Meter") {
                $output = $input * 0.0001;
            } elseif ($oParam == "Square Centimeter") {
                $output = $input;
            } elseif ($oParam == "Square Milimeter") {
                $output = $input * 100;
            } elseif ($oParam == "Square Mile") {
                $output = $input * 3.86102e-11;
            } elseif ($oParam == "Square Yard") {
                $output = $input * 0.000119599;
            } elseif ($oParam == "Square Foot") {
                $output = $input * 0.00107639;
            } elseif ($oParam == "Square Inch") {
                $output = $input * 0.155;
            }
            elseif ($oParam == "Acre") {
                $output = $input*2.471053814E-8;
            }break;
        case "Square Milimeter":
            if ($oParam == "Square Kilometer") {
                $output = $input * 1e-12;
            } elseif ($oParam == "Square Meter") {
                $output = $input * 1e-6;
            } elseif ($oParam == "Square Centimeter") {
                $output = $input * 0.01;
            } elseif ($oParam == "Square Milimeter") {
                $output = $input;
            } elseif ($oParam == "Square Mile") {
                $output = $input * 3.86102e-13;
            } elseif ($oParam == "Square Yard") {
                $output = $input * 1.19599e-6;
            } elseif ($oParam == "Square Foot") {
                $output = $input * 1.07639e-5;
            } elseif ($oParam == "Square Inch") {
                $output = $input * 0.00155;
            }
            elseif ($oParam == "Acre") {
                $output = $input*2.471053814E-10;
            }break;
        case "Square Mile":
            if ($oParam == "Square Kilometer") {
                $output = $input * 2.58999;
            } elseif ($oParam == "Square Meter") {
                $output = $input * 2.59e+6;
            } elseif ($oParam == "Square Centimeter") {
                $output = $input * 2.59e+10;
            } elseif ($oParam == "Square Milimeter") {
                $output = $input * 2.59e+12;
            } elseif ($oParam == "Square Mile") {
                $output = $input;
            } elseif ($oParam == "Square Yard") {
                $output = $input * 3.098e+6;
            } elseif ($oParam == "Square Foot") {
                $output = $input * 2.788e+7;
            } elseif ($oParam == "Square Inch") {
                $output = $input * 4.014e+9;
            }
            elseif ($oParam == "Acre") {
                $output = $input*640.00046695;
            }break;
        case "Square Yard":
            if ($oParam == "Square Kilometer") {
                $output = $input * 8.36127e-7;
            } elseif ($oParam == "Square Meter") {
                $output = $input * 0.836127;
            } elseif ($oParam == "Square Centimeter") {
                $output = $input * 8361.27;
            } elseif ($oParam == "Square Milimeter") {
                $output = $input * 836127;
            } elseif ($oParam == "Square Mile") {
                $output = $input * 3.22831e-7;
            } elseif ($oParam == "Square Yard") {
                $output = $input;
            } elseif ($oParam == "Square Foot") {
                $output = $input * 9;
            } elseif ($oParam == "Square Inch") {
                $output = $input * 1296;
            }
            elseif ($oParam == "Acre") {
                $output = $input*0.0002066116;
            }break;
        case "Square Foot":
            if ($oParam == "Square Kilometer") {
                $output = $input * 9.2903e-8;
            } elseif ($oParam == "Square Meter") {
                $output = $input * 0.092903;
            } elseif ($oParam == "Square Centimeter") {
                $output = $input * 929.03;
            } elseif ($oParam == "Square Milimeter") {
                $output = $input * 92903;
            } elseif ($oParam == "Square Mile") {
                $output = $input * 3.58701e-8;
            } elseif ($oParam == "Square Yard") {
                $output = $input * 0.111111;
            } elseif ($oParam == "Square Foot") {
                $output = $input;
            } elseif ($oParam == "Square Inch") {
                $output = $input * 144;
            }
            elseif ($oParam == "Acre") {
                $output = $input*0.0000229568;
            }break;
        case "Square Inch":
            if ($oParam == "Square Kilometer") {
                $output = $input * 6.4516E-10;
            } elseif ($oParam == "Square Meter") {
                $output = $input * 0.00064516;
            } elseif ($oParam == "Square Centimeter") {
                $output = $input * 6.4516;
            } elseif ($oParam == "Square Milimeter") {
                $output = $input * 645.16;
            } elseif ($oParam == "Square Mile") {
                $output = $input * 2.490974868E-10;
            } elseif ($oParam == "Square Yard") {
                $output = $input * 0.0007716049;
            } elseif ($oParam == "Square Foot") {
                $output = $input * 0.0069444444;
            } elseif ($oParam == "Square Inch") {
                $output = $input;
            }
            elseif ($oParam == "Acre") {
                $output = $input*1.594225079E-7;
            }break;
        case "Acre":
            if ($oParam == "Square Kilometer") {
                $output = $input * 0.0040468564;
            } elseif ($oParam == "Square Meter") {
                $output = $input * 4046.8564224;
            } elseif ($oParam == "Square Centimeter") {
                $output = $input *40468564.224;
            } elseif ($oParam == "Square Milimeter") {
                $output = $input *4046856422.4;
            } elseif ($oParam == "Square Mile") {
                $output = $input * 0.0015624989;
            } elseif ($oParam == "Square Yard") {
                $output = $input * 4840;
            } elseif ($oParam == "Square Foot") {
                $output = $input *43560;
            } elseif ($oParam == "Square Inch") {
                $output = $input*6272640;
            }
            elseif ($oParam == "Acre") {
                $output = $input*1;
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
    <title>Area Measurement</title>
</head>

<body>
    <h2 class="text-center mt-5">Convert Area Parameters</h2>
    <div class="container_conversion mx-auto">
        <form action="" method="post">

               <!-- From Part -->

            <b>From :</b>
            <input type="number" class="inputClass" name="inputNumber" value="<?php echo $input; ?>" required>
            <select name="InputParam" id="length-names">
                <option value="Square Kilometer" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Square Kilometer") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Square Kilometer</option>
                <option value="Square Meter" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Square Meter") {
                                                    echo 'selected="selected"';
                                                }
                                                ?>>Meter</option>
                <option value="Square Centimeter" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Square Centimeter") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Square Centimeter</option>
                <option value="Square Milimeter" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Square Milieter") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Square Milimeter</option>
                <option value="Square Mile" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Square Mile") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Square Mile</option>
                <option value="Square Yard" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Square Yard") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Square Yard</option>
                <option value="Square Foot" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Square Foot") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Square Foot</option>
                <option value="Square Inch" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Square Inch") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Square Inch</option>
                <option value="Acre" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Acre") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Acre</option>
            </select>
            <br>
            <br>
                    <!-- To Part -->
                  
            <b>To:</b>
            <input type="number" class="OutputClass" name="outputNumber" value="<?php echo $output; ?>">
            <select name="OutputParam" id="length-names">
                <option value="Square Kilometer" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Square Kilometer") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Square Kilometer</option>
                <option value="Square Meter" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Square Meter") {
                                                    echo 'selected="selected"';
                                                }
                                                ?>>Meter</option>
                <option value="Square Centimeter" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Square Centimeter") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Square Centimeter</option>
                <option value="Square Milimeter" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Square Milieter") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Square Milimeter</option>
                <option value="Square Mile" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Square Mile") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Square Mile</option>
                <option value="Square Yard" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Square Yard") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Square Yard</option>
                <option value="Square Foot" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Square Foot") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Square Foot</option>
                <option value="Square Inch" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Square Inch") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Square Inch</option>
                <option value="Acre" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Acre") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Acre</option>
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