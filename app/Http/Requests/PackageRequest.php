<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Allow all requests for now; modify as needed for authorization.
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required|exists:package_categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'invitees_count' => 'required|integer|min:1',
            'status' => 'required|in:active,unactive',
            'description' => 'nullable|string|max:500',
            'recommended' => 'required|boolean',
            'accept_coupon' => 'required|boolean',
        ];
    }
}
