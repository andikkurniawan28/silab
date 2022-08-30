<link href="/admin_template/css/sb-admin-2.min.css" rel="stylesheet">
@foreach($data as $data)
<table class="text-dark text-left table table-bordered">
    <tr>
        <th><h1>Sampling ID</h1></th>
        <th><h1>{{ $data->id }}</h1></th>
    </tr>
    <tr>
        <td><h1>Barcode</h1></td>
        <td>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML(strval($data->id), 'C128', 5, 150) !!}</div>
        </td>
    </tr>
    <tr>
        <td><h1>Nama Sampel</h1></td>
        <td><h1>{{ $data->sample_name }}</h1></td>
    </tr>
    <tr>
        <td><h1>Start Time</h1></td>
        <td><h1>{{ $data->start_time }}</h1></td>
    </tr>
    <tr>
        <td><h1>End Time</h1></td>
        <td><h1>{{ $data->end_time }}</h1></td>
    </tr>
    <tr>
        <td><h1>Pan</h1></td>
        <td><h1>{{ $data->pan }}</h1></td>
    </tr>
    <tr>
        <td><h1>Palung</h1></td>
        <td><h1>{{ $data->reef }}</h1></td>
    </tr>
    <tr>
        <td><h1>Operator</h1></td>
        <td><h1>{{ $data->name }}</h1></td>
    </tr>
</table>
<script type="text/javascript"> 
    window.addEventListener("load", window.print());
</script>
@endforeach


