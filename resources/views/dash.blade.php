@extends('layouts.app')

@section('content')
    @if(auth()->user()->type == 'admin')
        @include('layouts.admin.content')
    @elseif(auth()->user()->type == 'client')
        @include('layouts.user.content')
    @endif
@endsection

@section('footer-script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#division').on('change',function() {
            var division_id = $(this).val();
            // alert(division_id);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url:'/get-districts',
                data: {division_id: division_id},
                success: function (data) {
                    // alert(data);
                    // console.log(data);
                    var x=0,txt='',y=0,txt='';
                    txt = "";

                    for (x in data) {
                        txt += "<option value="+data[x].id+">" + data[x].name + "</option>";
                    }
                    // console.log(txt)
                    $( "#district").html(txt);
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    });
</script>
@endsection