<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Message> $messages
 */
?>
<div class="messages index content">
    <h3><?= __('Chat') ?></h3>
    <div class="table-responsive">
        <table>
            <tbody>
                <?php foreach ($messages as $message): ?>
                <tr>
                    <td><?= $message->role; ?></td>
                    <td><?= $message->content; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?=
        $this->Form->create(null, ['action' => $this->Url->build('/messages/add')]);
        echo $this->Form->hidden('role', ['value' => 'user']);
        echo $this->Form->control('content', ['label' => 'New message']);
        echo $this->Form->submit(__('Send'));
        $this->Form->end();
    ?>
</div>
