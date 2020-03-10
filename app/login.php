<?php
session_start();

//проверить  наличие в бд
//select email, password from users where email = $_POST['email_aut'] and password = $_POST['pass']
$login = 'root';
$pass = '';
$dbn = new PDO('mysql:host=localhost;dbname=duplex', $login, $pass);
$data = [
    'email' => $_POST['email_aut'],
    'password' => $_POST['pass'],
];
$rq = $dbn->prepare("select email, password from users where email = :email and password = :password");
$rq->execute($data);
$result = $rq->fetchAll();
$user = null;
if ($result){
    $user = $result[0];

    $_SESSION['user'] = $user;
    echo "привет {$user['email'] }";
}
else {
  echo "Пользователь не зарегестрирован";
}


$a = [];
// если есть создать сессию и поместить в нее данные из базы
//  редирект на главную
// вывести флеш сообщение на главную  об успешносни авторизации
