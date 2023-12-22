<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Supplier</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <div class="row">
                <div class="col">
                    <h3 class="box-title">
                        Supplier List
                    </h3>
                </div>
                <div class="col-auto">
                    <a href="<?= site_url('supplier/add'); ?>" class="btn btn-block btn-primary"><i
                            class="fa fa-user-plus"></i> Add Supplier</a>
                </div>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="tabel1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($row->result() as $key => $data): ?>
                        <tr>
                            <td>
                                <?= $key + 1; ?>
                            </td>
                            <td>
                                <?= $data->nama_supplier; ?>
                            </td>
                            <td>
                                <?= $data->no_hp_supplier; ?>
                            </td>
                            <td>
                                <?= $data->alamat_supplier; ?>
                            </td>
                            <td>
                                <?= $data->deskripsi_supplier; ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= site_url('supplier/edit/' . $data->id_supplier); ?>" class="btn btn-secondary">
                                    <i class="fa fa-pencil-alt"></i> Edit Supplier
                                </a>
                                <a href="<?= site_url('supplier/del/' . $data->id_supplier); ?>" class="btn btn-danger"
                                    onclick="return confirm('WARNING!!! ARE YOU SURE TO DELETE THIS SUPPLIER?')">
                                    <i class="fa fa-trash"></i> Delete Supplier
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>