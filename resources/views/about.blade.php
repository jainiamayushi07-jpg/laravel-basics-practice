@extends('layout.masterlayout')
@section ('title')
About Page
@endsection
@push('styles')
<link href="css/bootstrap.css"></link>
@endpush
@prepend('styles')
<style>
.container{
    background:tan;

    }
</style>
@section('content')
<h1>This Is About Us  Page</h1><br><br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
@endsection
@push('scripts')
<script src="js/example.js"></script>
@endpush