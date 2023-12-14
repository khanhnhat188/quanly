<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarCenteredExample"
    >
      <!-- Left links -->
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?action=department&query=list">Department</a>
          <ul>
            <li><a href="index.php?action=department&query=add">Add Department</a></li>
            <li><a href="index.php?action=department&query=list">List Department</a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php?action=department&query=addnew">Employee</a>
            <ul>
                <li><a href="index.php?action=employee&query=add">Add Employee</a></li>
                <li><a href="index.php?action=employee&query=list">List Employee</a></li>
        </li>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>