<nav class="navbar navbar-expand-lg navbar-light ">

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">

          <li class="nav-item">
            <a class="nav-link" href=<?= $this->Url->build(['controller'=>'users', 'action'=>'index']) ?>>Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=<?= $this->Url->build(['controller'=>'employees', 'action'=>'index']) ?>>Employees</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=<?= $this->Url->build(['controller'=>'permissions', 'action'=>'index']) ?>>Permissions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=<?= $this->Url->build(['controller'=>'reports', 'action'=>'index']) ?>>Reports</a>
          </li>
        </ul>
      </div>

    </nav>