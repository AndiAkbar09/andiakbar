@extends('layouts.app')

@section('content')
<div class="row row-cols-1 row-cols-md-2">
    <div class="col mb-4">
        <div class="card" style="margin-top: -25px;">
            <div class="card-body-0">
                <img src="{{asset('img/covid.jpg')}}" class="card-img-top " width="50"height="300" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-md-10 pt-4">
                <div class="card-0">
                    <div class="card-body shadow">
                        <h4 class="text-muted px-3">Paling banyak dicari</h4>
                        <div class="row">
                            <div class="col mb-1">
                                <div class="card border-secondary mb-3">
                                    <img src="{{asset('img/chiki.jpg')}}" class="card-img-top" width="40" height="60" alt="">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5 class="font-weight-bold text-secondary">Makanan</h5>
                                        <h5 class="text-muted">Ringan</h5>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-1">
                                <div class="card border-secondary mb-3">
                                    <img src="{{asset('img/plat.jpg')}}" class="card-img-top" width="50" height="40" alt="">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5 class="font-weight-bold text-secondary">Flat Shoes</h5>
                                        <h5 class="text-muted">Wanita</h5>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-1">
                                <div class="card border-secondary mb-3">
                                    <img src="{{asset('img/tas.jpg')}}" class="card-img-top" width="50" height="40" alt="">
                                <div class="card-body">
                                <div class="text-center">
                                        <h5 class="font-weight-bold text-secondary">Tas Selempang</h5>
                                        <h5 class="text-muted">Pria</h5>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-1">
                                <div class="card border-secondary mb-3">
                                    <img src="{{asset('img/pubb.jpg')}}" class="card-img-top" width="50" height="90" alt="">
                                <div class="card-body">
                                <div class="text-center">
                                        <h5 class="font-weight-bold text-secondary">Figure</h5>
                                    </div>
                                    </div>
                                </div>
                            </div>
                                <div class="card border-secondary mb-4">
                                    <div class="card-body">
                                        <h4 class="text-muted" style="margin-top: -55px;">Top up & Tagihan</h4>
                                            <p class="font-weight-bold text-success text-right"style="margin-top: -45px;">Lihat Semua</p>  
                                        <ul class="nav nav-tabs pt-2">
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">Pulsa</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">Paket Data</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">Listrik Pln</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">Flight</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#"><svg height="20px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" fill="#808080" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg></a>
                                            </li>
                                        </ul>
                                    <div class="d-flex pt-2">
                                        <h4 class="font-weight-bold text-secondary">Nomor Telpon</h4>
                                    </div>    
                                    <form>
                                        <div class="row">
                                            <div class="col">
                                            <input type="text" class="form-control form-control-sm" placeholder="+62 _ _ _ _ _ _ _ _ _ _ _">
                                            </div>
                                            <div class="col">
                                                <h4 class="font-weight-bold text-secondary" style="margin-top: -33px;">Nominal</h4>
                                            <input type="text" class="form-control form-control-sm" placeholder="Nominal">
                                            </div>
                                        <button type="button" class="btn btn-secondary btn-sm">Beli</button>
                                        </div>
                                    </form>                         
                                    </div>    
                                </div>
                            </div>
                            <div class="d-flex justify-content-around pt-5">
                                <input class="btn btn-outline-secondary btn-lg" type="button" value="Belanja">
                                <input class="btn btn-outline-secondary btn-lg" type="button" value="Semua Promo">                            
                                <input class="btn btn-outline-secondary btn-lg" type="button" value="Lawan COVID-19">                            
                                <input class="btn btn-outline-secondary btn-lg" type="button" value="Kesehatan">                            
                                <input class="btn btn-outline-secondary btn-lg" type="button" value="Makanan & Minuman">                            
                                <input class="btn btn-outline-secondary btn-lg" type="button" value="Dapur">                            
                                <input class="btn btn-outline-secondary btn-lg" type="button" value="Emas">                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="d-flex justify-content-center">
    <div class="col-md-10 pt-4">
        <div class="card-header-0">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto">
                        <h4 class="font-weight-bold text-secondary">Paling Banyak Dicari</h4>
                    </div>
                        <div class="d-flex justify-content-center">  
                            <a href="">
                                <span class="mr-3"><svg height="24px" id="Layer_1" style="enable-background:new 0 0 16 16;" version="1.1" viewBox="0 0 16 16" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M14,8c-0.609,0-0.898,0.43-1,0.883C12.635,10.516,11.084,13,8,13c-0.757,0-1.473-0.172-2.114-0.474L6.414,12  C6.773,11.656,7,11.445,7,11c0-0.523-0.438-1-1-1H3c-0.609,0-1,0.492-1,1v3c0,0.541,0.428,1,1,1c0.484,0,0.688-0.273,1-0.594  l0.408-0.407C5.458,14.632,6.685,15,8,15c4.99,0,7-4.75,7-5.938C15,8.336,14.469,8,14,8z M3,7.117C3.365,5.485,4.916,3,8,3  c0.757,0,1.473,0.171,2.114,0.473L9.586,4C9.227,4.344,9,4.555,9,5c0,0.523,0.438,1,1,1h3c0.609,0,1-0.492,1-1V2  c0-0.541-0.428-1-1-1c-0.484,0-0.688,0.273-1,0.594l-0.408,0.407C10.542,1.368,9.315,1,8,1C3.01,1,1,5.75,1,6.938  C1,7.664,1.531,8,2,8C2.609,8,2.898,7.57,3,7.117z" fill="#32CD32" /></svg></span>
                            </a>
                            <h4 class="font-weight-bold text-success mr-3">Muat Lainnya</h4>
                        </div>    
                    </div>
                <div class="row row-cols-4 pt-3">
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/asus.jpg')}}" class="card-img-left" width="50" height="50" alt="">
                            <div class="d-flex">
                        <div class="ml-5 px-2">
                                <h5 class="font-weight-bold text-secondary" style="margin-top: -50px;">Asus Pro M1</h5>
                                <p class="text-muted" style="margin-top: -10px;">745rb Produk</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/spatu.jpg')}}" class="card-img-left" width="60" height="50" alt="">
                            <div class="d-flex">
                        <div class="ml-5 px-3">
                                <h5 class="font-weight-bold text-secondary" style="margin-top: -45px;">Sepatu Casual</h5>
                                <p class="text-muted" style="margin-top: -14px;">749rb Produk</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/ipon.jpg')}}" class="card-img-left" width="55" height="50" alt="">
                            <div class="d-flex">
                        <div class="ml-5 px-3">
                                <h5 class="font-weight-bold text-secondary" style="margin-top: -50px;">Iphone 11</h5>
                                <p class="text-muted" style="margin-top: -10px;">742rb Produk</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/ps.jpg')}}" class="card-img-left" width="50" height="50" alt="">
                            <div class="d-flex">
                        <div class="ml-5 px-3">
                                <h5 class="font-weight-bold text-secondary" style="margin-top: -53px;">Ps 4</h5>
                                <p class="text-muted" style="margin-top: -10px;">74rb Produk</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            
