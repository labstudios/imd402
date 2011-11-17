<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title ?></title>
    <?php echo HTML::style("assets/css/screen.css", array('media' => "screen")); ?>
</head>
<body>
    <div class="nav"></div>
    <div class="content"><?php echo $content; ?></div>
</body>
</html>