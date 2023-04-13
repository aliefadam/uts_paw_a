<?php
session_start();
include('model/functions.php');
css('style');
?>
<img src="imgs/Logo-Untag-Surabaya-PNG-IfoxSoft.Com_.png" alt="">

<?php
$pesan_sukses = pesanSukses();
if (!empty($pesan_sukses)): ?>
    <div class="pesan-sukses">
        <p>
            <?= $pesan_sukses ?>
        </p>
    </div>
<?php endif; ?>