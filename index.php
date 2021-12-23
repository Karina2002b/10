<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
<body>
    <?php
    if(isset($_POST['button'])){
            $summa = 1;
            $n = $_POST['x'];
            $array = explode(" ",$n);
            //произведение элементов массива с четными номерами
            for($i=0;$i< count($array);$i+=2){
                $summa*=$array[$i];
            }
            echo("Произведение элементов с четными номерами равна ".$summa."<br>");
            // Сумма элементов массива, расположенных между первым и последним нулевыми элементами
            $summa = 0;
            $first = null;
            $last = null;
            for($i = 0; $i<count($array);$i++){
                if($array[$i]==0){
                    $last = $i;
                    if($first==null){
                        $first = $i;
                    }
                }
            }
            for($i = $first;$i<$last;$i++){
                $summa+= $array[$i];
            }
            echo("Сумма элементов массива расположенных между первым и последним нулевым элементом равна ". $summa . "<br>");
            //Преобразовать массив, чтобы сначала располагались все положительные элементы, а потом отрицательные(0 - положительное)
            $negative = [];
            $n=0;
            $positive = [];
            $p=0;
            for($i=0;$i<count($array);$i++){
                if($array[$i]>=0){
                    $positive[$p] = $array[$i];
                    $p++;
                }
                else{
                    $negative[$n] = $array[$i];
                    $n++;
                }
            }
            $positive = array_merge($positive,$negative);
            print_r($positive);
        }
            ?>
<form method = "POST">
	<p>Введите значения массивов через пробел</p>
	<p><input type ="text" name="x"></p>
	<p><input type="submit" name="button"></p>
</form>
</body>
</html>