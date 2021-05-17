<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-4">People Lists</h1>
            <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Please enter the keyword.." name="keyword">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="submit">Search</button>
            </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-info table-stripped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (10 * ($currentPage - 1)); ?>
                    <?php foreach ($people as $p) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $p['name']; ?></td>
                        <td><?= $p['address']; ?></td>
                        <td><a href="" class="btn btn-success">Detail</a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <?= $pager->links('people', 'people_pagination'); ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>