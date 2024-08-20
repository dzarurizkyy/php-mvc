<div class="container mt-5 px-4">
  <!-- Back -->
  <a href="<?= BASEURL ?>/student" class="badge text-bg-secondary text-decoration-none fs-6 py-2 px-3">
    Back 
  </a>  
  <!-- Card -->
  <div class="card mt-4 w-100 p-lg-0 p-2">
    <div class="card-body d-flex flex-lg-row flex-column align-items-center">
      <!-- Image -->
      <div>
        <img src="<?= BASEURL ?>/img/Student.png" width="100"/>
      </div>
      <!-- Description -->
      <div class="ps-lg-3 ps-0 px-lg-0 px-2 mt-lg-0 mt-4">
        <h5 class="card-title fw-bold">About Me</h5>
        <small class="card-text d-block" style="text-align: justify; line-height: 24px;">
          Hi, my name is <?= $data["student"]["name"] ?>. I'm new student from major <?= strtolower($data["student"]["major"])?> with NPM <?= $data["student"]["npm"]?>. You can contact me by this  <a href="mailto:<?= $data['student']['email'] ?>">email</a> 😊.
        </small>
      </div>
    </div>
  </div>
</div>