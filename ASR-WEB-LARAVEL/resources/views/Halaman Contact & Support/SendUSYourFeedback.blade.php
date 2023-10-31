@extends('layout.layout')

@section('content')

<style>
@media only screen and (max-width: 900px) {
  #feedback .card {
    border-radius: 10px;
  }
}

@media only screen and (max-width: 600px) {
  #feedback .card .feedback-form {
    padding: 20px;
  }
}

@media only screen and (max-width: 400px) {
  #feedback .card .feedback-form h2 {
    font-size: 24px;
  }
}

#feedback {
  background-image: url({{ asset('/img/Screenshot.png') }});
  background-size: cover;
  background-repeat: no-repeat;
}

#feedback .card {
  border: none;
  background: rgba(255, 255, 255, 0.8);
  margin-top: 50px;
  margin-bottom: 50px;
}

#feedback .card .feedback-form {
  padding: 40px;
}

#feedback .card .feedback-form h2 {
  font-weight: bold;
}

#feedback .card .feedback-form h5 {
  margin-top: 20px;
  margin-bottom: 20px;
}

#feedback .card .form-group {
  margin-bottom: 20px;
}

#feedback .card .form-group label {
  font-weight: bold;
}

#feedback .card .form-control {
  border-radius: 8px;
}

#feedback .card .btn-primary {
  border-radius: 8px;
}
</style>

<section id="feedback" class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <form action="{{ route('email.send') }}" method="POST">
          <div class="card" >
            <div class="feedback-form">
              <h2>Send Us Your Feedback</h2>
              <h5>We value your feedback and would love to hear from you! Whether you have a suggestion, complaint, or any other feedback, please use the form below to share your thoughts with us. Your feedback is essential in helping us improve our services and ensure customer satisfaction. Thank you for taking the time to provide your valuable feedback.</h5>
              
              @csrf
              
              <div class="form-group">
                <label for="complaint">What best describes the reason you're contacting us today?</label>
                <select class="form-control" id="complaint" name="Subject">
                  <option value="Saran">Saran</option>
                  <option value="Keluhan">Keluhan</option>
                  <option value="Masalah">Masalah</option>
                  <option value="Pendaftaran">Pendaftaran</option>
                  <option value="Pembayaran">Pembayaran</option>
                  <option value="Program ASR">Program ASR</option>
                  <option value="Bug di website">Bug di Website</option>
                </select>
                @error('Subject')
                <div class="alert alert-danger">
                  {{ $message }}
                </div>
                @enderror
              </div>
              
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="Name" required>
                  </div>
                  @error('Name')
                  <div class="alert alert-danger">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="Email" required>
                    @error('Email')
                    <div class="alert alert-danger">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label for="message">Leave us a message:</label>
                <textarea class="form-control" id="message" name="Message" rows="5" required></textarea>
                @error('Message')
                <div class="alert alert-danger">
                  {{ $message }}
                </div>
                @enderror
              </div>
              
              <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

@endsection
