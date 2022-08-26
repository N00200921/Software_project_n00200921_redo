@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
          Vehicle: {{$dealership->Manufacturer }} {{$dealership->model }}
          </div>
          <div class="card-body">
              <table id="table-dealerships" class="table table-hover">
                <tbody>
                  <tr>
                      <td rowspan="8"><img src="{{ asset('storage/images/' . $dealership->image_location) }}" width="150"/></td>
                  </tr>
                  <tr>
                  <td>Manfacturer</td>
                                    <td>{{$dealership->Manufacturer }}</td>
                                </tr>
                                <tr>
                                    <td>model</td>
                                    <td>{{$dealership->model }}</td>
                                </tr>
                                <tr>
                                    <td>year</td>
                                    <td>{{$dealership->year }}</td>
                                </tr>
                                <tr>
                                    <td>engine</td>
                                    <td>{{$dealership->engine }}</td>
                                </tr>
                                <tr>
                                    <td>drivetrain</td>
                                    <td>{{$dealership->drivetrain }}</td>
                                </tr>
                                <tr>
                                    <td>color</td>
                                    <td>{{$dealership->color }}</td>
                                </tr>
                                <tr>
                                    <td>dealership_location</td>
                                    <td>{{$dealership->dealership_location }}</td>
                                </tr><tr>
                                    <td>dealership_number</td>
                                    <td>{{$dealership->dealership_number }}</td>
                                </tr>
                          
</tr>  
                </tbody>
              </table>

              <a href="{{ route('user.dealership.index') }}" class="btn btn-default">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
