@include('package.header')

<style>
  body {
    font-family: Arial, sans-serif;
    background: url('path_to_your_background_image.jpg') no-repeat center center fixed;
    background-size: cover;
  }

  .container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
  }


  h2,
  h3 {
    color: #4a4a4a;
    text-align: center;
    padding: 10px;
  }

  h2 {
    background-color: blueviolet;
    color: white;
    border-radius: 10px;
  }



  .logout-container {
    display: flex;
    justify-content: flex-end;
    padding: 10px;
  }

  .logout-button {
    background-color: #dc3545;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .logout-button:hover {
    background-color: #c82333;
  }



  .table {
    margin-bottom: 30px;
  }

  .progress {
    height: 25px;
    margin: 20px 0;
  }

  .progress-bar {
    background-color: #dc3545;
  }

  .bs4-order-tracking {
    margin-bottom: 30px;
    overflow: hidden;
    color: #878788;
    padding-left: 0;
    margin-top: 30px;
  }

  .bs4-order-tracking li {
    list-style-type: none;
    font-size: 13px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400;
    color: #878788;
    text-align: center;
  }

  .bs4-order-tracking li:first-child:before {
    margin-left: 15px !important;
    padding-left: 11px !important;
    text-align: left !important;
  }

  .bs4-order-tracking li:last-child:before {
    margin-right: 5px !important;
    padding-right: 11px !important;
    text-align: right !important;
  }

  .bs4-order-tracking li>div {
    color: #fff;
    width: 29px;
    text-align: center;
    line-height: 29px;
    display: block;
    font-size: 12px;
    background: #878788;
    border-radius: 50%;
    margin: auto;
  }

  .bs4-order-tracking li:after {
    content: '';
    width: 150%;
    height: 2px;
    background: #878788;
    position: absolute;
    left: 0%;
    right: 0%;
    top: 15px;
    z-index: -1;
  }

  .bs4-order-tracking li:first-child:after {
    left: 50%;
  }

  .bs4-order-tracking li:last-child:after {
    left: 0% !important;
    width: 0% !important;
  }

  .bs4-order-tracking li.active {
    font-weight: bold;
    color: #dc3545;
  }

  .bs4-order-tracking li.active>div {
    background: #dc3545;
  }

  .bs4-order-tracking li.active:after {
    background: #dc3545;
  }

  .card-timeline {
    background-color: #fff;
    z-index: 0;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
  }

  @media (max-width: 768px) {
    .bs4-order-tracking li {
      width: 100%;
      text-align: left;
      padding-left: 40px;
    }

    .bs4-order-tracking li:after {
      width: 100%;
      left: 0;
    }

    .bs4-order-tracking li:first-child:after {
      left: 0;
      width: 50%;
    }
  }
</style>
<div class="logout-container">
  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="logout-button">Back</button>
  </form>
</div>

