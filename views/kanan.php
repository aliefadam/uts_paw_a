<?php
session_start();
include('../model/functions.php');
css('style');
?>

<img src="../imgs/Logo-Untag-Surabaya-PNG-IfoxSoft.Com_.png" alt="">

<?php
$pesan = pesan();
if (!empty($pesan)): ?>
    <div class="pesan-sukses">
        <p>
            <?= $pesan ?>
        </p>
    </div>
<?php endif; ?>