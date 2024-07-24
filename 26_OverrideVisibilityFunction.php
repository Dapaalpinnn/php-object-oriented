<?php 

require_once "24_Trait.php";

use myTraits\{hasName, sayGoodBye, sayHello};

class ControlVisibility 
{
    use sayGoodBye, sayHello, hasName 
    {
        sayGoodBye as public;
        hello as public;
        hasName as private;
    }
}

$visibility = new ControlVisibility();
$visibility->sayGoodBye("hai");

?>