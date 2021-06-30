<?php
  /* echo "Hafiz Zain Akram<br>";
   
 //VARIABLES 

 echo "<pre>";
   $a=3;
   var_dump($a);

   $a=3.2;
   var_dump($a);

   $a="zain akram";
   var_dump($a);

   $a=true;
   var_dump($a);

   
//STRINGS

$name="Hafiz Zain Ansari";
echo $name;

 echo strtoupper($name);

 echo  strtolower($name);

echo str_word_count($name);*/

//ARRAY

//index array
$name = array("Zain","Akram","Ahmad");
echo "<pre>";
print_r($name);
foreach ($name as $list) {
    echo " ".$list;
}

//Associated Array
/*$talha=array("roll num" => "thirty","age" => "16");
echo "<pre>";
print_r($talha);*/


//MultiDemension Array
/*$student= array("name"=>"Zain","subject"=>array("Urdu","english"=>array("english A","English B")));
echo "<pre>";
print_r($student);*/

//LOOPS

//for loop

/*for ($i=1; $i <= 10; $i++) { 
    echo 2*$i;
    echo "<br>";
}*/

//while loop

/*$i=1;
while ($i <= 10) {
    echo 2*$i;
    echo "<br>";
    $i++;
};*/

//do while loop
/*$i=1;
do {
    echo 2*$i;
    echo "<br>";
    $i++;
} while ($i <= 10)*/

//function
/*function add($int,$int1){
   echo $int+$int1;
};

add(10,2);*/
?>