<?php

class person {
    var $name;
    var $address;
    var $phone;
    function printPersonInf()
    {
        echo $this->name;
        echo $this->address;
        echo $this->phone;
    }
}

    class employee extends person
    {
        var $occupation;
        var $com_name;
        
        function printempInfo()
        {
            parent::printPersonInf();
            echo $this->occupation;
            echo $this->com_name;
           
        }
    }

    $obj = new person();
    $emp = new employee();
    $emp->name = "Vishal" . "<br/>";
    $emp->address = "Dharangaon" . "<br/>";
    $emp->phone = "8760098998" . "<br/>";
    $emp->occupation = "Student" . "<br/>";
    $emp->com_name = "GPJ" . "<br/>";

    $emp->printempInfo();
