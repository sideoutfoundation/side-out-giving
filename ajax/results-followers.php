<?php $i = 0; while($i < 6): ?>

<?php include ('./name-generator.php'); ?>

<div class="activity-block">
    <div class="activity-icon created">
        <i class="fa fa-users text-white fa-fw fa-lg" aria-hidden="true"></i>
    </div>
    <div class="activity-text">
        <strong><?php echo $fullName; ?></strong> followed SideOut Foundation
    </div>
</div>

<?php $i++; endwhile; ?>