<!-- BankAccount.php -->
<?php

class BankAccount {
    private $balance = 0;

    public function deposit($amount) {
        $this->balance += $amount;
        return "Deposited: $amount\n";
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            return "Insufficient funds to withdraw $amount\n";
        }
        $this->balance -= $amount;
        return "Withdrew: $amount\n";
    }

    public function getBalance() {
        return "Current balance: $this->balance\n";
    }
}
