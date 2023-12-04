<?php 


class Task1{


public $name ;


public function __construct($name){
    $this->name = $name;
}

public function print(){
    echo "hello i'm ".$this->name."<br>";
}
public function factorial($x){
    $res=1;
    for ($i=1;$i<$x;$i++){
        $res*=$i;

    }
return $res;
}

public function sort(...$x){
    return asort($x);
}


public function caldiff($startDate,$endDate) {
    $diff = $startDate->diff($endDate);

    return $diff;
}
public function convertToDate($date) {
    $date = DateTime::createFromFormat('Y-m-d', $date);

    return $date;
}

public function convertToDateTime($datetime) {
    $dateTime = new DateTime($datetime);

    return $dateTime;
}

}
$task=new Task1("hamzeh");
$task->print();
echo $task->caldiff("1981-11-03",'2013-09-04');
echo $task->factorial(5);
$arr = array(5,4,3,5,6,7,9,8);
echo $task->sort($arr);
echo $task->convertToDate('12-08-2004');






?>