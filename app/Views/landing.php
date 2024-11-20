<?= $this->extend('layout/main_layout') ?>
<?= $this->section('pageContents') ?>
<div class="container">
  <!-- Content here -->
    <h1>Jed's Web Systems</h1>
    <p>A team composed of IT students working to create web pages in accordance to their requirements in their subject "Web Systems and Development.</p>
    <button type="button" class="btn btn-dark">About</button>
</div>
  <img src="https://media.istockphoto.com/id/1001279256/vector/technology-network-background.jpg?s=612x612&w=0&k=20&c=paF8I7sCkHbt2jHwRI1cpxUz2pX1F26SKl0XeugJEno=" class="img-fluid" alt="hero">
  <div class="container">
  <!-- Content here -->
    <h2>Section Heading</h2>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>
  <?= $this->endSection('pageContents') ?>