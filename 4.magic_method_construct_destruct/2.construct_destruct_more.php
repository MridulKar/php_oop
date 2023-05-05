<?php

class Advance{
    public $a;
    public $b;
    public $c;

    public function __construct(int $a, int $b, int $c){
    // 💡 চাইলে এভাবে প্রোপার্টি গুলো কে ডিফাইন করে দেয়া যায়। 👌
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getVal(){
        return $this->a + $this->b + $this->c;
    }
}

$obj = new Advance(2, 3, 4);

echo $obj->getVal();




//=================================================================




class MoreAdvance{

    public function __construct(public int $a, public int $b, public int $c){ 
    // 💡 চাইলে এভাবে প্রোপার্টি গুলো কে ডিফাইন করে দেয়ার পাশাপাশি প্রোপার্টি গুলোর ভিসিবিলিটিও ডিফাইন করে দেয়া যায় php 8 থেকে। 👌
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getThisVal(){
        return $this->a + $this->b + $this->c;
    }
}

$objMore = new MoreAdvance(2, 3, 4);

echo $objMore->getThisVal();



// ==============================================



class AdvanceAgain{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $c){
        $this->a = $a;
        $this->c = $c;
    }

    public function getTheVal(){
        return $this->a + $this->c;
    }
}

// 💡 এলোমেলো করে এভাবে ডাটা পাঠানো যায় php 8 থেকে। 👌
$objAgain = new AdvanceAgain(c:2, a:4);

echo $objAgain->getTheVal();


/*

এভাবে আবার সম্ভব না/

public function __construct($a, $b=5, $c){
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
}

public function getVal(){
    return $this->a + $this->b + $this->c;
}


$obj = new Advance(a:2, c:4);

*/
