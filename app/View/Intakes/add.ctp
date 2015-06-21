<?php $this->assign('title', 'Add Food'); ?>

<h2>Add Food</h2>

<?php echo $this->Form->create('Intake', array('inputDefaults' => array('div' => false, 'label' => false))); ?>
    <div class="row">
        <div class="col input-field s12 m12 l12">
            <?php echo $this->Form->input('type', array('id' => 'type',
                'placeholder' => 'Start typing to search for a food...')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col input-field s12 m12 l12">
            <?php echo $this->Form->input('amount', array('id' => 'amount',
                'placeholder' => 'How many servings did you have?')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <button class="waves-effect waves-light btn orange"><i class="mdi-content-send right"></i>Submit</button>
        </div>
    </div>
<?php echo $this->Form->end(); ?>