<?php $this->layout='inicio'; ?>
<div class="cloudmenus form">
<?php echo $this->Form->create('Cloudmenu', array('type' => 'post', 'class' => 'form-horizontal')); ?>
	<fieldset>
		<legend><h2><b><?php echo __('Editar Menú'); ?></b></h2></legend>
	
		<?php echo $this->Form->input('id');?>
                <div class="form-group form-inline"> 
                    <label>Nombre</label>
                    <?php echo $this->Form->input('descripcion', array('label' => '', 'class' => 'form-control', 'placeholder' => 'Nombre del Menú')); ?>                   
                </div>
                <div class="form-group form-inline"> 
                    <label>Url</label>
                    <?php echo $this->Form->input('url', array('label' => '', 'class' => 'form-control', 'placeholder' => 'Dirección del Menú')); ?>                   
                </div>
                <div class="form-group form-inline"> 
                    <?php echo $this->Form->input('imagen', array('type' => 'file')); ?>
                    <p class="help-block">Máximo 1MB</p>
                </div>                
                <div class="form-group form-inline"> 
                    <?php echo $this->Form->input('administrador', array('label' =>  'Menú Admin', 'type' => 'checkbox', 'class' => 'form-control')); ?>
                </div>                    
                <div class="form-group form-inline"> 
                    <?php echo $this->Form->input('orden', array('label' => 'Orden', 'class' => 'form-control', 'placeholder' => 'Posición del Menú')); ?>                   
                </div>	
	</fieldset>
<?php echo $this->Form->submit('Guardar',array('class'=>'btn btn-primary'));?>
</div><br>
<div class="actions">
	<legend><h2><b><?php echo __('Acciones'); ?></b></h2></legend>
	<ul>
		<li><?php echo $this->Html->link(__('Lista Menús'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Perfiles'), array('controller' => 'perfiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Perfil'), array('controller' => 'perfiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
