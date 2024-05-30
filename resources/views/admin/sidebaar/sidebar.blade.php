<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="{{ asset('public/admin/images/logo.png') }}" alt="">
                <img src="{{ asset('public/admin/images/favicon.svg') }}" alt="favicon" />
            </div>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="index.html">
                        <img src="{{ asset('public/admin/images/dashboard.svg') }}" alt="dashboard" />
                        <span class="link-name">Dashboard</span>
                    </a></li>
                <li><a href="students.html">
                        <img src="{{ asset('public/admin/images/student.svg') }}" alt="student" />
                        <span class="link-name">All Students</span>
                    </a></li>
                <li><a href="#">
                        <img src="{{ asset('public/admin/images/attendance.svg') }}" alt="attendance" />
                        <span class="link-name">Attendance</span>
                    </a></li>
                <li><a href="staff.html">
                        <img src="{{ asset('public/admin/images/staff.svg') }}" alt="staff" />
                        <span class="link-name">Staff</span>
                    </a></li>
                <li><a href="#">
                        <img src="{{ asset('public/admin/images/leads.svg') }}" alt="leads" />
                        <span class="link-name">Leads</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="#">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Help</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Settings</span>
                    </a></li>
                <li><a href="login.html">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
        <li class="nav-item">
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
    <i class="nav-icon fas fa-sign-out-alt"></i>
    {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</li>
    </nav>