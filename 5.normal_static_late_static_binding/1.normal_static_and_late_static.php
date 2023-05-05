<?php

/*
Note: 

💡
স্ট্যাটিক প্রোপার্টি আগের ডাটা ধরে রাখে, 
যেখানে নরমাল প্রোপার্টি তে নতুন ডাটা অ্যাসাইন হলে পুরান ডাটা রিপ্লেস হয়ে যায়।
👌

*/


// Normal................
class Course{

    protected $course_name = "Bangla";

    public function getCourse(){
        return $this->course_name;
    }
} // end of class Course

class Student extends Course{

    public $course_name = "English";

} // end of class Student


$object = new Student;

echo $object->getCourse(); // output: English



// ============================================================


// Static................
class OtherCourse{

    protected static $course_name = "Bangla";

    public static function getCourse(){
        return self::$course_name;
    }

} // end of class OtherCourse

class OtherStudent extends OtherCourse{

    public static $course_name = "English";

} // end of class OtherStudent


echo OtherStudent::getCourse(); // output: Bangla


//=================================================================

/*
💡 এখানে আউটপুট ঠিক English আনার জন্য প্যারেন্ট ক্লাশ এর getCourse() মেথড এর ভেতর
self এর পরিবর্তে static করে দিতে হবে। এটাকে PHP Late Static বলে।
return static::$course_name; 👌
*/

// Late Static................
class MyCourse{

    protected static $course_name = "Bangla";

    public static function getCourse(){
        return static::$course_name;
    }

} // end of class MyCourse

class MyStudent extends OtherCourse{

    public static $course_name = "English";

} // end of class MyStudent


echo MyStudent::getCourse(); // output: English


//=================================================================


// ইচ্ছে করে ভুল করা...।


// class MyCourse{

//     protected static $course_name = "Bangla";

//     public static function getCourse(){
//         return self::$course_name;
//     }

// } // end of class MoreCourse

// class MyStudent extends MyCourse{

//     public $course_name = "English";

// } // end of class MyStudent

// // $object = new Student;

// echo MyStudent::getCourse(); 

/* output: 
Cannot redeclare static MyCourse::$course_name as non static MyStudent::$course_name

মানে, MyCourse ক্লাশ এর স্ট্যাটিক $course_name প্রোপার্টি টা কে
MyStudent ক্লাশ এর ননস্ট্যাটিক $course_name হিসেবে আবার কল করতে পারবোনা।
*/


