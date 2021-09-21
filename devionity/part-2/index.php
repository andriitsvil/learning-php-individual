<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>oop</title>
</head>
<body>
<pre>
<?php 
class Human
{
	// properties and methods
}

class Animal
{
	// properties and methods
}

$mike = new Human;
$john = new Human;

$cat = new Animal;
$dog = new Animal;

var_dump($mike);
var_dump($cat);
var_dump(new Animal);

class Dog
{
}

class Cat 
{
}

$c = new Cat;

var_dump($c instanceof Dog); // false
var_dump($c instanceof Cat); // true
echo "<br><br>";
class User
{
  protected $login;
  public $name;
  protected $password;
  public $email;
  public $rating = 0;
  public $isLogged;
  public function login()
  {
    echo '<br>Logged In! <br>';
    $this->isLogged = true;
    return true;
  }
  public function logout()
  {
    echo '<br>Logout!<br>';
    $this->isLogged = false;
    return false;
  }
};
class Manager extends User
{
  public function showProtectedManager(){
    var_dump($password);
    echo '<br>';
    var_dump($login);
    echo '<br>';
  }
};
class Admin extends User
{
  public function showProtectedAdmin(){
    var_dump($password);
    echo '<br>';
    var_dump($login);
    echo '<br>';
  }
};
var_dump(new User);
echo '<br><hr>';
echo 'Задание: <br>';
echo 'Создать класс Car. Записать в этот класс свойства brand, model, year, driver. 
Создать экземпляры машин Toyota Corolla (2000), Mazda 6 (2015), Ford Taurus (1995) . 
В рамках предыдущего задания создать экземпляры класса User для нескольких пользователей системы. 
В свойство driver объектов класса Car записать объекты класса User. 
Вывести объекты класса Car на экран при помощи var_dump(), print_r()';
echo '<br>';
class Car 
{
  public $brand;
  public $model;
  public $year;
  public $driver;
  private $price;
  public function showBrand()
  {
   echo "<br>brand is {$this->brand}<br>"; 
  }
  public function showModel()
  {
    echo "<br>model is {$this->model}<br>";
  }
  public function getPrice($format)
  {
    if($format === true){
      echo "<br>{$this->price} $ <br>";
    }else{
      $this->price = number_format($this->price);
      echo "<br>{$this->price} $ <br>";
    };
  }
  public function setPrice($setted_price)
  {
    $this->price = $setted_price;
    $this->price = round(floatval($this->price), 2);
    return $this->price;
  }
  public function __construct()
  {
    echo '<br>Car created!<br>';
  }
  
};
$user_1 = new User;
$user_1->name = 'John';

$user_2 = new User;
$user_2->name = 'Mike';

$user_3 = new User;
$user_3->name = 'Angela';

$car_1 = new Car;
$car_1->brand = 'Toyota';
$car_1->model = 'Corolla';
$car_1->year = 2000;
$car_1->driver = $user_1->name;

$car_2 = new Car;
$car_2->brand = 'Mazda';
$car_2->model = 6;
$car_2->year = 2015;
$car_2->driver = $user_2->name;

$car_3 = new Car;
$car_3->brand = 'Ford';
$car_3->model = 'Taurus';
$car_3->year = 1995;
$car_3->driver = $user_3->name;

print_r($user_1);
print_r($user_2);
print_r($user_3);
print_r($car_1);
print_r($car_2);
print_r($car_3);

echo '<br><hr>';
echo 'Задание: <br>';
echo 'Для класса User из предыдущего занятия создать методы login(), logout(),
которые просто выводят на экран соответствующее сообщение. 
Создать экземпляр класса, вызвать созданные методы.';
echo '<br>';
$user_4 = new User;
$user_4->login();
$user_4->logout();
echo '<br><hr>';
echo 'Задание: <br>';
echo 'Создать массив, который описывает сообщение ключами name, email, message 
с соответствующими значениями. Привести массив к объекту. 
Проанализировать результат при помощи var_dump.';
echo '<br>';
$arr = array(
  'name'=>'Andrii',
  'email'=>'andrii@gmail.com',
  'message'=>'hello everyone!',
  'number'=> 4
);
var_dump((object)($arr));
echo '<br><hr>';
echo 'Задание: <br>';
echo 'В класс Car из предыдущих заданий добавить методы showBrand(), showModel() 
которые выводят на экран значения свойств brand, model соответственно. 
В класс User из предыдущих заданий добавить свойство isLogged, которое 
принимает true, если пользователь успешно авторизировался, и false 
при выходе из системы. Задать значения для этого свойства в методах login(), logout().';
echo '<br>';
$car_1->showBrand();
$car_1->showModel();
$user_2->login();
var_dump($user_2->isLogged);
$user_2->logout();
var_dump($user_2->isLogged);
echo '<br><hr>';
echo 'Задание: <br>';
echo 'В класс Car из предыдущих заданий добавить private свойство price, 
а также публичные геттер и сеттер для него. Геттер должен зависеть от 
одного параметра. В зависимости от того, было ли в функцию геттера передано 
true, выводить отформатированную цену, либо же в обычном виде (использовать 
функцию number_format). Сеттер должен приводить входящий параметр к числу, 
у которого не более 2 знаков после запятой (использовать round).';
echo '<br><br>';
//$car_1->format = true;
//$car_2->format = false;
$car_1->showBrand();
$car_1->showModel();
$car_1->setPrice(12343.8778998);
$car_1->getPrice(true);

