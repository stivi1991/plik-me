<?php
echo $this->Form->create('User', array('id'=>'login'));
echo $this->Form->control('email');
echo $this->Form->control('password');
echo $this->Form->submit();
echo $this->Form->end();
?>
