<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'Crud em Yii';
?>
<div class="site-index">
    <h1 style="color: #469be7">Ver post</h1>

    <div class="body-content">

        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->title; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->description; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->category; ?>
            </li>
        </ul>
        <div style="margin-top: 20px;">
            <a href=<?php echo yii::$app->homeUrl; ?> class="btn btn-primary">voltar</a>
        </div>
    </div>