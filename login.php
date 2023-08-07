<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Kullanıcı adı ve şifre kontrolü burada yapılacak
    // Örnek kontrol: Kullanıcı adı ve şifre doğru mu?
    $correctUsername = "S221210218";
    $correctPassword = "17263066810";
    
    if ($username === $correctUsername && $password === $correctPassword) {
        echo "Hoşgeldiniz, $username!";
    } else {
        header("Location: login.html");
        exit;
    }
}
?>