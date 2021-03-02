<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permission $permission
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Permission'), ['action' => 'edit', $permission->permision_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Permission'), ['action' => 'delete', $permission->permision_id], ['confirm' => __('Are you sure you want to delete # {0}?', $permission->permision_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Permissions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Permission'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="permissions view content">
            <h3><?= h($permission->permision_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($permission->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Permision Id') ?></th>
                    <td><?= $this->Number->format($permission->permision_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($permission->id_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Report') ?></th>
                    <td><?= $this->Number->format($permission->id_report) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
