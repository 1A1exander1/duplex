<?php

if ($_POST) {
    $user = 'root';
    $pass = '';

    try {
        $dbn = new PDO('mysql:host=localhost;dbname=duplex', $user, $pass);
        $data = [
            'last_name' => $_POST['last_name'],
            'first_name' => $_POST['first_name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];

        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)";
        $stmt = $dbn->prepare($sql);
        $stmt->execute($data);





    } catch (PDOException $e) {
        print "Ошибка!" . $e->getMessage() . "<br/>";
    }
}
