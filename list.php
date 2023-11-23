<?php 
echo "__________List____________<br>";

// $emp=[
//         [1,"Muhammad Jamshed","Manager",50000],
//         [2,"shanza","HR",90000],
//         [3,"Muhammad Ali","Team lead",150000],
//         [4,"Muhammad Tariq","Developer",250000],];

// echo "<table border=2px  cellspacing=0px cellpadding=5px>
// <tr><th>ID</th><th>name</th><th>designation</th><th>salary</th></tr>
// ";
// foreach($emp as list($id,$name,$designation,$salary)){
//     echo "<tr><td> $id</td> <td> $name</td> <td>$designation</td>  <td>$salary</td></tr>";
// }
// echo "</table>";


$smart=[
    [1,"Muhammad Jamshed","Manager",50000],
    [2,"shanza","HR",90000],
    [3,"Muhammad Ali","Team lead",150000],
    [4,"Muhammad Tariq","Developer",25000000],];

    // echo "<table border=2px> 
    // <tr>
    // <th>ID</th>
    // <th>Name</th>
    // <th>Designation</th>
    // <th>Salary</th></tr>";
// foreach($smart as list($id,$name,$designation,$salary)){
//     echo "<tr><td>$id</td><td>$name</td><td>$designation</td><td>$salary</td></tr>";
// }
// echo "</table>";



// $arr=array("jamshed","Shanza","Nama","Rehang","everyone");
// foreach($arr as $key){
//     echo $key."<br/>";
// }
// $food=array('orange','orange','banana',55,'apple','pineapple');
// $food=array(
//     'fruits' =>array('apple','orange','banana','pineapple'),
//     'veggie'=>array('carrot','collard','pea','bringle')




// );
// echo count($food['fruits'],1);
// echo "<br>";
// echo sizeof($food['veggie'],1);

// $len=count($food); 
// for($i=0;$i<$len;$i++){
//     echo $food[$i]. "<br>";

// }
// echo "<pre>";
// print_r( array_count_values($food));
// echo "</pre>";


// echo "____________Array Search Function_______________<br>";
// echo in_array("lime",$food);
// echo in_array("orange",$food);
// if(in_array('orange',$food)){
//     echo "find successfully";
// }else{
//     echo "cant find";
// }
// if(in_array(55,$food,true)){
//     echo "find successfully";
// }else{
//     echo "cant find";
// }

// $a=array(array('php','python'),array('nodejs','javascript'),'node');
// if(in_array(array('php','python'), $a,true)){
//     echo 'find done';
// }else{
//     echo 'not found';
// }
// $fooda=array(
//     'fruit'=>['orange','apple','cake'],
//     'bakeri'=>['biscuits','jalei','sana']

// );
// $foodb=array(
//     'a'=>"orange",
//     'b'=>"apple",
//     'c'=>"banana",
//     'd'=>"sana",

// );
// echo array_search('orange',$foodb);
// echo "____________Array Sreplace Function_______________<br>";

// $food=array('orange','orange','banana',55,'apple','pineapple');
// $food=array('orange','orange','a'=>'banana',55,'apple','pineapple');
// $veggie=['a'=>'carrot','b'=>'pea'];
// $colors=['red','green','yellow'];
// $newarray=array_replace($food,$veggie,); 
// echo "<pre>";
// print_r($food);
// echo "</pre>";
// echo "<pre>";
// print_r($newarray);
// echo "</pre>"
// $array1=array('a'=>array('red'),'b'=>array('1'=>'green','pink','khan'));
// $array2=array('a'=>array('yellow'),'b'=>array('black','1'=>'purple','red'));
// $newarray=array_replace_recursive($array1,$array2);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// echo "____________Array Push POP Function_______________<br>";
// $foodb=array(
//     'a'=>"orange",
//     'b'=>"apple",
//     'c'=>"banana",
//     'd'=>"sana",

// );
// $food=array('asad','orange','banana',55,'apple','pineapple');
// $food2=array('Tariq','sangtra','kela',53,'shafi','jimi');
// array_pop($food);
// array_push($food,'jimifruit','sana');
// echo "____________shift and unshift Function_______________<br>";
// array_shift($food);
// array_unshift($food,'chiko','asad','malaika');

// echo "<pre>";
// print_r($food);
// echo "</pre>";
// echo "____________Array Merge and Array Combine_______________<br>";
// $newarray=array_merge($foodb,$food2);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

// echo "____________Array Splice Function_______________<br>";
// $food=array('asad','orange','banana',55,'apple','pineapple');
// $newarray=array_slice($food,0,4);
// $foodb=array(
//     'a'=>"orange",
//     'b'=>"apple",
//     '34'=>"banana",
//     'd'=>"sana",

// );
// $newarray=array_slice($foodb,2,5,true);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// echo "____________Array Splice Function_______________<br>";



// $food=array('orange','asad','banana',55,'apple','pineapple');
// $veggie=['red','yellow'];
// array_splice($food,1,2,$veggie);
// // array_splice($food,2);
// echo "<pre>";
// print_r($food);
// echo "</pre>";
// echo "____________Array key function_______________<br>";
// $colors=['red','blue','white','purple'];
// $newarray=array_keys($colors);
// $newarray=key_exists('34',$foodb);
// if($newarray){
//     echo "key exist";
// }else{
//     echo "not exists";
// }
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";.
// echo "____________Array Intersect function_______________<br>";
// $colors=['red','blue','white','purple','jimi','red','purple','white','violtet','hello'];
// $secondcolor=['red','purple','white','violtet'];
// $newcolor=array_intersect($colors,$secondcolor);
// $foodb=array(
//     'a'=>"orange",
//     'b'=>"apple",
//     'c'=>"banana",
//     'd'=>"sana",

// );
// $new=array_chunk($colors,3);
// $new=array_flip($foodb);
// $new=array_change_key_case($foodb,CASE_UPPER);

// echo "____________Array Sum Function _______________<br>";
// $new=[10,20,30,40,50];
// $sum=array_sum($new);
// $pro=array_product($new);



// echo "<pre>";
// print_r($pro);
// echo "</pre>";

// echo "____________Array Rand Function _______________<br>";

// $new=[10,20,30,40,50];
// // $new1=array_rand($new,2);
// shuffle($new);


// echo "<pre>";
// print_r($new);
// echo "</pre>";
// echo $new[$new1[0]]."<br>";
// echo $new[$new1[1]]."<br>";

echo "____________Array Fill Function _______________<br>";

// $new=[10,20,30,40,50];
// $newarray=array_fill_keys($new,"hello");
$new=array_fill(9,4,1);
echo "<pre>";
print_r($new);
echo "</pre>";




















?>