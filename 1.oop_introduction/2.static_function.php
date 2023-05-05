<?php

/*
Note:

💡 স্ট্যাটিক প্রোপার্টি গুলো ভ্যালু ধরে রাখে। 👌

💡 স্ট্যাটিক প্রোপার্টি/মেথড অবজেক্ট ক্রিয়েট না করেও কল করা যায়। 👌

 */

class myClass{
    
    public static $a = 0;

    public static function count(){
        return self::$a++;
        /*
        💡 স্ট্যাটিক প্রোপার্টি গুলো ভ্যালু ধরে রাখে।
        আগে ধরে রাখা ভ্যালুর সাথে ততবার ১ যোগ করবে যতবার এই count() মেথড কল করা হবে/ 👌
        */
    } 

}

echo myClass::$a = 5; // output: 5,
echo myClass::count(); // output: 5,
echo myClass::count(); // output: 6