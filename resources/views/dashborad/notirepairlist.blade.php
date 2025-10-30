<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>รายละเอียดแจ้งซ่อม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

    <h3>รายละเอียดแจ้งซ่อม</h3>

    {{-- เริ่มการวนซ้ำตรงนี้ --}}
    @foreach ($notiRepair as $item) 
        <table class="table table-bordered mb-4">
            <tr>
                <th>รหัสแจ้งซ่อม</th>
                {{-- เข้าถึงคุณสมบัติ (property) ของรายการปัจจุบันในลูป --}}
                <td>{{ $item->NotirepairId}}</td> 
            </tr>
            <tr>
                <th>อุปกรณ์</th>
                <td>{{ $item->equipmentId}}</td>
            </tr>
            <tr>
                <th>รายละเอียด</th>
                <td>{{ $item->DeatailNotirepair}}</td>
            </tr>
            <tr>
                <th>วันที่แจ้ง</th>
                <td>{{ $item->DateNotirepair}}</td>
            </tr>
        </table>
        <hr>
    @endforeach
    
    <a href="{{ url()->previous() }}" class="btn btn-secondary">ย้อนกลับ</a>
</table>


</body>

</html>
