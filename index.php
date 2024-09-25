<!-- index.php -->

<?php
require 'BankAccount.php';

$account = new BankAccount();
echo $account->deposit(100); 
echo $account->withdraw(50); 
echo $account->getBalance(); 
?>
