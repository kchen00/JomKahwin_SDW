@extends("homepage.main")
@section("homepage.homepage")

<div>
    <div class="header">
        <h1 class="header-title align-self-center display-1 fw-bold">
            Selamat datang ke sistem JomKahwin!
        </h1>
        <div class="align-self-end">
            <nav aria-label="breadcrumb">
                <div class="p-4 breadcrumb-item active">
                    {{ now() }}
                </div>
            </nav>
        </div>
    </div>
    <div class="navbar w-full bg-white p-4 rounded">
        <a href="/" class="nav-item nav-link">Laman Utama</a>
        <a href="/register" class="nav-item nav-link">Daftar Akaun</a>
        <a href="/login" class="nav-item nav-link">Log Masuk</a>
    </div>
</div>

@stop