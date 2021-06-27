@extends('backend.includes.app')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Transactions</h2>
                <p class="dashboard-subtitle">
                    Big result start from the small one
                </p>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('jadwal.create') }}" class="btn btn-success">Tambahkan Jadwal</a>
                    <a href="{{ route('backendjadwal') }}" class="btn btn-success">Lihat Jadwal</a>
                </div>
            </div>
            <div class="dashboard-content">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="sell" role="tabpanel" aria-labelledby="sell-tab">
                        <div class="row mt-3">
                            <div class="col-12 mt-2">
                                <a class="card card-list d-block" href="/dashboard-transactions-details.html">
                                    <div class="card-body">
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">First</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Identitas</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">CheckIn</th>
                                                    <th scope="col">CheckOut</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $item->NamaPemesan }}</td>
                                                        <td>{{ $item->Phone }}</td>
                                                        <td>{{ $item->Identitas }}</td>
                                                        <td>{{ $item->Status }}</td>
                                                        <td>{{ $item->CheckIn }}</td>
                                                        <td>{{ $item->CheckOut }}</td>
                                                        <td>
                                                            <a href="{{ route('jadwal.edit', $item->id) }}"
                                                                class="btn btn-info">
                                                                Edit </a>
                                                            <form action="{{ route('jadwal.destroy', $item->id) }}"
                                                                method="POST" enctype="multipart/form-data"
                                                                class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-warning">
                                                                    Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
