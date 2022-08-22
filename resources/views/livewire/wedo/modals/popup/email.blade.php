<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Email Verification</h3>
        <div class="mt-2 max-w-xl text-sm text-gray-500">
            <p>Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
        </div>
        <div class="mt-2 max-w-xl text-sm text-green-500">
            <p>A new verification link has been sent to the email address you provided in your profile settings.</p>
        </div>
        <div class="mt-3 text-sm">
            <a href="#" class="underline btn-title font-medium text-{{ app_color() }}-600 hover:text-{{ app_color() }}-500"> Resend Verification Email  <span aria-hidden="true">&rarr;</span></a>
        </div>
    </div>
</div>
