<?php

namespace App;

Class Savings
{
    public function savings()
    {
        echo "\nYour Savings:";
        $totalExpense = 0;
        $totalIncome = 0;

        $expenseFile = file_get_contents("expense.txt");
        $incomeFile = file_get_contents("income.txt");

        $expenses = rtrim($expenseFile,",");
        $expenses = explode(",",$expenses);

        $incomes = rtrim($incomeFile,",");
        $incomes = explode(",",$incomes);
        
        for($i=0;$i<count($expenses);$i++)
        {
            $totalExpense+=(int)$expenses[$i];
        }

        for($i=0;$i<count($incomes);$i++)
        {
            $totalIncome+=(int)$incomes[$i];
        }

        $savings = $totalIncome - $totalExpense;
        echo $savings;
        echo "\n\n";
    }
}