<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Toko Media Palstik">

    <title>@yield("title")</title>

    <!--  Link  -->
    @stack('before-style')
        @include("includes.backEnd.link")
    @stack('after-style')
    <!-- End Link  -->

</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>
{{-- <div id="toaster"></div> --}}

<!-- Wrapper -->
<div class="wrapper">

    <!-- == LEFT SIDEBAR WITH OUT FOOTER == -->
    <aside class="left-sidebar bg-sidebar">
        @include("includes.backEnd.sidebar")
    </aside>

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Header -->
        <header class="main-header " id="header">
            @include("includes.backEnd.header")
        </header>
        <!-- End Header -->

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
                @yield("content")
            <!-- End Content -->
        </div>
        <!-- End Content Wrapper -->

        <!-- Footer -->
        @include("includes.backEnd.footer")
        <!-- End Footer -->

    </div>
    <!-- End Page Wrapper -->
</div>
<!-- End Wrapper -->


<!-- <script type="module">
    import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

    const el = document.createElement('pwa-update');
    document.body.appendChild(el);
</script> -->

<!-- Javascript -->
@stack('before-script')
    @include("includes.backEnd.script")
@stack('after-script')
<!-- End Javascript -->

</body>
</html>

