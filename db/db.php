<?php
    
    function conexao() {
    $url = getenv('host');
    $user = getenv('user');
    $pass = getenv('password');

    $conn = mysqli_connect($url, $user, $pass);

    if (!$conn)
        die("Erro: " . mysqli_connect_error());
        echo "DB: ok...<br />";

    return $conn;
    }

    
?>
