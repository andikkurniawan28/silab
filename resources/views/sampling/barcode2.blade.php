<link href="/admin_template/css/sb-admin-2.min.css" rel="stylesheet">
@foreach($sample as $sample)
<table class="text-dark text-left table table-bordered">
    {{-- <tr>
        <td><h1>Pengambilan</h1></td>
        <td><h1>{{ $sample->created_at }}</h1></td>
    </tr> --}}
    <tr>
        <th><h1>Sampling ID</h1></th>
        <th><h1>{{ $sample->id }}</h1></th>
    </tr>
    <tr>
        <td><h1>Barcode</h1></td>
        <td>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML(strval($sample->id), 'C128', 5, 150) !!}</div>
        </td>
    </tr>
    <tr>
        <td><h1>Nama Sampel</h1></td>
        <td><h1>{{ $sample->sample_name }}</h1></td>
    </tr>
</table>
<script type="text/javascript"> 
    window.addEventListener("load", window.print());
</script>
@endforeach


