<div class="container my-4 px-3">
  <!-- Alert -->
  <div>
    <?= Flasher::flash() ?>
  </div>
  <!-- Header -->
  <div class="card mt-4">
    <div class="card-header py-3">
      <!-- Top -->
      <div class="d-flex justify-content-between align-items-center">
        <!-- Title -->
        <div class="fw-bold fs-4 d-none d-xl-block text-uppercase">List of Students</div>
        <div class="fw-bold fs-6 d-xl-none d-sm-block text-uppercase">List of Students</div>
        <!-- Add Data -->
        <div>
          <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#addData">
            Add Student
          </button>
        </div>
      </div>
      <hr />
      <!-- Bottom -->
      <form action="<?= BASEURL ?>/student/search" method="post">
        <!-- Search -->
        <div class="input-group mt-3">
          <input type="text" class="form-control" placeholder="Search student..." name="search" />
          <button class="btn btn-primary fw-semibold" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Body -->
  <div class="mt-4">
    <!-- List -->
    <ul class="list-group">
      <?php foreach($data["students"] as $student) : ?>
        <!-- Item -->
        <li class="list-group-item d-flex justify-content-between align-items-center px-4 py-3">
          <!-- Name -->
          <div><?= $student["name"] ?></div>
          <!-- Action -->
          <div>
            <!-- Detail -->
            <a href="<?= BASEURL ?>/student/detail/<?= $student["id"] ?>" class="badge rounded-pill text-bg-secondary text-decoration-none py-2 px-3 me-1">
              Detail
            </a>
            <!-- Delete -->
            <a href="<?= BASEURL ?>/student/delete/<?= $student["id"]?>" class="badge rounded-pill text-bg-danger text-decoration-none py-2 px-3">
              Delete
            </a>
           </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>

<!-- Modal -->
<div class="modal fade px-2" id="addData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Body -->
      <form action="<?= BASEURL ?>/student/add" method="post">
        <!-- Form -->
        <div class="modal-body">
          <!-- Name -->
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control mt-1" id="name" name="name" />
          </div>
          <!-- NPM -->
          <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="number" class="form-control mt-1" id="npm" name="npm" />
          </div>
          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control mt-1" id="email" name="email" />
          </div>
          <!-- Major -->
          <div class="mb-3">
            <label for="major" class="form-label">Major</label>
            <select class="form-select mt-1" name="major">
              <option value="Computer Science">Computer Science</option>
              <option value="Food Technology">Food Technology</option>
              <option value="Civil Engineering">Civil Engineering</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>
              <option value="Chemical Engineering">Chemical Engineering</option>
              <option value="Industrial Engineering">Industrial Engineering</option>
            </select>
          </div>
        </div>
        <!-- Button -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Data</button>
        </div>
      </form>
    </div>
  </div>
</div>