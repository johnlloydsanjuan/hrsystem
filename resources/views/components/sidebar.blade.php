<aside id="sidebar">
    <ul class="sidebar-nav">
        @php
            $path = request()->path();
        @endphp
        <li class="sidebar-item">
            <a class="sidebar-link {{ $path == 'master/dashboard' ? 'active' : '' }}" href="/master/dashboard">
                <i class="fa-solid fa-table-columns"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ $path == 'master/employees' ? 'active' : '' }}" href="/master/employees">
                <i class="fa-solid fa-users"></i>
                <span>Employees</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ $path == 'master/positions' ? 'active' : '' }}" href="/master/positions">
                <i class="fa-solid fa-person-military-to-person"></i>
                <span>Positions</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ $path == 'master/leaves' ? 'active' : '' }}" href="/master/leaves">
                <i class="fa-solid fa-person-walking-arrow-right"></i>
                <span>Leaves</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ $path == 'master/dtr' ? 'active' : '' }}" href="/master/dtr">
                <i class="fa-solid fa-clock"></i>
                <span>Daily Time Record</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ $path == 'master/payroll' ? 'active' : '' }}" href="/master/payroll">
                <i class="fa-solid fa-money-bills"></i>
                <span>Payroll</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ $path == 'master/logs' ? 'active' : '' }}" href="/master/logs">
                <i class="fa-solid fa-right-to-bracket"></i>
                <span>Logs</span>
            </a>
        </li>
    </ul>
</aside>
