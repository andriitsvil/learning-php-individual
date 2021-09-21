<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>php</title>
  <style>
  h4 {
    margin: 0;
    color:blueviolet;
    font-size: 20px;
  }
  b {font-weight: 800; font-size: 18px; color: cyan;}
</style>
</head>
<body style="background-color: #000; color: #00e040; line-height: 1.4;">
  <pre>
  <?php 
  echo 'hello world!';
  echo '<br>';
  for($i=1; $i<=10; $i++){
    echo $i.' ';
  };
  $my_var = 23.128;
  echo '<br>';
  echo $my_var;
  echo '<br>';
  //однострочный комментарий   -    echo работает с данными типа STRING
/* 
Многострочный комментарий

NULL - это специальны тип, который допускает только одно значение в виде ключевого слова null. Т.е., переменные этого типа могут содержать лишь значение null.
Этот тип данных дает ответ на вопрос: доступна ли переменная для практического использования?
Если переменная имеет значение null, то это это означает одно из трех:
переменная не была определена (или, что то же самое - не объявлена, не инициализирована)
переменной было присвоено значение null
переменная была удалена при помощи функции unset() (детальнее в следующих уроках)
Оператор echo выведет пустую строку при попытке вывести на экран значение null. Это следствие преобразования null к строковому значению.
Для вывода на экран значения null используется функция var_dump().
*/
  //$this - Эту переменную нельзя инициализировать
  //print_r - эта функция используется для отображения массивов и объектов.Значения falseи nullне будут явно выведены на экран пр помощи функции print_r. Вместо них будет выведена пустая строка.
  $true = true; $false = false;
  echo "true = {$true}, ";
  echo "false ={$false}";// дает '' при еобразовании в строку
  echo '<br>';
  echo 'Hey, this can\'t be done!'; //экранирование
  $name = 'Andrii';
  $age = 23;
  echo '<br>';
  $str = "My name is {$name}, I am {$age} yers old";
  echo $str;
echo '<hr>';
  $countries = array('Italy','USA','Ukraine','Argentina','Australia');
  print_r($countries);
  print_r($countries[2]);
echo '<hr>';
  $countries_a = array(
    'Italy' => 'Rome',
    'USA' => 'Washington DC',
    'Ukraine' => 'Kiyv',
    'Argentina' => 'Buenos Aires',
    'Australia' => 'Melbourne'
  );
  print_r($countries_a);
echo '<hr>';
  $books = array(
    array('author'=>'Defoe',
          'price'=>10,
          'name'=>'Robinson',
          'style'=>'adventures'
         ),
    array('author'=>'Doyle',
          'price'=>12.43,
          'name'=>'Sherlock',
          'style'=>'detective'
         ),
    array('author'=>'Vern',
          'price'=>22.43,
          'name'=>'20000L under water',
          'style'=>'fantastic adventures',
          'headers'=> array(
            1=>'head 1',
            2=>'head 2'
          )
         )
    );
  print_r($books);
echo '<hr>';
  $null = null; $bool = false;
  var_dump($null,$bool,$real,$books);
  echo '<hr>';
  define('CONST_1', 9/5); define('CONST_2', 32);
  $celsius = 20;
  $farenheit = CONST_1*$celsius + CONST_2;
  echo "{$celsius} Celsius = {$farenheit} Farenheit";
  echo '<br>';
  define('COUNTRY_1', 'Japan');define('COUNTRY_2','China');define('COUNTRY_3','Indonesia');
  $country_const = array(COUNTRY_1, COUNTRY_2, COUNTRY_3);
  print_r($country_const);
echo '<hr><h4>Переменные переменных</h4>';
  $hello = 'string_1';
  $string_1 = 'string_2';
  $string_2 = 'string_3';
  $string_3 = 'string_4';
  $string_4 = 'hello';
  echo $hello;
  echo '<br>';
  echo $$$$$hello;
  echo "<code style='border: 1px dashed lightblue;display:block;'>
    \$hello = 'string_1';
    \$string_1 = 'string_2';
    \$string_2 = 'string_3';
    \$string_3 = 'string_4';
    \$string_4 = 'hello';
    \$hello;
    $$$$\$hello;
  </code>";
echo '<hr><h4>Ссылки на область памяти</h4>';
  $x = & $y;
  $y = 'My Little Pony';
  $x = 212;
  var_dump($y);
  echo '$x = & $y;';
