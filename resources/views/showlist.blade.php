@extends('app')

@section('content')
<div class="container">
    <div class="content" style="background-color: red;">

    </div>
    <div class="showlistwrap">
        <?php //print_r($output);?>
        <?php $showlist=$output->results;
        //print_r($showlist);
        for($i=0;$i<=10;$i++){
            $one=$showlist[$i];?>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading"><?php echo $one->event_name;?></div>

                        <div class="panel-body">
                            <?php  $cat=$one->category;
                                    $eventurl=$one->event_detail_url;
                                    $add=$one->street_address;
                                    $num=$one->telephone;
                            echo $cat;
                            echo $add;
                            echo $num;
                            echo $eventurl;
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php
            //echo $one->event_name;
        }
        /*foreach($showlist as $showone){
            $showone->event_name;
        }*/

        ?>


        <div style="background-color: #dedede">


        </div>
    </div>
</div>
@endsection