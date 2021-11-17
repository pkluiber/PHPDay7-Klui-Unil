<?php
        class Vehicles {
            public $name;
            public $model;
            public $makeYear;
            public $color;
            public $fuelType;

            // Function Set
            public function setName($veh_name)
            {
                $this->name = $veh_name;
            }

            public function setModel($veh_model)
            {
                $this->model = $veh_model;
            }

            public function setMakeYear($veh_makeYear)
            {
                $this->makeYear = $veh_makeYear;
            }

            public function setColor($veh_color)
            {
                $this->color = $veh_color;
            }

            public function setFuelType($veh_fuelType)
            {
                $this->fuelType = $veh_fuelType;
            }

            // Function Get

            public function getName() {
                return $this->name;
            }
            public function getModel() {
                return $this->model;
            }
            public function getMakeYear() {
                return $this->makeYear;
            }
            public function getColor() {
                return $this->color;
            }
            public function getFuelType() {
                return $this->fuelType;
            }
        }


        // Child Class Extension with Ships

        class Ships extends Vehicles {

            public $category = 'luxury and funny';

            public function cafeSee()
            {
                return 'Ship Name : ' .$this->getName().'<br> 
                        Ship Model : ' .$this->getModel().'<br>
                        Make Year : ' .$this->getMakeYear().'<br>
                        Color : ' .$this->getColor().'<br>
                        Fuel Type : ' .$this->getFuelType(). '<br>
                        It is really funny with ship trip & OOP<br><br>';
            }

        }

            $seeShips1 = new Ships();
            $seeShips1->setName('Aida');
            $seeShips1->setModel('aida-101');
            $seeShips1->setMakeYear('2018');
            $seeShips1->setColor('BlackWhite');        
            $seeShips1->setFuelType('Diesel');

            echo $seeShips1->cafeSee();

            $seeShips2 = new Ships();
            $seeShips2->setName('Titanic');
            $seeShips2->setModel('1010');
            $seeShips2->setMakeYear('1950');
            $seeShips2->setColor('Blue');        
            $seeShips2->setFuelType('Petrol');

            echo $seeShips2->cafeSee();

            $seeShips3 = new Ships();
            $seeShips3->setName('Viking');
            $seeShips3->setModel('V-2309');
            $seeShips3->setMakeYear('2020');
            $seeShips3->setColor('Pink');        
            $seeShips3->setFuelType('Diesel');

            echo $seeShips3->cafeSee();

        ?>