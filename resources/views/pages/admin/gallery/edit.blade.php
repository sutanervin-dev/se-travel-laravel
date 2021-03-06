@extends('layouts.admin')

@section('content')
        
          <div class="content-wrapper">
            @if ($errors->any())
              <div class="aler alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit gallery Travel</h4>
                    {{-- <a href="" class="btn btn-sm btn-primary shadow-sm">aa</a> --}}
                    {{-- {{route('gallery-create')}} --}}
                    <form action="{{route('gallery.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                      @method('PUT')
                      @csrf
                      <div class="form-group">
                        <label for="travel_packages_id">Title</label>
                        <select name="travel_packages_id" required class="form-control">
                          <option value="{{$item->travel_packages_id}}">Jangan Dirubah</option>
                          @foreach ($travel_packages as $travel_package)
                          <option value="{{$travel_package->id}}">
                            {{$travel_package->title}}
                          </option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" placeholder="Image">
                      </div>

                    <button type="submit" class="btn btn-primary btn-block">
                      Simpan
                    </button>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- content-wrapper ends -->

          <!-- partial -->
        
@endsection