@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>ORDERS</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='New Order') ? 'active':'' }}" href="{{ url('/order') }}">
                <div class="form-group">
                  <button style="cursor:pointer" type="submit" class="btn btn-primary">Add New Order</button>
                </div>
              </a>
            </div>
            <div class="row">
                <div class="col-12">
                <div class="table-responsive">
                <table id="showBooksIn" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $row)
                    <tr>
                        <td>{{$row['product_id']}}</td>
                        <td>{{$row['product_name']}}</td>
                        <td>{{$row['product_price']}}</td>
                        <td>{{$row['created_at']}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>

@endsection