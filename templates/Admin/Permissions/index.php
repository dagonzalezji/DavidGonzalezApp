<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permission[]|\Cake\Collection\CollectionInterface $permissions
 */
?>
<div class="permissions index content">
    <?= $this->Html->link(__('New Permission'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Permissions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('permision_id') ?></th>
                    <th><?= $this->Paginator->sort('id_user') ?></th>
                    
                    <th><?= $this->Paginator->sort('id_report') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($permissions as $permission): ?>
                <tr>
                    <td><?= $this->Number->format($permission->permision_id) ?></td>
                    <td><?= $this->Number->format($permission->id_user) ?></td>
                    
                    <td><?= $this->Number->format($permission->id_report) ?></td>
                    <td><?= h($permission->description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $permission->permision_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $permission->permision_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $permission->permision_id], ['confirm' => __('Are you sure you want to delete # {0}?', $permission->permision_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
