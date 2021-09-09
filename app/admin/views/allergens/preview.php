<div class="row-fluid">
    <?= form_open(
    current_url(),
    [
        'id'   => 'preview-form',
        'role' => 'form',
    ]
); ?>

    <?= $this->renderForm(['preview' => true]); ?>

    <?= form_close(); ?>
</div>
