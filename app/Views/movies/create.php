<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-4">Add movie form</h2>

            <form action="/movies/save" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
  <div class="row mb-3">
    <label for="title" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('title')) ? 
      'is-invalid' : ''; ?>" id="title" name="title" autofocus value="<?= old('title');?>">
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
          <?= $validation->getError('title'); ?>
      </div>
    </div>
  </div>
  <div class="row mb-3">
    <label for="director" class="col-sm-2 col-form-label">Director</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="director" name="director" value="<?= old('director');?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="production" class="col-sm-2 col-form-label">Production</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="production" name="production" value="<?= old('production');?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="poster" class="col-sm-2 col-form-label">Poster</label>
    <div class="col-sm-2">
      <img src="/img/default.jpg" class="img-thumbnail">
    </div>
    <div class="col-sm-8">
    <div class="input-group">
  <input type="file" class="form-control <?= ($validation->hasError('poster')) ? 
      'is-invalid' : ''; ?>" id="poster" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="poster" onchange="previewImg()">
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
          <?= $validation->getError('poster'); ?>
      </div>
  <button class="btn btn-outline-secondary custom-file-label" type="button" id="inputGroupFileAddon04">Browse</button>
</div>
    </div>
  </div>
  <div class="row mb-3">
    <label for="released" class="col-sm-2 col-form-label">Released</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="released" name="released" value="<?= old('released');?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="plot" class="col-sm-2 col-form-label">Plot</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="plot" name="plot" value="<?= old('plot');?>">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>