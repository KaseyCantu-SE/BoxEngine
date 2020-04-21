<?php

date_default_timezone_set('UTC');

use DVDoug\BoxPacker\Packer;
use DVDoug\BoxPacker\Test\TestBox;
use DVDoug\BoxPacker\Test\TestItem;

require "vendor/autoload.php";

var_export(json_encode($_REQUEST, JSON_PRETTY_PRINT));

$item1 = isset($_REQUEST["Item1"]) ? true : false;
$item2 = isset($_REQUEST["Item2"]) ? true : false;
$item3 = isset($_REQUEST["Item3"]) ? true : false;
$item4 = isset($_REQUEST["Item4"]) ? true : false;

echo "\nITEM 1: {$item1}" . PHP_EOL;
echo "\nITEM 2: {$item2}" . PHP_EOL;
echo "\nITEM 3: {$item3}" . PHP_EOL;
echo "\nITEM 4: {$item4}\n" . PHP_EOL;

$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $packer = new Packer();

    $packer->addBox(new TestBox( // adding boxes to be used as boxes Items can be packed into.
        'X-Small Box',
        150,
        150,
        5,
        5,
        146,
        146,
        4,
        500
    ));

    $packer->addBox(new TestBox( // adding boxes to be used as boxes Items can be packed into.
        'Small Box',
        300,
        300,
        10,
        10,
        296,
        296,
        8,
        1000
    ));

    $packer->addBox(new TestBox(
        'Medium Box',
        1000,
        1000,
        38,
        50,
        996,
        996,
        35,
        5000
    ));

    $packer->addBox(new TestBox( // adding boxes to be used as boxes Items can be packed into.
        'Large Box',
        3000,
        3000,
        100,
        100,
        2960,
        2960,
        80,
        10000
    ));

    if ($item1 == 0) {
        echo "item1 is not selected" . PHP_EOL;
    } else {
        $packer->addItem(new TestItem(
            'Item 1',
            25,
            25,
            4,
            100,
            true
        ));
    }

    if ($item2 == 0) {
        echo "item2 is not selected" . PHP_EOL;
    } else {
        $packer->addItem(new TestItem(
            'Item 2',
            50,
            50,
            5,
            100,
            true
        ));
    }

    if ($item3 == 0) {
        echo "item3 is not selected" . PHP_EOL;
    } else {
        $packer->addItem(new TestItem(
            'Item 3',
            550,
            250,
            12,
            200,
            true
        ));
    }

    if ($item4 == 0) {
        echo "item4 is not selected" . PHP_EOL;
    } else {
        $packer->addItem(new TestItem(
            'Item 4',
            750,
            750,
            25,
            700,
            true
        ));
    }


    // Execute pack() which will pack the items selected into our set boxes
    $packedBoxes = $packer->pack();
    $countBoxes = count($packedBoxes);

    $successMessage .= '<p>This item(s) pack into ' . $countBoxes . ' box(es)</p>';

    foreach ($packedBoxes as $packedBox) {
        $boxType = $packedBox->getBox(); // Our own box object, in this case TestBox
        $successMessage .= "<p>The box this item(s) fit into is a " . $boxType->getReference() . " it is " . $boxType->getOuterWidth() . "mm wide, " . $boxType->getOuterLength() . "mm long, and " . $boxType->getOuterDepth() . "mm high.</p>";
        $successMessage .= "<p>The max weight of this box is " . $boxType->getMaxWeight() . " g.</p>";

        $successMessage .= "<p>The items inside of your " . $boxType->getReference() . " are:</p>";
        $packedItems = $packedBox->getItems();
        foreach ($packedItems as $packedItem) {
            $successMessage .= "<p>" . $packedItem->getItem()->getDescription() . "</p>";
        }
    }
    echo $successMessage;
}


//if ($_REQUEST == []) {
//    echo "EMPTY REQUEST";
//}