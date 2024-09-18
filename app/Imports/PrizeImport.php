<?php

namespace App\Imports;

use App\Models\Prize;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;

class PrizeImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return Prize|null
     */
    public function model(array $row)
    {
        return new Prize([
            'code'     => $row[0],
            'description'    => $row[1],
        ]);
    }

    public function rules(): array
    {
        return [
            '*.0' => [
                'required',
                'max:255',
                Rule::unique('prizes', 'code'), // Ensure the code is unique in the 'prizes' table
            ],
            '*.1' => 'nullable|max:255', // Validate description if present
        ];
    }

    public function customValidationMessages()
    {
        return [
            '*.0.required' => 'The code field is required.',
            '*.0.unique' => 'The code must be unique.',
            '*.0.max' => 'The code may not be greater than 255 characters.',
            '*.1.max' => 'The description may not be greater than 255 characters.',
        ];
    }
}
