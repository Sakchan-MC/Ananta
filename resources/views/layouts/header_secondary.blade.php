<nav id="navbar" class="navbar navbar-expand-lg navbar-dark green fixed-top ">
    <div class="container">
        <a class="navbar-brand selector header-font " href="/"><img class="selector brand-img img-circle elevation-1"
                src="{{ asset('img/ananta.png') }}" />&nbspAnanta</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end text-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link selector header-font" href="/#home">หน้าแรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link selector header-font" href="/#herbs">สรรพคุณของสมุนไพร</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link selector header-font" href="/#contact">ติดต่อ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link selector header-font" href="/#creator">ผู้จัดทำ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link selector header-font {{ (request()->is('herb')) ? 'active' : '' }}"
                        href="/herbs">สมุนไพร</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link selector  header-font {{ (request()->is('login')) ? 'login-font' : '' }}"
                        href="/login">ลงชื่อเข้าใช้</a>
                </li>
            </ul>
        </div>
    </div>
</nav>