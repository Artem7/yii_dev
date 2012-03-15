<?php
$this->breadcrumbs=array(
	'Message' => array('message/index'),
	'google'  => 'http://google.com',
	'log',
);?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>
<br>
<a href="http://star?r=message/bye">tpl_anchor_test</a>
<br>
<br>
<br>
<p><?=CHtml::link("Link_test_2", array('message/bye'))?></p>
<?
print phpinfo();
?>
