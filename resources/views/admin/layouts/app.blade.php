<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.shared.head')
    <style>
        /* تخصيص تنسيق الرسالة */
        .alert {
            position: fixed;
            top: 10px;  /* أعلى الصفحة */
            left: 50%;
            transform: translateX(-50%); /* محاذاة الرسالة في منتصف الصفحة */
            z-index: 9999; /* ضمان ظهور الرسالة فوق باقي العناصر */
            width: 90%;
            max-width: 500px;  /* عرض الرسالة لا يتجاوز 500px */
        }
    </style>
</head>

<body>
    {{-- رسالة الخطأ الفلاشية هنا قبل الـ header --}}
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @include('admin.shared.header')
    @include('admin.shared.aside')

    <main id="main" class="main">
        @yield('content')
    </main>

    @include('admin.shared.script')
</body>

</html>
