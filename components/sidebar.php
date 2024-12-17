<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PERPUSTAKAAN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="?page=dashboard">
            <span>DASHBOARD</span></a>
    </li>

    <!-- KALO EROR TINGGAL HAPUS AJA -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Nav Item - CATEGORY Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseONE"
                aria-expanded="true" aria-controls="collapseONE">
                <span>CATEGORY</span>
            </a>
            <div id="collapseONE"
                class="collapse <?php if (isset($_REQUEST['page']) && ($_REQUEST['page'] == 'input_data' || $_REQUEST['page'] == 'table_data')) { echo 'show'; } ?>"
                aria-labelledby="headingONE" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="?page=input_data">Input</a>
                    <a class="collapse-item" href="?page=table_data">Data</a>
                </div>
            </div>
        </li>
        <!-- Nav Item - PENERBIT Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTWO">
                <span>PENERBIT</span>
            </a>
            <div id="collapseTwo"
                class="collapse <?php if (isset($_REQUEST['page']) && ($_REQUEST['page'] == 'form_penerbit' || $_REQUEST['page'] == 'table_penerbit')) { echo 'show'; } ?>"
                aria-labelledby="headingTWO" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item " href="?page=form_penerbit">Input</a>
                    <a class="collapse-item " href="?page=table_penerbit">Data</a>
                </div>
            </div>
        </li>
        <!-- Nav Item - BUKU Collapse Menu -->
        <li class="nav-item ">
            <a class="nav-link collapsed" href=" #" data-toggle="collapse" data-target="#collapseTHREE"
                aria-expanded="true" aria-controls="collapseTHREE">
                <span>BUKU</span>
            </a>
            <div id="collapseTHREE"
                class="collapse <?php if (isset($_REQUEST['page']) && ($_REQUEST['page'] == 'form_buku' || $_REQUEST['page'] == 'table_buku')) { echo 'show'; } ?>"
                aria-labelledby="headingTHREE" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item " href="?page=form_buku">Input</a>
                    <a class="collapse-item " href="?page=table_buku">Data</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="?page=anggota">
                <span>ANGGOTA</span></a>
        </li>
        <!-- Nav Item - TRANSAKSI Collapse Menu -->
        <li class="nav-item ">
            <a class="nav-link collapsed" href=" #" data-toggle="collapse" data-target="#collapseFOUR"
                aria-expanded="true" aria-controls="collapseFOUR">
                <span>TRANSAKSI</span>
            </a>
            <div id="collapseFOUR"
                class="collapse <?php if (isset($_REQUEST['page']) && ($_REQUEST['page'] == 'form_pinjam' || $_REQUEST['page'] == 'form_pengembalian')) { echo 'show'; } ?>"
                aria-labelledby="headingFOUR" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item " href="?page=form_pinjam">Pinjam</a>
                    <a class="collapse-item " href="?page=form_pengembalian">Pengembalian</a>
                </div>
            </div>
        </li>
    </ul>



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>