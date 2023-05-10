<?php if (is_front_page() ):?>
    <img src="<?= pathlogo ?>" class="logoimg" alt="<?= sitename ?>"/>
<?php else : ?>
    <!-- <a href="<?= pathinfo($_SERVER['SCRIPT_NAME'])['dirname']?>" class="logolink" title="<?= sitename ?>"> -->
    <a href="/" class="logolink" title="<?= sitename ?>">
        <img src="<?= pathlogo ?>" class="logoimg" alt="<?= sitename ?>"/>
    </a>
<?php endif; ?>