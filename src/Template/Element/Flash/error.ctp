<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="panel panel-danger panel-heading" onclick="this.classList.add('hidden');"><?= $message ?></div>
