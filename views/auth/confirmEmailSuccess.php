<?php

use webvimark\modules\UserManagement\UserManagementModule;

/**
 * @var yii\web\View $this
 */

$this->title = UserManagementModule::t('front', 'E-mail confirmed');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="change-own-password-success">

	<div class="alert alert-success text-center">
		<?= UserManagementModule::t('front', 'E-mail confirmed') ?>
	</div>

</div>
