<?php

    function estvalide($x){

        if($x >= 0 && $x <=20 ){
            return true;
        }
        return false;

    }

    function excellent($x){

        if($x >= 18 ){

            return true;
        }
        return false;

    }

    function tb($x){

        if($x >= 16 ){

            return true;
        }
        return false;

    }

    function bien($x){

        if($x >= 14 ){

            return true;
        }
        return false;
    }

    function ab($x){

        if($x >= 12 ){

            return true;
        }
        return false;
    }


    function mention($x){

      if(!estvalide($x)){
        echo "Erreur";
      }elseif(excellent($x)){
        echo "Execellent";
      }elseif(tb($x)){
        echo "TB";
      }elseif(bien($x)){
        echo 'Bien';
      }elseif(ab($x)){
        echo "AB";
      };

    }

    mention(5);