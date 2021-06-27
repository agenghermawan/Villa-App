@extends('includes.app')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">

            <div class="dashboard-content">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="sell" role="tabpanel" aria-labelledby="sell-tab">
                        <div class="row mt-3">
                            <div class="col-12 mt-2">
                                <a class="card card-list d-block" href="/dashboard-transactions-details.html">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div id='calendar' class="text-center"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card col-md-3">
                                                <h3 class="mt-4"> Leave Information </h3>
                                                <table class="table table-hover mt-3">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Employee Name</th>
                                                            <th scope="col">Start Date</th>
                                                            <th scope="col">End Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data as $item)
                                                            <tr>
                                                                <th scope="row">{{ $item->NamaPemesan }}</th>
                                                                <td>{{ $item->CheckIn }}</td>
                                                                <td>{{ $item->CheckOut }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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

@section('script')

@endsection
