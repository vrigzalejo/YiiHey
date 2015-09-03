<?php

use backend\models\Companies;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Branches */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="branches-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'companies_company_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Companies::find()->all(), 'company_id', 'company_name'),
            'language' => 'de',
            'options' => ['placeholder' => 'Select a state ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

        <?= $form->field($model, 'branch_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'branch_address')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'branch_status')->dropDownList(['active' => 'Active', 'inactive' => 'Inactive',], ['prompt' => 'Status']) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
<?php $script
    = <<< JS
// here you right all your javascript
$('form#{$model->formName()}').on('beforeSubmit', function(e) {
    var \$form = $(this);
    $.post(
        \$form.attr('action'), // serialize Yii2 form
        \$form.serialize()
    )
        .done(function(result) {
        /*if(result.message == 'Success') {
            $(document).find('#secondmodal').modal('hide');
            $.pjax.reload({container: '#commodity-grid'});
        } else {
            $(\$form).trigger('reset');
            $('#message').html(result.message);
        }*/
        }).fail(function() {
            console.log('server error');
        });
    return false;
});

JS;
$this->registerJs($script);
?>