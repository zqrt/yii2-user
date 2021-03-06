<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var bool $success
 */
$success = Yii::$app->session->getFlash("Confirm-success");
$this->title = $success ? "Confirmed" : "Error";
?>
<div class="site-confirm">

    <?php if ($success): ?>

        <div class="alert alert-success">

            <p>Your email has been confirmed</p>

            <?php if (Yii::$app->user->isLoggedIn): ?>

                <p><?= Html::a("Go to my account", ["/user/account"]) ?></p>
                <p><?= Html::a("Go home", Yii::$app->getHomeUrl()) ?></p>

            <?php else: ?>

                <p><?= Html::a("Log in here", ["/user/login"]) ?></p>

            <?php endif; ?>

        </div>


    <?php else: ?>

        <div class="alert alert-danger">Invalid key</div>

    <?php endif; ?>
</div>
