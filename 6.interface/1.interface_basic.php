<?php

/*

💡 
ইন্টারফেইস এর মেথড গুলোকে অবশ্যই পাব্লিক করে রাখতে হবে, কিন্তু এরা বাই ডিফল্ট প্রোটেক্টেড এর মতো বিহেভিয়ার করে,
অনেকটা ইনহারিটেন্স এর মতো।
যে ক্লাশ ইন্টারফেইস কে ইমপ্লিমেন্ট করবে, সে ক্লাশ ছাড়া অন্য কেউ সেই মেথড গুলো ব্যবহার করতে পারবেনা।
আর ইন্টারফেইসে যে মেথড গুলো থাকবে, সে সব গুলো মেথড আমাকে  অবশ্যই ব্যবহার করতে হবে।
👌

💡 আর ইন্টারফেইসে যে মেথড গুলো থাকবে, সে সব গুলো মেথড আমাকে অবশ্যই ব্যবহার করতে হবে, নইলে এরর আসবে। 👌

*/


class InterfaceA{
    public function methodA();
    public function anotherMethodA();
}

class InterfaceB{
    public function methodB();
    public function anotherMethodB();
}

class MyClass implements InterfaceA, InterfaceB{
    public function methodA(){

    }

    public function anotherMethodA(){

    }

    public function methodB(){

    }

    public function anotherMethodB(){
        
    }
}