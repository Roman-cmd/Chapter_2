<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $response = '';
    if(!empty($name)){
        if(!empty($age)) {
            $response = "Привет, {$name}! ";
            if ($age < 18) {
                $response .= "Ты еще слишком молод!";
            } elseif ($age < 30) {
                $response .= "Ты еще молод и полон сил!";
            } else {
                $response .= "Ты уже взрослый и опытный!";
            }
        }
        else{
            $response .= "Не корректный возраст!";
        }
    }else{
        $response = "Ты забыл указать имя! ";
    }
    if ($gender == "Мужской"){

    } else{
        $search = array("молод", "полон", "взрослый", "забыл", "опытный");
        $replace = array("молодая", "полна", "взрослая", "забыла", "опытная");
        $response = str_replace($search, $replace, $response);
    }
    echo $response;
    exit();
}
?>