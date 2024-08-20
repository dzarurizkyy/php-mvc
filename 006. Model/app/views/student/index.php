<div class="container mt-5">
  <!-- Title -->
  <h4>
    <div class="badge text-bg-secondary">List of Students</div>
  </h3>
  <!-- Content -->
  <div class="my-4 d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start gap-4">
    <?php foreach($data["students"] as $student) : ?>
      <!-- Card -->
      <div class="card" style="width: 16rem;">
        <!-- Image -->
        <img src="<?= BASEURL ?>/img/<?= $student["name"]?>.jpg" class="card-img-top" alt="...">
        <!-- Description -->
        <div class="card-body">
          <!-- Name -->
          <h5 class="card-title fw-bold fs-5"><?= $student["name"] ?></h5>
          <!-- Table -->
          <div class="card-text mt-2">
            <table style="font-size: 13px;">
              <!-- NPM -->
              <tr>
                <td class="fw-semibold">NPM</td>
                <td>:&nbsp;</td>
                <td><?= $student["npm"]?></td>
              </tr>
              <!-- Major -->
              <tr>
                <td class="fw-semibold">Major</td>
                <td>:&nbsp;</td>
                <td><?= $student["npm"]?></td>
              </tr>
              <!-- Email -->
              <tr>
                <td class="fw-semibold">Email</td>
                <td>:&nbsp;</td>
                <td><?= $student["email"]?></td>
              </tr>
            </table>
          </div>
          <!-- Button -->
          <a href="#" class="btn btn-primary mt-4 fs-6 w-100">Detail</a>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>