<?php
// function my_autoloader($class_name) {
//     $file_name =  str_replace('\\', '/', __DIR__) . '/' . str_replace('\\', '/', $class_name) . '.php';
//     if (file_exists($file_name)) {
//         require_once $file_name;
//     }
// }

// spl_autoload_register('my_autoloader');
// my_autoloader('test');
// $newTest = new Test();
// var_dump($newTest->a());

// class MyException extends Exception { }


class User {
    private $id;
    private $password;

    public  function __construct($id, $password)
    {
        if(!is_numeric($id)) {
            throw new Exception('Поле id має містити лише числа');
        }
        $this->id = $id;

        if (strlen($password) > 8) {
            throw new Exception('Довжина поля password не може бути більше 8 символів');
        }
        $this->password = $password;
    }

    public function getUserData()
    {
        return [
            'id' => $this->id,
            'password' => $this->password,
        ];

    }
}

try {
    $user = new User('12321351derfgertg', 'passwordd');
    print_r($user->getUserData());
} catch (Exception $e) {
    echo 'Помилка: ' . $e->getMessage() . ' в файлі ' . $e->getFile() . ' на рядку ' . $e->getLine();
}