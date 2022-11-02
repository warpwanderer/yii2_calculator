<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper ;

?>

<?php $form = ActiveForm::begin(); ?>



<?php
    $months = [
            1 => 'Январь',
            2 => 'Февраль',
            3 => 'Август',
            4 => 'Сентябрь',
            5 => 'Октябрь',
            6 => 'Ноябрь',
        ];

    $tonnage = [
            1 => 25,
            2 => 50,
            3 => 75,
            4 => 100,
        ];

    $type = [
            1 => 'Шрот',
            2 => 'Жмых',
            3 => 'Соя',
        ];
  
    $models = ArrayHelper::getValue($months, 1);
?>



<div class  ='container'>
    <div class="row mt-5">   
<form action = "index.php" method = "POST">
    <div class="mb-3">
        <label for="months" class="form-label">Месяц</label>
        <?= Html::dropDownList($models, 'null', $months);?>
    </div>

    <div class="mb-3">
        <label for="tonnage" class="form-label">Тоннаж</label>
        <?= Html::dropDownList('tonnage', 'null', $tonnage);?>
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Тип сырья</label>
        <?= Html::dropDownList('type', 'null', $type);?>
    </div>
    <div class="form-group">
            <?= Html::submitButton('Расчитать', ['class' => 'btn btn-primary']) ?>
    </div>
</form>
</div>
</div>


<?php ActiveForm::end(); ?>


 
   
