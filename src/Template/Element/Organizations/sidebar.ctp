<?php $this->start('sidebarAdministrator'); ?>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                    <?php if(!empty($organization->getWebsite())): ?>
                        <li>
                            <a href="<?= $organization->getWebsite() ?>">
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-external-link fa-stack-1x" style="color:#fff;"></i>
                        </span><?= __('Website of the organization') ?>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a href="<?= $this->Url->build(
                            [
                                'controller' => 'Organizations',
                                'action' => 'edit',
                                $organization->id
                            ]) ?>">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-external-link fa-stack-1x" style="color:#fff;"></i>
                            </span> <?= __('Edit the organization') ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php $this->end(); ?>

<?php $this->start('sidebarStudent'); ?>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="<?= $organization->getWebsite() ?>">
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-external-link fa-stack-1x" style="color:#fff;"></i>
                        </span> <?= __('Website of the organization') ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php $this->end(); ?>

<?php $this->start('sidebar'); ?>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="<?= $organization->getWebsite() ?>">
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-external-link fa-stack-1x" style="color:#fff;"></i>
                        </span> <?= __('Website of the organization') ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $this->end(); ?>