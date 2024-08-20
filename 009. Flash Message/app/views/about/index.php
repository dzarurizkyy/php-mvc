<div class="container mt-4 px-3">
  <!-- Card -->
  <div class="card w-100">
    <div class="card-body d-flex align-items-center gap-3 p-4">
      <!-- Image -->
      <div>
        <img src="<?= BASEURL ?>/img/Admin.png" width="70" class="rounded-circle" />
      </div>
      <!-- Content -->
      <div>
        <!-- Title -->
        <div class="card-title fw-bold fs-5 lh-1">
          About Me
        </div>
        <!-- Description -->
        <div class="card-text">
          Hi, my name is <?= ucfirst($data["name"]) ?>. I'am <?= $data["age"] ?> years old.
        </div>
      </div>
    </div>
  </div>
</div>
