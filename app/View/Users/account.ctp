<?php $this->assign('title', 'Account'); ?>

<style>
    img.circle {
        margin-right: 35px;
        width: 175px;
    }

    span.tag {
        background: #9ccc65;
        border-radius: 3px;
        color: #ffffff;
        display: inline-block;
        float: left;
        font-weight: 100;
        margin: 5px;
        padding: 5px 7px;
    }

    #interests {
        margin-bottom: 20px;
    }

    img.friend {
        width: 50px;
        margin: 3px;
    }
</style>

<div class="row">
    <div class="col l12">
        <?php echo $this->Html->image('friend' . rand(1, 8) . '.jpg', array('class' => 'left circle')); ?>
        <h3>Fitcentive User</h3>
        <p class="flow-text">From Washington, DC - User for 3 weeks</p>
    </div>
</div>

<div class="row">
    <div class="col l6">
        <h4>About</h4>
        <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta illo laboriosam laborum
            nobis repudiandae. Dignissimos, illum, iusto. Ab cum eius est harum nemo recusandae rem repellendus sapiente
            velit?</p>

        <h4>Details</h4>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Height</td>
                    <td>5' 11"</td>
                </tr>
                <tr>
                    <td>Weight</td>
                    <td>200 lbs (91 kg)</td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>19</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col l6">
        <div id="interests" class="row">
            <h4>Interests</h4>
            <span class="tag">Kickboxing</span>
            <span class="tag">Barre</span>
            <span class="tag">Surfing</span>
            <span class="tag">Museums</span>
            <span class="tag">Painting</span>
            <span class="tag">Dancing</span>
            <span class="tag">Nightlife</span>
            <span class="tag">Horseback riding</span>
            <span class="tag">Blogging</span>
        </div>
        <div id="friends" class="row">
            <h4>Friends</h4>
            <?php foreach(range(1, 8) as $i): ?>
                <?php echo $this->Html->image('friend' . $i . '.jpg', array('class' => 'friend circle z-depth-1')); ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>