echo '<hr><h4>Суперглобальные переменные</h4>';
  echo '<form action="lesson-1.php" method="post">
    <input type="text" name="name"> name<br>
    <input type="email" name="email"> email<br>
    <input type="tel" name="phone"> phone<br>
    <input type="submit" value="send">
  </form>';
  print_r($_POST);
echo '<hr><h4>Использование isset/unset</h4>';
  $var1 = array(1,2,3,4,5,6,7,9);
  $var2 = 'second var';
  var_dump(isset($var));
  var_dump($var1,$var2);
  unset($var1);
  var_dump(isset($var1,$var2));
echo '<hr><h4>Использование serialize/unserialize</h4>';
  $books_ser = serialize($books);
  print_r($books_ser);
  $books_unser = unserialize($books_ser);
  print_r($books_unser);
  print_r(serialize($_POST));
  print_r(unserialize(serialize($_POST)));
echo '<hr><h4>Арифметические операторы</h4>';
  //$zero_divide = 20 / 0;
  //var_dump($zero_divide);
  $seconds_in_year = 365 * 24 * 60 * 60;
  echo 'seconds in year : 365 * 24 * 60 * 60  = ';
  var_dump($seconds_in_year);
  echo 'divide % 2 : ';
  var_dump($seconds_in_year % 2);
  echo '$x += A - увеличение значения переменной $x на A
$x -= A - уменьшение значения переменной $x на A
$x *= A - увеличение значения переменной $x в A раз
$x /= A - уменьшение значения переменной $x в A раз
$x .= A - конкатенация $x и А';
  echo '<br>';
  $number_str = '1'.'2'.'3'.'4'.'5';
  echo "{$number_str}";
echo '<hr><h4>Логические операторы</h4>';
 $A = (false && true) || (false && true) || (!false && true);
  var_dump($A);
  $x = 4;
  if($x % 2 == 0){
    var_dump((bool)1);
  }else{
    var_dump((bool)0);
  };
/*Операция присвоения сама по себе возвращает значение, 
которое было присвоено. Это значит, что операцию присвоения можно записывать, 
например, после echo: */
echo '<hr><h4>Операторы присвоения</h4>';
  $a = 1; $b = 'string';
  echo "a = {$a}, b = {$b}";
  echo '<br>';
  $a = array($a, $b);
  var_dump($a,$b);
  $b = $a[0]; $a = $a[1]; 
  echo "a = {$a}, b = {$b}";
/* Если добавить в выражение символ @, то сообщение о любой ошибке 
(замечании, предупреждении), которая может быть сгенерирована в
результате его работы, будет проигнорировано.*/
  echo @$sumpers;
  echo '<br>';
  echo '<br>';
  echo 'Cписок всех  операторов вместе, по убыванию приоритета:
инкремент, декремент: ++, --
отрицание: !
арифметические операторы: *, /, %
арифметические операторы: +, -
операторы сравнения: <, <=, >, >=
операторы сравнения: ==, !=, ===, !==
логический оператор: &&
логический оператор: ||
логический оператор: xor';
echo '<hr><h4>Оператор исполнения команд  shell_exec() и ` ` ;)</h4>';
  echo '<article>';
  $command = `dir`;
  echo $command;
  echo '<hr>';
  $command = shell_exec('dir');
  echo $command;
  echo '</article>';
  ?>
<!--////////////////////////////////////////////////////////////////////// -->
  <?php 
echo '<hr><h4>Конструкции условий</h4>';
  $q = 10; $r = 100;
  if($q > $r) {
    $msg = "max value is {$q}";
  }
  elseif($q < $r){
    $msg = "max value is {$r}";
  }
  elseif($q === $r){
    $msg = 'values are equal';
  }
  elseif($q !== $r) {
    $msg = 'values are not the same type';
  }
  else{
    $msg = 'comparison impossible';
  }
  echo $msg;

echo '<hr><h4>Тернарный оператор ? : </h4>';
  $d = 2; $c = 4;
  $v = ($d > $c) ? "{$d} > {$c}" : "{$d} < {$c}";
  print_r($v);
echo '<hr><h4>Использование switch/case/break/default </h4>';
  $p = 3;
  switch($p){
    case 1 : echo "One"; 
      break;
    case "2" : echo "Two";
      break;
    case "3" : echo "Three - string type";
      break;
    case 3 : echo "Three - int type";
      break;
    default : echo "not found";
  };
  echo '<br><br><br>';
  $u = 10; $b = 10.9;
  $res = ($u > $b);
  var_dump($res);
  echo '<br><br>';
  switch($res){
    case false : echo "{$b} is max value";
      break;
    case ($res > 0) : echo "{$u} is max value";
      break;
    default: echo "not found";
  };
