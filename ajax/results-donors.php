<?php $i = 0; while($i < 6): ?>

<?php include ('./name-generator.php'); ?>

<div class="activity-block">
    <div class="activity-icon donation">
        <svg class="icon">
            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                xlink:href="./img/sprites.svg#icon-new-campaign">
            </use>
        </svg>
    </div>
    <div class="activity-text">
        <strong><?php echo $fullName; ?></strong> donated $<?php echo rand(1,500); ?>
    </div>
</div>

<?php $i++; endwhile; ?>