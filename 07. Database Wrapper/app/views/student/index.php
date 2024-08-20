<div class="container my-5">
  <!-- Title -->
  <h4>
    <div class="badge text-bg-secondary py-2">List of Students</div>
  </h3>
  <!-- Content -->
  <div class="mt-4">
    <!-- List -->
    <ul class="list-group">
      <?php foreach($data["students"] as $student) : ?>
        <!-- Card -->
        <li class="list-group-item d-flex justify-content-between align-items-center py-3">
          <!-- Name -->
          <?= $student["name"] ?>
          <!-- Detail -->
          <a href="<?= BASEURL ?>/student/detail/<?= $student["id"] ?>" class="badge rounded-pill text-bg-primary text-decoration-none px-3">
            Detail
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</ul>
</div>