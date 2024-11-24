<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
     public function rules(): array
    {
        $userId = $this->route('user')?->id; // Get user ID for unique validation (nullable for store)

        return [
            'email' => 'required|email|unique:users,email,' . $userId,
            'password' => $this->isMethod('post') ? 'required|min:8' : 'nullable|min:8',
            'avatar' => 'nullable|image|max:2048',
            'source_platform' => 'required',
            'full_name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'role' => 'required|string|max:50',
            'permissions' => 'nullable|string|max:255',
            'username' => 'required|string|max:50|unique:users,username,' . $userId,
            'country' => 'required|string|max:100',
            'address' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'city' => 'required|string|max:100',
            'utm' => 'nullable|string|max:255',
        ];
    }
}
