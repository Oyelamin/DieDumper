<?php

/**-----------------------------------------
 * This will diedump and format the value in a more readable way
 * Really cool stuff
 * -----------------------------
 */

/**
 * Class Dumper
 */
class Dumper
{
    /**
     * @var string
     */
    protected $color;
    /**
     * @var string
     */
    protected $background;

    /**
     * Dumper constructor.
     */
    public function __construct()
    {
        $this->color = $color = 'green';
        $this->background = $background = 'black';
    }

    /**
     * @param null $val
     * @return Mixed
     */
    public function ddd($val = Null)
    {
        if(isset($val))
        {
            $styles = "box-shadow:4px 40px 40px silver;font-weight:bolder;";
           echo "<div style='background: $this->background; color: $this->color; margin: auto; font-family: Arial;padding: 20px;$styles'>";
           print("<pre><i>".print_r($val, true).'</i></pre>');
           exit;
        }else{
            exit;
        }
        
    }

}

$arr = array('Firstname' => 'Ajala', 'Lastname' => ['num1' => 'Blessing', 'num2' => 'Iyiola', 'num3' => ['Gender' => 'Male']]); //Test with an array
#Result: Good Format Array Value

function ddd($val = Null)
{
    $dumper = new Dumper();
    return $dumper->ddd($val);
}

ddd($arr);