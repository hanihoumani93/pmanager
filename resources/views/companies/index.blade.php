@extends('layouts.app')

@section('content')
<div class="col-md-6 col-lg-6 offset-3 ">
        <div class="card ">
                <div class="card-header bg-primary text-white">
                  Companies
                  <a class="pull-right btn btn-primary btn-sm" href="/companies/create" style="margin-left: 50%; ">Create new company</a>
                </div>
                <ul class="list-group list-group-flush">
            
                    @foreach($companies as $company)
                        <li class="list-group-item"><a href="/companies/{{$company->id}}">{{$company->name}}</a></li>
                    @endforeach
            
                </ul>
              </div>
</div>

@endsection
