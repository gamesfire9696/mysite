<?php

namespace App\Imports;

use App\Models\Live;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LiveImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Live([
            'name'     => $row['name'],
            'server'     => $row['server'],
            'photo'     => $row['photo'],
        ]);
    }
}