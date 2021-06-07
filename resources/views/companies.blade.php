@extends('layout')
@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Companies</h1>

    </div>
    <form action="/search" method="get" style="display: flex; justify-content: center">
        <input type="text" name="search" id="" placeholder="Enter company name to search">
        <button type="submit">Search</button>
    </form>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Web</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Trainer name</th>
                    <th scope="col">Category name</th>
                </tr>
                </thead>
                <tbody>
                @if($companies != null)
                    @foreach($companies as $company)
                        <tr>
                            <th scope="row">{!! $company->company_id !!}</th>
                            <td>{!! $company->company_name !!}</td>
                            <td>{!! $company->company_web !!}</td>
                            <td>{!! $company->company_phone !!}</td>
                            <td>{!! @$company->trainers['trainer_name'] !!}</td>
                            <td>{!! $company->category->category_name !!}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            {!! $companies->render() !!}
        </div>
    </div>
@endsection
