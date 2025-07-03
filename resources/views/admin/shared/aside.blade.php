<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('user.index') }}">
                <i class="bi bi-person"></i>
                <span>Users</span>
            </a>
        </li><!-- End Users Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('applicant.index') }}">
                <i class="bi bi-person"></i>
                <span>Applicants</span>
            </a>
        </li><!-- End Applicants Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('cv_review.index') }}">
                <i class="bi bi-person"></i>
                <span>CV Reviews</span>
            </a>
        </li><!-- End CV Reviews Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('interview.index') }}">
                <i class="bi bi-person"></i>
                <span>Interview</span>
            </a>
        </li><!-- End Interview Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('profile.edit') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

    </ul>

</aside><!-- End Sidebar-->

<!-- ======= Custom CSS ======= -->
<style>
/* ======= Sidebar Custom Design ======= */
#sidebar {
    background: linear-gradient(135deg, #1e1e2f, #27293d);
    min-height: 100vh;
    padding-top: 20px;
    box-shadow: 2px 0 10px rgba(0, 0, 0, 0.4);
}

#sidebar-nav {
    list-style: none;
    padding: 0;
    margin: 0;
}

#sidebar .nav-item {
    margin-bottom: 10px;
}

#sidebar .nav-link {
    display: flex;
    align-items: center;
    padding: 12px 20px;
    font-size: 16px;
    color: #cfd8dc;
    transition: all 0.3s ease;
    border-radius: 8px;
    text-decoration: none;
}

#sidebar .nav-link:hover,
#sidebar .nav-link.active {
    background: #4e54c8;
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(78, 84, 200, 0.5);
}

#sidebar .nav-link i {
    font-size: 20px;
    margin-right: 12px;
}

#sidebar .nav-heading {
    font-size: 14px;
    color: #90a4ae;
    padding: 10px 20px;
    text-transform: uppercase;
    margin-top: 20px;
    margin-bottom: 10px;
    letter-spacing: 1px;
}

/* collapsed links */
#sidebar .nav-link.collapsed {
    background: transparent;
}

#sidebar .nav-link.collapsed:hover {
    background: #3d3d5c;
}

/* smooth transitions */
#sidebar .nav-link,
#sidebar .nav-heading {
    transition: background 0.3s, color 0.3s;
}
</style>
