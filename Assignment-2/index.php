<?php

$allIncomes = [];

function showMenu()
{
    echo "1. Add income\n";
    echo "2. Add expense\n";
    echo "3. View incomes\n";
    echo "4. View expenses\n";
    echo "5. View savings\n";
    echo "6. View categories\n";
    
    echo "Enter your option:";
    
    fscanf(STDIN,"%d",$choice);

    execute($choice);
}
echo showMenu();
function setIncome($income)
{
    $a = file_get_contents("income.txt");
    global $allIncomes;
    array_push($allIncomes, $income);
    file_put_contents("income.txt",$allIncomes);
    var_dump($allIncomes);
    // getIncome($allIncomes);
}

function getIncome($income)
{
    $j = $income;
    return $income;
}
function execute($choice)
{
    while(true){

        if($choice == 1)
        {
            echo "\nEnter Your Income: ";
            fscanf(STDIN,"%s\n",$income);
            setIncome($income);

            showMenu();
        }
    
        if($choice == 2)
        {
            echo "\nEnter Your Expense: ";
            fscanf(STDIN,"%d\n",$expense);
            printf("Your Expense: %d\n\n",$expense);
            showMenu();
        }

        if($choice == 3)
        {
            $myfile = file_get_contents("income.txt");
            echo "\nYour Incomes: ".$myfile."\n\n";
            showMenu();
        }

        if($choice == 4)
        {
            echo "\nYour Expenses: \n\n";
            showMenu();
        }

        if($choice == 5)
        {
            echo "\nYour Savings: \n\n";
            showMenu();
        }

        if($choice == 6)
        {
            echo "\nCategories: \n\n";
            showMenu();
        }

        if($choice == 7)
        {
            return 0;
        }
    
    }
}
