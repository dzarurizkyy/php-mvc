<div class="container mt-5">
  <!-- Back -->
  <a href="<?= BASEURL ?>/student" class="badge text-bg-secondary text-decoration-none fs-6 py-2 px-3">
    Back ↩️ 
  </a>  
  <!-- Card -->
  <div class="card my-4" style="width: 16rem;">
    <!-- Image -->
    <img src="<?= BASEURL ?>/img/<?= $data["student"]["name"]?>.jpg" class="card-img-top" alt="..." />
    <!-- Description -->
    <div class="card-body">
      <!-- Name -->
      <h5 class="card-title fw-bold fs-5"><?= $data["student"]["name"] ?></h5>
      <!-- Table -->
      <div class="card-text mt-2">
        <table style="font-size: 13px;">
          <!-- NPM -->
          <tr>
            <td class="fw-semibold">NPM</td>
            <td>:&nbsp;</td>
            <td><?= $data["student"]["npm"]?></td>
          </tr>
          <!-- Major -->
          <tr>
            <td class="fw-semibold">Major</td>
            <td>:&nbsp;</td>
            <td><?= $data["student"]["npm"]?></td>
          </tr>
        </table>
      </div>
      <!-- Email -->
      <a href="mailto:<?= $data["student"]["email"]?>" class="btn btn-primary mt-4 fs-6 w-100">
        Contact Email
      </a>
    </div>
  </div>
</div>