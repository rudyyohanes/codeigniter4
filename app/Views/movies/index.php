<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
          <a href="/movies/create" class="btn btn-primary mt-5">Add movie data</a>
        <h1 class="mt-4">Movie Lists</h1>
        <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('message'); ?>
        </div>
        <?php endif; ?>
        <table class="table table-info table-stripped table-hover">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Poster</th>
      <th scope="col">Title</th>
      <th scope="col">Released</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?>
    <?php foreach ($movie as $m) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><img src="/img/<?= $m['poster']; ?>" alt="" class="poster"></td>
      <td><?= $m['title']; ?></td>
      <td><?= $m['released']; ?></td>
      <td><a href="/movies/<?= $m['slug']; ?>" class="btn btn-success">Detail</a></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>