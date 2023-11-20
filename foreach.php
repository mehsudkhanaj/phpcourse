<?php 
// echo "__________________Foreach Loop In PHP_______________________<br>";


// $weekday=["Monday", "Tuesday", "Wednesday","Thursday","Friday","Saturday","Sunday"];
// $appdev=[
//     "bill"=>25,
//     "mark"=>28,
//     "elon"=>21,
//     "stev"=>250,   
    
// ];
// foreach($weekday as $wk){
//     echo $wk ."<br>";
// }
// echo "_________other method________<br>";
// echo "<ul>";
// foreach($appdev as $key=> $app){
//     echo "<li>".$key. "=" . $app."</li>";
// }
// echo "</ul>";
echo "__________________MultiDimensional Array_______________________<br>";
echo "__________________MultiDimensional Array_______________________<br>";

// $emp=[
//     [1,"Muhammad Jamshed","Manager",50000],
//     [2,"shanza","HR",90000],
//     [3,"Muhammad Ali","Team lead",150000],
//     [4,"Muhammad Tariq","Developer",250000],

// ];
// echo $emp[0][0] . "<br>";
// echo $emp[0][1] . "<br>";
// echo $emp[0][2] . "<br>";
// echo $emp[0][3] . "<br>";

// echo "_________________________________________<br>";
// for($row=0;$row<4;$row++){
//     for ($col=0;$col<4;$col++){
//         echo $emp[$row][$col]  ;
//     }
//     echo "<br/>";
// }


// echo "<pre>";
// print_r($emp);
// echo "</pre>";

// echo "__________________For reach______________________<br>";
// echo "<table border='2px' cellpadding='15px'>";
// echo "<tr>
// <th>Emp ID</th>
// <th>Emp Name</th>
// <th>Emp Designation</th>
// <th>Salary</th>


// </tr>";
// foreach($emp as $v1){
//     echo "<tr>";
//     foreach($v1 as $v2){
//         echo"<td>". $v2. "</td>";
       
//     }
//    echo "</tr>";
// }
// echo "</table>";
echo "__________Multidimensional Associated Array______________<br>";

$marks=[
    "krishna"=>[
        "Physics"=>85,
        "Maths"=>30,
        "Chemistry"=>85,],
        "Salman"=>[
            "Physics"=>15,
        "Maths"=>50,
        "Chemistry"=>75,
            
        ],
        "Jimie"=>[
            "Physics"=>95,
        "Maths"=>90,
        "Chemistry"=>99,
        ]

];
echo "<table border='2px' cellspacing='5px'
 <tr>
    <th>Student Name</th>
    <th>Physics</th>
    <th>Maths</th>
    <th>Chemistry</th><tr>;
 
 ";
foreach($marks as $key => $v1){
    echo "<tr>
    <td>$key</td>";
    
     
    foreach($v1 as $v2){
        echo "<td> $v2  </td>";
    }
    echo  "</tr>";
}
echo "</table>";


echo "<pre>";
print_r($marks);
echo "</pre>";

?>