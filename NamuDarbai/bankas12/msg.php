
    <?php include __DIR__ . '/autoMSG.php' ?>    

<?php if($msg = getMessage()) : ?>
    <div style="margin:10;padding:10;color:dodgerblue ">
        <?= $msg ?>
    </div>
<?php endif ?>
<!-- //virsuje zinute kai msg gauna false (pagal index jeigu) tuomen niekas nieko neraso nes returninam false -->