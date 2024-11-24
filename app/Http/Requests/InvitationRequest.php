<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvitationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Allow all requests for now; modify as needed
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'package_id' => 'required|exists:packages,id',
            'category_id' => 'required|exists:invitation_categories,id',
            'template_id' => 'required|exists:templates,id',
            'invitation_name' => 'required|string|max:255',
            'date_type' => 'required|in:gregorian,hijri',
            'invitation_date' => 'required|date',
            'invitation_time' => 'required',
            'invitation_image' => 'nullable|image|max:2048',
            'invitation_video' => 'nullable|mimes:mp4,avi|max:10240',
            'city' => 'required|string|max:255',
            'hood' => 'required|string|max:255',
            'detailed_address' => 'required|string|max:500',
            'payment_method' => 'required|in:cash,paypal,tamara,myfatoorah',
            'qr_code' => 'nullable|string|max:255',
        ];
    }
}
