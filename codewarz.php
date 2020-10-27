<?php
function tower_builder(int $n): array {
    $tower = array();
    $step = 1;
    $base = 1 + (($n - 1) * 2);
    // 0 => '    *    '
    
    for ($i = 1; $i <= $n; $i++) {
        $floor = '';
        $middle = ($base - $step) / 2;

        for($b = 1; $b <= $base; $b++) {
            $floor .= ($b <= $middle || $b > ($middle + $step))? '&nbsp;&nbsp;' : '*'; 
        }
        $tower[] = $floor;
        $step += 2;
        //echo $floor . '<br>';
    }

    return $tower;
}

//print_r(tower_builder(3));


function validBraces($braces){
    
    $skip = array();
    $arrBraces = [
      ')' => '(',
      '}' => '{',
      ']' => '[',
    ];

    $arr = str_split($braces);
    //print_r($arr);

    for($i = 0; $i < count($arr); $i++) {
        
        if(!in_array($i, $skip)) {
            $next = $i + 1;
            $opp = (count($arr) - 1) - $i;
            
            $closingBrace = array_search($arr[$i], $arrBraces);
            //echo '>' . $closingBrace . '< / ';
            if($closingBrace) {
                //echo '>' . $closingBrace . '<';
                if(isset($arr[$next]) && $closingBrace == $arr[$next]) {
                    $skip[] = $next;
                } else if (isset($arr[$opp]) && $closingBrace == $arr[$opp]) {
                    $skip[] = $opp;
                } else {
                    return FALSE;
                    //echo 'FALSE closing brace not found <br>';
                }
            } else {
                return FALSE;
                //echo 'FALSE doesnt have closing brace <br>';
            }
        }       
    }

    return TRUE;
}

//var_dump(validBraces('[({})](]'));

class Database {

    public static $instance;

    private function __construct() {

    }

    public function getInstance()
    {
        if(!isset(Database::$instance)) {
            Database::$instance = new Database();
            return Database::$instance;
        }
    }

    public function query()
    {
        echo "SELECT * FROM table";
    }

}

// $db = Database::getInstance();
// $db->query();

function generateHashtag($str) {
    
    $str = ucwords($str);
    $str = str_replace(' ', '', $str);
    $str = '#' . trim($str);
    
    if($str != "" && strlen($str) <= 140) {
        return $str;
    } else {
      return FALSE;
    }
}

//echo generateHashtag('Code' . str_repeat(' ', 140) . 'wars');

function findIt(array $seq) : int
{
    $count = array_count_values($seq);
    print_r($count);
    foreach($count as $key => $val) {
      if($val % 2 > 0) return $key;
    }
}

//echo findIt([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]);

function productFib($prod) {
    // your code
}

