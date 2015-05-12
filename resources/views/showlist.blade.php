@extends('app')

@section('content')
<div class="container">
    <div class="content" style="background-color: red;">
    </div>
    <?php// foreach $output as $key?>
    <div class="showlistwrap">
        <?php $showlist=$output->results;
            print_r($showlist);
        //foreach($showlist as $oneshow){
            //foreach($oneshow as $data){
            ?>
        <div style="background-color: #dedede">


        </div>
        <?
            //}
        //}
        ?>
    </div>
</div>
@endsection