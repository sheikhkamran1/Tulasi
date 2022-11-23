@extends('backend.app')
 
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <a href="/setting" class="btn btn-primary m-1">Back</a>
                  </div>
                  <div class="card-body">
                      @if (session('message'))
                          <div>
                              <p class="text-success"> {{ session('message') }} </p>
                          </div>
                      @endif
                    <form action="/setting/{{$setting->id}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                      
                
                        <div class="form-group">
                            <label for="name">Company Name *</label>
                            <input id="name" class="form-control" type="text" name="name" placeholder="eg.Apple"  value="{{$setting->name}}">
                        </div>
                
                        <div class="form-group">
                            <label for="address">Address *</label>
                            <input id="address" class="form-control" type="text" name="address" placeholder="dharan" value="{{$setting->address}}">
                        </div>
                
                        <div class="form-group">
                            <label for="contact">Contact (Optional)</label>
                            <input id="contact" class="form-control" type="tel" name="contact" placeholder="eg.98070...." value="{{$setting->contact}}">
                        </div>
                
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input id="email" class="form-control" type="text" name="email" placeholder="eg.eg.apple@gmail.com" value="{{$setting->email}}">
                        </div>

                        
                        <div class="form-group">
                            <label for="regno">Reg no. (Optional)</label>
                            <input id="regno" class="form-control" type="text" name="regno" placeholder="616161" value="{{$setting->regno}}">
                        </div>


                        <div class="form-group">
                            <label for="logo">Upload Company Logo (Optional)</label>
                            <input id="logo" class="form-control" type="file" name="logo">
                        </div>

                        <div class="py-4">
                            <img src="{{ asset($setting->logo) }}" width="50" alt="">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection