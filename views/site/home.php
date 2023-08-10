<?php
use yii\helpers\Html;


/** @var yii\web\View $this */

$this->title = 'Crud em Yii';
?>
<div class="site-index">
  <?php if (yii::$app->session->hasFlash('message')): ?>
    <div class="alert alert-dismissible alert-success">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <?php echo yii::$app->session->getFlash('message'); ?>
    </div>
  <?php endif; ?>
  <div class="jumbotron text-center bg-transparent mt-5 mb-5">
    <h1 style="color: #ff5a37" class="display-4">Bem Vindo!</h1>

    <p class="lead">esta é a minha aplicação crud feita com o Yii2.</p>

  </div>
  <div class="row">
    <span style="margin-bottom: 20px">
      <?= Html::a('Create', ['/site/create'], ['class' => 'btn btn-primary']) ?>
    </span>
  </div>>
  <div class="body-content">



    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titulo</th>
          <th scope="col">Descrição</th>
          <th scope="col">Categoria</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php if (count($posts) > 0): ?>
          <?php foreach ($posts as $post): ?>
            <tr class="table-active">
              <th scope="row">
                <?php echo $post->id; ?>
              </th>
              <td>
                <?php echo $post->title; ?>
              </td>
              <td>
                <?php echo $post->description; ?>
              </td>
              <td>
                <?php echo $post->category; ?>
              </td>

              <td>
                <div style="display: flex; gap: 10px;">
                  <?= Html::a('View', ['view', 'id' => $post->id], ['class' => 'btn btn-primary']) ?>
                  <?= Html::a('Atualizar', ['update', 'id' => $post->id], ['class' => 'btn btn-success']) ?>
                  <?= Html::a('Deletar', ['delete', 'id' => $post->id], ['class' => 'btn btn-danger']) ?>
                </div>

              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td>No Records Found!</td>
          </tr>
        <?php endif; ?>

      </tbody>
    </table>
    </nav>
    <div class="row">


    </div>

  </div>
</div>

