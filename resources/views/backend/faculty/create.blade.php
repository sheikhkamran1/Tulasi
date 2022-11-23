@extends('backend.app')
 
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <a href="/faculty" class="btn btn-primary m-1">Back</a>
                  </div>
                  <div class="card-body">
                      @if (session('message'))
                          <div>
                              <p class="text-success"> {{ session('message') }} </p>
                          </div>
                      @endif
                      {{-- If your form iclude files or images thatn you should add enctype. --}}
                    <form action="/faculty" method="post" enctype="multipart/form-data">
                        @csrf
                
                       <div class="form-group">
                           <label for="faculty">faculty</label>
                           <input id="faculty" class="form-control" type="text" name="faculty" placeholder="Science,Management,Education.." value="{{old('faculty')}}">
                       </div>

                       <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input id="image" class="form-control-file" type="file" name="image">
                    </div>

                   

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection