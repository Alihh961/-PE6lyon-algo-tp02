<?php

    function estvalide($x){

        if($x >= 0 && $x <=20 ){
            return true;
        }
        return false;

    }

    function testEstValide_TRUE() {
        if (estvalide(10)) { 
        echo "Test testEstValide_TRUE : OK ✅"; 
        }
        else { echo"Test testEstValide_TRUE : Échec ❌"; } 
       }

     testEstValide_TRUE();
     echo PHP_EOL;

     function testEstValide_FALSE_NEGATIVE() {
        if (!estvalide(-10)) { 
        echo "Test testEstValide_FALSE_NEGATIVE : OK ✅"; 
        }
        else { echo"Test testEstValide_FALSE_NEGATIVE : Échec ❌"; } 
       }

       testEstValide_FALSE_NEGATIVE();
       echo PHP_EOL;

    function excellent($x){

        if($x >= 18 && $x <=20 ){

            return true;
        }
        return false;

    }

    function testExcellent_TRUE(){
        
        if(excellent(19)){

        echo "Test testExcellent_TRUE : OK ✅"; 
        }
        else { echo "Test testExcellent_TRUE : Échec ❌" ;}

        }
        testExcellent_TRUE();
       echo PHP_EOL;


    function testExcellent_FALSE_NEGATIVE(){ 
        
            if(!excellent(15)){
    
            echo "Test testExcellent_FALSE_NEGATIVE : OK ✅"; 
            }
            else { echo "Test testExcellent_FALSE_NEGATIVE : Échec ❌" ;}
    
            }
        testExcellent_FALSE_NEGATIVE();
       echo PHP_EOL;
        

    

    function tb($x){

        if($x >= 16 && $x <=18 ){

            return true;
        }
        return false;

    }

    function testTB_TRUE(){

        if(tb(17)){

            echo "Test testTB_TRUE : OK ✅"; 
            }
            else { echo "Test testTB_TRUE : Échec ❌" ;}

        }
        testTB_TRUE();
        echo PHP_EOL;

        function testTB_FALSE_NEGATIVE(){

            if(!tb(10)){
    
                echo "Test testTB_FALSE_NEGATIVE : OK ✅"; 
                }
                else { echo "Test testTB_FALSE_NEGATIVE : Échec ❌" ;}
    
            }

        testTB_FALSE_NEGATIVE();
        echo PHP_EOL;
    


    

    function bien($x){

        if($x >= 14 && $x <=16 ){

            return true;
        }
        return false;
    }

    function testBien_TRUE(){

        if(bien(15)){

            echo "Test testBien_TRUE : OK ✅"; 
            }
            else { echo "Test testBien_TRUE : Échec ❌" ;}

        }
        testBien_TRUE();
        echo PHP_EOL;

        function testBien_FALSE_NEGATIVE(){

            if(!bien(5)){
    
                echo "Test testBien_FALSE_NEGATIVE : OK ✅"; 
                }
                else { echo "Test testBien_FALSE_NEGATIVE : Échec ❌" ;}
    
            }
            testBien_TRUE();
            echo PHP_EOL;


    function ab($x){

        if($x >= 12 && $x <= 14 ){

            return true;
        }
        return false;
    }

    function testAb_TRUE(){

        if(ab(13)){

            echo "Test testAb_TRUE : OK ✅"; 
            }
            else { echo "Test testAb_TRUE : Échec ❌" ;}

        }
        testAb_TRUE();
        echo PHP_EOL;

        function testAb_FALSE_NEGATIVE(){

            if(!ab(2)){
    
                echo "Test testAb_FALSE_NEGATIVE : OK ✅"; 
                }
                else { echo "Test testAb_FALSE_NEGATIVE : Échec ❌" ;}
    
            }
            testAb_FALSE_NEGATIVE();
            echo PHP_EOL;





    function mention($x){

      if(!estvalide($x)){
        echo "Erreur";
      }else if(excellent($x)){
        echo "Execellent";
      }else if(tb($x)){
        echo "TB";
      }else if(bien($x)){
        echo 'Bien';
      }else if(ab($x)){
        echo "AB";
      };

    }


    mention(15);