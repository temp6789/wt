<?php
if (isset($_GET['mapimage_x']) && isset($_GET['mapimage_y'])) {
    $x = $_GET['mapimage_x'];
    $y = $_GET['mapimage_y'];

    echo "<h2>Server-side Image Map</h2>";
    echo "<p>You clicked at coordinates: X = $x, Y = $y</p>";

    if ($x >= 437 && $x <= 715 && $y >= 447 && $y <= 614) {
        echo "<p>You clicked on <strong>North America</strong>.</p>";
    } elseif ($x >= 744 && $x <= 954 && $y >= 875 && $y <= 1011) {
        echo "<p>You clicked on <strong>South America</strong>.</p>";
    } elseif ($x >= 1212 && $x <= 1639 && $y >= 1405 && $y <= 1513) {
        echo "<p>You clicked on <strong>Antarctica</strong>.</p>";
    } elseif ($x >= 1165 && $x <= 1427 && $y >= 695 && $y <= 833) {
        echo "<p>You clicked on <strong>Africa</strong>.</p>";
    } elseif ($x >= 1296 && $x <= 1499 && $y >= 472 && $y <= 557) {
        echo "<p>You clicked on <strong>Europe</strong>.</p>";
    } elseif ($x >= 1676 && $x <= 1859 && $y >= 411 && $y <= 546) {
        echo "<p>You clicked on <strong>Asia</strong>.</p>";
    } elseif ($x >= 1926 && $x <= 2140 && $y >= 986 && $y <= 1092) {
        echo "<p>You clicked on <strong>Oceania</strong>.</p>";
    } else {
        echo "<p>Clicked area is not mapped.</p>";
    }
} else {
    echo "<p>No coordinates received.</p>";
}
?>
