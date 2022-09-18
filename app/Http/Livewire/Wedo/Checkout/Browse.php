<?php
namespace App\Http\Livewire\Wedo\Checkout;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Livewire\Wedo\WithDiscount;
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

    use WithDiscount;

    public ?string $name = null;

    public ?string $email = null;

    public ?string $email_confirmation = null;

    public ?string $phone = null;

    public ?string $address = null;

    public bool $terms = false;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function rules(): array
    {
        return [
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email', 'confirmed', new RealEmail()],
            'email_confirmation' => [
                'required',
                'email',
                'max:255',
                new RealEmail(),
            ],
            'phone' => ['required', 'min:6', new Phone()],
            'terms' => ['required', 'accepted'],
        ];
    }

    public function mount()
    {
        $this->name = auth()->user()?->name;

        $this->email = auth()->user()?->email;

        $this->email_confirmation = auth()->user()?->email;

        $this->phone = auth()->user()?->phone;

        $this->address = auth()->user()?->address;
    }

    public function continue()
    {
        $this->validate();

        $response = app()->make(ApiInterface::class)->post('/checkouts', [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'to' => route('tickets.index'),
            'is_logged' => auth()->check(),
        ]);

        if (auth()->check()) {
            $this->forget(WedoAuthService::cacheKey(session('token')));
        }

        return $this->redirectRoute('login.token', [
            'token' => $response->token,
            'to' => route('payments.index'),
        ]);
    }

    public function getHasExtraProperty()
    {
        $items = app_session_cart()?->items;

        if ($items) {
            foreach ($items as $item) {
                if ($item->associatedModel === \App\Models\Extra::$apiModel) {
                    return true;
                }
            }
        }

        return false;
    }

    public function getRowsProperty()
    {
        return app_session_cart();
    }

    public function render()
    {
        return view('livewire.wedo.checkout.browse', ['carts' => $this->rows, 'hasExtra' => $this->hasExtra]);
    }
}
