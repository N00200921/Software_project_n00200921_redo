@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Edit vehicles
          </div>
          <div class="card-body">
        
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('admin.dealership.update', $dealership->id)}}">
              <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <input type="hidden" name="_method" value="PUT">


              <div class="form-group">
                <label for="Manufacturer">Manufacturer</label>
                <input type="text" class="form-control" id="Manufacturer" name="Manufacturer" value="{{ old('Manufacturer', $dealership->Manufacturer) }}" />
              </div>
              <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" id="model" name="model" value="{{ old('model', $dealership->model) }}" />
              </div>
              <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="{{ old('year', $dealership->year) }}" />
              </div>
              <div class="form-group">
                <label for="engine">Engine</label>
                <input type="text" class="form-control" id="engine" name="engine" value="{{ old('engine', $dealership->engine) }}" />
              </div>
              <div class="form-group">
                <label for="drivetrain">Drivetrain</label>
                <input type="text" class="form-control" id="drivetrain" name="drivetrain" value="{{ old('drivetrain', $dealership->drivetrain) }}" />
              </div>
              <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" id="color" name="color" value="{{ old('color', $dealership->color) }}" />
              </div>
              <div class="form-group">
                <label for="dealership_location">Dealership location</label>
                <input type="text" class="form-control" id="dealership_location" name="dealership_location" value="{{ old('dealership_location', $dealership->dealership_location) }}" />
              </div>
              <div class="form-group">
                <label for="dealership_number">Dealership number</label>
                <input type="text" class="form-control" id="dealership_number" name="dealership_number" value="{{ old('dealership_number', $dealership->dealership_number) }}" />
              </div>
            
            
              <a href="{{ route('admin.dealership.index') }}" class="btn btn-outline">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
