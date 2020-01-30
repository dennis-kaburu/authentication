<?php
require 'config.php';


//         $ngrams = array();
//         $word = trim($word);
//         $len = strlen($word);
//         $max_gram_length = $len - 1;
         
//         //BEGIN N-GRAM SIZE LOOP $a
         
//         for ($a = $min_gram_length; $a <= $max_gram_length; $a++) { //BEGIN N-GRAM SIZE LOOP $a
             
//             for ($pos = 0; $pos < $len; $pos ++ ){  //BEGIN POSITION WITHIN WORD $pos
                 
//                 if(($pos + $a -1) < $len) {  //IF THE SUBSTRING WILL NOT EXCEED THE END OF THE WORD
                 
//                $ngrams[] = substr($word, $pos, $a);
//                   // echo $a;
                  
//                 }  //END IF THE SUBSTRING WILL NOT EXCEED THE END OF THE WORD
             
//             } //END POSITION WITHIN WORD $pos
         
//         }  //END N-GRAM SIZE LOOP $a
         
//         $ngrams = array_unique($ngrams);
//    //echo json_encode($ngrams);  
//    foreach ($ngrams as $key => $value) {
//         //echo $value."<br>";
//     $tmp = array_count_values($ngrams);
// $cnt = $tmp[$value];
// //echo $value." ".$cnt.'<br>';
// if ($cnt>1) {
//   echo $value." ".$cnt.'<br>';
// }else{
//   echo $value." ".$cnt.'<br>';
// }
//      }  
// return $ngrams;


 function pre_print_r($var){
  echo "<pre>";
  print_r($var);
  echo "</pre>";
}
function Bigrams($word){
    $ngrams = array();
    $len = strlen($word);
    for($i=0;$i+1<$len;$i++){
        $ngrams[$i]=$word[$i].$word[$i+1];
    }
    return $ngrams;
}
//pre_print_r(Bigrams("abcdefg"));


function Trigrams($word){
    $ngrams = array();
    $len = strlen($word);
    for($i=0;$i+2<$len;$i++){
        $ngrams[$i]=$word[$i].$word[$i+1].$word[$i+2];
    }
    return $ngrams;
}
//pre_print_r(Trigrams("abcdefg"));

function Ngrams($word,$n=3,$text_id){
    $len=strlen($word);
    $ngram=array();
    for($i=0;$i+$n<=$len;$i++){
        $string="";
        for($j=0;$j<$n;$j++){ 
            $string.=$word[$j+$i]; 
        }
        $ngram[$i]=$string;
    }
 $count=count($ngram); 
 echo 'Tokens: '.$count.'<br>'; 
 echo '<table class="table">
      <thead>
      <tr>
      <th>#</th>
      <th>Ngram</th>
      <th>Mode</th>
      <th>Freq</th>
      </tr>
      </thead>
      <tbody>

 ';
 $i=1;    // return $ngram;
 $gra=array_unique($ngram);
 foreach ($gra as $key => $value) {
        //echo $value."<br>";
    $tmp = array_count_values($ngram);
$cnt = $tmp[$value];
//echo $value." ".$cnt.'<br>';
$age=$cnt/$count*100;
if ($cnt>1) {
  echo '<tr>
  <td>'.$i++.'</td>
  <td>'.$value.'</td>
  <td>'.$cnt.'</td>
  <td>'.$age.'</td>

  </tr>';
 
}
// else{
//     echo '<tr>
//   <td>'.$i++.'</td>
//   <td>'.$value.'</td>
//   <td>'.$cnt.'</td>
//   <td>'.$age.'</td>

//   </tr>';
 
// }
     } 
 echo '</tbody>
 </table>';     
return $ngram;
}
//pre_print_r(Ngrams("abcdefg is joab and joan",2));
//http://phpir.com/language-detection-with-n-grams/
function getNgrams($word, $n = 3) {
        $ngrams = array();
        $len = strlen($word);
        for($i = 0; $i < $len; $i++) {
                if($i > ($n - 2)) {
                        $ng = '';
                        for($j = $n-1; $j >= 0; $j--) {
                                $ng .= $word[$i-$j];
                        }
                        $ngrams[] = $ng;
                }
        }
        return $ngrams;
}

