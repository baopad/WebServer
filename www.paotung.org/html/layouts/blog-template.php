<?php
//载入菜单及列表变量
$global_variable = $_SERVER[ 'DOCUMENT_ROOT' ] . '/page-variables/global-variable.php';
$blog_template = $_SERVER[ 'DOCUMENT_ROOT' ] . '/page-variables/blog-variable.php';
file_exists( $global_variable ) ? include $global_variable : print "ERR,code=RGCJFS";
file_exists( $blog_template ) ? include $blog_template : print "ERR,code=RGCEGM";
?>
<!doctype html>
<html lang="<?php echo "$lang";?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="PAOTUNG">
<meta name="description" content="paotung website">
<link rel="stylesheet" type="text/css" href="/page-header/generic-style.css">
<link rel="stylesheet" type="text/css" href="<?php echo "$local_path";?>/style/add.css">
<link rel="shortcut icon" href="/header-footer/favicon.ico" type="image/x-icon">
<link rel="icon" href="/header-footer/favicon-pt_96.png" sizes="96">
<title>PAOTUNG</title>
</head>
<body style="direction:ltr;">
<?php
if ( !isset( $global_head ) ) {
    $global_head = $local_root . "/page-header/global-header.php";
}
if ( !isset( $local_content ) ) {
    $local_content = $local_root . "/page-contents/blog-content.php";
}
if ( ( $local_path == "\\" ) || ( $local_path == "\/" ) || ( $local_path == "/" ) ) {
    $local_content = $local_root . '/index/index.php';
}
if ( !isset( $global_foot ) ) {
    $global_foot = $local_root . "/page-footer/global-footer.php";
}
//载入全局页眉、地内容、全局页尾
file_exists( $global_head ) ? include $global_head : print 'ERR,code=LVRNFJ';
file_exists( $local_content ) ? include $local_content : print "ERR,code=WBVJFS";
file_exists( $global_foot ) ? include $global_foot : print "ERR,code=PTFJBD";
?>
</body>
</html>