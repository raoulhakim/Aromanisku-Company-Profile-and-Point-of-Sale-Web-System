<?php if ($this->session->has_userdata('success')): ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <h4><i class="icon fa fa-check"></i>
            <?= $this->session->flashdata('success'); ?>
        </h4>
    </div>
<?php endif; ?>