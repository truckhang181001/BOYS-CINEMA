<?php
$alphabet = range("A", "Z");
for ($i = 0; $i < 10; $i++) {
    echo "<div class='booking-page__seat__row'>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<div class='seat'>" . $alphabet[$i], $j . "</div>";
    }
    echo "</div>";
}
