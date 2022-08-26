@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class='row'>
                <div class= 'col-md-12'>
                    <div class="card">
                        <div class ="card-header">
                            Vehicle
                        </div>
                        <div class="card-body">
                            @if (count($dealerships)=== 0)
                            <p>There are no Vehicle Entries</p>
                            @else
                            <table id="table-dealerships" class="table table-hover">
                                <thead>
                                    <th>Manufacturer</th>
                                    <th>model</th>
                                    <th>year</th>
                                    <th>engine</th>
                                    <th>drivetrain</th>
                                    <th>color</th>
                                    <th>dealership_location</th>
                                    <th>dealership_number</th>
                                </thead>
                                <tbody>
                            @foreach ($dealerships as $dealership)
                            <tr data-id="{{$dealership->id}}">
                                <td>{{ $dealership->Manufacturer}}</td>
                                <td>{{ $dealership->model}}</td>
                                <td>{{ $dealership->year}}</td>
                                <td>{{ $dealership->engine}}</td>
                                <td>{{ $dealership->drivetrain}}</td>
                                <td>{{ $dealership->color}}</td>
                                <td>{{ $dealership->dealership_location}}</td>
                                <td>{{ $dealership->dealership_number}}</td>
                                <td>
                                    <a href="{{ route('user.dealership.show', $dealership->id) }}" class ="btn btn-primary">View</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection