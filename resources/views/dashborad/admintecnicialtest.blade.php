{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
@foreach ($statusItems as $item)
<tr>
    <td>{{ $item->statustrackingId }}</td>
  
    <td>{{ $item->status->value }}</td> 
    
  
    <td class="{{ $item->status->name == 'WORK_NOT_FINISHED' ? 'text-success' : 'text-danger' }}">
        {{ $item->status->value }}
    </td>
</tr>
@endforeach
</body>
</html> --}}