<?php
/*
 * Flicker Leap PHP Engineer Test
 *
 * This is where the magic happens. Run all code in here to show your end result.
 */

require __DIR__ . '/vendor/autoload.php';

use FlickerLeap\Diamond;
use FlickerLeap\Rectangle;
use FlickerLeap\Square;
use Httpful\Request;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Flicker Leap - PHP Engineer Test</title>
</head>
<style type="text/css">
    body {
        line-height: 1em;
    }
</style>
<body>

<h1>PHP Engineer Test</h1>

<?= '<h2>Hello World</h2>'; ?>

<p>At the end of this test, you should have all the answers on this page.</p>

<h2>Output a square</h2>

<?php
// implement the square class here
$sqr = new Square(10);

$sqr->draw();
?>
//Extend the Shape class to create a diamond that works with any passed length.
<h2>Output a diamond</h2>

<?php
// output your diamond here
$diamond = new Diamond(10);
$diamond->draw();

?>

<h2>Output your rectangle</h2>

<?php
// output your working rectangle here
$rec = new Rectangle(15);
$rec->draw();

?>



<?php
// Use the Httpful client to output the API results here.

$uri = "https://pokeapi.co/api/v2/pokemon/mewtwo/";
$res = Request::get($uri)->expectsJson()->send();

$name = $res->body->name;
$type = $res->body->types[0]->type->name;
$pic = $res->body->sprites->front_default;

?>

<h2>API results</h2>


<table>
    <tr>
        <th>Pokemon</th>
        <th>Type</th>
        <th>Image</th>
    </tr>
    <tr>
        <td> <?= $name; ?></td>
        <td> <?= $type; ?></td>
        <td><img src="<?= $pic; ?>" alt="Cool Pokemon" style="width:100px;height:100px;"></td>
    </tr>

</table>

<h2>Recommendations</h2>

<p>I enjoyed the test. However, I would also recommend more frontend (e.g. VueJS) tasks even though its not necessary
    for PHP Engineers</p>

</body>


<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

</html>
