<?php
namespace dogs;

abstract class dog {
    public function sound(){
        return "woof! woof!";
    }
}

class ShibaInu extends dog {
   public function hunt(){
        return "Hunt....";
   }
}

class Mops extends dog {}

class Dachshund extends dog {
    public function hunt(){
        return "Hunt....";
    }
}

class PlushLabrador {}

class RubberDachshund extends dog { 
    public function sound()
    {
        return 'Squeak! Squeak!';
    }
}

function getUserInput()
{
    return trim(fgets(STDIN));
}

while (true) {
    echo "> ";
    $input = getUserInput();

    $parts = explode(' ', $input);
    $dogType = $parts[0];
    $action = $parts[1];

    switch ($dogType) {
        case 'shiba-inu':
            $dog = new ShibaInu();
            break;
        case 'Mops':
            $dog = new Mops();
            break;
        case 'dachshund':
            $dog = new Dachshund();
            break;
        case 'plush-labrador':
            $dog = new PlushLabrador();
            break;
        case 'rubber-dachshund':
            $dog = new RubberDachshund();
            break;
        default:
            echo "Така команда не існує" . PHP_EOL;
    }

    switch ($action) {
        case 'sound':
            if(method_exists($dog,'sound')){
                echo $dog->sound() . PHP_EOL;
                break;
            }
            else {
                echo "Така команда не існує" . PHP_EOL;
            }
            break;
        case 'hunt':
            if(method_exists($dog,'hunt')){
                echo $dog->hunt() . PHP_EOL;
                break;
            }
            else {
                echo "Така команда не існує" . PHP_EOL;
            }
        default:
        echo "Така команда не існує" . PHP_EOL;
    }
}
