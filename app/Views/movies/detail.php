<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Movie Detail</h2>
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/<?= $movies['poster']; ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $movies['title']; ?></h5>
        <p class="card-text"><b>Director : </b><?= $movies['director']; ?></p>
        <p class="card-text"><small class="text-muted"><b>Production : </b><?= $movies['production']; ?></small></p>
        <p class="card-text"><small><b>Plot : </b><?= $movies['plot']; ?></small></p>

        <a href="/movies/edit/<?= $movies['slug']; ?>" class="btn btn-warning">Edit</a>

        <form action="/movies/<?= $movies['id']; ?>" method="post" class="d-inline">
        <?= csrf_field(); ?>
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
        <br><br>
        <a href="/movies">Back to Movie List</a>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>