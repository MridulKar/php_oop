<?php

/*
Note: 
💡 construct, destruct function অটো কল হয়। 👌

💡
construct মেথড এর বেলায় অবজেক্ট এর ক্ষেত্রে
যেমনঃ ...$obj = new MyClass("Hello")...
ক্লাশে অবশ্যই প্যারেনথিসিস ব্র্যাকেট থাকবে
👌

*/


class MyClass{

    private $a;

    function getVal(){
       return $this->a;
    }

    // $a প্রোপার্টি তে কোন ভ্যালু অ্যাসাইন হবে তার ফাংশনালিটি এখানে কনস্ট্রাক্ট ফাংশনে করে দেয়া হয়েছে। 
    function __construct($x){
        // function __construct($x = "Hello"){
         $this->a=$x;
    }

    function __destruct(){
        echo "BYE";
    }
}

$obj = new MyClass("Hello"); // আর ভ্যালু টা ক্লাশে অ্যাসাইন করে দেয়া হয়েছে।
// $obj = new MyClass();

echo $obj->getVal();



class AnotherClass{

    private $a;

    function getTheVal(){
       return $this->a;
    }

    function __construct($x){
         $this->a=$x;
    }

    function setTheVal($x){
        return $this->a=$x;
     }

     /*
     __construct function আর setTheVal() দুটো ফাংশনেই একই কাজ করা হয়েছে।
     */

    function __destruct(){
        echo "BYE";
    }
}

$obj = new AnotherClass("Hello");

echo $obj->setTheVal("HI");