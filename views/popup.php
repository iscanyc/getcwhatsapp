<?php
$positions = [
   'top-left' => 'top: 10px; left: 10px;',
   'top-right' => 'top: 10px; right: 10px;',
   'bottom-left' => 'bottom: 10px; left: 10px;',
   'bottom-right' => 'bottom: 10px; right: 10px;',
];
$pos = get_option('getcwhatsapp_position');
?>

<div style="position: fixed; <?= isset($positions[$pos]) ? $positions[$pos] : ''; ?>">
   <a href="https://wa.me/<?= get_option('getcwhatsapp_number'); ?>?text=<?= get_option('getcwhatsapp_text'); ?>"
      target="__blank">
      <img src="<?= plugins_url('getcwhatsapp/assets/icon.svg'); ?>" width="65px">
   </a>
</div>