$car_2->showBrand();
$car_2->showModel();
$car_2->setPrice(23683.804);
$car_2->getPrice(false);
echo '<br><hr>';
echo 'Задание: <br>';
echo 'Унаследовать от класса Car из предыдущих занятий 
класс WaterCar со свойством waterSpeed.';
echo '<br><br>';
class waterCar extends Car
{
  public $waterSpeed;
};
$water_car_1 = new waterCar;
$water_car_1->waterSpeed = 120;
var_dump($water_car_1);
echo '<br><hr>';
echo 'Задание: <br>';
echo 'Изменить область видимости свойств класса User на protected.
Унаследовать от класса User классы Manager, Admin.
Создать объекты менеджера и админа, задать значения для свойств объектов.';
echo '<br><br>';
$user_5 = new Admin;
$user_6 = new Manager;
var_dump($user_5);
var_dump($user_6);
echo '<br>';
//$user_5->showProtectedAdmin();
//$user_6->showProtectedmanager();
//$user_5->password = 'jgh324734g2u38';
//$user_5->login = 'admin';
//$user_5->showProtectedAdmin();
echo '<br><hr>';
echo 'Задание: <br>';
echo 'Создать экземпляр класса User с конкретными значениями свойств 
и клонировать его в новую переменную. Свойствам нового экземпляра 
присвоить новые значения. Сравнить полученные экземпляры класса.';
echo '<br><br>';
$user_7 = new User;
$user_7->name = 'Vladimir';
$user_7->email = 'vladimir@mail.ua';
$user_7->rating = 3.56;
$user_8 = clone $user_7;
$user_8->name = 'Eva';
$user_8->email = 'eva@mail.ua';
$user_8->rating = 7.56;
var_dump($user_7);
var_dump($user_8);
var_dump($user_7 != $user_8);
echo '<br><hr>';
echo 'Задание: <br>';
echo 'В класс Car из предыдущих заданий добавить конструктор, 
который выводит сообщение Car created при создании нового экземпляра класса. 
Создать контактную форму. Создать скрипт обработчик контактной формы. 
Создать класс ContactForm со свойствами, 
значения которых совпадают с названиями полей формы. 
Создать экземпляр класса ContactForm по массиву $_POST при отправке формы.';
echo '<br><br>';
$car_4 = new Car;
var_dump($car_4);
?>
<form action="contact_form.php" method="post">
  <p>name:</p>
  <input type="text" name="name">
  <p>Email</p>
  <input type="email" name="email"><br>
  <input type="submit" value="send">
</form>

<?php
echo '<br><hr>';
echo 'Задание: <br>';
echo 'Создать класс со статическим свойством, 
которое будет содержать значение количества 
созданных экземпляров.(использовать self)';
echo '<br><br>';
class Count
{
  public static $x;
  public function __construct(){
    self::$x++;
  }
};
$a = new Count;
$b = new Count;
$c = new Count;
var_dump(Count::$x);
echo '<br><hr>';
echo 'Задание: <br>';
echo 'Создать класс Fraction, который моделирует простую дробь 
с числителем и знаменателем. Определить методы
конструктор, сокращения дроби и представления дроби в
десятичном виде. Определить статические методы для 
арифметических операций с двумя дробями.';
echo '<br><br>';
class Fraction
{
  public static $a;
  public static $b;
  public static $fraction;
  public function __construct($x, $y){
    $this->a = $x;
    $this->b = $y;
    $this->fraction = $this->a / $this->b;
    var_dump($this->fraction); echo '<br>';
  }
  public function reduct(){
    $a = $this->a;
    $b = $this->b;
    if(($a > $b) && ($a % $b == 0)){
      $res = $a/$b;
      echo "<br>{$res}<br>";
      return $res;
    }elseif(($a < $b)&&($b % $a == 0)){
      $b = $b / $a ;
      $a = $a / $a ;
      $res = $a / $b;
      echo "<br> {$a} / {$b} <br>";
      return $res;
    }elseif(($a % $b != 0)||($b % $a != 0)){
      echo '<br>the reduction of the fraction is impossible in this case <br>';
      echo "<br> {$a} / {$b} <br>";
    }elseif($a == $b){
      echo 1;
      return 1;
    }
  }
  public function to_float(){
    $a = $this->a;
    $b = $this->b;
    $res = floatval($a / $b);
    echo "<br>{$res}<br>";
    return $res;
  }
}
$one = new Fraction(10, 110);
var_dump($one);
echo '<br>Сокращение дроби:<br>';
$one->reduct();
echo '<br>Представление дроби в десятичном виде: <br>';
$one->to_float();
echo '<br><hr>';
?>
</pre>
</body>
</html>