<?php

namespace App;

Class Income
{
    public $allIncomes = [];

    public function getIncome()
    {
        echo "\nEnter Your Income: ";
        fscanf(STDIN,"%s\n",$income);
        echo "\nEnter Income Category:";
        fscanf(STDIN,"%s\n\n",$category);
        echo "\n";
        $this->setIncome((int) $income);
    }

    public function setIncome($income)
    {
        $income = $income.",";
        array_push($this->allIncomes, $income);
        file_put_contents("income.txt",$this->allIncomes);
    }

    public function showIncome()
    {
        $myfile = file_get_contents("income.txt");
        $incomes = rtrim($myfile,",");
        $incomes = explode(",",$incomes);
        echo "\nYour Incomes\n";
        echo "------------------------\n";
        for($i=0;$i<count($incomes);$i++)
        {
            echo "$incomes[$i]\n";
        }
        echo "------------------------\n";
    }
}