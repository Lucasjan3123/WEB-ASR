@extends('layouts.app')

@section('content')


<div class="container">
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #f5f5f5">
        <style scoped>
          @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    
          .content-4-1 .btn:focus,
          .content-4-1 .btn:active {
            outline: none !important;
          }
    
          .content-4-1 .width-left {
            width: 0%;
          }
    
          .content-4-1 .width-right {
            width: 100%;
            height: 100%;
            padding: 8rem 2rem;
            background-color: #fcfdff;
          }
    
          .content-4-1 .centered {
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
          }
    
          .content-4-1 .right {
            width: 100%;
          }
    
          .content-4-1 .title-text {
            font: 600 1.875rem/2.25rem Poppins, sans-serif;
            margin-bottom: 0.75rem;
          }
    
          .content-4-1 .caption-text {
            font: 400 0.875rem/1.75rem Poppins, sans-serif;
            color: #a8adb7;
          }
    
          .content-4-1 .input-label {
            font: 500 1.125rem/1.75rem Poppins, sans-serif;
            color: #39465b;
          }
    
          .content-4-1 .div-input {
            font: 300 1rem/1.5rem Poppins, sans-serif;
            padding: 1rem 1.25rem;
            margin-top: 0.75rem;
            border-radius: 0.75rem;
            border: 1px solid #cacbce;
            color: #2a3240;
            transition: 0.3s;
          }
    
          .content-4-1 .div-input:focus-within {
            border: 1px solid #2ec49c;
            color: #2a3240;
            transition: 0.3s;
          }
    
          .content-4-1 .div-input input::placeholder {
            color: #cacbce;
            transition: 0.3s;
          }
    
          .content-4-1 .div-input:focus-within input::placeholder {
            color: #2a3240;
            outline: none;
            transition: 0.3s;
          }
    
          .content-4-1 .div-input .icon-toggle-empty-4-1 path,
          .content-4-1 .div-input:focus-within .icon path {
            transition: 0.3;
            fill: #2ec49c;
            transition: 0.3s;
          }
    
          .content-4-1 .input-field {
            font: 300 1rem/1.5rem Poppins, sans-serif;
            width: 100%;
            background-color: #fcfdff;
            transition: 0.3s;
          }
    
          .content-4-1 .input-field:focus {
            outline: none;
            transition: 0.3s;
          }
    
          .content-4-1 .forgot-password {
            font: 400 0.875rem/1.25rem Poppins, sans-serif;
            color: #cacbce;
            transition: 0.3s;
            text-decoration: none;
          }
    
          .content-4-1 .forgot-password:hover {
            color: #2a3240;
          }
    
          .content-4-1 .btn-fill {
            font: 500 1.25rem/1.75rem Poppins, sans-serif;
            background-image: linear-gradient(rgba(91, 203, 173, 1),
                rgba(39, 194, 153, 1));
            padding: 0.75rem 1rem;
            margin-top: 2.25rem;
            border-radius: 0.75rem;
            transition: 0.5s;
          }
    
          .content-4-1 .btn-fill:hover {
            background-image: linear-gradient(#2ec49c, #2ec49c);
            transition: 0.5s;
          }
    
          .content-4-1 .bottom-caption {
            font: 400 0.875rem/1.25rem Poppins, sans-serif;
            margin-top: 2rem;
            color: #2a3240;
          }
    
          .content-4-1 .green-bottom-caption {
            color: #2ec49c;
            font-weight: 500;
          }
    
          .content-4-1 .green-bottom-caption:hover {
            color: #2ec49c;
            cursor: pointer;
            text-decoration: underline;
          }
    
          @media (min-width: 576px) {
            .content-4-1 .width-right {
              padding: 8rem 4rem;
            }
    
            .content-4-1 .right {
              width: 58.333333%;
            }
          }
    
          @media (min-width: 768px) {
            .content-4-1 .right {
              width: 66.666667%;
            }
          }
    
          @media (min-width: 992px) {
            .content-4-1 .width-left {
              width: 48%;
            }
    
            .content-4-1 .width-right {
              width: 52%;
            }
    
            .content-4-1 .right {
              width: 75%;
            }
          }
    
          @media (min-width: 1200px) {
            .content-4-1 .right {
              width: 58.333333%;
            }
          }
        </style>
        <div class="content-4-1 d-flex flex-column align-items-center h-100 flex-lg-row"
          style="font-family: 'Poppins', sans-serif">
          <div class="position-relative d-none d-lg-block h-100 width-left">
            <img class="position-absolute img-fluid centered"
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-11.png"
              alt="" />
          </div>
          <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0">
            <div class="right mx-lg-0 mx-auto">
              <div class="align-items-center justify-content-center d-lg-none d-flex">
                <img class="img-fluid"
                  src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-11.png"
                  alt="" />
              </div>
              <h3 class="title-text">Register</h3>
              <p class="caption-text">
                Let's get you all set up so you can verify your personal account and begin setting up your profile
              </p>
              <form style="margin-top: 1.5rem" method="POST" action="{{ route('register') }}">
                @csrf

                <div style="margin-bottom: 1.75rem">
                  <label for="name" class="d-block input-label">{{ __('Name') }}</label>
                  <div class="d-flex w-100 div-input">
                    <svg  class="icon" style="color: rgb(206, 206, 206);" height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><path d="m7.5.5c1.65685425 0 3 1.34314575 3 3v2c0 1.65685425-1.34314575 3-3 3s-3-1.34314575-3-3v-2c0-1.65685425 1.34314575-3 3-3zm7 14v-.7281753c0-3.1864098-3.6862915-5.2718247-7-5.2718247s-7 2.0854149-7 5.2718247v.7281753c0 .5522847.44771525 1 1 1h12c.5522847 0 1-.4477153 1-1z" fill="#cecece" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(3 2)"></path></svg> 
                    <input id="name" class="input-field border-0 @error('name') is-invalid @enderror"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                  </div>
                </div>

                <div style="margin-bottom: 1.75rem">
                  <label for="email"  class="d-block input-label">{{ __('Email Address') }}</label>
                  <div class="d-flex w-100 div-input">
                    <svg class="icon" style="margin-right: 1rem" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M5 5C3.34315 5 2 6.34315 2 8V16C2 17.6569 3.34315 19 5 19H19C20.6569 19 22 17.6569 22 16V8C22 6.34315 20.6569 5 19 5H5ZM5.49607 7.13174C5.01655 6.85773 4.40569 7.02433 4.13168 7.50385C3.85767 7.98337 4.02427 8.59422 4.50379 8.86823L11.5038 12.8682C11.8112 13.0439 12.1886 13.0439 12.4961 12.8682L19.4961 8.86823C19.9756 8.59422 20.1422 7.98337 19.8682 7.50385C19.5942 7.02433 18.9833 6.85773 18.5038 7.13174L11.9999 10.8482L5.49607 7.13174Z"
                        fill="#CACBCE" />
                    </svg>
                    <input class="input-field border-0 @error('email') is-invalid @enderror" type="email"  id="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                  </div>
                </div>
                <div style="margin-top: 1rem">
                  <label for="password" class="d-block input-label">{{ __('Password') }}</label>
                  <div class="d-flex w-100 div-input">
                    <svg class="icon" style="margin-right: 1rem" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.81592 4.25974C7.12462 5.48872 7 6.95088 7 8H6C4.34315 8 3 9.34315 3 11V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V11C21 9.34315 19.6569 8 18 8L17 7.99998C17 6.95087 16.8754 5.48871 16.1841 4.25973C15.829 3.62845 15.3194 3.05012 14.6031 2.63486C13.8875 2.22005 13.021 2 12 2C10.979 2 10.1125 2.22005 9.39691 2.63486C8.68058 3.05012 8.17102 3.62845 7.81592 4.25974ZM9.55908 5.24026C9.12538 6.01128 9 7.04912 9 8H15C15 7.04911 14.8746 6.01129 14.4409 5.24027C14.2335 4.87155 13.9618 4.57488 13.6 4.36514C13.2375 4.15495 12.729 4 12 4C11.271 4 10.7625 4.15495 10.4 4.36514C10.0382 4.57488 9.76648 4.87155 9.55908 5.24026ZM14 14C14 14.7403 13.5978 15.3866 13 15.7324V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V15.7324C10.4022 15.3866 10 14.7403 10 14C10 12.8954 10.8954 12 12 12C13.1046 12 14 12.8954 14 14Z"
                        fill="#CACBCE" />
                    </svg>
                    <input class="input-field border-0  @error('password') is-invalid @enderror" type="password" type="password" id="password-content-4-1"
                    name="password" required autocomplete="new-password" minlength="6" required />

                     @error('password')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                    @enderror

                    <div onclick="togglePassword()">
                      <svg style="margin-left: 0.75rem; cursor: pointer" width="20" height="14" viewBox="0 0 20 14"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="icon-toggle" fill-rule="evenodd" clip-rule="evenodd"
                          d="M0 7C0.555556 4.66667 3.33333 0 10 0C16.6667 0 19.4444 4.66667 20 7C19.4444 9.52778 16.6667 14 10 14C3.31853 14 0.555556 9.13889 0 7ZM10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9C11.1046 9 12 8.10457 12 7C12 6.90536 11.9934 6.81226 11.9807 6.72113C12.2792 6.89828 12.6277 7 13 7C13.3608 7 13.6993 6.90447 13.9915 6.73732C13.9971 6.82415 14 6.91174 14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C10.6389 3 11.2428 3.14979 11.7786 3.41618C11.305 3.78193 11 4.35535 11 5C11 5.09464 11.0066 5.18773 11.0193 5.27887C10.7208 5.10171 10.3723 5 10 5Z"
                          fill="#CACBCE" />
                      </svg>
                    </div>
                  </div>
                  
                </div>
                <br>
                <div style="margin-top: 1rem">
                    <label for="password-confirm" class="d-block input-label">{{ __('Confirm Password') }}</label>
                    <div class="d-flex w-100 div-input">
                        <svg class="icon" style="color: rgb(123, 247, 214);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-lock-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" fill="#CACBCE"></path> </svg> 
                        &ensp;&ensp; <input class="input-field border-0" id="password-confirm" type="password"
                      name="password_confirmation" required autocomplete="new-password" />
  
                       @error('password')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                      @enderror
  
                      <div onclick="togglePasswords()">
                        <svg style="margin-left: 0.75rem; cursor: pointer" width="20" height="14" viewBox="0 0 20 14"
                          fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path id="icon-toggles" fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 7C0.555556 4.66667 3.33333 0 10 0C16.6667 0 19.4444 4.66667 20 7C19.4444 9.52778 16.6667 14 10 14C3.31853 14 0.555556 9.13889 0 7ZM10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9C11.1046 9 12 8.10457 12 7C12 6.90536 11.9934 6.81226 11.9807 6.72113C12.2792 6.89828 12.6277 7 13 7C13.3608 7 13.6993 6.90447 13.9915 6.73732C13.9971 6.82415 14 6.91174 14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C10.6389 3 11.2428 3.14979 11.7786 3.41618C11.305 3.78193 11 4.35535 11 5C11 5.09464 11.0066 5.18773 11.0193 5.27887C10.7208 5.10171 10.3723 5 10 5Z"
                            fill="#CACBCE" />
                        </svg>
                      </div>
                    </div>
                    
                  </div>

                  <div style="margin-bottom: 1.75rem">
                    <label for="twitter" class="d-block input-label">{{ __('twitter') }}</label>
                    <div class="d-flex w-100 div-input">
                      <svg  class="icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                      width="24" height="24"
                      viewBox="0,0,256,256"
                      style="fill:#000000;">
                      <g fill="#7bf7d6" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8,8)"><path d="M28,8.55859c-0.88281,0.39063 -1.83203,0.65625 -2.82812,0.77344c1.01563,-0.60937 1.79688,-1.57422 2.16406,-2.72266c-0.94922,0.5625 -2.00391,0.97266 -3.125,1.19531c-0.89844,-0.95703 -2.17969,-1.55859 -3.59375,-1.55859c-2.71875,0 -4.92578,2.20703 -4.92578,4.92578c0,0.38672 0.04297,0.76172 0.12891,1.12109c-4.09375,-0.20312 -7.72266,-2.16406 -10.14844,-5.14453c-0.42578,0.72656 -0.66797,1.57422 -0.66797,2.47656c0,1.70703 0.86719,3.21484 2.19141,4.09766c-0.80859,-0.02734 -1.56641,-0.24609 -2.23047,-0.61719c0,0.02344 0,0.04297 0,0.0625c0,2.38672 1.69531,4.37891 3.94922,4.82813c-0.41406,0.11328 -0.84766,0.17578 -1.29688,0.17578c-0.31641,0 -0.62891,-0.03125 -0.92578,-0.08984c0.625,1.95703 2.44531,3.37891 4.59766,3.42188c-1.68359,1.32031 -3.80859,2.10547 -6.11328,2.10547c-0.39844,0 -0.78906,-0.02344 -1.17578,-0.07031c2.17969,1.39844 4.76563,2.21484 7.54688,2.21484c9.05859,0 14.01172,-7.50391 14.01172,-14.01172c0,-0.21094 -0.00781,-0.42578 -0.01562,-0.63672c0.96094,-0.69531 1.79688,-1.5625 2.45703,-2.54687z"fill="#CACBCE"></path></g></g>
                      </svg>
                      {{-- <svg style="color: rgb(123, 247, 214);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16"> <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" fill="#7bf7d6"></path> </svg>  --}}
                      &ensp;&ensp;   <input id="twitter" class="input-field border-0 @error('twitter') is-invalid @enderror"  name="twitter" value="{{ old('twitter') }}" required autocomplete="twitter" autofocus />
                      @error('twitter')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
  
  
                    </div>
                  </div>

                  <div style="margin-bottom: 1.75rem">
                    <label for="instagram" class="d-block input-label">{{ __('instagram') }}</label>
                    <div class="d-flex w-100 div-input">
                      <svg class="icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                      width="24" height="24"
                      viewBox="0,0,256,256"
                      style="fill:#000000;">
                      <g fill="#7bf7d6" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M9.99805,3c-3.859,0 -6.99805,3.14195 -6.99805,7.00195v10c0,3.859 3.14195,6.99805 7.00195,6.99805h10c3.859,0 6.99805,-3.14195 6.99805,-7.00195v-10c0,-3.859 -3.14195,-6.99805 -7.00195,-6.99805zM22,7c0.552,0 1,0.448 1,1c0,0.552 -0.448,1 -1,1c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1zM15,9c3.309,0 6,2.691 6,6c0,3.309 -2.691,6 -6,6c-3.309,0 -6,-2.691 -6,-6c0,-3.309 2.691,-6 6,-6zM15,11c-2.20914,0 -4,1.79086 -4,4c0,2.20914 1.79086,4 4,4c2.20914,0 4,-1.79086 4,-4c0,-2.20914 -1.79086,-4 -4,-4z" fill="#CACBCE"></path></g></g>
                      </svg>
                      {{-- <svg style="color: rgb(123, 247, 214);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><rect width="16" height="16" fill="currentColor"></rect><circle cx="128" cy="128" r="32"></circle><path d="M172,28H84A56,56,0,0,0,28,84v88a56,56,0,0,0,56,56h88a56,56,0,0,0,56-56V84A56,56,0,0,0,172,28ZM128,176a48,48,0,1,1,48-48A48,48,0,0,1,128,176Zm52-88a12,12,0,1,1,12-12A12,12,0,0,1,180,88Z" fill="#7bf7d6"></path></svg>  --}}
                      &ensp;&ensp;  <input id="instagram" class="input-field border-0 @error('instagram') is-invalid @enderror"  name="instagram" value="{{ old('instagram') }}" required autocomplete="instagram" autofocus />
                      @error('instagram')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
  
  
                    </div>
                  </div>

                  <div style="margin-bottom: 1.75rem">
                    <label for="facebook" class="d-block input-label">{{ __('Facebook') }}</label>
                    <div class="d-flex w-100 div-input">
                      <svg class="icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                      width="24" height="24"
                      viewBox="0,0,256,256"
                      style="fill:#000000;">
                      <g fill="#7bf7d6" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M12,2c-5.523,0 -10,4.477 -10,10c0,5.013 3.693,9.153 8.505,9.876v-7.226h-2.474v-2.629h2.474v-1.749c0,-2.896 1.411,-4.167 3.818,-4.167c1.153,0 1.762,0.085 2.051,0.124v2.294h-1.642c-1.022,0 -1.379,0.969 -1.379,2.061v1.437h2.995l-0.406,2.629h-2.588v7.247c4.881,-0.661 8.646,-4.835 8.646,-9.897c0,-5.523 -4.477,-10 -10,-10z" fill="#CACBCE" ></path></g></g>
                      </svg>
                      {{-- <svg style="color: rgb(123, 247, 214);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><rect width="16" height="16" fill="currentColor"></rect><path d="M232,128a104.3,104.3,0,0,1-91.5,103.3,4.1,4.1,0,0,1-4.5-4V152h24a8,8,0,0,0,8-8.5,8.2,8.2,0,0,0-8.3-7.5H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,8-8.5,8.2,8.2,0,0,0-8.3-7.5H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0-8,8.5,8.2,8.2,0,0,0,8.3,7.5H120v75.3a4,4,0,0,1-4.4,4C62.8,224.9,22,179,24.1,124.1A104,104,0,0,1,232,128Z" fill="#7bf7d6"></path></svg> --}}
                      &ensp;&ensp;   <input id="facebook" class="input-field border-0 @error('facebook') is-invalid @enderror"  name="facebook" value="{{ old('facebook') }}" required autocomplete="facebook" autofocus />
                      @error('facebook')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
  
  
                    </div>
                  </div>

                  {{-- <div style="margin-bottom: 1.75rem">
                    <label for="foto" class="d-block input-label">{{ __('Foto profile') }}</label>
                    <div class="d-flex w-100 div-input">
                      <svg class="icon" style="color: rgb(123, 247, 214);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16"> <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" fill="#CACBCE"></path> </svg>
                   &ensp;&ensp;   <input type="file" id="foto" class="input-field border-0 @error('foto') is-invalid @enderror"  name="foto" value="{{ old('foto') }}" required autocomplete="foto" autofocus />
                      @error('foto')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
  
  
                    </div>
                  </div> --}}
                
                <button class="btn btn-fill text-white d-block w-100" type="submit">
                  Register
                </button>
              </form>
              <p class="text-center bottom-caption">
                Already have an account ?
                <span class="green-bottom-caption" ><a href="{{ url('/') }}"> Log in </a> </span>
              </p>
            </div>
          </div>
        </div>
    
        <!-- Password toggle -->
        <script>
          function togglePassword() {
            var x = document.getElementById("password-content-4-1");
            if (x.type === "password") {
              x.type = "text";
              document
                .getElementById("icon-toggle")
                .setAttribute("fill", "#2ec49c");
            } else {
              x.type = "password";
              document
                .getElementById("icon-toggle")
                .setAttribute("fill", "#CACBCE");
            }
          }


          function togglePasswords() {
            var x = document.getElementById("password-confirm");
            if (x.type === "password") {
              x.type = "text";
              document
                .getElementById("icon-toggles")
                .setAttribute("fill", "#2ec49c");
            } else {
              x.type = "password";
              document
                .getElementById("icon-toggles")
                .setAttribute("fill", "#CACBCE");
            }
          }
        </script>
      </section>
</div>
@endsection

