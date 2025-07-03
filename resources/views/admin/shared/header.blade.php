<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center" style="background-color: #1e2a3a;">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block" style="color: #fff; font-size: 22px; font-weight: bold;">Team sw2</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn" style="color: #fff;"></i>
    </div><!-- End Logo -->

    <div class="search-bar" style="background-color: #273a56;">
      <form class="search-form d-flex align-items-center" method="POST" action="#" style="width: 100%;">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword" style="border: none; padding: 5px 15px; border-radius: 5px; width: 85%; background-color: #fff;">
        <button type="submit" title="Search" style="background-color: #3498db; border: none; padding: 5px 15px; border-radius: 5px; color: #fff;">
          <i class="bi bi-search"></i>
        </button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle" href="#" style="color: #fff;">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon -->
{{--
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" style="color: #fff;">
            <i class="bi bi-bell"></i>
            <span class="badge bg-danger badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" style="background-color: #2d3a55;">
            <li class="dropdown-header" style="color: #fff;">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li><hr class="dropdown-divider" style="border-top: 1px solid #444;"></li>


            <li><hr class="dropdown-divider" style="border-top: 1px solid #444;"></li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4 style="color: #fff;">Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p style="color: #aaa;">1 hr. ago</p>
              </div>
            </li>

            <li><hr class="dropdown-divider" style="border-top: 1px solid #444;"></li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4 style="color: #fff;">Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p style="color: #aaa;">2 hrs. ago</p>
              </div>
            </li>

            <li><hr class="dropdown-divider" style="border-top: 1px solid #444;"></li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4 style="color: #fff;">Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p style="color: #aaa;">4 hrs. ago</p>
              </div>
            </li>

            <li><hr class="dropdown-divider" style="border-top: 1px solid #444;"></li>
            <li class="dropdown-footer">
              <a href="#" style="color: #3498db;">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav --> --}}
{{--
        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" style="color: #fff;">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages" style="background-color: #2d3a55;">
            <li class="dropdown-header" style="color: #fff;">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li><hr class="dropdown-divider" style="border-top: 1px solid #444;"></li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4 style="color: #fff;">Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p style="color: #aaa;">4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li><hr class="dropdown-divider" style="border-top: 1px solid #444;"></li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4 style="color: #fff;">Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p style="color: #aaa;">6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li><hr class="dropdown-divider" style="border-top: 1px solid #444;"></li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4 style="color: #fff;">David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p style="color: #aaa;">8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li><hr class="dropdown-divider" style="border-top: 1px solid #444;"></li>

            <li class="dropdown-footer">
              <a href="#" style="color: #3498db;">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav --> --}}

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" style="color: #fff;">
            {{-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
            <span class="d-none d-md-block dropdown-toggle ps-2" style="color: #fff;">{{Auth::user()->name}}</span>
          </a><!-- End Profile Image Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="background-color: #2d3a55;">
            <li class="dropdown-header" style="color: #fff;">
              <h6>{{Auth::user()->name}}</h6>
              <span>{{Auth::user()->email}}</span>
            </li>
            <li><hr class="dropdown-divider" style="border-top: 1px solid #444;"></li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('profile.edit')}}" style="color: #fff;">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li><hr class="dropdown-divider" style="border-top: 1px solid #444;"></li>

            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" style="color: #fff;">
                  {{ __('Log Out') }}
                </x-responsive-nav-link>
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