<div class="container">
  <h3>Welcome {{ $package->receiver_name ?? 'Valued Customer' }}</h3>
  <h2><b>Tracking Number: </b><b style="color: powderblue;">{{ $package->tracking_number ?? 'Not Available' }}</b>
  </h2>

  <center>
    @if ($package->location_coordinates)
    <iframe src="https://www.google.com/maps/embed?pb={{ urlencode($package->location_coordinates) }}" width="600"
      height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    @else
    {!! $package->locale !!}
    @endif
  </center>


  @if($package->parcel_status == "On Hold")
  <div class="card card-timeline">
    <ul class="bs4-order-tracking">
      <li class="step active">
        <div><i class="fas fa-user"></i></div>
        Order Placed
      </li>
      <li class="step active">
        <div><i class="fas fa-bread-slice"></i></div>
        In transit
      </li>
      <li class="step active">
        <div><i class="fas fa-truck"></i></div>
        On Hold
      </li>
      <li class="step">
        <div><i class="fas fa-birthday-cake"></i></div>
        Delivered
      </li>
    </ul>
    <h5 class="text-center"><b>{{ $package->parcel_status }}</b>. The order is On Hold.</h5>
  </div>
  @elseif($package->parcel_status == "In Transit")
  <div class="card card-timeline">
    <ul class="bs4-order-tracking">
      <li class="step active">
        <div><i class="fas fa-user"></i></div>
        Order Placed
      </li>
      <li class="step active">
        <div><i class="fas fa-bread-slice"></i></div>
        In transit
      </li>
      <li class="step">
        <div><i class="fas fa-birthday-cake"></i></div>
        Delivered
      </li>
    </ul>
    <h5 class="text-center"><b>{{ $package->parcel_status }}</b>. The order has been shipped!</h5>
  </div>
  @elseif($package->parcel_status == "Delivered")
  <div class="card card-timeline">
    <ul class="bs4-order-tracking">
      <li class="step active">
        <div><i class="fas fa-user"></i></div>
        Order Placed
      </li>
      <li class="step active">
        <div><i class="fas fa-bread-slice"></i></div>
        In transit
      </li>
      <li class="step active">
        <div><i class="fas fa-birthday-cake"></i></div>
        Delivered
      </li>
    </ul>
    <h5 class="text-center"><b>{{ $package->parcel_status }}</b>. The order has been delivered successfully.</h5>
  </div>
  @elseif($package->parcel_status == "Failed")
  <div class="card card-timeline">
    <ul class="bs4-order-tracking">
      <li class="step active">
        <div><i class="fas fa-user"></i></div>
        Order Placed
      </li>
      <li class="step active">
        <div><i class="fas fa-bread-slice"></i></div>
        In transit
      </li>
      <li class="step">
        <div><i class="fas fa-truck"></i></div>
        Failed
      </li>
      <li class="step">
        <div><i class="fas fa-birthday-cake"></i></div>
        Delivered
      </li>
    </ul>
    <h5 class="text-center"><b>{{ $package->parcel_status }}</b>. Sorry!!, Delivery Failed.</h5>
  </div>
  @endif

  <div class="progress">
    <div id="dynamic-progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
      aria-valuemin="0" aria-valuemax="100"></div>
  </div>

  <marquee>Your Package is {{ $package->parcel_status ?? 'in unknown status' }}</marquee>

  <div class="row">
    <div class="col-md-6">
      <div class="container mt-3">
        <h2>Sender's Details</h2>
        <table class="table table-bordered table-sm">
          <tbody>
            <tr>
              <td><b>Name:</b></td>
              <td>{{ $package->sender_name ?? 'N/A' }}</td>
            </tr>
            <!--<tr>-->
            <!--  <td><b>Email:</b></td>-->
            <!--  <td>{{ $package->sender_email ?? 'N/A' }}</td>-->
            <!--</tr>-->
            <!--<tr>-->
            <!--  <td><b>Address:</b></td>-->
            <!--  <td>{{ $package->sender_address ?? 'N/A' }}</td>-->
            <!--</tr>-->
          </tbody>
        </table>
      </div>
    </div>

    <div class="col-md-6">
      <div class="container mt-3">
        <h2>Receiver's Details</h2>
        <table class="table table-bordered table-sm">
          <tbody>
            <tr```blade <td><b>Name:</b></td>
              <td>{{ $package->receiver_name ?? 'N/A' }}</td>
              </tr>
              <tr>
                <td><b>Contact:</b></td>
                <td>{{ $package->receiver_phone ?? 'N/A' }}</td>
              </tr>
              <tr>
                <td><b>Email:</b></td>
                <td>{{ $package->receiver_email ?? 'N/A' }}</td>
              </tr>
              <tr>
                <td><b>Address:</b></td>
                <td>{{ $package->receiver_address ?? 'N/A' }}</td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="container mt-3">
    <h2>More Details</h2>
    <table class="table table-bordered table-sm">
      <tbody>
        <tr>
          <td><b>Parcel Description:</b></td>
          <td>{{ $package->parcel_description ?? 'N/A' }}</td>
        </tr>
        <tr>
          <td><b>Dispatch Location:</b></td>
          <td>{{ $package->dispatch_location ?? 'N/A' }}</td>
        </tr>
        <tr>
          <td><b>Courier Status:</b></td>
          <td>{{ $package->parcel_status ?? 'N/A' }}</td>
        </tr>
        <tr>
          <td><b>Dispatch Date:</b></td>
          <td>{{ $package->dispatch_date ? \Carbon\Carbon::parse($package->dispatch_date)->format('D, M j, Y
            g:i A') :
            'N/A' }}</td>
        </tr>
        <tr>
          <td><b>Current Location:</b></td>
          <td>{{ $package->current_location ?? 'N/A' }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<script>
  // Function to generate a random percentage between 0 and 100
    function getRandomPercentage() {
        return Math.floor(Math.random() * 101);
    }

    // Set the random percentage to the progress bar
    function setRandomPercentage() {
        var progressBar = document.getElementById('dynamic-progress-bar');
        var randomPercentage = getRandomPercentage();

        progressBar.style.width = randomPercentage + '%';
        progressBar.setAttribute('aria-valuenow', randomPercentage);
    }

    // Call the function to set the initial random percentage
    setRandomPercentage();
</script>

@include('package.footer')