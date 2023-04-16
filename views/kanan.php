<?php
session_start();
include('../model/functions.php');
css('style');
?>

<img src="../imgs/Logo-Untag-Surabaya-PNG-IfoxSoft.Com_.png" alt="">

<?php
$pesan = pesan();
if (!empty($pesan)): ?>
    <?php if ($pesan['notif'] == "success"): ?>
        <div class="pesan-sukses bg-success">
            <?= $pesan['msg'] ?>
        </div>
    <?php else: ?>
        <div class="pesan-sukses bg-danger">
            <?= $pesan['msg'] ?>
        </div>
    <?php endif; ?>
<?php endif; ?>