@extends('admin.layouts.app')

@section('content')
<div class="page-header">
  <h1>@lang('dashboard')</h1>
</div>

<div class="row">
  <div class="col-4 col-sm-6 mb-3">
    @include('admin/dashboard/_users')
  </div>
</div>
@endsection
