<?php

use app\assets\AppAsset;
use app\components\MenuWidget;
use app\models\Category;
use app\models\Article;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>

<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="images/icon.png" type="image/png">
<title>Шрифт</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?= Html::csrfMetaTags()?>
<?php $this->head()?>
</head>
<body>
<?php $this->beginBody()?>

<div class="container">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <a href="" class ="navbar-brand">ШРИФТ</a>
            </div>
        </nav>
    </header>
            <!--CONTENT-->
            <?= $content ?>
            <!--/CONTENT-->

            <footer>
                <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
                    <div class="container">
                        <div class="row footer">
                            <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <span>Елена Мироненко</span>
                            </div>
                            <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <span>2019</span>
                            </div>
                                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <span>elena.mironenko1201@gmail.com</span>
                            </div>
                        </div>

                    </div>
                </nav>
            </footer>
        </div>

<?php $this->endBody()?>

</body>
</html>
<?php $this->endPage()?>