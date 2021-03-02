<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
?>
<div class="employees index content">
    <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Employees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('employees_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('las_name') ?></th>
                    <th><?= $this->Paginator->sort('Office') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $this->Number->format($employee->employees_id) ?></td>
                    <td><?= h($employee->name) ?></td>
                    <td><?= h($employee->las_name) ?></td>
                    <td><?= h($employee->Office) ?></td>
                    <td><?= h($employee->phone) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $employee->employees_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->employees_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->employees_id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->employees_id)]) ?>
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
