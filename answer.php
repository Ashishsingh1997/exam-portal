<?php 
if (isset($_POST['submit'])) { 
        $question = isset($_POST['que'])?$_POST['que']:'';
        $op1 = isset($_POST['option1'])?$_POST['option1']:'';
        $op2 = isset($_POST['option2'])?$_POST['option2']:'';
        $op3 = isset($_POST['option3'])?$_POST['option3']:'';
        $op4 = isset($_POST['option4'])?$_POST['option4']:'';


        echo  $question,$op1,$op2,$op3,$op4;
}?>