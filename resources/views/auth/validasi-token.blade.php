<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../../../">
    <title>New Password</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="/html/demo1/dist/assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="/html/demo1/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/html/demo1/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-dark">
    <div class="d-flex flex-column flex-root">
        {{-- New Password --}}
        <div
            class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                {{-- Logo --}}
                <img alt="Logo" src="/html/demo1/dist/assets/media/logos/logo.png" class="h-100px logo" />
                <div class="text-center mt-2">
                    <p class="text-muted" style="font-size: 25px; margin-bottom: 8px;">SANGGITA</p>
                </div>
                {{-- Content --}}
                <div class="w-lg-550px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    {{-- Form --}}
                    <form class="form w-100" method="post" action="{{ route('validasi-forgot-password-act') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        {{-- Heading --}}
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Setup New Password</h1>
                            <div class="text-gray-400 fw-bold fs-4">Already have reset your password ?
                                <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a>
                            </div>
                        </div>
                        {{-- Body --}}
                        <div class="mb-10 fv-row" data-kt-password-meter="true">
                            <div class="mb-1">
                                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                <div class="position-relative mb-3">
                                    <input class="form-control" type="password" placeholder="New Password"
                                        name="password" />
                                    <span
                                        class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                </div>
                                {{-- Meter --}}
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                            </div>
                            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp;
                                symbols.
                            </div>
                        </div>
                        @error('password')
                            <small>{{ $message }}</small>
                        @enderror
                        <div class="fv-row mb-10">
                            <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                            <div class="position-relative mb-3">
                                <input class="form-control" type="password" placeholder="Confirm Password"
                                    name="confirm-password" />
                                <span
                                    class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                    data-kt-password-meter-control="visibility">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                            </div>
                        </div>
                        {{-- Action --}}
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block fw-bolder me-4">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var hostUrl = "assets/";
    </script>

    <script src="/html/demo1/dist/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/html/demo1/dist/assets/js/scripts.bundle.js"></script>
    <script src="/html/demo1/dist/assets/js/custom/authentication/password-reset/new-password.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = Session::get('success'))
        <script>
            Swal.fire('{{ $message }}');
        </script>
    @endif

    @if ($message = Session::get('failed'))
        <script>
            Swal.fire('{{ $message }}');
        </script>
    @endif
</body>

</html>
