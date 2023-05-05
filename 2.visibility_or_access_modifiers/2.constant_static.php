<?php

/*

New Topics: Constant,  Static, Scope Resulation

Note:

💡 এখানে শুধু Constant দিয়ে কাজ করেছি, Static এর জন্যেও একই রকম। 👌

পার্থক্য গুলোঃ
💡 শুধু মাত্র static প্রোপার্টি'র ক্ষেত্রে $ সাইন ব্যবহার করতে হবে। আর মেথডও static হয়। এটা সামনে কোনোদিন দেখবো। 👌

*/

class Bank{

    public const asset = "Money";
    public static $another_asset = "Jewellery";

    public function cashOut(){
        return "owner withdrawing his ". self::asset . "/";
    }

} // end of class Bank

$account_holder = New Bank;
 
// property
echo $account_holder::asset; // right 

// method
echo $account_holder->cashOut(); // right






class Family extends Bank{ // inheritence
  
    public function cashOutOwnersThing(){

        return "Let's get your father's ". parent::asset ."/"; // right 
        /* 💡 এখানে parent::asset এর বদলে self::asset এও কাজ হয় 👌 */
    }

} // end of class Family (Child of Class Bank)

$owners_son = New Family;

echo $owners_son->cashOutOwnersThing();

// property of parent class
echo $owners_son::asset; // right

// method of parent class
echo $owners_son->cashOut(); // right 


