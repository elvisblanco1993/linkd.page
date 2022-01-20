<?php

namespace App\Actions\Fortify;
use Carbon\Carbon;
use App\Models\User;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Notifications\NotifyAdminOfNewUsers;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'handler' => ['required', 'string', 'unique:pages,handler'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'trial_ends_at' => Carbon::now()->addMonth(1),
        ]);

        $user->createAsStripeCustomer();

        \App\Models\Page::create([
            'handler' => $input['handler'],
            'name' => $input['name'],
            'user_id' => $user->id,
        ]);

        if ($user->id > 1) {
            $admin = User::findOrFail(1);
            $admin->notify(new NotifyAdminOfNewUsers("A new linkd was created with handler" . $input['handler']));
        }

        return $user;
    }
}
