<?php
$this->breadcrumbs=array(
	'Message' => array('message/index'),
	'Date',
);?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>
<h2>
<?=$time?>
<pre>
	<?print_r($data);?>
	<br><br><br>
	<?var_dump($this)?>
</pre>
</h2>
