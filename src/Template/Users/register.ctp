<?php
echo $this->Form->create('User', array('id' => 'register'));
echo $this->Form->control('email');
echo $this->Form->control('password');
echo $this->Form->control('password_confirm', array('type' => 'password'));
echo $this->Form->submit();
echo $this->Form->end();
?>
