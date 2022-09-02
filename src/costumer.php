<?php 
namespace biskuatcoklat\belajarlibrary;
class Costumer
{
    public function __construct(private string $nama)
    {
        
    }
    public function sayHai(string $nama):string
    {
        return "hai $nama i from $this->nama";
    }
}
