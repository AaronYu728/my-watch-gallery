<?php

try {
    $conn = mysqli_connect("localhost", "root", "", "melbourne_watch_gallery");
} catch (Exception $e) {
    echo $e->getMessage();
}
