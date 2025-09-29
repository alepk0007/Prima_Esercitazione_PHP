<?php
if (isset($_POST['Cateto'])) {
    $cateto = intval($_POST['Cateto']);

    echo "<pre>";
    for ($i = 1; $i <= $cateto; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
    echo "</pre>";
} else {
    echo "Nessun valore ricevuto.";
}
?>
