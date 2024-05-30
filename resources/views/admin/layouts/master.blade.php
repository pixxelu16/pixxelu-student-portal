@include('admin.layouts.header')
<body>

<section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <!-- <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div> -->

            
            <div class="dropdown-admin-panel">

                <div class="notifications-bar">
                    <div class="notifications-img">
                        <img src="{{ asset('public/admin/images/notification.svg') }}" alt="notification" />
                        <span class="dynmic-gtt">1</span>
                    </div>
                    <div class="dyanmic-content">
                        <h4>Notifications</h4>
                    </div>
                </div>

                <div class="img-admin-panel">
                    <img src="{{ asset('public/admin/images/profile.jpg') }}" alt="">
                </div>
                <div class="dropdown-content-panel">
                    <div class="dropdown">
                        <button class="dropbtn">Pixxelu<br>Admin</button>
                        <div class="dropdown-content">
                            <a href="#">Profile</a>
                            <a href="#">Settings</a>
                            <a href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-remove">
        </div>

        <div class="title-subheading">
            <h2>Dashboard</h2>
        </div>

        <div class="main-table">


        </div>
        @include('admin.sidebaar.sidebar')
      @yield('content')
<div class="footer-code">
            <div class="copyright-code">
                <span>© 2014-2024 Pixxelu. All rights reserved</span>
            </div>
			</div>

    </section>
    <script>
        var base_url = '{{ url("/") }}'; 
        </script>

    <script src="{{URL::asset('public/admin/js/script.js') }}"></script>


    <script>
        // Get all the <li> elements
        const navLinks = document.querySelectorAll('.nav-links li');

        // Add click event listener to each <li>
        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                // Remove 'active' class from all <li>
                navLinks.forEach(nav => nav.classList.remove('active'));

                // Add 'active' class to the clicked <li>
                this.classList.add('active');
            });
        });
    </script>





</body>

</html>

