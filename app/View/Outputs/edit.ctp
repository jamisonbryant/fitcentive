<?php $this->assign('title', 'Edit Exercise'); ?>

<h2>Edit Exercise</h2>

<?php echo $this->Form->create('Output', array('inputDefaults' => array('div' => false, 'label' => false))); ?>
    <div class="row">
        <div class="col input-field s12 m12 l12">
            <?php echo $this->Form->input('type', array('id' => 'type',
                'placeholder' => 'Start typing to search for an exercise...')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col input-field s12 m12 l12">
            <?php echo $this->Form->input('amount', array('id' => 'amount',
                'placeholder' => 'How long did you do it?')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
            <button class="waves-effect waves-light btn orange"><i class="mdi-content-send right"></i>Submit</button>
        </div>
    </div>
<?php echo $this->Form->end(); ?>