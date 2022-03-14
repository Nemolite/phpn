<?php
/**
 * ООП
 */

 class MyClass {
    /**
     * Публичное свойство класса
     *
     * @var string
     */ 
    public $myvar = 'Значение по умолчанию';

    /**
     * Публичный метод
     *
     * @return void
     */
    public function show() {
        echo $this->myvar;
    }
 }     
    
 /**
  * Создание объекта, экземпляра класса
  */
$myobj = new MyClass();
$myobj->show();
echo "<br>";    
echo "===========";
echo "<br>"; 
echo $myobj->myvar;
?>