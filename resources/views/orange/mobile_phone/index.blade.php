@extends('layouts.backend')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mobile Phone</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ url('mobile_phone/create?lang=fr') }}" class="btn btn-primary btn-icon-text  mr-2">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Mobile Phone French
            </a>
            <a href="{{ url('mobile_phone/create?lang=du') }}" class="btn btn-primary btn-icon-text mr-2">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Mobile Phone Dutch
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Mobile Phone</h6>
                    <p class="card-description">All the mobile phone leads are listed here.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        NAME
                                    </th>
                                    <th>
                                        CELL PHONE
                                    </th>
                                    <th>
                                        IBAN
                                    </th>
                                    <th>
                                        Created At
                                    </th>

                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($phones as $key => $phone)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $phone->name }}</td>
                                        <td>{{ $phone->exist_phone }}</td>
                                        <td>{{ $phone->iban_account_number }}</td>

                                        <td>
                                            {{ \Carbon\Carbon::parse($phone->created_at)->diffForhumans() }}
                                        </td>
                                        {{-- <td>
                                            {{ \Carbon\Carbon::parse($phone->updated_at)->diffForhumans() }}
                                        </td> --}}
                                        <td>
                                            <form class="d-inline-block"
                                                action="{{ route('mobile_phone.destroy', $phone->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-icon-text">
                                                    <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
