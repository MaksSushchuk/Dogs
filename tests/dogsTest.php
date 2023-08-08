<?php
namespace tests;

require_once __DIR__ . '/../vendor/autoload.php'; 
use PHPUnit\Framework\TestCase;
use dogs\ShibaInu; 
use dogs\Mops;
use dogs\Dachshund;
use dogs\RubberDachshund;



class dogsTest extends TestCase
{
    public function testShibaInuSound()
    {
        $shibaInu = new ShibaInu();
        $this->assertEquals("woof! woof!", $shibaInu->sound());
    }

    public function testShibaInuHunt()
    {
        $shibaInu = new ShibaInu();
        $this->assertEquals("Hunt....", $shibaInu->hunt());
    }

    public function testMopsSound()
    {
        $mops = new Mops();
        $this->assertEquals("woof! woof!", $mops->sound());
    }

    public function testDachshundSound()
    {
        $dachshund = new Dachshund();
        $this->assertEquals("woof! woof!", $dachshund->sound());
    }

    public function testDachshundHunt()
    {
        $dachshund = new Dachshund();
        $this->assertEquals("Hunt....", $dachshund->hunt());
    }

    public function testRubberDachshundSound()
    {
        $rubberDachshund = new RubberDachshund();
        $this->assertEquals("Squeak! Squeak!", $rubberDachshund->sound());
    }

    public function testUnknownDogType()
    {
        $this->expectOutputString("Така команда не існує" . PHP_EOL);
        $input = "dog sound";
        $this->simulateUserInput($input);
    }

    public function testUnknownAction()
    {
        $this->expectOutputString("Така команда не існує" . PHP_EOL);
        $input = "shiba-inu action";
        $this->simulateUserInput($input);
    }

    private function simulateUserInput($input)
    {
        $GLOBALS['getUserInput'] = function () use ($input) {
            return $input;
        };

        // Include the code that relies on getUserInput
        require_once  __DIR__ . '\..\dogs.php';
    }
}


?>
