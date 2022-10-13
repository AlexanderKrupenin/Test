<?php
  function debug($data){
    echo '<pre>'.print_r($data,1).'</pre>';
  }

  function load($data){
    foreach($_POST as $key => $wiev){
        if(array_key_exists($key, $data)){
            $data[$key]['value'] = trim($wiev);
        }
    }
    return $data;
  }
  function validate($data){
    $errors ='';
    foreach ($data as $key => $wiev){
        if($data[$key] ['required'] && empty($data[$key]['value'])){
           $errors.="<li>Вы не заполнили поле {$data[$key]['0']}</li>"; 
        }   
    }
    return $errors;
  }
  function test($data){

		          if (!empty($_POST['radio-test']) and $_POST['radio-test'] === '1') { 
                echo 'checked';
              }
          
  }
 ?>

 