<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <h1 class="mt-4">Movie Lists</h1>
        <table class="table table-info table-stripped table-hover">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Poster</th>
      <th scope="col">Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="" alt=""></td>
      <td>Star Trek</td>
      <td>
        <a href="" class="btn btn-success">Detail</a>
      </td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>