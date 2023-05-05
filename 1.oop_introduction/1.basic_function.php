<?php


/*
দুইটা সেম ক্লাশ, একটা তে প্রোপার্টি তে ভ্যালু অ্যাসাইন করা আছে, আরেকটা তে ভ্যালু অ্যাসাইন করা নাই, পার্থক্য টা খেয়াল করতে হবে।
*/




class Box{

    public $fruit = "Mango"; // property
    
    public function juiceMaker(){ // method
        return "Let's Make ".$this->fruit." Juice";
    }
}

$object = new Box; // object

echo $object->juiceMaker();

// output: Let's Make Mango Juice



class Box{

    public $fruit; // property
    
    public function juiceMaker($fruit){ // method
        return "Let's Make ".$this->fruit=$fruit." Juice";
    }
}

$object = new Box; // object

echo $object->juiceMaker("Mango");

