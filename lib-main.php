<?PHP

/**
 *  This file was made by Kaustubh Kulkarni (@kaustubhk24) for Alpha Local 
 * 
 */
require_once('generator.php');
class Lib
{

    function setCaptchaString($str)
    {
        $captcha_str=$str;
        echo $str;

        $charArray = str_split($captcha_str);
        $charArrayLength=strlen($charArray);

        file_get_contents('generator.php?$a='.$charArray.'$b'.$charArrayLength);
        





    }

}


$a=new Lib();

$a->setCaptchaString("kaustubh");




?>