echo '<hr><h4>Цикл for </h4>';
  echo 'вывести ряд простых чисел от 0 до 100'; echo '<br>';
  echo 'Натуральное число, большее 1, называется простым, если оно ни на что не делится, кроме себя и 1.
Другими словами, n>1 – простое, если при делении на любое число от 2 до n-1 есть остаток.';
  echo '<br> Результат (c использованием gmp_prob_prime()): <br>';
  for($i = 2; $i <= 100; $i++){
    if(gmp_prob_prime("{$i}") == 2){
      echo "{$i} ";
    }
  };
  echo '<br> Результат (обычный цикл FOR): <br>';
    for($i = 2; $i <= 100; $i++){
      $g = true;
      for($j = 2; $j < $i; $j++){
        if(($i % $j == 0)) {
          $g = false;
        };
      };
      if($g == true){
        echo "{$i} ";
      };
    };
echo '<hr><h4>Цикл while/do...while </h4>';
  echo 'вывести ряд простых чисел от 0 до 100'; echo '<br>';
  echo 'Натуральное число, большее 1, называется простым, если оно ни на что не делится, кроме себя и 1.
Другими словами, n>1 – простое, если при делении на любое число от 2 до n-1 есть остаток.';
  echo '<br> Результат (обычный цикл WHILE): <br>';
  $i = 2;
  while ($i <= 100){
    $j = 2;
    $flag = true;
    while($j < $i){
      if($i % $j == 0){
        $flag = false;
      };
      $j++;
    };
    if($flag == true){
      echo "{$i} ";
    };
    $i++;
  };
  echo '<br> Результат (обычный цикл DO...WHILE): <br>';
  $i = 2;
  $n = 100;
  do {
    $j = 2;
    do {
      if($i % $j == 0){
        $flag = false;
      };
      $j++;
    } while($j < $i);
    do {
      if($i == 2){
        $flag = true;
      };
      $j++;
    } while($j < $i);
    if($flag == true){
      echo "{$i} ";
    };
    $i++;
    $flag = true;
  } while($i <= ($n - 1));
echo '<hr><h4>Цикл foreach </h4>';
  echo 'Создать массив из 10 любых числовых значений. 
При помощи foreach вывести на экран те значения, которые делятся на 3 <br>';
  echo 'Результат: <br>';
  $num_array = array(0,1,2,3,4,5,6,7,8,9);
  echo 'Исходный массив:<br>';
  print_r($num_array);
  echo 'Output:<br>';
  foreach ($num_array as $number){
    if(($number % 3 == 0) && ($number != 0)){
      echo "{$number} ";
    };
  };
  echo '<br><br>';
  echo "В PHP существует т.н. альтернативный синтаксис условных и циклических конструкций if, for, while, foreach.
Отличие от стандартного синтаксиса управляющих конструкций if, for, while, foreach состоит в том, чтоб вместо 
открывающей фигурной скобки писать двоеточие :, а в место закрывающей скобки писать специальное ключевое слово endif,
endfor, endwhile, endforeach - соответственно ключевому слову управляющей конструкции. ";
echo '<hr><h4>Выполнение предыдущих заданий (циклы) с использованием альтернативного синтаксиса</h4>';
  echo '<br> Результат (c использованием gmp_prob_prime()): <br>';
  for($i = 2; $i <= 100; $i++):
    if(gmp_prob_prime("{$i}") == 2){
      echo "{$i} ";
    }
  endfor;
  echo '<br> Результат (обычный цикл FOR): <br>';
    for($i = 2; $i <= 100; $i++):
      $g = true;
      for($j = 2; $j < $i; $j++):
        if(($i % $j == 0)) :
          $g = false;
        endif;
      endfor;
      if($g == true){
        echo "{$i} ";
      };
    endfor;
  echo '<br> Результат (обычный цикл WHILE): <br>';
  $i = 2;
  while ($i <= 100):
    $j = 2;
    $flag = true;
    while($j < $i):
      if($i % $j == 0):
        $flag = false;
      endif;
      $j++;
    endwhile;
    if($flag == true):
      echo "{$i} ";
    endif;
    $i++;
  endwhile;

  echo '<br> Результат (обычный цикл DO...WHILE): <br>';
  $i = 2;
  $n = 100;
  do {
    $j = 2;
    do {
      if($i % $j == 0):
        $flag = false;
      endif;
      $j++;
    } while($j < $i);
    do {
      if($i == 2):
        $flag = true;
      endif;
      $j++;
    } while($j < $i);
    if($flag == true):
      echo "{$i} ";
    endif;
    $i++;
    $flag = true;
  } while($i <= ($n - 1));