<div class="d-flex justify-content-center">
    <div class="col-md-10">
        <div class="card-header-0" style="margin-top: -25px;">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto">
                        <h4 class="font-weight-bold text-secondary">Kejar Diskon</h4>
                    </div>
                        <div class="d-flex justify-content-center"> 
                            <h4 class="font-weight-bold text-success mr-3">Lihat Semua</h4>
                        </div>   
                    </div>
                <div class="row row-cols-4 pt-3">
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/jeket.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex ">
                                <h6 class="font-weight-bold text-secondary pt-3">Jaket Polos Hoodie Zipper</h6>
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-wrap">40%</p>
                                <medium class="text-muted px-3"><del>Rp 40.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 40.000</p>
                                    <hr style="margin-top: -10px;">
                                <div class="d-flex">
                                    <small class="text-muted" style="margin-top: -10px;">15 Terjual</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/ligstik.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex">
                                <h6 class="font-weight-bold text-secondary pt-3">Jual Lightstick KPOP TWICE</h6>
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-wrap">20%</p>
                                <medium class="text-muted px-3"><del>Rp 100.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 800.000</p>
                                    <hr style="margin-top: -10px;">
                                <div class="d-flex">
                                    <small class="text-muted" style="margin-top: -10px;">90 Terjual</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/detol.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex">
                                <h6 class="font-weight-bold text-secondary pt-3">Hand Sanitizer Dettol 200ml</h6> 
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-secondary">5%</p>
                                <medium class="text-muted px-3"><del>Rp 10.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 20.000</p>
                                    <hr style="margin-top: -10px;">
                                <div class="d-flex">
                                    <small class="text-muted" style="margin-top: -10px;">20 Terjual</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/masker.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex">
                                <h6 class="font-weight-bold text-secondary pt-3">Masker Scuba asli anti polisi</h6>
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-wrap">15%</p>
                                <medium class="text-muted px-3"><del>Rp 15.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 15.000</p>
                                    <hr style="margin-top: -10px;">
                                <div class="d-flex">
                                    <small class="text-muted" style="margin-top: -10px;">35 Terjual</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
    <div class="col-md-10">
        <div class="card-header-0" style="margin-top: -25px;">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto">
                        <h4 class="font-weight-bold text-secondary">Official Store</h4>
                    </div>
                        <div class="d-flex justify-content-center"> 
                            <h4 class="font-weight-bold text-success mr-3">Lihat Semua</h4>
                        </div>   
                    </div>

                <div class="row row-cols-4 pt-3">
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/jeket.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex ">
                                <h6 class="font-weight-bold text-secondary pt-3">Jaket Polos Hoodie Zipper</h6>
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-wrap">40%</p>
                                <medium class="text-muted px-3"><del>Rp 40.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 40.000</p>
                                    <div class="d-flex">
                                        <small class="text-muted"style="margin-top: -20px;">Kab. Jakarta Selatan</small>
                                    </div>
                                <div class="d-flex justify-content-start" style="margin-top: -8px;">
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <small class="text-muted pt-1 ml-3">(22)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/ligstik.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex">
                                <h6 class="font-weight-bold text-secondary pt-3">Jual Lightstick KPOP TWICE</h6>
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-wrap">20%</p>
                                <medium class="text-muted px-3"><del>Rp 100.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 800.000</p>
                                    <div class="d-flex">
                                        <small class="text-muted"style="margin-top: -20px;">Kab. Bekasi</small>
                                    </div>
                                <div class="d-flex justify-content-start" style="margin-top: -8px;">
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <small class="text-muted pt-1 ml-3">(212)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/detol.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex">
                                <h6 class="font-weight-bold text-secondary pt-3">Hand Sanitizer Dettol 200ml</h6> 
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-secondary">5%</p>
                                <medium class="text-muted px-3"><del>Rp 10.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 20.000</p>
                                    <div class="d-flex">
                                        <small class="text-muted"style="margin-top: -20px;">Kab. Bogor</small>
                                    </div>
                                <div class="d-flex justify-content-start" style="margin-top: -3px;">
                                    <div class="badge badge-secondary text-wrap" >
                                        Grosir
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/masker.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex">
                                <h6 class="font-weight-bold text-secondary pt-3">Masker Scuba asli anti polisi</h6>
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-wrap">15%</p>
                                <medium class="text-muted px-3"><del>Rp 15.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 15.000</p>
                                    <div class="d-flex">
                                        <small class="text-muted"style="margin-top: -20px;">Kab. Depok</small>
                                    </div>
                                <div class="d-flex justify-content-start" style="margin-top: -8px;">
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <small class="text-muted pt-1 ml-3">(12)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-4 pt-3">
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/jeket.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex ">
                                <h6 class="font-weight-bold text-secondary pt-3">Jaket Polos Hoodie Zipper</h6>
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-wrap">40%</p>
                                <medium class="text-muted px-3"><del>Rp 40.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 40.000</p>
                                    <div class="d-flex">
                                        <small class="text-muted"style="margin-top: -20px;">Kab. Jakarta Selatan</small>
                                    </div>
                                <div class="d-flex justify-content-start" style="margin-top: -8px;">
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <small class="text-muted pt-1 ml-3">(22)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/ligstik.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex">
                                <h6 class="font-weight-bold text-secondary pt-3">Jual Lightstick KPOP TWICE</h6>
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-wrap">20%</p>
                                <medium class="text-muted px-3"><del>Rp 100.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 800.000</p>
                                    <div class="d-flex">
                                        <small class="text-muted"style="margin-top: -20px;">Kab. Bekasi</small>
                                    </div>
                                <div class="d-flex justify-content-start" style="margin-top: -8px;">
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <small class="text-muted pt-1 ml-3">(212)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/detol.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex">
                                <h6 class="font-weight-bold text-secondary pt-3">Hand Sanitizer Dettol 200ml</h6> 
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-secondary">5%</p>
                                <medium class="text-muted px-3"><del>Rp 10.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 20.000</p>
                                    <div class="d-flex">
                                        <small class="text-muted"style="margin-top: -20px;">Kab. Bogor</small>
                                    </div>
                                <div class="d-flex justify-content-start" style="margin-top: -3px;">
                                    <div class="badge badge-secondary text-wrap" >
                                        Grosir
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/masker.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex">
                                <h6 class="font-weight-bold text-secondary pt-3">Masker Scuba asli anti polisi</h6>
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-wrap">15%</p>
                                <medium class="text-muted px-3"><del>Rp 15.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 15.000</p>
                                    <div class="d-flex">
                                        <small class="text-muted"style="margin-top: -20px;">Kab. Depok</small>
                                    </div>
                                <div class="d-flex justify-content-start" style="margin-top: -8px;">
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <small class="text-muted pt-1 ml-3">(12)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-4 pt-3">
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/jeket.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex ">
                                <h6 class="font-weight-bold text-secondary pt-3">Jaket Polos Hoodie Zipper</h6>
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-wrap">40%</p>
                                <medium class="text-muted px-3"><del>Rp 40.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 40.000</p>
                                    <div class="d-flex">
                                        <small class="text-muted"style="margin-top: -20px;">Kab. Jakarta Selatan</small>
                                    </div>
                                <div class="d-flex justify-content-start" style="margin-top: -8px;">
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <small class="text-muted pt-1 ml-3">(22)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/ligstik.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex">
                                <h6 class="font-weight-bold text-secondary pt-3">Jual Lightstick KPOP TWICE</h6>
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-wrap">20%</p>
                                <medium class="text-muted px-3"><del>Rp 100.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 800.000</p>
                                    <div class="d-flex">
                                        <small class="text-muted"style="margin-top: -20px;">Kab. Bekasi</small>
                                    </div>
                                <div class="d-flex justify-content-start" style="margin-top: -8px;">
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <small class="text-muted pt-1 ml-3">(212)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/detol.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex">
                                <h6 class="font-weight-bold text-secondary pt-3">Hand Sanitizer Dettol 200ml</h6> 
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-secondary">5%</p>
                                <medium class="text-muted px-3"><del>Rp 10.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 20.000</p>
                                    <div class="d-flex">
                                        <small class="text-muted"style="margin-top: -20px;">Kab. Bogor</small>
                                    </div>
                                <div class="d-flex justify-content-start" style="margin-top: -3px;">
                                    <div class="badge badge-secondary text-wrap" >
                                        Grosir
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-1">
                        <div class="card-0 shadow mb-3">
                            <div class="card-body">
                                <img src="{{asset('img/masker.jpg')}}" class="card-img-top" width="50%" height="50%" alt="">
                            <div class="d-flex">
                                <h6 class="font-weight-bold text-secondary pt-3">Masker Scuba asli anti polisi</h6>
                            </div>
                            <div class="card-header-0">
                                <p class="badge badge-danger text-wrap">15%</p>
                                <medium class="text-muted px-3"><del>Rp 15.000</del></medium>
                            </div>
                                <p class="text-muted" style="margin-top: -17px;"> Rp 15.000</p>
                                    <div class="d-flex">
                                        <small class="text-muted"style="margin-top: -20px;">Kab. Depok</small>
                                    </div>
                                <div class="d-flex justify-content-start" style="margin-top: -8px;">
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <span><svg enable-background="new 0 0 32 32" height="13px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="13px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M31.881,12.557c-0.277-0.799-0.988-1.384-1.844-1.511l-8.326-1.238l-3.619-7.514  C17.711,1.505,16.896,1,16,1c-0.896,0-1.711,0.505-2.092,1.294l-3.619,7.514l-8.327,1.238c-0.855,0.127-1.566,0.712-1.842,1.511  c-0.275,0.801-0.067,1.683,0.537,2.285l6.102,6.092l-1.415,8.451C5.2,30.236,5.569,31.09,6.292,31.588  C6.689,31.861,7.156,32,7.623,32c0.384,0,0.769-0.094,1.118-0.281L16,27.811l7.26,3.908C23.609,31.906,23.994,32,24.377,32  c0.467,0,0.934-0.139,1.332-0.412c0.723-0.498,1.09-1.352,0.947-2.203l-1.416-8.451l6.104-6.092  C31.947,14.239,32.154,13.357,31.881,12.557z M23.588,19.363c-0.512,0.51-0.744,1.229-0.627,1.934l1.416,8.451l-7.26-3.906  c-0.348-0.188-0.732-0.281-1.118-0.281c-0.384,0-0.769,0.094-1.117,0.281l-7.26,3.906l1.416-8.451  c0.118-0.705-0.114-1.424-0.626-1.934l-6.102-6.092l8.326-1.24c0.761-0.113,1.416-0.589,1.743-1.268L16,3.251l3.62,7.513  c0.328,0.679,0.982,1.154,1.742,1.268l8.328,1.24L23.588,19.363z" fill="#fff200" id="star"/></svg></span>
                                    <small class="text-muted pt-1 ml-3">(12)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            
