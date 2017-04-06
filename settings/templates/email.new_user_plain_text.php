<?php p($l->t('Welcome aboard %s', [$_['displayname']]));?>

<?php p($l->t('You have now an Nextcloud account, you can add, protect, and share your data.'));?>

<?php if($_['generated_password']) { p($l->t('Set your password')); } else { p($l->t('Go to %s', [$theme->getName()])); } ?>: <?php p($_['url']); ?>

<?php p($l->t('Install Client') . ': ' . $_['url_client_install']); ?>

	--
<?php p($theme->getName() . ' - ' . $theme->getSlogan()); ?>
<?php p($l->t('This is an automatically generated email, please do not reply.')); ?>


