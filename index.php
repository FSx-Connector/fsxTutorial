<?php

if (!isset($_GET['tab'])) { $tab='fsxintro'; $anchor=''; }
else list($tab) = explode('#', $_GET['tab']);

$fsxContent = array('fsxintro', 'fsxinstall', 'fsxdaily', 'fsxfsol', 'fsxconf', 'fsxdic', 'fsxcat', 'fsxpec', 'fsxcli', 'fsxlog', 'fsxpcron', 'fsxfaq', 'xfsxsvn', 'xfsxdev', 'fsxold', 'fsxoldman');
$nosContent = array('nosintro', 'noshelpus', 'noscopy', 'nosprivacy', 'nosadvert');

if (!in_array($tab, $nosContent)) 
if (!in_array($tab, $fsxContent)) $tab='sitemap';

$menu = ($tab=='sitemap') ? 'fsx' : substr($tab, 0, 3);

include 'includes/top.php';

include 'includes/'.$menu.'_column_left.php';

include 'includes/content.php';

include 'includes/column_right.php';

include 'includes/footer.php';

?>