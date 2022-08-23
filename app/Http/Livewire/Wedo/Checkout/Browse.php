<?php
namespace App\Http\Livewire\Wedo\Checkout;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use App\Rules\Phone;
use App\Rules\RealEmail;
use App\Services\WedoAuthService;
use Livewire\Component;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use Actions;

    use WithCachedRows;

    public ?string $name = null;

    public ?string $email = null;

    public ?string $phone = null;

    public ?string $address = null;

    public function rules(): array
    {
        return [
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email', new RealEmail()],
            'phone' => ['required', 'min:6', new Phone()],
            'address' => ['nullable', 'min:4'],
        ];
    }

    public function mount()
    {
        $this->name = auth()->check() ? auth()->user()->name : 'Test User';

        $this->email = auth()->check() ? auth()->user()->email : 'test' . uniqid() . '@test.com';

        $this->phone = auth()->check() ? auth()->user()?->phone : '015888888888';

        $this->address = auth()->check() ? auth()->user()?->address : 'Niendorfer Straße 43, 22529 Hamburg';
    }

    public function save()
    {
        $this->validate();

        $response = app()->make(ApiInterface::class)->post('/checkouts', [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'to' => route('payments.index'),
            'is_logged' => auth()->check(),
        ]);

        if (auth()->check()) {
            $this->forget(WedoAuthService::cacheKey(session('token')));

            return $this->redirectRoute('payments.index');
        }

        session()->put('verification.text', 'We have e-mailed your login link on ' . $this->email . '. Please check your mailbox!');
        session()->put('verification.url', route('login.resendMail', $this->email));

        $this->notification()->success(__('Great!!'), $response->message);

        return $this->redirectRoute('checkout.index');
    }

    public function getRowsProperty()
    {
        return session('cart-' . request()->ip());
    }

    public function render()
    {
        return view('livewire.wedo.checkout.browse', ['carts' => $this->rows]);
    }
}
