<ul class="navbar-nav bg-gradient-light sidebar sidebar-light accordion" id="accordionSidebar">
   
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <img src="/admin_template/img/QC.png" width="50" height="50" alt="Logo QC">
        </div>
        <div class="sidebar-brand-text mx-3">SILAB</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
        <i class="fas fa-fw fa-home"></i>
        <span>Home</span></a>
    </li>
    
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Hasil</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="{{ route('show-npp') }}">
                    Lab NPP
                </a>
                @foreach ($stations as $stations)
                    <a class="collapse-item" href="{{ route('stations-result', [strtolower($stations->name), $stations->id]) }}">
                        {{ $stations->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages2">
            <i class="fas fa-fw fa-eye"></i>
            <span>Monitoring</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="{{ route('show-chemical') }}">Chemical</a>
                <a class="collapse-item" href="{{ route('imbibitions.index') }}">Imbibisi</a>
                <a class="collapse-item" href="{{ route('taxations.index') }}">Taksasi</a>
                <a class="collapse-item" href="{{ route('eRonsel') }}">eRonsel</a>
                <a class="collapse-item" href="{{ route('mollase-publish') }}">Timbangan Tetes</a>
                <a class="collapse-item" href="{{ route('rs_in-publish') }}">Timbangan RS In</a>
                <a class="collapse-item" href="{{ route('rs_out-publish') }}">Timbangan RS Out</a>
            </div>
        </div>
    </li>

    @if(session('role') == 1 or session('role') == 2 or session('role') == 5)

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-edit"></i>
            <span>Input</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="{{ route('samples.index') }}">Sampel</a>
                <a class="collapse-item" href="{{ route('samplings.index') }}">Barcode</a>
                <a class="collapse-item" href="{{ route('balances.index') }}">Flow Nira Mentah</a>
                <a class="collapse-item" href="{{ route('npps.index') }}">NPP</a>
                <a class="collapse-item" href="{{ route('saccharomats.index') }}">Saccharomat</a>
                <a class="collapse-item" href="{{ route('coloromats.index') }}">Coloromat</a>
                <a class="collapse-item" href="{{ route('moistures.index') }}">Moisture</a>
                <a class="collapse-item" href="{{ route('baggases.index') }}">Ampas</a>
                <a class="collapse-item" href="{{ route('umums.index') }}">Umum</a>
                <a class="collapse-item" href="{{ route('boilers.index') }}">Ketel</a>
                <a class="collapse-item" href="{{ route('sulphurs.index') }}">SO2</a>
                <a class="collapse-item" href="{{ route('diameters.index') }}">BJB</a>
                <a class="collapse-item" href="{{ route('tsais.index') }}">TSAI</a>
                <a class="collapse-item" href="{{ route('hplcs.index') }}">HPLC</a>
                <a class="collapse-item" href="{{ route('calciums.index') }}">Kapur</a>
                <a class="collapse-item" href="{{ route('fibers.index') }}">Sabut</a>
                <a class="collapse-item" href="{{ route('preparations.index') }}">PI</a>
                <a class="collapse-item" href="{{ route('arounds.index') }}">Keliling Proses</a>
                <a class="collapse-item" href="{{ route('chemicals.index') }}">Bahan Kimia</a>
                <a class="collapse-item" href="{{ route('tanks.index') }}">Taksasi Tetes</a>
                <a class="collapse-item" href="{{ route('rs_ins.index') }}">Timbangan RS In</a>
                <a class="collapse-item" href="{{ route('rs_outs.index') }}">Timbangan RS Out</a>
                <a class="collapse-item" href="{{ route('mollases.index') }}">Timbangan Tetes</a>
                <a class="collapse-item" href="{{ route('core_eks.index') }}">Core EK</a>
                <a class="collapse-item" href="{{ route('core_ebs.index') }}">Core EB</a>
            </div>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-print"></i>
            <span>Report</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="{{ route('dailyReport') }}">Laporan</a>
                <a class="collapse-item" href="{{ route('coaReport') }}">COA</a>
            </div>
        </div>
    </li>

    @endif

    @if(session('role') == 1)
    
    <hr class="sidebar-divider">
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-database"></i>
            <span>Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="{{ route('users.index') }}">User</a>
                <a class="collapse-item" href="{{ route('roles.index') }}">Hak Akses</a>
                <a class="collapse-item" href="{{ route('stations.index') }}">Stasiun</a>
                <a class="collapse-item" href="{{ route('methods.index') }}">Method</a>
                <a class="collapse-item" href="{{ route('factors.index') }}">Factor</a>
                <a class="collapse-item" href="{{ route('registers.index') }}">KUD</a>
                <a class="collapse-item" href="{{ route('posts.index') }}">Pos Pantau</a>
                <a class="collapse-item" href="{{ route('programs.index') }}">Program</a>
            </div>
        </div>
    </li>
    
    @endif


    {{-- <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">--}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> 

</ul>
<!-- End of Sidebar -->