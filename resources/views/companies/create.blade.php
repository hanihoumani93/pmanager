@extends('layouts.app')

@section('content')
    <div class="row col-sm-9 col-md-9 col-lg-9 pull-left">
  
        <!-- Example row of columns -->
        <div class="row col-sm-12 col-md-12 col-lg-12" style="background: white; margin: 10px;">
            <form method="POST" action="{{route('companies.store')}}">
                @csrf

                <div class="form-group" >
                    <label for="company.name">Name<span class="required">*</span></label>
                    <input class="form-control"
                           placeholder="Enter name"
                           id="company.name"
                           required
                           name="name"
                           spellcheck="false"
                           style="width:750px;"
                    >
                </div>

                <div class="form-group">
                        <label for="company-content">Description<span class="required">*</span></label>
                        <textarea placeholder="Enter description"
                               style="resize: vertical"
                               id="company-content"
                               name="description"
                               rows="S" spellcheck="false"
                               class="form-control autosize-target text-left">
                               </textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
    &nbsp; &nbsp; &nbsp;
    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
            {{-- <div class="sidebar-module sidebar-module-inset">
              <h4>About</h4>
              <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div> --}}
            <div class="sidebar-module">
                <div class="sidebar-module">
                    <h4>Actions</h4>
                        <ol class="list-unstyled">
                            <li><a href="/companies">My companies</a></li>
                        </ol>
                    </div>

            {{-- <div class="sidebar-module">
              <h4>Members (Users)</h4>
              <ol class="list-unstyled">
                <li><a href="#">March 2014</a></li>
              </ol>
            </div> --}}
          </div>
    </div>
  
        {{-- <!-- Site footer -->
        <footer class="footer">
          <p>© 2016 Company, Inc.</p>
        </footer> --}}

@endsection
