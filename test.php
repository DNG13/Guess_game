 <?php
session_start();
$question = 2;
if(!isset($_SESSION["question"])){
    $_SESSION["question"]= 2;
    $_SESSION["max"]= 100;
    $_SESSION["min"]= 0;
    $_SESSION["answer"]="no";  
    $max = $_SESSION["max"];
    $min = $_SESSION["min"];
    $mid = round(($max+$min)/2);
}else{
    $question = $_SESSION["question"];
    $max = $_SESSION["max"];
    $min = $_SESSION["min"];
    $mid = round(($max+$min)/2);   
    if($_GET){ 
        $answer = $_GET["answer"]; 
        $info = [];
        if($mid==1 ||$mid==100){
            $win = '<p>Загадане число  повинне бути від 1 до 100.</p>           
                  <p>Спробувати ще?</p>
                  <a href="unset.php"><input  id="yes" class="btn btn-danger" type="button" value="Так"></a>
                  <input id="no" class="btn btn-danger" type="button" value="Ні">'; 
            $info[] = [
                'win' => $win,
                'question' => 1
            ];          
            print(json_encode($info, JSON_PRETTY_PRINT));
        }
        elseif($answer=="no" && $question == 2){
            $max = $mid;
            $_SESSION["max"] = $max;
            $mid = round(($max+$min)/2); 
            if($mid==$max || $mid==$min){
                $_SESSION["question"] = 1;
                $info[] = [
                    'mid' => $mid,
                    'question' => 1
                ];
                print(json_encode($info, JSON_PRETTY_PRINT));
            }else{
                $info[] = [
                    'mid' => " більше ".$mid,
                    'question' => 1
                ];
                print(json_encode($info, JSON_PRETTY_PRINT));
            }
        }elseif($answer=="yes" && $question == 2){
            $min = $mid;
            $_SESSION["min"] = $min;
            $mid = round(($max+$min)/2); 
            if($mid==$max || $mid==$min){
                $_SESSION["question"] = 1;
                $info[] = [
                    'mid' => $mid,
                    'question' => 1
                ];
                print(json_encode($info, JSON_PRETTY_PRINT));
            }else{
                $info[] = [
                    'mid' => " більше ".$mid,
                    'question' => 1
                ]; 
                print(json_encode($info, JSON_PRETTY_PRINT));
            }
        }elseif($question == 1){
            $win = '<p>Число вгадане.</p>           
                  <p>Спробувати ще?</p>
                  <a href="unset.php"><input  id="yes" class="btn btn-danger" type="button" value="Так"></a>
                  <input id="no" class="btn btn-danger" type="button" value="Ні">'; 
            $info[] = [
                'win' => $win,
                'question' => 1
            ];          
            print(json_encode($info, JSON_PRETTY_PRINT));
        }else{
            echo "Something went wrong";   
        }
    }          
}

