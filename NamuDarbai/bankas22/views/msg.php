<?php namespace Bank;?>
<?php if ($msg = App::getMessage()) : ?>
    <div style="margin:10;padding:10;color:dodgerblue ">
    <?= $msg ?>
    </div>
<?php endif ?>