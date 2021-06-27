@extends('backend.includes.app')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Tambahkan Data Jadwal
                </h2>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('jadwal.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Nama Pemesan </label>
                                                <input type="text" class="form-control" id="name" aria-describedby="name"
                                                    name="NamaPemesan" placeholder="Azri" required />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Phone</label>
                                                <input type="text" class="form-control" id="name" aria-describedby="name"
                                                    name="Phone" required />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">No Kartu Identitas</label>
                                                <input type="text" class="form-control" id="name" aria-describedby="name"
                                                    name="Identitas" placeholder="No Ktp" required />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Status Pemesanan</label>
                                                <select class="form-control" name="Status" id="exampleFormControlSelect1">
                                                    <option>BOOKED</option>
                                                    <option>BERHASIL DI BAYAR</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Tanggal Check In</label>
                                                <input type="date" class="form-control" id="name" aria-describedby="name"
                                                    name="CheckIn" required />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Tanggal Check Out</label>
                                                <input type="date" class="form-control" id="name" aria-describedby="name"
                                                    name="CheckOut" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <button type="submit" class="btn btn-success btn-block px-5">
                                        Save Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
