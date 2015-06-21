<?php
    // Some stuff to play with...
    $user_level = 12; $last_level = $user_level - 1; $next_level = $user_level + 1;
    $user_hp = 300; $level_hp = 1000; $completion = round(($user_hp / $level_hp) * 100);
?>

<style>
    #healthbar {
        margin: 0 15px;
    }

    #healthbar .progress {
        margin: 0 20px;
        width: 250px;
    }

    #healthbar span {
        font-size: 20px;
        margin-left: 5px;
    }
</style>

<div id="healthbar" class="hide-on-med-and-down valign-wrapper">
    Level <span class="valign"><?php echo $user_level; ?></span>
    <div class="progress red darken-2 valign">
        <div class="determinate white" style="width: <?php echo $completion; ?>%"></div>
    </div>
    Level <span class="valign"><?php echo $next_level; ?></span>
</div>