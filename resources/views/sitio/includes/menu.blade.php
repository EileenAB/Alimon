<!-- <nav
    class="navbar navbar-expand-lg"
    style="background: linear-gradient(
            90deg,
            #ffdb8e 0%,
            #87c6e6 50.93%,
            #cc8aff 100%
        );"
    "
>
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="collapse navbar-collapse"
            id="navbarNav"
            style="
                align-items: center;
                justify-content: space-around;
                background-color: transparent;
            "
        >
            <ul
                class="navbar-nav"
                style="background-color: rgba(0, 0, 0, 0); border-radius: 20px"
            >
                <li class="nav-item  " style="font-size: 3rem">
                    <a
                        class="nav-link active "
                        aria-current="page"
                        href="{{ route('sitio.index') }}"
                        style="color: #a96921"
                        >Inicio</a
                    >
                </li>
                <li class="nav-item" style="font-size: 3rem">
                    <a
                        class="nav-link active"
                        aria-current="page"
                        style="color: #a96921"
                        href="{{ route('sitio.preguntas') }}"
                        >Preguntas</a
                    >
                </li>
                <li class="nav-item" style="font-size: 3rem">
                    <a
                        class="nav-link active"
                        aria-current="page"
                        style="color: #a96921"
                        href="{{ route('sitio.blog') }}"
                        >Blog</a
                    >
                </li>
                <li class="nav-item" style="font-size: 3rem">
                    <a
                        class="nav-link active"
                        aria-current="page"
                        style="color: #a96921"
                        href="#"
                        >Comunidad</a
                    >
                </li>
                <li class="nav-item" style="font-size: 3rem">
                    <a
                        class="nav-link active"
                        aria-current="page"
                        style="color: #a96921"
                        href="{{ route('sitio.nosotros') }}"
                        >Nosotros</a
                    >
                </li>
            </ul>
        </div>
    </div>
</nav> -->

