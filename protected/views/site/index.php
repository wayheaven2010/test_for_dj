<?php $this->pageTitle=Yii::app()->name; ?>

<?php //echo "<pre>";var_dump($this);?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php
//var_dump(Button::widget());

/*
echo Button::widget([
    'label' => 'Action',
    'options' => ['class' => 'btn-lg'],
]);
*/
?>
    <?php echo TbHtml::button('Default'); ?>
    <?php echo TbHtml::button('Primary', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>
    <?php echo TbHtml::button('Danger', array('color' => TbHtml::BUTTON_COLOR_DANGER)); ?>
    <?php echo TbHtml::button('Warning', array('color' => TbHtml::BUTTON_COLOR_WARNING)); ?>
    <?php echo TbHtml::button('Success', array('color' => TbHtml::BUTTON_COLOR_SUCCESS)); ?>
    <?php echo TbHtml::button('Info', array('color' => TbHtml::BUTTON_COLOR_INFO)); ?>
    <?php echo TbHtml::button('Inverse', array('color' => TbHtml::BUTTON_COLOR_INVERSE)); ?>
    <?php echo TbHtml::button('Link', array('color' => TbHtml::BUTTON_COLOR_LINK)); ?>

<!--form-->
    <?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_INLINE); ?>
    <?php echo TbHtml::textField('email', '',
    array('placeholder' => 'Email', 'size' => TbHtml::INPUT_SIZE_SMALL)); ?>
    <?php echo TbHtml::passwordField('password', '',
    array('placeholder' => 'Password', 'size' => TbHtml::INPUT_SIZE_SMALL)); ?>
    <?php echo TbHtml::checkBox('rememberMe', false, array('label' => 'Remember me')); ?>
    <?php echo TbHtml::submitButton('Sign in'); ?>
    <?php echo TbHtml::endForm(); ?>
<!--image-->


    <?php echo TbHtml::imageRounded('holder.js/140x140'); ?>
    <?php echo TbHtml::imageCircle('holder.js/140x140'); ?>
    <?php echo TbHtml::imagePolaroid('holder.js/140x140'); ?>
<!--icon-->
<?php echo TbHtml::icon(TbHtml::ICON_GLASS); ?>


<!--components-->
    <?php echo TbHtml::buttonDropdown('Action', array(
	
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array('label' => 'Something else here', 'url' => '#'),
    TbHtml::menuDivider(),
    array('label' => 'Separate link', 'url' => '#'),
   
    )); ?>

    <?php echo TbHtml::buttonDropdown('Action', array(
	
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array('label' => 'Something else here', 'url' => '#'),
    TbHtml::menuDivider(),
    array('label' => 'Separate link', 'url' => '#'),
   
    ),
	array('color' => TbHtml::BUTTON_COLOR_WARNING)	
); ?>



<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
