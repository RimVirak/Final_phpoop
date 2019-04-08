<?php

    if(isset($_POST['btn-add'])) {
        $firstname = $_POST['firstname'];
        $option = $_POST['option'];
        $second = $_POST['second'];

        $student = new Functions($add, $mimus, $multiply, $divide);
        // get value from CLASS OOP
        $getAdd = $student->getAdd();
        $getMinus = $student->getMunis();
        $getMultiply = $student->getMultiply();
        $getDivide = $student->getDivide();
   
}
?>	
				