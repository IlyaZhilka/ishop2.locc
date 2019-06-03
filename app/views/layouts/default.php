<html>
<head>
<?=$this->getMeta();?>
</head>
<body>
<h1>Шаблон Default</h1>

<?=$content;?>

<?php

$logs = \R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();
       debug($logs->grep('SELECT') ); ?>
</body>
</html>
