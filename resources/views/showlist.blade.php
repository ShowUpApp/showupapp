@extends('app')

@section('content')
<div class="container">
    <div class="content" style="background-color: red;">
        <div class="title">testing </div>
    </div>
    <div class="showlistwrap">
        <?php print_r($output);?>
    </div>
</div>
@endsection