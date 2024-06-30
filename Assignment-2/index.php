<?php

use App\Expense;
use App\Income;
use App\Savings;

require 'vendor/autoload.php';



Class CliApp{
      
    private $income;
    private $expense;
    private $savings;

    public function __construct($income,$expense,$savings)
    {
        $this->income = $income;
        $this->expense = $expense;
        $this->savings = $savings;
    }

    function showMenu()
    {
        echo "1. Add income\n";
        echo "2. Add expense\n";
        echo "3. View incomes\n";
        echo "4. View expenses\n";
        echo "5. View savings\n";
        echo "6. View categories\n";
        echo "7. Exit the program\n";
        
        echo "\nEnter your option:";
        
        fscanf(STDIN,"%d",$choice);

        $this->execute($choice);
    }


    function execute($choice)
    {
        if($choice == 7){
            exit;
        }

        while(true){
            if($choice == 1)
            {
                $this->income->getIncome();
            }
            elseif($choice == 2)
            {
                $this->expense->getExpense();
            }
            elseif($choice == 3)
            {
                $this->income->showIncome();
            }
            elseif($choice == 4)
            {
                $this->expense->showExpense();
            }
            elseif($choice == 5)
            {
                $this->savings->savings();
            }

            elseif($choice == 6)
            {
                echo "\nCategories: \n\n";
                echo "Name:Sallary  Type: Income\n";
                echo "Name:Business  Type: Income\n";
                echo "Name:Gift  Type: Income\n";
                echo "Name:Food  Type: Expense\n";
                echo "Name:House Rent  Type: Expense\n";
                echo "Name:Medicine  Type: Expense\n\n";
            }else{
                echo "\n\n!!!!Invalid Option!!!!\n\n";
            }

            
            $this->showMenu();
        
        }
    }

}

$income = new Income();
$expense = new Expense();
$savings = new Savings();

$cliapp = new CliApp($income,$expense,$savings);

echo $cliapp->showMenu();