<div class="d-flex justify-content-center">
    <button type="button" class="btn btn-outline-success btn-lg">Muat Lebih Banyak</button>
</div>

<div class="d-flex justify-content-center">
    <div class="col-md-10 pt-4">
        <div class="card-header-0" style="margin-top: -25px;">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto">
                        <h5 class="font-weight-bold text-secondary">Kategori</h5>
                    </div>
                        <div class="d-flex justify-content-center"> 
                            <h5 class="font-weight-bold text-success mr-3">Lihat Semua</h5>
                        </div>   
                    </div>
                <div class="card border-secondary">
                    <div class="card-body">
                        <div class="d-flex">
                            <ul class="list-inline">
                                <h5 class="font-weight-bold text-muted">Fashion Wanita</h5>
                                <h5 class="font-weight-bold text-muted">Kecantikan</h5>
                                <h5 class="font-weight-bold text-muted">Gaming</h5>
                                <h5 class="font-weight-bold text-muted">Laptop & Aksesoris</h5>
                                <h5 class="font-weight-bold text-muted">Olahraga</h5>
                                <h5 class="font-weight-bold text-muted">Makanan & Minuman</h5>
                                <h5 class="font-weight-bold text-muted">Software</h5>
                            </ul>
                            <ul class="list-inline ml-5 px-4">
                                <h5 class="font-weight-bold text-muted">Fashion Pria</h5>
                                <h5 class="font-weight-bold text-muted">Kesehatan</h5>
                                <h5 class="font-weight-bold text-muted">komputer & Aksesoris</h5>
                                <h5 class="font-weight-bold text-muted">Ibu & Bayi</h5>
                                <h5 class="font-weight-bold text-muted">Souvenir & Kado</h5>
                                <h5 class="font-weight-bold text-muted">Film & Musik</h5>
                                <h5 class="font-weight-bold text-muted">Hotlist</h5>
                            </ul>
                            <ul class="list-inline ml-5 px-4">
                                <h5 class="font-weight-bold text-muted">Fashion Muslim</h5>
                                <h5 class="font-weight-bold text-muted">Perawatan Tubuh</h5>
                                <h5 class="font-weight-bold text-muted">Elektronik</h5>
                                <h5 class="font-weight-bold text-muted">Rumah Tangga</h5>
                                <h5 class="font-weight-bold text-muted">Buku</h5>
                                <h5 class="font-weight-bold text-muted">Office & Stationery</h5>
                            </ul>
                            <ul class="list-inline ml-5 px-4">
                                <h5 class="font-weight-bold text-muted">Fashion Anak</h5>
                                <h5 class="font-weight-bold text-muted">Handpone & Tablet</h5>
                                <h5 class="font-weight-bold text-muted">Kamera</h5>
                                <h5 class="font-weight-bold text-muted">Dapur</h5>
                                <h5 class="font-weight-bold text-muted">Otomotif</h5>
                                <h5 class="font-weight-bold text-muted">Mainan & Hobi</h5>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
    <div class="col-md-10 pt-4">
        <div class="card-header-0" style="margin-top: -25px;">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto">
                        <h5 class="font-weight-bold text-secondary">Produk Digital</h5>
                    </div>
                        <div class="d-flex justify-content-center"> 
                            <h5 class="font-weight-bold text-success mr-3">Lihat Semua</h5>
                        </div>   
                    </div>
                <div class="card border-secondary">
                    <div class="card-body">
                        <div class="d-flex">
                            <ul class="list-inline">
                                <h5 class="font-weight-bold text-muted">Emas
                                    <span class="badge badge-danger text-dark">Baru</span>
                                </h5>
                                <h5 class="font-weight-bold text-muted">BPJS</h5>
                                <h5 class="font-weight-bold text-muted">Pulsa</h5>
                                <h5 class="font-weight-bold text-muted">PascaBayar</h5>
                                <h5 class="font-weight-bold text-muted">Paket Data</h5>
                                <h5 class="font-weight-bold text-muted">TV Kabel</h5>
                                <h5 class="font-weight-bold text-muted">Tagihan Kartu Kredit
                                    <span class="badge badge-danger text-dark">Baru</span>
                                </h5>
                                <h5 class="font-weight-bold text-muted">Hiburan
                                    <span class="badge badge-danger text-dark">Baru</span>
                                </h5>
                            </ul>
                            <ul class="list-inline ml-5 px-4">
                                <h5 class="font-weight-bold text-muted">M-Tix XXI
                                    <span class="badge badge-danger text-dark">Baru</span>
                                </h5>
                                <h5 class="font-weight-bold text-muted">Angsuran Kredit</h5>
                                <h5 class="font-weight-bold text-muted">Reksa Dana
                                    <span class="badge badge-danger text-dark">Baru</span>
                                </h5>
                                <h5 class="font-weight-bold text-muted">Roaming</h5>
                                <h5 class="font-weight-bold text-muted">Listrik PLN</h5>
                                <h5 class="font-weight-bold text-muted">Asuransi</h5>
                                <h5 class="font-weight-bold text-muted">Voucher Game</h5>
                                <h5 class="font-weight-bold text-muted">Kartu Kredit</h5>
                            </ul>
                            <ul class="list-inline ml-5 px-4">
                                <h5 class="font-weight-bold text-muted">Tiket Event
                                    <span class="badge badge-danger text-dark">Baru</span>
                                </h5>
                                <h5 class="font-weight-bold text-muted">Donasi</h5>
                                <h5 class="font-weight-bold text-muted">Tiket Kereta Api</h5>
                                <h5 class="font-weight-bold text-muted">Pinjaman Modal</h5>
                                <h5 class="font-weight-bold text-muted">Air PDAM</h5>
                                <h5 class="font-weight-bold text-muted">Pasang TV Kabel</h5>
                                <h5 class="font-weight-bold text-muted">Streaming</h5>
                                <h5 class="font-weight-bold text-muted">Pajak</h5>
                            </ul>
                            <ul class="list-inline ml-5 px-4">
                                <h5 class="font-weight-bold text-muted">Pinjaman Online</h5>
                                <h5 class="font-weight-bold text-muted">Vouchers
                                    <span class="badge badge-danger text-dark">Baru</span>
                                </h5>
                                <h5 class="font-weight-bold text-muted">Telkom</h5>
                                <h5 class="font-weight-bold text-muted">Zakat</h5>
                                <h5 class="font-weight-bold text-muted">Gas PGN </h5>
                                <h5 class="font-weight-bold text-muted">Retribusi
                                    <span class="badge badge-danger text-dark">Baru</span>
                                </h5>
                                <h5 class="font-weight-bold text-muted">Gift Card</h5>
                                <h5 class="font-weight-bold text-muted">Ovo</h5>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pt-3">
    <div class="card-0" style="width: 85rem;"><hr color="grey">
        <div class="card-body">
            <div class="d-flex">
            <img src="{{asset('img/oshopping.jpg')}}" style="margin-top: -23px;" class="nav-link" width="13%" height="70" alt="">
                <div class="px-5 ml-4">
                    <h4 class="font-weight-bold text-dark">Beli</h4>
                </div>
                <div class="px-5 ml-4">
                    <h4 class="font-weight-bold text-dark">Bantuan Dan Panduan</h4>
                </div>
            </div>
            <div class="d-flex">
                <ul class="list-inline px-3">
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Tentang Oshopping</h5>
                    </a>
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Karir</h5>
                    </a>
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Blog</h5>
                    </a>
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Official Store</h5>
                    </a>
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Tagihan & Top-Up</h5>
                    </a>
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Bebas Ongkir</h5>
                    </a>
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Paket Umroh</h5>
                    </a>
                </ul>
                <ul class="list-inline px-5">
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Tiket Pesawat</h5>
                    </a>
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Tiket Kereta</h5>
                    </a>
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Tiket Event</h5>
                    </a>
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Hotlist</h5>
                    </a>
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Kategori</h5>
                    </a>
                </ul>
                <ul class="list-inline">
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Oshopping care</h5>
                    </a>
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Syarat dan Ketentuan</h5>
                    </a>
                    <a href="">
                        <h5 class="font-weight-bold text-muted">Kebijakan Privasi</h5>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
