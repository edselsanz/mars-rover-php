<?php 
namespace App;
class Rover{    
    private $direction;
    private $x;
    private $y;
    function __construct($direction,$x,$y) {
        $this->direction = $direction;
        $this->x = $x;
        $this->y = $y;
    }
    function receiveCommands($command = ''){
        if(!empty($command)){
            $commands = str_split($command);
            foreach ($commands as $singleCommand){
                if($singleCommand == 'f'){
                    $this->moveForward();
                }
                if($singleCommand == 'b'){
                    $this->moveBackward();
                }
                if($singleCommand == 'l'){
                   $this->turnLeft();
                }
                if($singleCommand == 'r'){
                    $this->turnRight();
                }
            }
        }
        return $this->getPosition();
    }
    function getPosition(){
        return [$this->direction, $this->x, $this->y];
    }
    function turnLeft (){
        switch ($this->direction) {
            case 'E':
                $this->direction = 'N';
                break; 
            case 'N':
                $this->direction = 'W';
                break; 
            case 'S':
                $this->direction = 'E';
                break; 
            case 'W':
                $this->direction = 'S';
                break; 
        }
    }
    function turnRight(){
        switch ($this->direction) {
            case 'E':
                $this->direction = 'S';
                break; 
            case 'N':
                $this->direction = 'E';
                break; 
            case 'S':
                $this->direction = 'W';
                break; 
            case 'W':
                $this->direction = 'N';
                break; 
        }
    }
    function moveForward(){
        switch ($this->direction) {
            case 'E':
                $this->x++;
                break; 
            case 'N':
                $this->y++;
                break; 
            case 'S':
                $this->y--;
                break; 
            case 'W':
                $this->x--;
                break; 
        }
    }
    function moveBackward(){
        switch ($this->direction) {
            case 'E':
                $this->x--;
                break; 
            case 'N':
                $this->y--;
                break; 
            case 'S':
                $this->y++;
                break; 
            case 'W':
                $this->x++;
                break; 
        }
    }
}