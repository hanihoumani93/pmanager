@extends('layouts.app')

@section('content')
    <div class="col-sm-9 col-md-9 col-lg-9 pull-left">
        <!-- Jumbotron -->
        <div class="jumbotron">
          <h1>{{$company->name}}</h1>
          <p class="lead">{{$company->description}}</p>
        </div>
  
        <!-- Example row of columns -->
        <div class="row" style="background: white; padding: 10px; margin: 10px;">
        @foreach($company->projects as $project)
          <div class="col-lg-4">
            <h2>{{$project->name}}</h2>
            <p class="text-danger">{{$project->description}}</p>
            <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View Project</a></p>
          </div>
        @endforeach
        </div>
    </div>

    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
            {{-- <div class="sidebar-module sidebar-module-inset">
              <h4>About</h4>
              <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div> --}}
            <div class="sidebar-module">
                <div class="sidebar-module">
                    <h4>Actions</h4>
                        <ol class="list-unstyled">
                            <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
                            <li><a href="/projects/create">Add project</a></li>
                            <li><a href="/companies">My companies</a></li>
                            <li><a href="/companies/create">Create new company</a></li>

                            <br>
                            <li>
                                <a href=""
                                    onclick="
                                        let result = confirm('Are you sure you want to delete thiis company?');
                                        if(result){
                                            event.preventDefault();
                                            document.getElementById('delete.form').submit();
                                        }
                                    "
                                >
                                Delete
                                </a>

                                <form id="delete.form" method="POST" action="{{route('companies.destroy', [$company->id])}}" style="display:none">
                                    <input type="hidden" name="_method" value="DELETE">
                                    @csrf
                                </form>
                            </li>
                        </ol>
                    </div>

            {{-- <div class="sidebar-module">
              <h4>Members (Users)</h4>
              <ol class="list-unstyled">
                <li><a href="#">March 2014</a></li>
              </ol>
            </div> --}}
          </div>
  
        {{-- <!-- Site footer -->
        <footer class="footer">
          <p>© 2016 Company, Inc.</p>
        </footer> --}}

@endsection
