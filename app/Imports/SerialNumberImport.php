<?php

namespace App\Imports;

use App\Models\Validation;
use App\Models\Promo;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;

class SerialNumberImport implements ToModel
{
    protected $promo;

    // Constructor to accept the promo ID
    public function __construct(Promo $promo)
    {
        $this->promo = $promo;
    }

    /**
     * @param array $row
     *
     * @return Validation|null
     */
    public function model(array $row)
    {
        return new Validation([
            'promo_id' => $this->promo->id,
            'serial_number'     => $row[0],
            'status'    => 'active',
        ]);
    }

    public function rules(): array
    {
        return [
            '*.0' => [
                'required',
                'max:255',
                Rule::unique('valid_sachets', 'serial_number'), // Ensure the code is unique in the 'prizes' table
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
