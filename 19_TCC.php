<?php 

// Type Check & Casts => Cek tipe data object

class Programmer {
    public function __construct(public string $name){
        
    }
}

class BackendProgrammer extends Programmer{

 }

class FrontendProgrammer extends Programmer{
    
 }

class Company {
    public Programmer $programmer;
}

function HelloProgrammer(Programmer $programmer){
   if($programmer instanceof FrontendProgrammer){
       echo "Frontend Programmer $programmer->name" . PHP_EOL;
   } elseif ($programmer instanceof BackendProgrammer){
       echo "Backend Programmer $programmer->name" . PHP_EOL;
   } elseif ($programmer instanceof Programmer){
       echo "Programmer $programmer->name" . PHP_EOL;
   }
}

HelloProgrammer(new Programmer("Steven Budiarto"));
HelloProgrammer(new FrontendProgrammer("Arif Syarifuddin"));
HelloProgrammer(new BackendProgrammer("Ahmad Baihaqi"));

?>