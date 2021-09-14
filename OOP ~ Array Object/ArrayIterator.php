<?php

    // =============================== Array Object ====================================== //

    $languages = ['PHP','Java','C#','GoLang'];
    $coding    = new ArrayObject($languages);     
    $iterator  = $coding->getIterator();
    $coding->append('Python');  
    while($iterator->valid()){
    	echo 'Programming Language : '.$iterator->current().'<br/>';
    	$iterator->next();
    }
    echo '<pre>';
    print_r($coding);
    echo '</pre>';
    echo '<hr/>';

    // =============================== Array Iterator ====================================== //

    $languages = ['PHP','Java','C#','GoLang'];
    $coding    = new ArrayIterator($languages); 
    echo $coding->current() .'<br/>';
    $coding->next();
    echo $coding->current() .'<br/>';    
    $coding->next();    
    echo $coding->current() .'<br/>';
    $coding->next();
    echo $coding->current() .'<br/>';
?>