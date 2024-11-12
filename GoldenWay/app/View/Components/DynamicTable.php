<?php
namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class DynamicTable extends Component
{
    public $data;
    public $columns;

    public function __construct($table)
    {
        // Fetch data from the specified table
        $this->data = DB::table($table)->get();
        // Get the column names
        $this->columns = DB::getSchemaBuilder()->getColumnListing($table);
    }

    public function render()
    {
        return view('components.dynamic-table', [
            'data' => $this->data,
            'columns' => $this->columns,
        ]);
    }
}