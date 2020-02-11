<?php
    require_once "PersonalityObject.php";
    require_once "PessimisticObject.php";
    require_once "OptimisticObject.php";
    require_once "ExtrovertedObject.php";
    
    $personalityObject = new PersonalityObject();
    $pessimisticObject = new PessimisticObject();
    $optimisticObject = new OptimisticObject();
    $extrovertedObject = new ExtrovertedObject();

    makeSpeak1($personalityObject);
    echo "\n";
    makeSpeak2($pessimisticObject);
    echo "\n";
    makeSpeak3($optimisticObject);
    echo "\n";
    makeSpeak4($extrovertedObject);

    function makeSpeak1 (PersonalityObject $personalityObject) {
        echo $personalityObject->speak();
    }
    function makeSpeak2 (PessimisticObject $pessimisticObject) {
        echo $pessimisticObject->speak();
    }
    function makeSpeak3 (OptimisticObject $optimisticObject) {
        echo $optimisticObject->speak();
    }
    function makeSpeak4 (ExtrovertedObject $extrovertedObject) {
        echo $extrovertedObject->speak();
    }

    echo "\n";
    makeSpeak($personalityObject);
    echo "\n";
    makeSpeak($pessimisticObject);
    echo "\n";
    makeSpeak($optimisticObject);
    echo "\n";
    makeSpeak($extrovertedObject);

        
    $personalities = array();
    array_push($personalities, $personalityObject);
    array_push($personalities, $pessimisticObject);
    array_push($personalities, $optimisticObject);
    array_push($personalities, $extrovertedObject);

    foreach ($personalities as $personality) {
        echo "\n";
        makeSpeak($personality);
    }

    function makeSpeak (PersonalityObject $personalityObject) {
        echo $personalityObject->speak();
    }

