this is static page
<?php 



//echo Yii::app()->request->url;
echo "<pre>";
var_dump( Yii::app()->getRequest());

/*
echo "<pre>Yii::app()";
var_dump(Yii::app());
echo '$this<br>';

var_dump($this);
*/
Yii::app()->name="change";

$this->pageTitle=Yii::app()->name . ' - 標題阿!';

$this->breadcrumbs=array(
	'Static',
);
?>
