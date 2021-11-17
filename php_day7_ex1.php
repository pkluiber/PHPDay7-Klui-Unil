<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-DAY7-Exercise</title>
</head>
<body>
    <?php
        class Xehicles
        {
            // public $veh_name;
            // public $veh_model;
            // public $veh_makeYear;
            // public $veh_color;
            // public $veh_fuelType;

            function __construct($veh_name, $veh_model, $veh_makeYear, $veh_color, $veh_fuelType) {
                $this->name = $veh_name;
                $this->model = $veh_model;
                $this->makeYear = $veh_makeYear;
                $this->color = $veh_color;
                $this->fuelType = $veh_fuelType;
            }
            function get_name() {
                return $this->name;
            }
            function get_model() {
                return $this->model;
            }
            function get_makeYear() {
                return $this->makeYear;
            }
            function get_color() {
                return $this->color;
            }
            function get_fuelType() {
                return $this->fuelType;
            }
        }
        $audi = new Xehicles("Audi", "Audi4 35TDI", 2021, "Blackgray", "Diesel");
        $vw = new Xehicles("VW", "Touran TSI", 2015, "Grey", "Diesel");
        $maserati = new Xehicles("
        Autobild
        Maserati", "Ghibli Tipo M157", 2020, "Blue", "Diesel");
        echo $audi->get_name()."<br>";
        echo $audi->get_model()."<br>";
        echo $audi->get_makeYear()."<br>";
        echo $audi->get_color()."<br>";
        echo $audi->get_fuelType()."<br><br><br>";

        echo $vw->get_name()."<br>";
        echo $vw->get_model()."<br>";
        echo $vw->get_makeYear()."<br>";
        echo $vw->get_color()."<br>";
        echo $vw->get_fuelType()."<br><br><br>";

        echo $maserati->get_name()."<br>";
        echo $maserati->get_model()."<br>";
        echo $maserati->get_makeYear()."<br>";
        echo $maserati->get_color()."<br>";
        echo $maserati->get_fuelType()."<br><br><br>";

    ?>


</body>
</html>