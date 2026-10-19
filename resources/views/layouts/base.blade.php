<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWL - Base Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-box { background-color: #f8f9fa; border: 1px solid #dee2e6; padding: 15px; }
        .nav-box { background-color: #e9ecef; border: 1px solid #dee2e6; min-height: 400px; padding: 15px; }
        .content-box { background-color: #ffffff; border: 1px solid #dee2e6; min-height: 400px; padding: 20px; }
        .footer-box { background-color: #f8f9fa; border: 1px solid #dee2e6; padding: 15px; }
    </style>
</head>
<body>
    <div class="container-fluid mt-2">
        <div class="row text-center mb-2">
            <div class="col-md-6 header-box fw-bold">LEFT HEADER</div>
            <div class="col-md-6 header-box fw-bold">RIGHT HEADER</div>
        </div>

        <div class="row mb-2">
            <div class="col-md-3 nav-box">
                <h5 class="fw-bold mb-3">LEFT NAVIGATION</h5>
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item mb-1">
                        <a class="nav-link {{ Request::is('courses*') ? 'active' : '' }}" href="/courses">Courses</a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link {{ Request::is('students*') ? 'active' : '' }}" href="/students">Students</a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link {{ Request::is('grades*') ? 'active' : '' }}" href="/grades">Grades</a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link {{ Request::is('assignments*') ? 'active' : '' }}" href="/assignments">Assignments</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-6 content-box">
                @yield('content')
            </div>


            <div class="col-md-3 nav-box">
                <h5 class="fw-bold">RIGHT NAVIGATION</h5>
                <p class="text-muted">Informasi Tambahan / Widget</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12 footer-box fw-bold">FOOTER</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>