<?php

namespace App\Http\Requests\API;

use App\Traits\ImageHandler;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
{
    use ImageHandler;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            
        ];
    }


    protected function prepareForValidation(): void
    {
        $request = $this->request->all();

        if ($this->is('api/profile/change-password') && $this->has('currentPassword') && $this->has('newPassword') && $this->has('newPasswordConfirmation')) {
            $this->merge([
                'current_password' => $request['currentPassword'],
                'new_password' => $request['newPassword'],
                'new_password_confirmation' => $request['newPasswordConfirmation']
            ]);
        }
    }

    /**
     * merge the validated request with additional data
     *
     * @return array
     */
    public function validatedProfile(): array
    {
        return array_merge(
            $this->validated(),
            ['avatar' => $this->setImageFile($this, 'avatars', $this->user()->avatar)]
        );
    }

    /**
     * Hash the new password
     *
     * @return array
     */
    public function validatedPassword(): array
    {
        return ['password' => Hash::make($this->validated()['new_password'])];
    }
}