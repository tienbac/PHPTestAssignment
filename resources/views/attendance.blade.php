<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Attendance Slots</title>
</head>
<body>
<div class="header">
    <img src="http://news.sacus.vn/wp-content/uploads/Vien-Dao-ao-Quoc-te-FPT_Dai-hoc-FPT.jpg" style="width: 200px; height: 100px; margin-left: 370px;">
</div>
<div class="container">
    <strong class="btn float-left"><?php
        echo "Timeslots today " . date("d/m/Y") . "<br>";
        ?></strong>
    <h3 class="btn float-right">
        luyendh@de.edu.vn
        <a href="/create" >(logout)</a>
    </h3>
    <table class="table table-striped">
        <thead>
        <tr class="row">
            <th class="col-md-1">Slot ID</th>
            <th class="col-md-3">Timeslot</th>
            <th class="col-md-3">Subject</th>
            <th class="col-md-3">Class ID</th>
            <th class="col-md-2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list_class as $item)
            <tr id="{{$item->id}}" class="row">
                <th class="col-md-1">{{$item->id}}</th>
                <td class="col-md-3 class-timeSlot">{{$item->slotId}}</td>
                <td class="col-md-3 class-subject">{!! $item->subjectId !!}</td>
                <td class="col-md-3 class-id">{{$item->classId}}</td>
                <td class="col-md-2">
                    <a href="/attendance/detail" class="btn btn-link">Take</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>