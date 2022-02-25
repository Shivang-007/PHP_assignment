
<!-- Volume Measurment Conversion  -->

<?php include 'links.php' ?>
<?php


if (isset($_POST["submit"])) {
    $input = $_POST['inputNumber'];           //takes input from user
    $output = $_POST['outputNumber'];         //give output
    $iParam = $_POST['InputParam'];            //iParam means Input parameter ,input parameter which user has selected
    $oParam = $_POST['OutputParam'];            //oParam means Output parameter ,output parameter which user has selected
    switch ($iParam) {
        case "Cubic Kilometer":
            if ($oParam =="Cubic Kilometer") {
                $output = $input;
            } elseif ($oParam == "Cubic Meter") {
                $output = $input * 1000000000;
            } elseif ($oParam == "Cubic Centimeter") {
                $output = $input * 1000000000000000;
            } elseif ($oParam == "Cubic Milimeter") {
                $output = $input * 1000000000000000000;
            } elseif ($oParam == "Cubic Mile") {
                $output = $input * 0.2399128636;
            } elseif ($oParam == "Cubic Yard") {
                $output = $input *1307950619.3;
            } elseif ($oParam == "Cubic Foot") {
                $output = $input * 35314666721;
            } elseif ($oParam == "Cubic Inch") {
                $output = $input * 61023744094732;
            }
            elseif ($oParam == "Litre") {
                $output = $input*1000000000000;
            }break;
        case "Cubic Meter":
            if ($oParam == "Cubic Kilometer") {
                $output = $input *1.E-9;
            } elseif ($oParam == "Cubic Meter") {
                $output = $input;
            } elseif ($oParam == "Cubic Centimeter") {
                $output = $input * 1000000;
            } elseif ($oParam == "Cubic Milimeter") {
                $output = $input * 1000000000;
            } elseif ($oParam == "Cubic Mile") {
                $output = $input * 2.399128636E-10;
            } elseif ($oParam == "Cubic Yard") {
                $output = $input * 1.3079506193;
            } elseif ($oParam == "Cubic Foot") {
                $output = $input * 35.314666721;
            } elseif ($oParam == "Cubic Inch") {
                $output = $input * 61023.744095;
            }
            elseif ($oParam == "Litre") {
                $output = $input*1000;
            }break;
        case "Cubic Centimeter":
            if ($oParam == "Cubic Kilometer") {
                $output = $input * 9.999999999E-16;
            } elseif ($oParam == "Cubic Meter") {
                $output = $input * 9.999999999E-16;
            } elseif ($oParam == "Cubic Centimeter") {
                $output = $input;
            } elseif ($oParam == "Cubic Milimeter") {
                $output = $input * 1000;
            } elseif ($oParam == "Cubic Mile") {
                $output = $input * 2.399128636E-16;
            } elseif ($oParam == "Cubic Yard") {
                $output = $input * 0.000119599;
            } elseif ($oParam == "Cubic Foot") {
                $output = $input * 0.000001308;
            } elseif ($oParam == "Cubic Inch") {
                $output = $input *0.0610237441;
            }
            elseif ($oParam == "Litre") {
                $output = $input*0.001;
            }break;
        case "Cubic Milimeter":
            if ($oParam == "Cubic Kilometer") {
                $output = $input * 1.E-18;
            } elseif ($oParam == "Cubic Meter") {
                $output = $input * 1.E-9;
            } elseif ($oParam == "Cubic Centimeter") {
                $output = $input * 0.001;
            } elseif ($oParam == "Cubic Milimeter") {
                $output = $input;
            } elseif ($oParam == "Cubic Mile") {
                $output = $input *2.399128636E-19;
            } elseif ($oParam == "Cubic Yard") {
                $output = $input * 1.307950619E-9;
            } elseif ($oParam == "Cubic Foot") {
                $output = $input * 3.531466672E-8;
            } elseif ($oParam == "Cubic Inch") {
                $output = $input * 0.0000610237;
            }
            elseif ($oParam == "Litre") {
                $output = $input*0.000001;
            }break;
        case "Cubic Mile":
            if ($oParam == "Cubic Kilometer") {
                $output = $input * 4.16818;
            } elseif ($oParam == "Cubic Meter") {
                $output = $input * 4168180000;
            } elseif ($oParam == "Cubic Centimeter") {
                $output = $input * 4168180000000000;
            } elseif ($oParam == "Cubic Milimeter") {
                $output = $input * 2.59e+12;
            } elseif ($oParam == "Cubic Mile") {
                $output = $input;
            } elseif ($oParam == "Cubic Yard") {
                $output = $input * 5451773612.4;
            } elseif ($oParam == "Cubic Foot") {
                $output = $input * 147197887535;
            } elseif ($oParam == "Cubic Inch") {
                $output = $input * 254357949660781;
            }
            elseif ($oParam == "Litre") {
                $output = $input*4168180000000;
            }break;
        case "Cubic Foot":
            if ($oParam == "Cubic Kilometer") {
                $output = $input * 2.831684659E-11;
            } elseif ($oParam == "Cubic Meter") {
                $output = $input * 0.0283168466;
            } elseif ($oParam == "Cubic Centimeter") {
                $output = $input *28316.846592;
            } elseif ($oParam == "Cubic Milimeter") {
                $output = $input * 28316846.592;
            } elseif ($oParam == "Cubic Mile") {
                $output = $input * 6.793575755E-12;
            } elseif ($oParam == "Cubic Yard") {
                $output = $input*0.037037037;
            } elseif ($oParam == "Cubic Foot") {
                $output = $input ;
            } elseif ($oParam == "Cubic Inch") {
                $output = $input * 1728;
            }
            elseif ($oParam == "Litre") {
                $output = $input*28.316846592;
            }break;
        case "Cubic Yard":
            if ($oParam == "Cubic Kilometer") {
                $output = $input * 7.645548579E-10;
            } elseif ($oParam == "Cubic Meter") {
                $output = $input * 0.764554858;
            } elseif ($oParam == "Cubic Centimeter") {
                $output = $input * 764554.85798;
            } elseif ($oParam == "Cubic Milimeter") {
                $output = $input * 764554857.98;
            } elseif ($oParam == "Cubic Mile") {
                $output = $input * 1.834265453E-10;
            } elseif ($oParam == "Cubic Yard") {
                $output = $input * 0.111111;
            } elseif ($oParam == "Cubic Foot") {
                $output = $input;
            } elseif ($oParam == "Cubic Inch") {
                $output = $input * 27;
            }
            elseif ($oParam == "Litre") {
                $output = $input*764.55485798;
            }break;
        case "Cubic Inch":
            if ($oParam == "Cubic Kilometer") {
                $output = $input *1.6387064E-14;
            } elseif ($oParam == "Cubic Meter") {
                $output = $input * 0.0000163871;
            } elseif ($oParam == "Cubic Centimeter") {
                $output = $input * 16.387064;
            } elseif ($oParam == "Cubic Milimeter") {
                $output = $input * 16387.064;
            } elseif ($oParam == "Cubic Mile") {
                $output = $input *3.931467451E-15;
            } elseif ($oParam == "Cubic Yard") {
                $output = $input * 0.0000214335;
            } elseif ($oParam == "Cubic Foot") {
                $output = $input * 0.0005787037;
            } elseif ($oParam == "Cubic Inch") {
                $output = $input;
            }
            elseif ($oParam == "Litre") {
                $output = $input*0.016387064;
            }break;
        case "Litre":
            if ($oParam == "Cubic Kilometer") {
                $output = $input * 1.E-12;
            } elseif ($oParam == "Cubic Meter") {
                $output = $input * 0.001;
            } elseif ($oParam == "Cubic Centimeter") {
                $output = $input *1000;
            } elseif ($oParam == "Cubic Milimeter") {
                $output = $input *1000000;
            } elseif ($oParam == "Cubic Mile") {
                $output = $input * 2.399128636E-13;
            } elseif ($oParam == "Cubic Yard") {
                $output = $input *0.0013079506;
            } elseif ($oParam == "Cubic Foot") {
                $output = $input *0.0353146667;
            } elseif ($oParam == "Cubic Inch") {
                $output = $input*61.023744095;
            }
            elseif ($oParam == "Litre") {
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
    <title>Volume Measurement</title>
</head>

<body>
    <h2 class="text-center mt-5">Convert Volume Parameters</h2>
    <div class="container_conversion mx-auto">
        <form action="" method="post">
   
          <!-- From Part -->
            <b>From :</b>
            <input type="number" class="inputClass" name="inputNumber" value="<?php echo $input; ?>" required>
            <select name="InputParam" id="length-names">
                <option value="Cubic Kilometer" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Cubic Kilometer") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Cubic Kilometer</option>
                <option value="Cubic Meter" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Cubic Meter") {
                                                    echo 'selected="selected"';
                                                }
                                                ?>>Meter</option>
                <option value="Cubic Centimeter" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Cubic Centimeter") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Cubic Centimeter</option>
                <option value="Cubic Milimeter" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Cubic Milieter") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Cubic Milimeter</option>
                <option value="Cubic Mile" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Cubic Mile") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Cubic Mile</option>
                <option value="Cubic Yard" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Cubic Yard") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Cubic Yard</option>
                <option value="Cubic Foot" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Cubic Foot") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Cubic Foot</option>
                <option value="Cubic Inch" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Cubic Inch") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Cubic Inch</option>
                <option value="Litre" <?php if (isset($_POST['InputParam']) && $_POST["InputParam"] == "Litre") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Litre</option>
            </select>
            <br>
            <br>        <!-- To Part -->
            <b>To:</b>
            <input type="number" class="OutputClass" name="outputNumber" value="<?php echo $output; ?>">
            <select name="OutputParam" id="length-names">
                <option value="Cubic Kilometer" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Cubic Kilometer") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Cubic Kilometer</option>
                <option value="Cubic Meter" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Cubic Meter") {
                                                    echo 'selected="selected"';
                                                }
                                                ?>>Meter</option>
                <option value="Cubic Centimeter" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Cubic Centimeter") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Cubic Centimeter</option>
                <option value="Cubic Milimeter" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Cubic Milieter") {
                                                        echo 'selected="selected"';
                                                    }
                                                    ?>>Cubic Milimeter</option>
                <option value="Cubic Mile" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Cubic Mile") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Cubic Mile</option>
                <option value="Cubic Yard" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Cubic Yard") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Cubic Yard</option>
                <option value="Cubic Foot" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Cubic Foot") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Cubic Foot</option>
                <option value="Cubic Inch" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Cubic Inch") {
                                                echo 'selected="selected"';
                                            }
                                            ?>>Cubic Inch</option>
                <option value="Litre" <?php if (isset($_POST['OutputParam']) && $_POST["OutputParam"] == "Litre") {
                                            echo 'selected="selected"';
                                        }
                                        ?>>Litre</option>
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