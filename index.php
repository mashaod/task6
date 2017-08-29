<?php
include ('libs/autoload.php');

//create band
$firstBand = new Band('Selo and People', 'Folk rock');
$secondBand = new Band('Gemstones', 'Vocal-instrumental ensemble');

//create instrument
$accordion = new Instrument('Accordion', 'Key-pneumatic');
$balalaika = new Instrument('Balalaika', 'String');
$drum = new Instrument('Drum', 'Percussion');
$harp = new Instrument('Harp', 'String');
$piano = new Instrument('Piano', 'Keyboard');

//create musician
$paul = new Musician('Paul McCartney', 'Accordion and balalaika player');
$paul->assingToBand($firstBand);
$paul->assingToBand($secondBand);

$elton = new Musician('Elton John', 'Drummer');
$elton->assingToBand($firstBand);
$elton->assingToBand($secondBand);

$chuck = new Musician('Chuck Berry', 'Pianist');
$chuck->assingToBand($secondBand);

$elvis = new Musician('Elvis Presley', 'Balalaika and harp player');
$elvis->assingToBand($firstBand);

//add instrument
$paul->addInstrument($accordion);
$paul->addInstrument($balalaika);
$elton->addInstrument($drum);
$chuck->addInstrument($piano);
$elvis->addInstrument($balalaika);
$elvis->addInstrument($harp);

//create teams
$firstBand->addMusician($paul);
$firstBand->addMusician($elton);
$firstBand->addMusician($elvis);

$secondBand->addMusician($paul);
$secondBand->addMusician($elton);
$secondBand->addMusician($chuck);

//band's info (seloAndPeople)
$firstBandName = $firstBand->getName();
$firstBandGenre = $firstBand->getGenre();
$firstBandTeam = $firstBand->getMusician();

//band's info (Gemstones)
$secondBandName = $secondBand->getName();
$secondBandGenre = $secondBand->getGenre();
$secondBandTeam = $secondBand->getMusician();

include('templates/index.php');
