<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<h2><?php echo t('Application'); ?></h2>
<table class="table table-striped">
    <tbody>
        <?php foreach ($info['app'] as $key => $value) { ?>
        <tr>
            <th><?php echo h($key); ?></th>
            <td><?php echo h($value); ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<h2><?php echo t('Request'); ?></h2>
<table class="table table-striped">
    <tbody>
    <?php foreach ($info['request'] as $key => $value) { ?>
        <tr>
            <th><?php echo h($key); ?></th>
            <td><?php echo h($value); ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<h2><?php echo t('Raw HTTP Request Headers'); ?></h2>
<table class="table table-striped">
    <tbody>
    <?php foreach (getallheaders() as $key => $value) { ?>
        <tr>
            <th><?php echo h($key); ?></th>
            <td><?php echo h($value); ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<h2><?php echo t('Misc'); ?></h2>
<table class="table table-striped">
    <tbody>
    <?php foreach ($info['misc'] as $key => $value) { ?>
        <tr>
            <th><?php echo h($key); ?></th>
            <td><?php echo h($value); ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
