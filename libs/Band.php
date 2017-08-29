<?php
class Band implements iBand
{
    protected $name;
    protected $genre;
    protected $musicians;
    
    public function __construct($name, $genre)
    {
        $this->name = $name;
        $this->genre = $genre;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getGenre()
    {
        return $this->genre;
    }
    
    public function addMusician(iMusician $obj)
    {
        $this->musicians[$obj->getMusicianName()] = $obj;
    }
    
    public function getMusician()
    {
        $team = array();
        foreach($this->musicians as $musician)
        {
            $team[] = 
            [
                    "name" => $musician->getMusicianName(),
                    "type" => $musician->getMusicianType(), 
                    "instruments" => $musician->getInstrument(),
                    "nameBands" => $musician->getNameBand()
            ];
        }
        return $team;
    }
}
