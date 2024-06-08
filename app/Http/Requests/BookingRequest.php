<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'payment_method' => 'nullable|string|max:255',
            'payment_status' => 'nullable|string|max:255',
            'payment_url' => 'nullable|string|max:255',
            'total_price' => 'nullable|numeric',
            // 'item_id' => 'required|exists:types,id',
            // 'brand_id' => 'required|exists:brands,id'

        ];
    }
}
