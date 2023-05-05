<?php

/*
Note Summary:

💡 ক্লাশ এর বাহিরে বা অবজেক্ট দিয়ে আমরা তার প্রাইভেট/প্রোটেকটেড প্রোপার্টি/মেথড গুলো তে একসেস করতে পারবোনা। 👌
💡 চাইল্ড ক্লাশ এর ভেতর আমরা শুধুমাত্র প্যারেন্ট ক্লাশ এর পাবলিক/প্রোটেকটেড প্রোপার্টি/মেথড গুলো ব্যবহার করতে পারবো। 👌
💡 চাইল্ড ক্লাশ এর বাহিরে বা অবজেক্ট দিয়ে আমরা শুধুমাত্র প্যারেন্ট ক্লাশ এর পাবলিক মেথড/প্রোপার্টি গুলো কল করতে পারবো। 👌

💡 প্রোটেকটেড প্রোপার্টি/মেথড শুধুমাত্র চাইল্ড ক্লাশ এর জন্য। 👌

*/




class Bank{

    // properties
    public $letter = "Without my family members no one can take my properties";
    private $asset = "Money";
    protected $another_asset = "Jewellery";

    // methods
    public function cashOut(){
        return "owner withdrawing his ". $this->asset . "/";
    }

    private function cashOutPrivately(){
        return "owner withdrawing his ". $this->asset ." Privately" ."/";
    }

    protected function cashOutProtectedly(){
        return "owner withdrawing his ". $this->asset ." Privately" ."/";
    }

} // end of class Bank

$account_holder = New Bank;
 

// properties
echo $account_holder->letter; // right 
// echo $account_holder->asset; // wrong 
// echo $account_holder->another_asset; // wrong


// methods
echo $account_holder->cashOut(); // right
// echo $account_holder->cashOutPrivately(); // wrong
// echo $account_holder->cashOutProtectedly(); // wrong


/*
error: Cannot access private property Bank::$asset
error: Cannot access protected property Bank::$another_asset 

💡 ক্লাশ এর বাহিরে আমরা প্রাইভেট/প্রোটেকটেড প্রোপার্টি/মেথড এ একসেস করতে পারবোনা। 👌
*/




class Family extends Bank{ // inheritence
  
    public function cashOutOwnersThing(){
        
        // return "Let's get your father's ". $this->asset; // wrong
        /*
        error: Undefined property: Family::$asset

        💡 চাইল্ড ক্লাশ এর ভেতর আমরা শুধুমাত্র প্যারেন্ট ক্লাশ এর পাবলিক/প্রোটেকটেড প্রোপার্টি/মেথড গুলো ব্যবহার করতে পারবো। 👌
         
        */

        return "Let's get your father's ". $this->another_asset ."/"; // right
    }

} // end of class Family (Child of Class Bank)

$owners_son = New Family;

echo $owners_son->cashOutOwnersThing();

// methods of parent class
echo $owners_son->cashOut(); // right 
// echo $owners_son->cashOutProtectedly(); // wrong
// echo $owners_son->cashOutPrivately(); // wrong

// properties of parent class
echo $owners_son->letter; // right
// echo $owners_son->asset; // wrong
// echo $owners_son->another_asset; // wrong 


/*
💡 চাইল্ড ক্লাশ এর বাহিরে বা অবজেক্ট দিয়ে আমরা শুধুমাত্র প্যারেন্ট ক্লাশ এর পাবলিক মেথড/প্রোপার্টি গুলো কল করতে পারবো। 👌
*/