<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\assets\AppAsset;
AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no, email=no" />
    <meta name="full-screen" content="true" />
    <meta name="screen-orientation" content="portrait" />
    <meta name="x5-fullscreen" content="true" />
    <meta name="360-fullscreen" content="true" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<header class="header g-mb6">
    <a href="javascript:history.go(-1)" class="btn-back">
        <i class="btn-back-sub icon-zuojiantou"></i>
        返回
    </a>
    <?= Html::encode($this->title) ?>
</header>
<section class="main">
    <?php echo $content ?>
</section>
<footer class="footer">
    <div class="tabs"><a href="<?= Url::to(['okr/index'])?>"><i class="f-icons icon-xiaoxi"></i><span>OKR</span></a></div>
    <div class="tabs"><a href="<?= Url::to(['contact/index'])?>"><i class="f-icons icon-zl_lianxiren"></i><span>联系人</span></a></div>
    <div class="tabs"><a href="<?= Url::to(['user/index'])?>"><i class="f-icons icon-wo"></i><span>我</span></a></div>
</footer>


<script>

</script>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>