@include('dashboard.header')
<div class="main-content">

<div class="page-content" style="float:center;">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">All Transaction</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->



             <div class="col-lg-12">
                <div class="card" style="border-top-left-radius:20px; border-top-right-radius: 20px;">
                    <div class="card-body" style="border-radius-right: 100px;">
                        <h4 class="card-title mb-4">Recent Transactions</h4>
                        
                         <div class="container mt-5">

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Transaction Type</th>
                         <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($transaction as $transaction)
                        <tr>
                            <th scope="row">{{ $transaction->id }}</th>
                            <td>{{ $transaction->transaction_type }}</td>
                            <th scope="row">${{number_format($transaction->transaction_amount, 2, '.', ',')}}</th>
                            <td>
                                @if($transaction->status==='1')
                                <button type="button" class="btn btn-success">Approved</button>
                                @else
                              <button type="button" class="btn btn-danger">Pending..</button>
                                 @endif
                            </td>
                            <td> {{ \Carbon\Carbon::parse($transaction->created_at)->format('D, M j, Y g:i A') }}</td>
                            
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2"> No Record Found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                         
                        
                    </div>
                </div>
            </div>
        </div>
@include('dashboard.footer')
