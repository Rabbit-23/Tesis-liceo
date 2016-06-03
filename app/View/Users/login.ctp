
<hr>
<?php
echo $this->Session->flash('auth');
echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' =>'login')));
echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Ingrese Su Usuario','label' => 'Usuario'));
echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Ingrese Su Contraseña','label' => 'Contraseña'));
?>
<hr>
<center><?php echo $this->Form->end(array('label' => 'Iniciar sesión', 'class' =>'btn bg-blue btn-block')); ?></center>


