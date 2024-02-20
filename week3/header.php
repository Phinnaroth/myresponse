<?php
$studentInfo = array(
    'Home'=> '0000112',
    'Contact Us'=>'F',
    'Service' => array('CS',
                    'DB',
                    'TN'),

    'About Us'=> 'Ms. Naroth',
    'Apply'=>'Apply',
    'Login'=>'Login',
    'Register'=>'Register',
);
?>
<header> 
    <nav>
        <ul>
        <?php
        foreach($studentInfo as $key=>$val){
 
            if($key=="Service"){
                echo "<li>" .$key;
                echo "<ul class='sub-menu'>";
                foreach($val as $k=>$v){
                    echo  "<li>". $v ."</li>";
                }
                echo "</ul>";
                echo "</li>";
            }else{
                echo "<li>". $key. "</li>";
            }
        }
        ?>
    </ul>
    </nav>
</header>