echo '<hr><h4>Конструкции break/continue</h4>';
  echo 'Создать алгоритм для определения первого найденного простого 
числа в промежутке от 200 до 400.';
  echo '<br> Результат: <br>';
  for ($i = 200; $i <= 400; $i++){
    $flag = true;
    for($j = 2; $j < $i; $j++){
      if($i % $j == 0){
        $flag = false;
      };
    };
    if($flag == true){
      echo "{$i} ";
      //continue;
      break;
    };
  };
echo '<hr><h4>Конструкции exit()/die()</h4>';
  echo 'Как можно упростить функцию test() в данном скрипте?
function test($x, $y)
{
  if ($y == 0) {
    return false;
  };
return $x / $y;
};
echo test(1, 0) or die("Error");
echo "Unreached line";';
echo '<br>';
  function test_2($x, $y){
    if ($y == 0) {
      exit('error');
    };
    echo $x / $y;
  };
 //or die('<br><br>Error');
echo '<br>';
echo 'Ответ:
function test_2($x, $y){
  if($y == 0) {
    exit("error");
  };
  echo $x / $y;
};
test_2(25, 1);';
echo '<br>result:<br>';
test_2(25, 1);

echo '<hr><h4>Работа с файлами</h4>';
echo 'основные режимы работы с файлами в PHP:
<b>r</b> открывает файл только для чтения и помещает маркер в начало файла. 
Это можно использовать, например, для получения всего содержимого файла. Изменять файл нельзя.
<b>r+</b>  открывает файл для чтения и записи. Это можно использовать, например, для получения всего 
содержимого файла и внесения изменений в него.
<b>w</b>  открывает файл только для записи. Создает файл (если это возможно),
если его не существует или очищает существующий файл. Маркер помещается в начало файла.
<b>w+</b>  открывает файл для чтения и записи. Создает файл, если его не существует или очищает существующий файл. 
Маркер помещается в начало файла.
<b>a</b>  открывает файл только для записи и ставит маркер в конец файла. Создает файл, если его не существует.
<b>a+</b>  открывает файл для чтения и записи и ставит маркер в конец файла. Создает файл, если его не существует.
Для работы с файлами в PHP существует функция <b>fopen($filename, $mode)</b>, в которую обязательно необходимо
передать название <b>$filename</b> файла и режим <b>$mode</b> работы с ним (в качестве строковых значений). 
Эта функция возвращает специальный указатель на соответствующий файл в качестве типа resource. Этот указатель 
будет необходим при дальнейшей работе с этим файлом.
Для записи в файл используют функцию <b>fwrite($handler, $data)</b>, в которую необходимо передать 
указатель <b>$handler</b> (который был получен от <b>fopen</b>) и сами данные для записи. При этом необходимо 
чтоб режим работы с файлом допускал запись данных в него.
закрывайте файл при помощи <b>fclose()</b> во избежании потери информации.
Для чтения из файла используется функция <b>fread($handle, $length)</b> в которую необходимо передать 
указатель на файл <b>$handle</b> и максимальное количество байт <b>$length</b> которое необходимо прочитать из файла. 
Эта функция возвращает полученные данные, либо false в случае ошибки.
Если же требуется получить все содержимое файла, то вторым аргументом можно передавать результат 
функции <b>filesize()</b>, которая возвращает размер файла в байтах.
Также для чтения текстовых файлов можно использовать функцию 
<b>file_get_contents($filename)</b>, которая возвращает содержимое текстового файла';
echo '<br><br>Задание: <br>';
echo 'Создать текстовый файл, в котором будет 10 строк. 
В первой строке записать 1, во второй 22, в третьей 33, ..., в десятой - десять десяток
';
$f = fopen('test.txt', 'w');
fclose($f);
$f = fopen('test.txt', 'a');
for ($i = 1; $i <= 10; $i++){
  if($i > 1){
    $f = fopen('test.txt', 'a');
    fwrite($f, "{$i}" . "{$i}" . PHP_EOL);
    fclose($f);
  }elseif($i <= 1) {
    $f = fopen('test.txt', 'a');
    fwrite($f, "{$i}" . PHP_EOL);
    fclose($f);
  };
};
echo '<br>Result:<br>';
$f = fopen('test.txt', 'r');
$r = fread($f, filesize('test.txt'));
echo $r;
echo '<br>';
echo 'При работе с файлами (создание, чтение, запись) могут иметь место ситуации, 
когда файл будет открыт разными пользователями одновременно. Это может привести к 
сбою в системе хранения информации. Потому необходимо применять специальную блокировку, 
которая позволит предотвратить одновременные операции при работе с файлом.
Блокировка осуществляется при помощи функции <b>flock($handler, $action)</b>. 
Параметр <b>$hadler</b> - это указатель на файл, который можно получить при помощи 
<b>fopen()</b>. В качестве <b>$action</b> указывают одно из допустимых значений (констант):
<b>LOCK_SH</b> - разделяемая блокировка (для чтения). Эта блокировка позволяет 
читать файл нескольким процессам. При этом, если необходима запись в файл, то 
это осуществляется последовательно.
<b>LOCK_EX</b> - эксклюзивная блокировки (для записи). 
Эта блокировка допускает лишь один процесс к записи в файл и предотвратит ошибки при 
попытке одновременной записи в файл разными процессами.
<b>LOCK_UN</b> - снятие блокировки
Блокировку необходимо осуществлять после открытия файла, 
а снятие блокировки - перед его закрытием.
Удаление файлов осуществляется при помощи функции <b>unlink($filename)</b>. 
В качестве параметра подставляется путь к файлу.
При попытке удалить заблокированный файл, интерпретатор 
выведет замечание и файл удален не будет.';
echo '<br>';
echo '<hr><h4>Функции</h4>';
echo 'Задание: <br>';
echo 'Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>';
$arr = array(1,3,8,[1,3,4],'string',2.37);
function arrOut(Array $array){
  echo '<pre>';
  for($i = 0; $i <= (count($array) - 1); $i++){
    var_dump($array[$i]);
  };
  echo '</pre>';
};
echo "input array: <br>"; print_r($arr);
echo '<br>Result:<br>';
arrOut($arr);
echo "<br>";
echo 'Задание: <br>';
echo 'Создать функцию, которая будет выводить на экран массив внутри 
тегов pre. В зависимости от значения второго аргумента функции,
выводить используя var_dump или print_r. По умолчанию использовать print_r';
function arrOutMeth(Array $array, $method = 0){
  echo '<pre>';
  for($i = 0; $i <= (count($array) - 1); $i++){
    if($method == 1){
      var_dump($array[$i]);
    }else{
      print_r($array[$i]);
    };
  };
  echo '</pre>';
};
echo '<br>Result:<br>';
arrOutMeth($arr, 1);
echo "<br>";
echo 'Задание: <br>';
echo 'Создать функцию, которая принимает один аргумент в виде 
массива и дописывает в него последним элементом количество 
значений массива';
echo '<br>Result:<br>';
function arrChange(Array & $array){
  array_push($array, count($array));
};
$apter = array('stringus', 2.45, 3, false, 23);
var_dump($apter);
arrChange($apter);
var_dump($apter);
echo '<hr><h4>Возвращение значений функциями</h4>';
echo 'Задание: <br>';
echo 'Реализовать функцию, которая определяет, будет ли число простым числом';
echo '<br>';
function isSimple($x){
  $label;
  $i = 1;
  $arr_1 = array();
  if(($x === 1) || ($x === 0)){
    $label = false;
    return $label;
  };
  while($i <= $x){
    $res = $x % $i;
    if($res == 0){
      array_push($arr_1, $res);
    };
    $i++ ;
  };
  if(count($arr_1) > 2){
    $label = false;
  }elseif(count($arr_1) <= 2){
    $label = true;
  };
  return $label;
};
$num = 2;
echo "<br>Result for {$num} :<br>";
var_dump(isSimple($num));
echo "<br><br>";
echo '<hr><h4>Рекурсивные функции</h4>';
echo 'Задание: <br>';
echo 'Определить рекурсивную функцию - аналог функции print_r';
echo '<br>';
function rep($a, $value){
  while($a > 0){
    $a-- ;
    echo $value.' ';
    return rep($a, $value);
  };
};
$func = 'rep';
$func(10, 'repeat');
?>
</pre>
</body>
</html>



