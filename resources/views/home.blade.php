@extends('layout.template')
@section('judul', 'Dashboard')
@section('content')
    <div class="section-body">
        <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a type="button" href="/data">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Inventaris</h5>
                                            <h2 class="mb-3 font-18"></h2>
                                            <p class="mb-0"><span class="col-green">10%</span> Increase</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('theme') }}/assets/img/banner/1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <a type="button" href="/jenis">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15"> Jenis & Merk</h5>
                                            <h2 class="mb-3 font-18"></h2>
                                            <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('theme') }}/assets/img/banner/2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a data-toggle="modal" data-target="#password" href="javascript:void(0)">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Change Password</h5>
                                            <h2 class="mb-3 font-18"></h2>
                                            <p class="mb-0"><span class="col-green">18%</span>
                                                Increase</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('theme') }}/assets/img/banner/3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form id="logout" action="/logout" method="post">
                    @csrf
                    <a href="javascript:;" onclick="document.getElementById('logout').submit();">
                        <div class="card">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15">Logout</h5>
                                                <h2 class="mb-3 font-18"></h2>
                                                <p class="mb-0"><span class="col-green">42%</span> Increase
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="{{ asset('theme') }}/assets/img/banner/4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </form>

            </div>
        </div>

        {{-- <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Explanation</h4>
            </div>
            <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <div class="list-group" id="list-tab" role="tablist">
                          <a class="list-group-item list-group-item-action active" id="list-home-list"
                            data-toggle="list" href="#list-home" role="tab">Home</a>
                          <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                            href="#list-profile" role="tab">Profile</a>
                          <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                            href="#list-messages" role="tab">Messages</a>
                          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                            href="#list-settings" role="tab">Settings</a>
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                            aria-labelledby="list-home-list">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.
                          </div>
                          <div class="tab-pane fade" id="list-profile" role="tabpanel"
                            aria-labelledby="list-profile-list">
                            Deserunt cupidatat anim ullamco ut dolor anim sint nulla amet incididunt tempor ad ut
                            pariatur officia culpa laboris occaecat. Dolor in nisi aliquip in non magna amet nisi sed
                            commodo proident anim deserunt nulla veniam occaecat reprehenderit esse ut eu culpa fugiat
                            nostrud pariatur adipisicing incididunt consequat nisi non amet.
                          </div>
                          <div class="tab-pane fade" id="list-messages" role="tabpanel"
                            aria-labelledby="list-messages-list">
                            In quis non esse eiusmod sunt fugiat magna pariatur officia anim ex officia nostrud amet
                            nisi pariatur eu est id ut exercitation ex ad reprehenderit dolore nostrud sit ut culpa
                            consequat magna ad labore proident ad qui et tempor exercitation in aute veniam et velit
                            dolore irure qui ex magna ex culpa enim anim ea mollit consequat ullamco exercitation in.
                          </div>
                          <div class="tab-pane fade" id="list-settings" role="tabpanel"
                            aria-labelledby="list-settings-list">
                            Lorem ipsum culpa in ad velit dolore anim labore incididunt do aliqua sit veniam commodo
                            elit dolore do labore occaecat laborum sed quis proident fugiat sunt pariatur. Cupidatat ut
                            fugiat anim ut dolore excepteur ut voluptate dolore excepteur mollit commodo.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        </div>
    </div>
</div> --}}

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Explanation</h4>
                    </div>
                    <div class="card-body">
                        <div id="accordion">
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-1" aria-expanded="true">
                                    <h4>Accounts Section</h4>
                                </div>
                                <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                                    <p class="mb-0">Section Akun terdapat pada kanan atas yang memiliki fitur
                                        seperti ganti password dan logout.
                                        Diperlukan aksi login untuk dapat mengakses laman ini. Jika lupa passwod, password
                                        bisa ditanyakan kepada yang bersangkutan
                                        supaya dapat diperlihatkan passwordnya atau jika diperlukan harus direset ulang
                                        datanya.</p>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-2">
                                    <h4>Inventaris Section</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                                    <p class="mb-0">Inventaris section terdapat pada bar pilihan di samping yang
                                        berfungsi untuk melihat dan menambahkan data inventaris.
                                        Selain menambahkan data inventaris, section tersebut memiliki fungsi untuk mencetak
                                        stiker yang digunakan untuk ditempelkan pada
                                        barang aset inventaris. Data pada table inventaris juga dapat di-export untuk
                                        memudahkan jika diperlukan salinan datanya.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-3">
                                    <h4>Data & Merk Section</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Documentation</h4>
                    </div>
                    <div class="card-body">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/theme/assets/img/img07.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/theme/assets/img/img08.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/theme/assets/img/img09.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/theme/assets/img/img10.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/theme/assets/img/img11.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/theme/assets/img/img12.png" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Indonesian Map</h4>
                </div>
                <div class="card-body">
                    <div id="visitorMap3"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
