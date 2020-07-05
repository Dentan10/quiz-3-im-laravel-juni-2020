@extends('sbadmin2.master')

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush

@section('content')
<h1>TESTING content</h1>
@endsection