<?php
   
    function moyenne($x , $y ){

        $result= ($x + $y)/2;
        return $result;

    };

    // echo moyenne(10,5);

    function testMoyenne_TRUE(){
        if(moyenne(10 , 8) == 9){
            echo "Test testMoyenne_TRUE : OK";
        }else {
            echo "Test testMoyenne_TRUE : Echec";
        }
    }

    testMoyenne_TRUE();
    echo PHP_EOL;

    function testMoyenne_FALSE_NEGATIVE(){
        if(!(moyenne(10 , 8) == 5)){
            echo "Test testMoyenne_FALSE_NEGATIVE : OK";
        }else {
            echo "Test testMoyenne_FALSE_NEGATIVE : Echec";
        }
    }

    testMoyenne_FALSE_NEGATIVE();
    echo PHP_EOL;



?>