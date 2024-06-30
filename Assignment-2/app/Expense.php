<?php

namespace App;

Class Expense
{

    public $allExpenses = [];

    public function getExpense()
    {
        echo "\nEnter Your Expense: ";
        fscanf(STDIN,"%d\n",$expense);
        echo "\nEnter Expnese Category:";
        fscanf(STDIN,"%s\n\n",$category);
        echo "\n";
        $this->setExpense((int)$expense);
    }

    public function setExpense($expense)
    {
        $expense = $expense.",";
        array_push($this->allExpenses, $expense);
        file_put_contents("expense.txt",$this->allExpenses);
    }

    public function showExpense()
    {
        $myfile = file_get_contents("expense.txt");
        $expenses = rtrim($myfile,",");
        $expenses = explode(",",$expenses);
        echo "\nYour Expenses\n";
        echo "------------------------\n";
        for($i=0;$i<count($expenses);$i++)
        {
            echo "$expenses[$i]\n";
        }
        echo "------------------------\n";
    }

}