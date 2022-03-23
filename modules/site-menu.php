<?php if(!defined('KEYPASS')) die(); 
$url = parse_url($_SERVER['REQUEST_URI']);
$url = explode('/', trim($url['path'], '/'));
?>
<div class="top-logo">
    <a href=""><img src="assets/img/BlackLogo 3.png" alt="sparkle" /></a>
</div>
<div class="menu-icon" onclick="toggle_menu(this, 1);"><img src="assets/img/menu-icon.png" alt="Menu" /></div>
<div class="cross-icon" onclick="toggle_menu(this, 0);"><img src="assets/img/cross-icon.png" alt="Close" /></div>
<div class="lang_select">
    <a href="#" <?=(isset($_SESSION['lv']))?'class="selected"':'';?>>LV</a>
    <a href="#" <?=(isset($_SESSION['en']))?'class="selected"':'';?>>EN</a>
    <a href="#" <?=(isset($_SESSION['ru']))?'class="selected"':'';?>>RU</a>
</div>
<nav class="site-menu">
    <a href="ideja/index.php" <?=(in_array('ideja', $url))?'class="selected"':'';?>>Ideja</a>
    <a href="piesaki_sapni/index.php" <?=(in_array('piesaki_sapni', $url))?'class="selected"':'';?>>Piesaki Sapni</a>
    <a href="uznemejiem/index.php" <?=(in_array('uznemejiem', $url))?'class="selected"':'';?>>Uzņēmējiem</a>
    <a href="sapnu_banka/index.php" <?=(in_array('sapnu_banka', $url))?'class="selected"':'';?>>Sapņu banka</a>
    <a href="sapnus_atbalsta/index.php" <?=(in_array('sapnus_atbalsta', $url))?'class="selected"':'';?>>Sapņus atbalsta</a>
    <a href="99_iedvesmas_stasti/index.php" <?=(in_array('99_iedvesmas_stasti', $url))?'class="selected"':'';?>>99 Iedvesmas stāsti</a>
</nav>