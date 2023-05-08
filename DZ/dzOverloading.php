<?php
class User {
    private $name;
    private $age;
    private $email;

    public function __construct($name, $age, $email) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    public function __call($obj, $arguments) {
        if(method_exists($obj, $arguments)) {
            return $this->$arguments();
        } else {
            print 'Такого методу не існує';
        }

    }

    private function setName() {
        return 'setName';
    }

    private function setAge() {
        return 'setAge';
    }

    public function getAll() {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'email' => $this->email,
        ];
    }
}

try {
    $user = new User('John Doe', 30, 'john.doe@example.com');
    $user->__call($user, 'setName');
    print_r($user->getAll());
    print_r($user->__call($user, 'setName'));
} catch (Exception $e) {
    echo 'Ошибка: ' . $e->getMessage();
}
