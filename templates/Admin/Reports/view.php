<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Report $report
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Report'), ['action' => 'edit', $report->report_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Report'), ['action' => 'delete', $report->report_id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->report_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reports'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Report'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reports view content">
            <h3><?= h($report->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($report->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Id') ?></th>
                    <td><?= $this->Number->format($report->report_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
