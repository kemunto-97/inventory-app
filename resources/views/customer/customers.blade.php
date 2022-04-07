@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>CUSTOMERS</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='Add Customer') ? 'active':'' }}" href="{{ url('/customer') }}">
                <div class="form-group">
                  <button style="cursor:pointer" type="submit" class="btn btn-primary">Add Customer</button>
                </div>
              </a>
            </div>
            <div class="row">
                <div class="col-12">
                <div class="table-responsive">
                <table id="showBooksIn" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    @foreach($customer as $row)
                    <tr>
                        <td>{{$row['customer_id']}}</td>
                        <td>{{$row['name']}}</td>
                        <td>{{$row['phone']}}</td>
                        <td>{{$row['created_at']}}</td>
                    </tr>
                    @endforeach
                </table>
                </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>

@endsection