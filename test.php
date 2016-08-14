<!DOCTYPE html>
<html>
<body>

 
<!--
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">        
Name: <input type="text" name="fname">
<input type="submit">
</form>
-->




<?php
header("Content-type: text/html; charset=utf-8");
/*
������ $ ���ſ�ʼ��������ű���������
��������������ĸ�����»����ַ���ʼ
������ֻ�ܰ�����ĸ�����ַ��Լ��»��ߣ�A-z��0-9 �� _ ��
���������ܰ����ո�
�����������ִ�Сд�ģ�$y �� $Y ��������ͬ�ı�����
*/








/*
$a1=strlen("dfdfsfsfd");
$b1=strpos("asdfghjkl","j");//�ַ����е�һ���ַ���λ����0
echo$a1.$b1;
*/



                                  //@ PHP�����
/*
$x=10; 
$y=6;
echo"x=10,","  ","y=6";
echo"<br>";
echo ($x + $y); // ���16
echo"<br>";
echo ($x - $y); // ���4
echo"<br>";
echo ($x * $y); // ���60
echo"<br>";
echo ($x / $y); // ���1.6666666666667
echo"<br>"; 
echo ($x % $y); // ���4 
*/



/*
var_dump(intdiv(10, 3));       //         intdiv()���������
*/

/*
$x=10; 
echo $x; // ���10

$y=20; 
$y += 100;
echo $y; // ���120,                y +=x -->y=y+x

$z=50;
$z -= 25;
echo $z; // ���25

$i=5;
$i *= 6;
echo $i; // ���30

$j=10;
$j /= 5;
echo $j; // ���2

$k=15;
$k %= 4;
echo $k; // ���3


$a = "Hello";
$b = $a . " world!";
echo $b; // ���Hello world!        x.=y -->x=x.y

$x="Hello";
$x .= " world!";
echo $x; // ���Hello world!
*/

/*
$x=100; 
$y="100";

var_dump($x == $y);   // returns true because values are equal

echo "<br>";
var_dump($x === $y);   // returns false because types are not equal
echo "<br>";
echo "<br>";
var_dump($x != $y);     // returns false because values are equal
echo "<br>";
var_dump($x !== $y);// returns true because types are not equal
echo "<br>";
echo "<br>";

$a=50;
$b=90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
*/


/*  
$t=date("H");  
if ($t<"12")  
{  
    echo "Have a good morning!";  
}

else if ($t>"20")
{
    echo "Have a good night!";
}
else
{
    echo "Have a good day!";
}
*/

/*

$favcolor="yellow";
switch ($favcolor)
{

case "red":
    echo "your favorite color is red!";
    break;
case "blue":
    echo "your favorite color is blue!";
    break;
case "green":
    echo "your favorite color is green!";
    break;
default:
    echo "your favorite color is neither red,blue nor ��ɫ!";
}
*/

/*
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
*/

/*
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age["Peter"] . " years old."; 
*/

/*
$age=array("Yannis"=>"35","EDC"=>"37","Alex"=>"43");
foreach($age as $x=>$x_value)
{
echo "name=" . $x . ", Age=" . $x_value;
echo "<br>";
}
*/

/*
echo $_SERVER['PHP_SELF']; //��ǰִ�нű����ļ������� document root �йء����磬�ڵ�ַΪ http://example.com/test.php/foo.bar �Ľű���ʹ�� $_SERVER['PHP_SELF'] ���õ� /test.php/foo.bar��__FILE__ ����������ǰ(�������)�ļ�������·�����ļ����� �� PHP 4.3.0 �汾��ʼ����� PHP ��������ģʽ���У���������������ű�����֮ǰ�İ汾�ñ��������á�
echo "<br>";
echo $_SERVER['SERVER_NAME'];//��ǰ���нű����ڵķ�������������������ű����������������У������������Ǹ��������������õ�ֵ������(��: www.runoob.com)
echo "<br>";
echo $_SERVER['HTTP_HOST'];//��ǰ����ͷ�� Host: ������ݣ�������ڵĻ�
echo "<br>";


echo $_SERVER['HTTP_USER_AGENT'];//ϵͳ�汾��������ںˣ�
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];  //������ǰ�ű���·��������ҳ����Ҫָ���Լ�ʱ�ǳ����á�__FILE__ ����������ǰ�ű�(��������ļ�)������·�����ļ�����
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];  //�����ǰҳ����û��� IP ��ַ
echo"<br>";
echo $_SERVER['SERVER_ADDR']; //��ǰ���нű����ڵķ������� IP ��ַ
echo"<br>";
echo $_SERVER['GATEWAY_INTERFACE'];//������ʹ�õ� CGI �淶�İ汾�����磬"CGI/1.1"��
echo"<br>";
echo $_SERVER['REQUEST_METHOD'];//����ҳ��ʹ�õ����󷽷������磬"GET", "HEAD"��"POST"��"PUT"
*/
/*
      $name = $_REQUEST['fname']; //��ǰ��<!-- <form      -->  ���ʹ��
      echo $name;
*/
/*
echo '���ļ�λ�� �� '  .__DIR__.  ' �� ';
*/
/*
class ParentClass
{
}
class MyClass extends ParentClass   // MyClass �̳и��� ParentClass
{
}
$a=new MyClass;
var_dump($a instanceof MyClass);
echo"<br>";
var_dump(!$a instanceof stdMyClass);
echo"<br>";
var_dump($a instanceof ParentClass);
*/


/*
class Site {
  // ��Ա���� 
  var $url;
  var $title;

  function __construct( $par1, $par2 ) {
    $this->url = $par1;
    $this->title = $par2;
  }
  //��Ա���� 
  function setUrl($par){
     $this->url = $par;
  }
  
  function getUrl(){
     echo $this->url . PHP_EOL;
  }
  
  function setTitle($par){
     $this->title = $par;
  }
  
  function getTitle(){
     echo $this->title . PHP_EOL;
  }
}

$runoob = new Site('www.runoob.com', '����̳�');
$taobao = new Site('www.taobao.com', '�Ա�');
$google = new Site('www.google.com', 'Google ����');

// ���ó�Ա��������ȡ�����URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();

  class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public.PHP_EOL; // �����ܱ�����ִ��
echo "<br/>";

echo $obj->protected; // ���л����һ����������
echo $obj->private; // ����Ҳ�����һ����������

$obj->printHello(); // ��� Public��Protected �� Private
*/

?>
</body>
</html>