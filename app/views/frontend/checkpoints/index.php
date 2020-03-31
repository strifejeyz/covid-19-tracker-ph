@extend('layouts/frontend')



<div class="container-fluid">
    <div class="title">Checkpoints/Roadblocks in Metro Manila</div>

    <div class="table-responsive bg-black checkpoints-table" style="padding: 10px">
        <table class="table bg-black" id="cases">
            <thead>
            <tr>
                <td>District</td>
                <td>City</td>
                <td>Location</td>
                <td>Checkpoint&nbsp;Type</td>
                <td>Map</td>
            </tr>
            </thead>
            <tbody>
            {foreach $checkpoints as $cp}
            <tr>
                <td>{!str_replace(' ','&nbsp;',$cp->district)!}</td>
                <td>{!str_replace(' ','&nbsp;',$cp->city)!}</td>
                <td>{{$cp->location}}</td>
                <td>{{str_replace('EntryExit','Entry and Exit', str_replace('RoadClosure', 'Road Closure', $cp->type))}}</td>
                <td style="width: 150px;">
                    <a href="https://www.google.com/maps/search/?api=1&query={{$cp->lat}},{{$cp->lng}}" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-map-marker-alt"></i>&nbsp;Open tab</a>
                    <button hidden onclick="onOpenMap('{{$cp->lat}}','{{$cp->lng}}')" class="btn btn-sm btn-primary"><i class="fa fa-map-marker-alt"></i>&nbsp;View&nbsp;Map</button>
                </td>
            </tr>
            {endforeach}
            </tbody>
        </table>
    </div>

</div>

@stop()