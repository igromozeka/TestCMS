<?php
$nav = $GLOBALS['nav'];
if(isset($nav)){?>
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    <?php
    foreach ($nav as $path => $name){?>
        <li class="nav-item"><a href="<?php
            if('' === $path) echo '/';
            else echo '/'.$path; ?>" title="<?= $name ?>" <?php
            if($path === path()){
                ?>class="nav-link active" aria-current="page" <?php
            }elseif((!array_key_exists(path(), $GLOBALS['nav'])) && $path === 'news'){
                ?>class="nav-link active" aria-current="page" <?php
            }
            else
            {
                ?>class="nav-link"<?php
            }?>><?= $name ?></a></li>
    <?php
    }?>
    </ul>
<?php
}?>

