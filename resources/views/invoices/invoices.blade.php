@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>INVOICES</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='New Invoice') ? 'active':'' }}" href="{{ url('/invoice') }}">
                <div class="form-group">
                  <button style="cursor:pointer" type="submit" class="btn btn-primary">New Invoice</button>
                </div>
              </a>
            </div>
            <div class="row">
                <div class="col-12">
                <div class="table-responsive">
                <table id="showBooksIn" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Name</th>
                            <th>Adress</th>
                            <th>Amount Due</th>
                            <th>Amount Paid</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    @foreach($invoices as $row)
                    <tr>
                        <td>{{$row['order_id']}}</td>
                        <td>{{$row['order_receiver_name']}}</td>
                        <td>{{$row['order_receiver_adress']}}</td>
                        <td>{{$row['order_total_amount_due']}}</td>
                        <td>{{$row['order_total_amount_paid']}}</td>
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