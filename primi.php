<?php
if (isset($_POST['N'])) {
    $N = intval($_POST['N']);
    $count = 0;
    $num = 2;
    $primi = [];

    while ($count < $N) {
        $isPrime = true;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            $primi[] = $num;
            $count++;
        }
        $num++;
    }

    echo "I primi $N numeri primi sono:<br>";
    echo implode(", ", $primi);
} else {
    echo "Nessun valore ricevuto.";
}
?>