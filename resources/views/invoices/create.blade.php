@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>New Invoice</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="/addinvoice">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id">Order ID:</label>
                            <input type="number" class="form-control" id="order_id" name="order_id">
                        </div>

                        <div class="form-group">
                            <label for="name">Receiver Name:</label>
                            <select name="method" class="form-control" id="method" required>
                                @foreach($names as $row)
                                    <option value="{{$row['id']}}">{{$row['name']}}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Receiver Adress:</label>
                            <input type="text" class="form-control" id="order_receiver_adress" name="order_receiver_adress">
                        </div>

                        <div class="form-group">
                            <label for="amount">Total Amount Due:</label>
                            <input type="number" class="form-control" id="order_total_amount_due" name="order_total_amount_due">
                        </div>

                        <div class="form-group">
                            <label for="amount">Total Amount Paid:</label>
                            <input type="number" class="form-control" id="order_total_amount_paid" name="order_total_amount_paid">
                        </div>

                        <div class="form-group">
                            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>

@endsection