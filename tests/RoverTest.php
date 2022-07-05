<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Rover;

class RoverTest extends TestCase
{

    /** @test */
    public function when_receive_empty_command_sequence_does_nothing() {        
        
        $rover = new Rover('E',0,0);
        
        $rover->receiveCommands('');
        
        self::assertEquals(new Rover('E',0,0), $rover);
        
    }
    /** @test*/
    public function facing_east_receive_backward_command() {        

        $rover = new Rover('E',0,0);

        $rover->receiveCommands('b');

        self::assertEquals(new Rover('E',-1,0), $rover);

    }
    /** @test*/
    public function facing_east_receive_forward_command() {        

        $rover = new Rover('E',0,0);

        $rover->receiveCommands('f');

        self::assertEquals(new Rover('E',1,0), $rover);

    }
    /** @test*/
    public function facing_east_receive_turn_left_command() {        
        
        $rover = new Rover('E',0,0);
        
        $rover->receiveCommands('l');
        
        self::assertEquals(new Rover('N',0,0), $rover);
        
    }
    
    /** @test*/
    public function facing_east_receive_turn_right_command() {        

        $rover = new Rover('E',0,0);

        $rover->receiveCommands('r');

        self::assertEquals(new Rover('S',0,0), $rover);

    }
    /** @test*/
    public function facing_north_receive_backward_command() {        

        $rover = new Rover('N',0,0);

        $rover->receiveCommands('b');

        self::assertEquals(new Rover('N',0,-1), $rover);

    }
    /** @test*/
    public function facing_west_receive_backward_command() {        

        $rover = new Rover('W',0,0);

        $rover->receiveCommands('b');

        self::assertEquals(new Rover('W',1,0), $rover);

    }
    /** @test*/
    public function facing_south_receive_backward_command() {        

        $rover = new Rover('S',0,0);

        $rover->receiveCommands('b');

        self::assertEquals(new Rover('S',0,1), $rover);

    }

    /** @test*/
    public function facing_west_receive_forward_command() {        

        $rover = new Rover('W',0,0);

        $rover->receiveCommands('f');

        self::assertEquals(new Rover('W',-1,0), $rover);

    }
    /** @test*/
    public function facing_north_receive_forward_command() {        

        $rover = new Rover('N',0,0);

        $rover->receiveCommands('f');

        self::assertEquals(new Rover('N',0,1), $rover);

    }
    /** @test*/
    public function facing_south_receive_forward_command() {        

        $rover = new Rover('S',0,0);

        $rover->receiveCommands('f');

        self::assertEquals(new Rover('S',0,-1), $rover);

    }
    /** @test*/
    public function facing_west_receive_turn_left_command() {        
    
        $rover = new Rover('W',0,0);
        
        $rover->receiveCommands('l');
        
        self::assertEquals(new Rover('S',0,0), $rover);
        
    }
    /** @test*/
    public function facing_north_receive_turn_left_command() {        
    
        $rover = new Rover('N',0,0);
        
        $rover->receiveCommands('l');
        
        self::assertEquals(new Rover('W',0,0), $rover);
        
    }
    /** @test*/
    public function facing_south_receive_turn_left_command() {        
    
        $rover = new Rover('S',0,0);
        
        $rover->receiveCommands('l');
        
        self::assertEquals(new Rover('E',0,0), $rover);
        
    }
    /** @test*/
    public function facing_west_receive_turn_right_command() {        

        $rover = new Rover('W',0,0);

        $rover->receiveCommands('r');

        self::assertEquals(new Rover('N',0,0), $rover);

    }
    /** @test*/
    public function facing_north_receive_turn_right_command() {        

        $rover = new Rover('N',0,0);

        $rover->receiveCommands('r');

        self::assertEquals(new Rover('E',0,0), $rover);

    }
    /** @test*/
    public function facing_south_receive_turn_right_command() {        
        
        $rover = new Rover('S',0,0);
        
        $rover->receiveCommands('r');
        
        self::assertEquals(new Rover('W',0,0), $rover);
        
    }
    /** @test*/
    public function when_receive_an_invalid_command_does_nothing() {
        
        $rover = new Rover('S',0,0);
        
        $rover->receiveCommands('p');
        
        self::assertEquals(new Rover('S',0,0), $rover);

    }
    
    /** @test*/
    public function facing_south_receive_command_sequence_fflb() {
        
        $rover = new Rover('S',0,0);
        
        $rover->receiveCommands('fflb');
        
        self::assertEquals(new Rover('E',-1,-2), $rover);

    }
}