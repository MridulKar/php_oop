<?php



class OtherCourse{

    protected static $course_name = "Bangla";

    public static function getCourse(){
        return static::$course_name;
    }

} // end of class OtherCourse

class OtherStudent extends OtherCourse{

    public static $course_name = "English";

} // end of class OtherStudent


echo OtherStudent::getCourse(); // output: Bangla