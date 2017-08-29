<?php
class Musician implements iMusician
{
    protected $name;
    protected $musType;
    protected $instrument;
    protected $nameBand;
    
    public function  __construct($name, $type)
    {
        $this->name = $name;
        $this->musType = $type;
    }
    
    public function getMusicianName()
    {
        return $this->name;
    }
    
    public function getMusicianType()
    {
        return $this->musType;
    }
    
    public function getInstrument()
    {
        return $this->instrument;
    }
    
    public function getNameBand()
    {
        return $this->nameBand;
    }
    
    public function addInstrument(iInstrument $obj)
    {
        $name = $obj->getName();
        $category = $obj->getCategory();
        $this->instrument[$name] = $category;
    }
    
    public function assingToBand(iBand $nameBand)
    {
        $name = $nameBand->getName();
        $genre = $nameBand->getGenre();   
        $this->nameBand[$name] = $genre;
    }
}
