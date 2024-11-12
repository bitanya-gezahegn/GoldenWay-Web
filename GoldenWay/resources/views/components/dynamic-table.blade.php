<table class="table-auto w-full border-collapse border border-gray-200">
    <thead>
        <tr>
            @foreach($columns as $column)
            <th style="background-color: gold; border: 1px solid black; padding: 8px;">
                    {{ ucfirst($column) }}
                </th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
            <tr>
                @foreach($columns as $column)
                    <td class="border border-gray-300 px-4 py-2">{{ $row->$column }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>