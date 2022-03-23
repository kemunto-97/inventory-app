@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>EXPENSES</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="row">
                <div class="col-12">
                <div class="table-responsive">
                <table id="showBooksIn" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Expense</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    @foreach($expenses as $row)
                    <tr>
                        <td>{{$row['expense']}}</td>
                        <td>{{$row['amount']}}</td>
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