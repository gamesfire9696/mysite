<?php

namespace App\Imports;

use App\Models\Movie;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MovieImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Movie([
            'name'     => $row['name'],
            'store'     => $row['store'],
            'server'     => $row['server'],
            'photo'     => $row['photo'],
        ]);
    }
}
 
        

