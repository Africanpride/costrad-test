<?php

namespace App\Http\Requests;

use App\Models\Institute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class InstituteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Check if there is an authenticated user
        if (!Auth::check()) {
            return false;
        }

        // Check if the authenticated user is an admin
        return Auth::user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // $uniqueRule = 'unique:institutes, name';

        // if ($this->institute) {
        //     $uniqueRule .= ',' . $this->institute->id;
        // }

        return [
            'name' => 'required|min:2|unique:institutes,name,'.$this->institute->id,
            'acronym' => 'required|min:2|unique:institutes,acronym,'.$this->institute->id,
            'overview' => 'required|min:2',
            'about' => 'required|min:2',
            'icon' => 'nullable',
            'startDate' => 'required',
            'endDate' => 'required',
            'seo' => 'nullable',
            'active' => 'nullable',
            'slug' => 'nullable',
            'price' => 'required',
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'banner.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3048',

        ];
    }
}
