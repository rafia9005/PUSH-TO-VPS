<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvatarUploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }

    public function uploadAvatar(AvatarUploadRequest $request)
    {
        $avatarPath = $request->file('avatar')->store('avatars', 'public');
        // Simpan path avatar ke database pengguna
        auth()->user()->update(['avatar' => $avatarPath]);

        return redirect()->back()->with('success', 'Avatar uploaded successfully.');
    }

}