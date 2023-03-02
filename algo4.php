<?php

function nEstValide($x){
    if(is_int($x) && ($x >= 1)){
        return true;
    }else{
        return false;
    }
}


function nEstValide_TRUE(){
    if(nEstValide(5)){
        echo "Test nEstValide_TRUE : OK ✅";
    }else{
        echo "Test nEstValide_TRUE : Echec ❌";
    }
}
nEstValide_TRUE();
echo PHP_EOL ;

function nEstValide_NEGATIVE_FALSE(){
    if(!nEstValide(-5)){
        echo "Test nEstValide_NEGATIVE_FALSE : OK ✅";
    }else{
        echo "Test nEstValide_NEGATIVE_FALSE : Echec ❌";
    }
}
nEstValide_NEGATIVE_FALSE();
echo PHP_EOL ;

function numInt($x){
    $result = 0;
    for($y = 1 ; $y <= $x ; $y++){
    
        $result +=   $y ;
     
    }
    return $result ;
}

function numInt_TRUE(){
    if(numInt(1) == 1){
        echo "Test numInt_TRUE : OK ✅";
    }else{
        echo "Test numInt_TRUE : Echec ❌";
    }
}
numInt_TRUE();
echo PHP_EOL ;

function numInt_NEGATIVE_FALSE(){
    if(!numInt(1) == 0){
        echo "Test numInt_NEGATIVE_FALSE : OK ✅";
    }else{
        echo "Test numInt_NEGATIVE_FALSE : Echec ❌";
    }
}
numInt_NEGATIVE_FALSE();
echo PHP_EOL ;

function sumNIntegers($x){

    if(nEstValide($x)){
       echo numInt($x);
    }else{
        echo "Faux";
    }
};

sumNIntegers(2.5);

