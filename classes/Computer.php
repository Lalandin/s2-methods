<?php
//Klassen Computer oprettes
class Computer {
    public $Navn;
    public $Processor;
    public $RAM;
    public $Grafikkort;
    public $Storage;
    public $OS;


    //Metode til at indsætte information
    public function set_name($name){
        $this->Navn = $name;
    }
    //Metode til at udlevere information
    public function get_name(){
        return $this->Navn;
    }

    public function set_processor($processor){
        $this->Processor = $processor;
    }
    public function get_processor(){
        return $this->Processor;
    }

    public function set_ram($ram){
        $this->RAM = $ram;
    }
    public function get_ram(){
        return $this->RAM;
    }

    public function set_graphics($graphics){
        $this->Grafikkort = $graphics;
    }
    public function get_graphics(){
        return $this->Grafikkort;
    }

    public function set_storage($storage){
        $this->Storage = $storage;
    }
    public function get_storage(){
        return $this->Storage;
    }

    public function set_os($os){
        $this->OS = $os;
    }
    public function get_os(){
        return $this->OS;
    }
}