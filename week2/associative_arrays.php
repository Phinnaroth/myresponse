<?php
/*
    $student = [
        'name' => 'Naroth',
        'age'=> '19',
        'grade'=> 'C',
        'courses'=> ['Web','Math','science']
    ];
    echo "Original arrays:\n";
    print_r($student);
    echo "<br/><hr/>";

    echo "\nage: ".$student['age']."\n";
    echo "<br/><hr/>";
    $student['city'] = 'Phnom Penh';
    echo"\nThe lastest:\n";
    print_r($student);*/

    $student = [
        'name' => 'Naroth',
        'age'=> '19',
        'grade'=> 'C',
        'courses'=> ['Web','Math','Science']
    ];
    foreach($student as $key=>$val){
        
        if($key=="courses"){
            echo $key . ":<br/>";
            foreach($val as $k=>$v){
                echo"&nbsp;&nbsp-".$v ."<br/>";
            }
        }
        else{
            echo $key . "=>" . $val . "<br/>";
        }
    }
    ?>


