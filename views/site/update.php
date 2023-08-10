<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'Crud em Yii';
?>
<div class="site-index">
    <h1 style= "color: #469be7" >Atualizar post</h1>

    
    <div class="body-content">
        <?php
            $form = ActiveForm::begin()?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'title');?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'description')->textarea(['rows' => '6']);?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
<?php $items = ['aventura' => 'aventura', 'ação' => 'ação', 'drama' => 'drama',]; ?>
                    <?= $form->field($post, 'category')->dropDownList($items, ['prompt' => 'Select']); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <div class="col-lg-3">
                        <?= Html::submitButton('Atualizar post', ['class'=>'btn btn-success']);?>    
                    </div>
            
                    <div class="col-lg-2">
                        <h3></h3>
                        <a href=<?php echo yii::$app->homeUrl; ?> class="btn btn-primary">voltar</a>       
                    </div>
                </div>
            </div>
        </div>

        <?php ActiveForm:: end() ?>
    </div>
</div>
