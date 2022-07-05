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
    function receiveCommands($commands){
        if(empty($commands)){
            return;
        }
        $commandsArray = str_split($commands);
        foreach($commandsArray as $command){
            $this->executeCommand($command);
        }
    }
    private function executeCommand($command){
        switch($command){
            case 'b':
                $this->moveBackward();
                break;                
            case 'f':
                $this->moveForward();
                break;
            case 'l':
                $this->turnLeft();                
                break;
            case 'r':
                $this->turnRight();                
                break;
            }
    }
    private function moveBackward(){
        if($this->direction == 'E'){
            $this->x--;
        }elseif($this->direction == 'N'){
            $this->y--;                    
        }elseif($this->direction == 'W'){
            $this->x++;                    
        }elseif($this->direction == 'S'){
            $this->y++;                    
        }
    }
    private function moveForward(){
        if($this->direction == 'E'){
            $this->x++;
        }elseif($this->direction == 'W'){
            $this->x--;
        }elseif($this->direction == 'N'){
            $this->y++;
        }elseif($this->direction == 'S'){
            $this->y--;
        }
    }
    private function turnLeft(){
        if($this->direction == 'E'){
            $this->direction = 'N';
        }elseif($this->direction == 'W'){
            $this->direction = 'S';            
        }elseif($this->direction == 'N'){
            $this->direction = 'W';            
        }elseif($this->direction == 'S'){
            $this->direction = 'E';            
        }
    }
    private function turnRight(){
        if($this->direction == 'E'){
            $this->direction = 'S';
        }elseif($this->direction == 'W'){
            $this->direction = 'N';
        }elseif($this->direction == 'N'){
            $this->direction = 'E';
        }elseif($this->direction == 'S'){
            $this->direction = 'W';
        }
    }
}