    <div class="container">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Villa The Rifqi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" aria-current="page"
                            href="{{ route('landing-page') }}">Beranda <span class="sr-only"></span></a>
                        <a class="nav-item nav-link active" aria-current="page"
                            href="{{ route('tentang-kami') }}">Tentang
                            Kami</a>
                        <a class="nav-item nav-link active" aria-current="page"
                            href="{{ route('galerivila') }}">Galeri</a>
                        <a class="nav-item nav-link active" aria-current="page" href="{{ route('kontak-kami') }}"
                            tabindex="-1" aria-disabled="true">Kontak Kami</a>
                        <a class="nav-item nav-link active" aria-current="page" href="{{ route('frontendjadwal') }}"
                            tabindex="-1" aria-disabled="true">Cek Ketersidaan </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
