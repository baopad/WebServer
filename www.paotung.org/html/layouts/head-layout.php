<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
<meta name="keywords" content="PAOTUNG">
<meta name="description" content="paotung website">
<link rel="stylesheet" href="/assets/global-header-style.css">
<link rel="stylesheet" href="/assets/index-style.css">
<link rel="stylesheet" href="/assets/add.css">
<link rel="stylesheet" href="/assets/global-footer-style.css">
<?php
if ( isset( $addhead_css ) )
  foreach ( $addhead_css as $key => $value )echo "$value\n";
?>
<link rel="shortcut icon" href="/assets/icons/favicon.ico" type="image/x-icon">
<link rel="icon" href="/assets/icons/favicon-pt_96.png" sizes="96">
<?php
if ( isset( $addhead_js ) )
  foreach ( $addhead_js as $key => $value )echo "$value\n";
?>
<title>PAOTUNG</title>
<style type="text/css"></style>
</head>

<?php /*?>	if ( !isset( $global_foot ) ) {
    $global_foot = $local_root . "/footer/global-footer.php";
}
//载入全局页眉、地内容、全局页尾
file_exists( $global_head ) ? include $global_head : print 'ERR,code=LVRNFJ'; <?php */?>