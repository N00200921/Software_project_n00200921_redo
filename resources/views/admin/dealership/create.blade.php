@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Add new vehicles
          </div>
          <div class="card-body">
          <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('admin.dealership.store')  }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <div class="form-group">
                <label for="Manufacturer">Manufacturer</label>
                <input type="text" class="form-control" id="manufacturer" name="manufacturer" value="{{ old('manufacturer') }}" />
              </div>
              <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" id="model" name="model" value="{{ old('model') }}" />
              </div>
              <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="{{ old('year') }}" />
              </div>
              <div class="form-group">
                <label for="engine">Engine</label>
                <input type="text" class="form-control" id="engine" name="engine" value="{{ old('engine') }}" />
              </div>
              <div class="form-group">
                <label for="drivetrain">Drivetrain</label>
                <input type="text" class="form-control" id="drivetrain" name="drivetrain" value="{{ old('drivetrain') }}" />
              </div>
              <div class="form-group">
                <label for="color">color</label>
                <input type="text" class="form-control" id="color" name="color" value="{{ old('color') }}" />
              </div>
              <div class="form-group">
                <label for="engine">Dealership location</label>
                <input type="text" class="form-control" id="dealership_location" name="dealership_location" value="{{ old('dealership_location') }}" />
              </div>
              <div class="form-group">
                <label for="drivetrain">Dealership number</label>
                <input type="text" class="form-control" id="dealership_number" name="dealership_number" value="{{ old('dealership_number') }}" />
              </div>
        
              <div class="form-group">
                <label for="dealership_image"> Vehicle Image </label>
                <input type="file" class="form-control" id='dealership_image' name="dealership_image" />
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
