<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <img alt="Logo" src="/html/demo1/dist/assets/media/logos/logo.png" class="h-40px logo" />
        <div class="text-center mt-2">
            <p class="text-muted" style="font-size: 18px; margin-bottom: 8px;">SANGGITA</p>
            <p class="text-muted" style="font-size: 8px; margin-top: -8px;">Sistem Realisasai Anggaran
                Kegiatan</p>
        </div>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <rect width="16" height="2" rx="1" transform="matrix(-1 0 0 1 16 0)"
                        fill="currentColor" />
                    <rect width="16" height="2" rx="1" transform="matrix(-1 0 0 1 16 6)"
                        fill="currentColor" />
                    <rect width="16" height="2" rx="1" transform="matrix(-1 0 0 1 16 12)"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Brand-->

    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
            data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item here show menu-accordion">
                    <span class="menu-link" href="{{ route('dashboard') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Dashboards</span>
                    </span>
                </div>
                {{-- Layanan Rektor --}}
                <div data-kt-menu-trigger="click" class="menu-item">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Layanan RKAT Rektor</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('rektor-pengajuan') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Pengajuan</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('rektor-persetujuan') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Persetujuan</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('rektor-realisasi') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Realisasi</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('rektor-pelaporan') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Pelaporan</span>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Layanan Fakultas --}}
                <div data-kt-menu-trigger="click" class="menu-item">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2"
                                        fill="currentColor" />
                                    <path
                                        d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Layanan RKAT Fakultas</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('fakultas-pengajuan') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Pengajuan</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('fakultas-persetujuan') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Persetujuan</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('fakultas-realisasi') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Realisasi</span>
                            </a>
                        </div>
                        {{-- <div class="menu-item">
                            <a class="menu-link" href="{{ route('fakultas-pelaporan') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Pelaporan</span>
                            </a>
                        </div> --}}
                        {{-- tst --}}
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Pelaporan</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('fakultas-pelaporan') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Pelaporan Anggaran</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('fakultas-pelaporan-kegiatan') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Pelaporan Kegiatan</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
</div>
