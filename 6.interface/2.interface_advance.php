<?php


/*

Note:

💡
যে ক্লাশে ইন্টারফেইস ইমপ্লিমেন্ট করা হবে, অবশ্যই সে ক্লাশ এর অবজেক্ট কল করার সময় এভাবে
...$object = new Member()...
প্যারেন্থিসিস ব্র্যাকেট ববহাত করতে হবে।
👌

ইমপ্লিমেন্ট আর এক্সটেন্ড এর মধ্যেকার পার্থক্য গুলো নিয়ে আমরা আগামী তে আলোচনা করবো।

*/



interface Persistable{

    public function save();
    public function load();
    public function delete();

}


// my task according to implement his interface or design...
class Member implements Persistable{

    private $username;
    private $location;
    private $homepage;

    public function __construct($username, $location, $homepage){

        $this->username = $username;
        $this->location = $location;
        $this->homepage = $homepage;

    }

    public function getUsername(){
        return $this->username;
    }

    public function getLocation(){
        return $this->username;
    }
    
    public function getHomepage(){
        return $this->username;
    }



    // applying his designed methods/functions...

    public function save(){
        echo "Member Data Has Been Saved";
    }

    public function load(){
        echo "Member Data Has Been loaded";
    }

    
    public function delete(){
        echo "Member Data Has Been deleted";
    }
}


$object = new Member("Mridul Kar", "Dhaka, Bangladesh", "www.mridulkar.com");

/*
💡 যে ক্লাশে ইন্টারফেইস ইমপ্লিমেন্ট করা হবে, অবশ্যই সে ক্লাশ এর অবজেক্ট কল করার সময় এভাবে
...$object = new Member()...
প্যারেন্থিসিস ব্র্যাকেট ববহাত করতে হবে। 👌
*/

echo "Member name is " . $object->getUsername() . ", Location is " . $object->getUsername() . ", Homepage is " . $object->getHomepage(); 

$object->save();
$object->load();
$object->delete();