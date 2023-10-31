@extends('layout.layout')

@section('content')

@if(Session::has('status'))
<div class="alert alert-success">{{ Session::get('status') }}</div>
@endif

<style>
@media only screen and (max-width: 900px) {
  .card {
    margin: 0 auto;
    max-width: 80%;
  }
}

@media only screen and (max-width: 600px) {
  .card {
    margin: 0 auto;
    max-width: 90%;
  }

  .card-title {
    font-size: 30px;
  }
}

@media only screen and (max-width: 400px) {
  .card {
    margin: 0 auto;
    max-width: 95%;
  }

  .card-title {
    font-size: 24px;
  }
}
</style>

<div class="container">
  <br><br>
  <form action="{{ route('send.email') }}" method="POST">
    @csrf
    <div class="card" style="border-radius: 10px;">
      <div class="row no-gutters">
        <div class="col-md-6" style="background-image: url(/img/Screenshot.png); background-repeat: no-repeat; background-size: cover; border-radius: 10px 0 0 10px;"></div>
        <div class="col-md-6" style="background-color: white; border-radius: 0 10px 10px 0;">
          <div class="card-body"  style="background-color: #f8f9fa; border-radius: 0 10px 10px 0;margin-top:10rem;margin-bottom:10rem;">
            <h5 class="card-title" style="font-weight: bold;font-size:40px;" >Get in touch today</h5><br>
            <p class="card-text">If you're interested in learning more about our products or services, don't hesitate to get in touch with us today. Our team is always available to answer any questions or provide additional information to help you make an informed decision.</p>
            
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="Name" id="name" placeholder="Nama">
            </div>
            
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="Email" id="email" placeholder="name@example.com">
            </div>
            
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" name="Subject" id="subject" placeholder="Subject">
            </div>
            
            <div class="form-group">
              <label for="message">Leave us a Message</label>
              <textarea class="form-control" name="Message" id="message" rows="3" placeholder="Message"></textarea>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<br><br>
@endsection