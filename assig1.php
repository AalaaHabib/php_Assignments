
<?php
    //1 
    $age=13;
    if($age>=18 && $age<100)
    {
        echo"welcome you can loggin";
    }
    elseif($age<18 ||$age> 100 ){
        echo "sorry you can't loggin";
    }
    echo "<hr/>";

    //2 arthimatecs operation on array 
    function numberMethod($num1,$num2){
        $sum=$num1+$num2."<br/>";
        $div=$num1/$num2."<br/>";
        $sub=$num1-$num2."<br/>";
        echo $sum ." ".$div." ".$sub;
    }
    numberMethod(30,6);
    echo "<hr/>";

    //3 sum of array elements
    $nums=array(1,2,4,5,6);
    
    function sumArray($arr){
        $res=0;
        for($i=0;$i<count($arr);$i++){
            $res += $arr[$i];
        }
        echo $res;
    }
    sumArray($nums);
    echo '<hr/>';
    //4 search if the film is in array or not
    $films=array("Fast","Predestination","Persuit","Prestige");
    $keyword="Fast";
    foreach($films as $film){
        if($keyword==$film){
            echo"yes";
            echo "<hr/>";
        }
        elseif($keyword!=$film){
            continue;
            echo "<hr/>";  
        }
    }
    //6 find the max
  
    $tests=array(5,4,9,3,1,7,5,8,6);
    echo max($tests);
    echo "<hr/>";

    //7 count the same words
    $Films=array("avatar","Prestige","avatar","Prestige");
    $Keyword="avatar";
    $sumFilms=0;
    for($i=0;$i<count($Films);$i++){
        if($Keyword==$Films[$i])
            $sumFilms++;
    }
        echo $sumFilms;
        echo "<hr/>";

    //9 replace boolean value with yes
    $tests2=array(1,"tariq",1.5,true,7,'s',false);
    for($i=0;$i<count($tests2);$i++){
       if($tests2[$i]===true ||$tests2[$i]===false){
           echo "yes<br/>";
           continue;
       }else{
           echo $tests2[$i]."<br/>";
       }
    }
   echo "<hr/>";

   //10 sort the elements at the array
    $sortArr=array(6,4,9,3,12,8,7);
    $temp;
    for($j = 0; $j < count($sortArr); $j ++) {
        for($i = 0; $i < count($sortArr)-1; $i ++){
    
            if($sortArr[$i] > $sortArr[$i+1]) {
                $temp = $sortArr[$i+1];
                $sortArr[$i+1]=$sortArr[$i];
                $sortArr[$i]=$temp;
            }       
        }
    }
    foreach($sortArr as $item){
        echo $item."<br/>";
    }
    echo "<hr/>";

    //11 find all same things in two arrays
    $arr1=array('a','b','c','d');
    $arr2=array('c','d','e','f');
    for ($i=0; $i < count($arr1); $i++) { 
        for ($j=0; $j <count($arr2) ; $j++) { 
          if($arr1[$i]==$arr2[$j]){
              echo $arr1[$i]."<br>";
         }
        }
    }
?>
<!--12 calculate total price and discount -->
<form action="handel.php">
    <input type="text" placeholder="Enter the product price" name ="price"/><br/>
    <input type="text" placeholder="Enter the amount of product " name ="qunat"/><br/>
    <button type="submit">Send</button>

</form>