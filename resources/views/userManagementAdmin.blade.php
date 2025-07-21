@extends('templateAdmin')

@section('content')
  <style>
    .content {
      overflow-y: hidden !important;
      display: flex;
      justify-content: center;
      align-items: center;
      height: calc(100vh - 68px); /* agar tidak kena navbar height */
    }

    .form-container {
      background-color: white;
      width: 100%;
      max-width: 800px;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }
  </style>

  <div class="form-container">

  </div>
@endsection
