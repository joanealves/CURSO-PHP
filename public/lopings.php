<?php
    $names =['Joane', 'Jordana', 'Dinha'];

    for ($i = 0; $i <= count($names); $i++) {
        if($i === 1){
            break;
        }
        echo $names[$i] ;
    }