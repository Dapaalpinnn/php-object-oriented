<?php 

namespace Games;

interface Games {
    public function game(): void; 
}

interface Players {
    public function players(): void;
}

$players = new class("Alexander", "Talking Tom", "Level 59") implements Players, Games 
{
    public function __construct(public string $name, public string $game, public string $rank){
        
    }
    public function game() :void {
        echo "The game $this->game is running" . PHP_EOL;
    }
    public function players() :void
    {
        echo 
        <<<longtext
        Name: $this->name
        Game: $this->game
        Rank: $this->rank
        
        longtext;
    }
};

$players->players(); 
$players->game(); 

?>