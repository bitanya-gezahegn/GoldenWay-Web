{{-- <table class="table-auto w-full border-collapse border border-gray-200">
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
</table> --}}



{{-- <div class="my-4">
    
    <h2 class="text-xl font-bold mb-4">Users with Role: {{ ucfirst($role) }}</h2>
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
</div> --}}

<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
    
    {{-- <h2 class="text-xl font-bold mb-4">Users with Role: {{ ucfirst($role) }}</h2> --}}
    <table
    class="min-w-full text-left text-sm font-light text-surface dark:text-white">
    <thead
    class="border-b border-neutral-200 font-medium dark:border-white/10">
            <tr>
                @foreach($columns as $column)
                    <th scope="col" class="px-6 py-4">
                        {{ ucfirst($column) }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
                <tr class="border-b border-neutral-200 transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-white/10 dark:hover:bg-neutral-600">
                    @foreach($columns as $column)
                        <td class="whitespace-nowrap px-6 py-4 ">{{ $row->$column }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
</div>
