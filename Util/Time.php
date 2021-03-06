<?php 
class Time{
    private static $second = 1;
    private static $minute = 60;
    private static $hour = 3600;
    private static $day = 86400;
    private static $week = 604800;
    private static $month = 2592000;
    
//     public static function addMinute(int $mins = 1){
//         return  time() + (Time::$minute * $mins);
//     }
//     public static function addHour(int $hours = 1){
//         return time() + (Time::$hour * $hours);
//     }
//     public static function addDay(int $days = 1){
//         return time() + (Time::$day * $days);
//     }
//     public static function addMonth(int $months = 1){
//         return time() + (Time::$month * $months);
//     }
    public static function addTime(string $type, int $qtd = 1){
        $add = 0;
        switch($type){
            case "m":
                $add = Time::$minute * $qtd;
                break;
            case "h":
                $add = Time::$hour * $qtd;
                break;
            case "d": 
                $add = Time::$day * $qtd;
                break;
            case "w":
                $add = Time::$week * $qtd;
                break;
            case "M": 
                $add = Time::$month * $qtd;
                break;
        }
        return time() + $add;
    }
}
?>