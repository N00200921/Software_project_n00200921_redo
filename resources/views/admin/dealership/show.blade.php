@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
          Vehicle: {{$dealerships->Manufacturer }} {{$dealerships->model }}
          </div>
          <div class="card-body">
              <table id="table-dealerships" class="table table-hover">
                <tbody>
                  <tr>
                      <td rowspan="8"><img src="{{ asset('storage/images/' . $dealerships->image_location) }}" width="150"/></td>
                  </tr>
                  <tr>
                  <td>Manfacturer</td>
                                    <td>{{$dealerships->Manufacturer }}</td>
                                </tr>
                                <tr>
                                    <td>model</td>
                                    <td>{{$dealerships->model }}</td>
                                </tr>
                                <tr>
                                    <td>year</td>
                                    <td>{{$dealerships->year }}</td>
                                </tr>
                                <tr>
                                    <td>engine</td>
                                    <td>{{$dealerships->engine }}</td>
                                </tr>
                                <tr>
                                    <td>drivetrain</td>
                                    <td>{{$dealerships->drivetrain }}</td>
                                </tr>
                                <tr>
                                    <td>color</td>
                                    <td>{{$dealerships->color }}</td>
                                </tr>
                                <tr>
                                    <td>dealership_location</td>
                                    <td>{{$dealerships->dealership_location }}</td>
                                </tr><tr>
                                    <td>dealership_number</td>
                                    <td>{{$dealerships->dealership_number }}</td>
                                </tr>
                          
</tr>  
                </tbody>
              </table>

              <a href="{{ route('admin.dealership.index') }}" class="btn btn-default">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
