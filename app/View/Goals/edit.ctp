<?php $this->assign('title', 'Edit Goal'); ?>

<h2>Edit Goal</h2>

<?php echo $this->Form->create('Goal', array('inputDefaults' => array('div' => false, 'label' => false))); ?>
    <div class="row">
        <div class="col input-field s12 m12 l12">
            <?php echo $this->Form->input('name', array('id' => 'name',
                'placeholder' => 'In 10 words or less, describe your goal.')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col input-field s12 m12 l12">
            <?php echo $this->Form->input('description', array('class' => 'materialize-textarea', 'id' => 'description',
                'placeholder' => 'Put any extra details about your goal here.')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
            <button class="waves-effect waves-light btn orange"><i class="mdi-content-send right"></i>Submit</button>
        </div>
    </div>
<?php echo $this->Form->end(); ?>