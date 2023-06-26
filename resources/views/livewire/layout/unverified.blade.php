@if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) &&
!$this->user->hasVerifiedEmail())
<p class="text-sm mt-2">
    {{ __('Your email address is unverified.') }}

    <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900"
        wire:click.prevent="sendEmailVerification">
        {{ __('Click here to re-send the verification email.') }}
    </button>
</p>

@if ($this->verificationLinkSent)
    <p v-show="verificationLinkSent" class="mt-2 font-medium text-sm text-green-600">
        {{ __('A new verification link has been sent to your email address.') }}
    </p>
@endif
@endif
