# BoxEngine
A basic reference implementation of the BoxPacker Composer package. https://packagist.org/packages/dvdoug/boxpacker

After pulling the source code, start the server and naviage to `http://localhost:9090/index.php`:
```bash
php -S http://localhost:9090/index.php
```

Once on the homepage you can click either `Use my own boxes` (in development) or `Use test boxes`, select the 'use test boxes' option to use an interactive demo of the BoxPacker in action. You can select any combination of items to be packed into any of the preset test boxes and `cartonize.php` will optimally pack the given items and recommend the best fit box to ship the items in.

BoxPacker expects to recieve the dimensions and weights of the items you will be shipping, in additon to the dimnesions of the boxes that you will be shipping in. This gives the algorithm in BoxPacker the data it needs to do a `volumetric pack` of any given items, optimized around the use of volume in the box.

**NOTE:** Some of the units of measure within BoxPacker are odd and conversions will need to be made to translate the units of measure into your prefferred units.

# cartonize.php
```php

use DVDoug\BoxPacker\Packer;
use DVDoug\BoxPacker\Test\TestBox;
use DVDoug\BoxPacker\Test\TestItem;

require "vendor/autoload.php";

// Will cause this PHP file to respond with $_REQUEST contents as JSON
//var_export(json_encode($_REQUEST, JSON_PRETTY_PRINT));

$item1 = isset($_REQUEST["Item1"]) ? true : false;
$item2 = isset($_REQUEST["Item2"]) ? true : false;
$item3 = isset($_REQUEST["Item3"]) ? true : false;
$item4 = isset($_REQUEST["Item4"]) ? true : false;

$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $packer = new Packer();

    $packer->addBox(new TestBox('X-Small Box', 150, 150, 5, 5, 146, 146, 4, 500));

    $packer->addBox(new TestBox('Small Box', 300, 300, 10, 10, 296, 296, 8, 1000));

    $packer->addBox(new TestBox('Medium Box', 1000, 1000, 38, 50, 996, 996, 35, 5000));

    $packer->addBox(new TestBox('Large Box', 3000, 3000, 100, 100, 2960, 2960, 80, 10000));

    if ($item1 != 0) {
        $packer->addItem(new TestItem('Item 1', 25, 25, 4, 100, true));
    }

    if ($item2 != 0) {
        $packer->addItem(new TestItem('Item 2', 50, 50, 5, 100, true));
    }

    if ($item3 != 0) {
        $packer->addItem(new TestItem('Item 3', 550, 250, 12, 200, true));
    }

    if ($item4 != 0) {
        $packer->addItem(new TestItem('Item 4', 750, 750, 25, 700, true));
    }

    // Execute pack() which will pack the items selected into our set boxes
    $packedBoxes = $packer->pack();
    $countBoxes = count($packedBoxes);

    $successMessage .= '<p>This item(s) pack into <strong>' . $countBoxes . '</strong> box(es)</p>';

    foreach ($packedBoxes as $packedBox) {
        $boxType = $packedBox->getBox(); // Our own box object, in this case TestBox
        $successMessage .= "<p>The box this item(s) fit into is a <strong>" . $boxType->getReference() .
            "</strong> it is " . $boxType->getOuterWidth() . "mm wide, " . $boxType->getOuterLength() .
            "mm long, and " . $boxType->getOuterDepth() . "mm high.</p>";
        $successMessage .= "<p>The max weight of this box is <strong>" . $boxType->getMaxWeight() . "</strong> g.</p>";

        $successMessage .= "<p>The items inside of your <strong>" . $boxType->getReference() . "</strong> are:</p>";
        $packedItems = $packedBox->getItems();
        foreach ($packedItems as $packedItem) {
            $successMessage .= "<p>" . $packedItem->getItem()->getDescription() . "</p>";
        }
    }
    echo $successMessage;
}


```
