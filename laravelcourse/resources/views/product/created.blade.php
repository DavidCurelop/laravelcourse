@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="alert alert-success" role="alert">
        Product created
      </div>
      <div class="card">
        <div class="card-body">
          <p><strong>Name:</strong> {{ $viewData['payload']['name'] }}</p>
          <p><strong>Price:</strong> ${{ number_format($viewData['payload']['price'], 2) }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
