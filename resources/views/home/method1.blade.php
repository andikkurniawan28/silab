<table class="table table-sm text-dark text-xs" width"100%>
    <thead>
        <tr>
            <th>Jam</th>
            <th>Icumsa</th>
            <th>%Air</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($method1 as $data)
        <tr>
            <td>{{ $data->created_at }}</td>
            <td>{{ $data->icumsa }}</td>
            <td>{{ $data->moisture_content }}</td>
        </tr>
        @endforeach
    </tbody>
</table>