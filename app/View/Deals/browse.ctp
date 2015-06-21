<?php $this->assign('title', 'Browse Deals'); ?>

<style>
    h5 {
        font-size: 20px;
    }

    img.profile {
        margin: 5px 2px;
        height: 32px;
    }
</style>

<?php if (count($deals) > 0): ?>
    <h2>Browse Deals</h2>

    <div class="row">
        <?php foreach ($deals as $deal): ?>
            <div class="col l4">
                <div class="card small">
                    <div class="card-image">
                        <?php echo $this->Html->image($deal['Deal']['banner']); ?>
                    </div>
                    <div class="card-content">
                        <h5><?php echo $deal['Deal']['name']; ?></h5>
                        <?php echo $this->Html->link($deal['Partner']['name'], 'javascript:void(0);',
                            array('class' => 'grey-text')); ?>
                        <p class="right">
                            <a class="btn orange" href="javascript:void(0);">Claim</a>
                        </p>
                    </div>
                </div>
                <p class="friends grey-text">
                    Friends claiming this deal: <br />
                    <?php
                        $friends = range(1, 8);
                        shuffle($friends);

                        for ($i = 0; $i < rand(1, 4); $i++) {
                            echo $this->Html->image('friend' . $friends[$i] . '.jpg',
                                array('class' => 'profile circle z-depth-1'));
                        }
                    ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <div id="empty">
        <i class="mdi-maps-local-play text-lighten-1 medium grey-text"></i>
        <h5 class="grey-text text-darken-2">No deals found</h5>
        <p class="grey-text text-darken-2">To add one, click the Add button on the bottom right of the screen.</p>
    </div>
<?php endif; ?>