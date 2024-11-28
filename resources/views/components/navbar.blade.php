<nav class="navbar navbar-expand-lg">
    <div class="container-fluid d-flex p-0">
        <a class="navbar-logo" href="/master/dashboard">San1</a>
        <p class="navbar-secondary-text">Human Resource System</p>
        <button class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarNav" type="button"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-grow-1 align-items-center">
                @php
                    $path = request()->path();
                @endphp
                <li class="nav-item" style="display: none">
                    <a class="nav-link {{ $path == 'master/dashboard' ? 'active' : '' }}" href="/master/dashboard" aria-current="page">Dashboard</a>
                </li>
                <li class="nav-item" style="display: none">
                    <a class="nav-link {{ $path == 'master/employees' ? 'active' : '' }}" href="/master/employees">Employees</a>
                </li>
                <li class="nav-item" style="display: none">
                    <a class="nav-link {{ $path == 'master/positions' ? 'active' : '' }}" href="/master/positions">Positions</a>
                </li>
                <li class="nav-item" style="display: none">
                    <a class="nav-link {{ $path == 'master/leaves' ? 'active' : '' }}" href="/master/leaves">Leaves</a>
                </li>
                <li class="nav-item" style="display: none">
                    <a class="nav-link {{ $path == 'master/dtr' ? 'active' : '' }}" href="/master/dtr">Daily Time Record</a>
                </li>
                <li class="nav-item" style="display: none">
                    <a class="nav-link {{ $path == 'master/payroll' ? 'active' : '' }}" href="/master/payroll">Payroll</a>
                </li>
                <li class="nav-item" style="display: none">
                    <a class="nav-link {{ $path == 'master/logs' ? 'active' : '' }}" href="/master/logs">Logs</a>
                </li>
            </ul>

            <div class="p-4">
                <div class="navbar-end d-flex align-items-center justify-content-center">
                    <div class="navbar-end-links me-2">
                        <a class="navbar-link-end px-2" href="/master/notifications"><i class="fas fa-bell"></i></a>
                        <a class="navbar-link-end px-2" href="/master/messages"><i class="fas fa-envelope"></i></a>
                    </div>
                    <div class="dropstart">
                        <a class="" data-bs-toggle="dropdown" type="button" aria-expanded="false">
                            <img src="{{ asset('images/pfp/default.png') }}" alt="" style="padding:1px;border-radius:100%;border:2px #6A4CA8 solid;"
                                width="40px" height="40px">
                        </a>
                        <ul class="dropdown-menu p-2">
                            <li>
                                <h5 class="dropdown-header fs-6 px-4">
                                    Sample Name
                                </h5>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item fs-6 py-2 px-4" href="/master/profile"><i
                                        class="fa-solid fa-user me-2"></i>Profile</a>
                            </li>
                            <li><a class="dropdown-item fs-6 py-2 px-4" href="/master/notifications"><i
                                        class="fas fa-bell me-2"></i>Notifications</a>
                            </li>
                            <li><a class="dropdown-item fs-6 py-2 px-4" href="/master/messages"><i
                                        class="fas fa-envelope me-2"></i>Messages</a>
                            </li>
                            <li><a class="dropdown-item fs-6 py-2 px-4" href="/logout"><i
                                        class="fas fa-sign-out-alt me-2"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
