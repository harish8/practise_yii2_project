<?php
/**
 * Created by PhpStorm.
 * User: harish
 * Date: 02/11/15
 * Time: 7:27 PM
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Countries</h1>
<ul>
    <?php foreach ($countries as $country): ?>
    <li>
        <?= Html::encode("{$country->name}({$country->code})") ?>:
        <?= $country->population ?>
    </li>
    <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>