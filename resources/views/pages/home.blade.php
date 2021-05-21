@extends('layouts.app')
@section('content')
<div class="container">
        <h1>How to Delete Multiple Records in Laravel - Websolutionstuff</h1>
        <form method="post" action="{{url('multipleusersdelete')}}">
            {{ csrf_field() }}
            <br>
            <input class="btn btn-success" type="submit" name="submit" value="Delete All Users"/>
            <br><br>
            <table class="table-bordered table-striped" width="50%">
                <thead>
                <tr>
                    <th class="text-center">S.No.</th>
                    <th class="text-center">User Name</th>
                    <th class="text-center"> <input type="checkbox" id="checkAll"> Select All</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;
                foreach ($list as $value) {
                ?>
                <tr>
                    <td class="text-center">{{$i}}</td>
                    <td class="text-center">{{$value['name']}}</td>
                    <td class="text-center"><input  name='id[]'
                                                   type="checkbox" id="checkItem"
                                                   value="{{$value['id']}}">
                </tr>
                <?php $i++; } ?>
                </tbody>
            </table>
            <br>
        </form>


</div>


<script>
    $("#checkAll").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
</script>

@endsection