<nav
    class="navbar navbar-expand-lg p-md-3 saul position-absolute col-12"
    style="
        background: rgba(0, 0, 0, 0.54);
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    "
>
    <div class="container-fluid">
        <a
            class="navbar-brand col-1"
            href="http://shadowcorporation.utcv-tievnd.com/"
        >
            <img
                src="{{ asset('assets/IMG/icono-shadow.png') }} "
                alt="Logo"
                class="img-fluid d-inline-block align-text-top icon-shadow icon-shadow-mob"
            />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav fs-5">
                <a
                    class="nav-link"
                    aria-current="page"
                    href="{{ route('sitio.index') }}"
                    style="font-size: 1.7rem; color: #a4cf49"
                    >Inicio</a
                >
                <a
                    class="nav-link"
                    href="{{ route('sitio.preguntas') }}"
                    style="font-size: 1.7rem; color: #a4cf49"
                    >Preguntas</a
                >
                <a
                    class="nav-link"
                    href="{{ route('sitio.blog') }}"
                    style="font-size: 1.7rem; color: #a4cf49"
                    >Blog</a
                >
                <a
                    class="nav-link"
                    href="{{ route('sitio.community') }}"
                    style="font-size: 1.7rem; color: #a4cf49"
                    >Comunidad</a
                >
            </div>
            <div class="col direction ml-auto d-flex justify-content-end">
                <a href="">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="40"
                        height="40"
                        viewBox="0 0 40 40"
                        class="m-2"
                        fill="none"
                    >
                        <path
                            d="M40.0001 20.1226C40.0001 9.00756 31.0451 -0.00244141 20.0001 -0.00244141C8.95012 5.85939e-05 -0.00488281 9.00756 -0.00488281 20.1251C-0.00488281 30.1676 7.31012 38.4926 16.8701 40.0026V25.9401H11.7951V20.1251H16.8751V15.6876C16.8751 10.6451 19.8626 7.86006 24.4301 7.86006C26.6201 7.86006 28.9076 8.25256 28.9076 8.25256V13.2026H26.3851C23.9026 13.2026 23.1276 14.7551 23.1276 16.3476V20.1226H28.6726L27.7876 25.9376H23.1251V40.0001C32.6851 38.4901 40.0001 30.1651 40.0001 20.1226Z"
                            fill="white"
                        />
                    </svg>
                </a>

                <a
                    href="https://www.instagram.com/alimon.nutricion?igsh=ZmNzcThheW93cnM5"
                    ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="40"
                        height="40"
                        viewBox="0 0 40 40"
                        class="m-2"
                        fill="none"
                    >
                        <g clip-path="url(#clip0_332_201)">
                            <path
                                d="M20 0C14.5725 0 13.89 0.025 11.7575 0.12C9.625 0.22 8.1725 0.555 6.9 1.05C5.56461 1.55081 4.35535 2.3385 3.3575 3.3575C2.3385 4.35535 1.55081 5.56461 1.05 6.9C0.555 8.17 0.2175 9.625 0.12 11.75C0.025 13.8875 0 14.5675 0 20.0025C0 25.4325 0.025 26.1125 0.12 28.245C0.22 30.375 0.555 31.8275 1.05 33.1C1.5625 34.415 2.245 35.53 3.3575 36.6425C4.4675 37.755 5.5825 38.44 6.8975 38.95C8.1725 39.445 9.6225 39.7825 11.7525 39.88C13.8875 39.975 14.5675 40 20 40C25.4325 40 26.11 39.975 28.245 39.88C30.3725 39.78 31.83 39.445 33.1025 38.95C34.437 38.4489 35.6454 37.6612 36.6425 36.6425C37.755 35.53 38.4375 34.415 38.95 33.1C39.4425 31.8275 39.78 30.375 39.88 28.245C39.975 26.1125 40 25.4325 40 20C40 14.5675 39.975 13.8875 39.88 11.7525C39.78 9.625 39.4425 8.17 38.95 6.9C38.4492 5.56461 37.6615 4.35535 36.6425 3.3575C35.6446 2.3385 34.4354 1.55081 33.1 1.05C31.825 0.555 30.37 0.2175 28.2425 0.12C26.1075 0.025 25.43 0 19.995 0H20ZM18.2075 3.605H20.0025C25.3425 3.605 25.975 3.6225 28.0825 3.72C30.0325 3.8075 31.0925 4.135 31.7975 4.4075C32.73 4.77 33.3975 5.205 34.0975 5.905C34.7975 6.605 35.23 7.27 35.5925 8.205C35.8675 8.9075 36.1925 9.9675 36.28 11.9175C36.3775 14.025 36.3975 14.6575 36.3975 19.995C36.3975 25.3325 36.3775 25.9675 36.28 28.075C36.1925 30.025 35.865 31.0825 35.5925 31.7875C35.2696 32.6548 34.7581 33.4395 34.095 34.085C33.395 34.785 32.73 35.2175 31.795 35.58C31.095 35.855 30.035 36.18 28.0825 36.27C25.975 36.365 25.3425 36.3875 20.0025 36.3875C14.6625 36.3875 14.0275 36.365 11.92 36.27C9.97 36.18 8.9125 35.855 8.2075 35.58C7.33958 35.2581 6.554 34.7475 5.9075 34.085C5.24318 33.439 4.73082 32.6534 4.4075 31.785C4.135 31.0825 3.8075 30.0225 3.72 28.0725C3.625 25.965 3.605 25.3325 3.605 19.99C3.605 14.6475 3.625 14.02 3.72 11.9125C3.81 9.9625 4.135 8.9025 4.41 8.1975C4.7725 7.265 5.2075 6.5975 5.9075 5.8975C6.6075 5.1975 7.2725 4.765 8.2075 4.4025C8.9125 4.1275 9.97 3.8025 11.92 3.7125C13.765 3.6275 14.48 3.6025 18.2075 3.6V3.605ZM30.6775 6.925C30.3623 6.925 30.0502 6.98708 29.7591 7.10769C29.4679 7.2283 29.2033 7.40508 28.9804 7.62794C28.7576 7.8508 28.5808 8.11538 28.4602 8.40656C28.3396 8.69774 28.2775 9.00983 28.2775 9.325C28.2775 9.64017 28.3396 9.95226 28.4602 10.2434C28.5808 10.5346 28.7576 10.7992 28.9804 11.0221C29.2033 11.2449 29.4679 11.4217 29.7591 11.5423C30.0502 11.6629 30.3623 11.725 30.6775 11.725C31.314 11.725 31.9245 11.4721 32.3746 11.0221C32.8246 10.572 33.0775 9.96152 33.0775 9.325C33.0775 8.68848 32.8246 8.07803 32.3746 7.62794C31.9245 7.17786 31.314 6.925 30.6775 6.925ZM20.0025 9.73C18.6402 9.70874 17.2872 9.95871 16.0224 10.4654C14.7577 10.972 13.6063 11.7252 12.6354 12.6811C11.6645 13.6369 10.8934 14.7764 10.3671 16.0331C9.8408 17.2899 9.56975 18.6388 9.56975 20.0012C9.56975 21.3637 9.8408 22.7126 10.3671 23.9693C10.8934 25.2261 11.6645 26.3656 12.6354 27.3214C13.6063 28.2773 14.7577 29.0305 16.0224 29.5371C17.2872 30.0438 18.6402 30.2938 20.0025 30.2725C22.6989 30.2304 25.2705 29.1298 27.1624 27.2081C29.0544 25.2865 30.1147 22.6979 30.1147 20.0012C30.1147 17.3046 29.0544 14.716 27.1624 12.7944C25.2705 10.8727 22.6989 9.77207 20.0025 9.73ZM20.0025 13.3325C20.8781 13.3325 21.7451 13.505 22.554 13.84C23.363 14.1751 24.098 14.6662 24.7171 15.2854C25.3363 15.9045 25.8274 16.6395 26.1625 17.4485C26.4975 18.2574 26.67 19.1244 26.67 20C26.67 20.8756 26.4975 21.7426 26.1625 22.5515C25.8274 23.3605 25.3363 24.0955 24.7171 24.7146C24.098 25.3338 23.363 25.8249 22.554 26.16C21.7451 26.495 20.8781 26.6675 20.0025 26.6675C18.2342 26.6675 16.5383 25.965 15.2879 24.7146C14.0375 23.4642 13.335 21.7683 13.335 20C13.335 18.2317 14.0375 16.5358 15.2879 15.2854C16.5383 14.035 18.2342 13.3325 20.0025 13.3325Z"
                                fill="white"
                            />
                        </g>
                        <defs>
                            <clipPath id="clip0_332_201">
                                <rect width="40" height="40" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>

        <!-- <i class="bi bi-facebook"></i> -->
    </div>
</nav>
