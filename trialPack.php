<?php

date_default_timezone_set('UTC');

use DVDoug\BoxPacker\Packer;
use DVDoug\BoxPacker\Test\TestBox;
use DVDoug\BoxPacker\Test\TestItem;

require "vendor/autoload.php";

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

$packer->addItem(new TestItem('Item 1', 25, 25, 4, 100, true));  // item 1
$packer->addItem(new TestItem('Item 1', 50, 50, 5, 100, true));  // item 2
$packer->addItem(new TestItem('Item 10', 550, 250, 12, 200, true));  // item 3
$packer->addItem(new TestItem('Item 8', 750, 750, 25, 700, true)); // item 4



// BoxPacker packing function executes here.
$packedBoxes = $packer->pack();

echo "This item(s) fit into " . count($packedBoxes) . " box(es) " . PHP_EOL;
foreach ($packedBoxes as $packedBox) {
    $boxType = $packedBox->getBox(); // Our own box object, in this case TestBox
    echo "The box they fit into is a {$boxType->getReference()}, it is {$boxType->getOuterWidth()}mm wide, {$boxType->getOuterLength()} long and {$boxType->getOuterDepth()}mm high." . PHP_EOL;
    echo "The combined max weight of this box and the items inside it is {$boxType->getMaxWeight()}g" . "\n" . PHP_EOL;

    echo "The items inside {$boxType->getReference()} are: " . PHP_EOL;
    $packedItems = $packedBox->getItems();
    foreach ($packedItems as $packedItem) {
        echo $packedItem->getItem()->getDescription() . PHP_EOL;
    }
}
