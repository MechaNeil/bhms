    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
<li class="nav-item dropdown"> 
    <button
      class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center"
      id="bd-theme"
      type="button"
      aria-expanded="false"
      data-bs-toggle="dropdown"
      data-bs-display="static"
    >

      <span class="theme-icon-active">
        <i class="my-1" ></i>
      </span>
      <span class="d-lg-none ms-2" id="bd-theme-text"></span>
    </button>
    <ul
      class="dropdown-menu dropdown-menu-end"
      aria-labelledby="bd-theme-text"
      style="--bs-dropdown-min-width: 8rem;"
    >
      <li>
        <button
          type="button"
          class="dropdown-item d-flex align-items-center active"
          data-bs-theme-value="light"
          aria-pressed="false"
        >
          <i class="bi bi-sun-fill me-2"></i>
          Light
          <i class="bi bi-check-lg ms-auto d-none"></i>
        </button>
      </li>
      <li>
        <button
          type="button"
          class="dropdown-item d-flex align-items-center"
          data-bs-theme-value="dark"
          aria-pressed="false"
        >
          <i class="bi bi-moon-fill me-2"></i>
          Dark
          <i class="bi bi-check-lg ms-auto d-none"></i>
        </button>
      </li>
      <li>
        <button
          type="button"
          class="dropdown-item d-flex align-items-center"
          data-bs-theme-value="auto"
          aria-pressed="true"
        >
          <i class="bi bi-circle-half me-2"></i>
          Auto
          <i class="bi bi-check-lg ms-auto d-none"></i>
        </button>
      </li>
    </ul>
  </li>
