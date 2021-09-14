<?php
	// =============================== Traditional Way ====================================== //

    $foods = ['Apple','Mango','Pineapples','JackFruits'];
    foreach($foods as $key => $value){
    	echo 'Food Items : '.$value.'<br/>';
    }
    echo '<pre>';
    print_r($foods);
    echo '</pre>';
    echo '<hr/>';

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
?>