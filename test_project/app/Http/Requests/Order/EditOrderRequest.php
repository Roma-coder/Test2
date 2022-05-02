<?php

namespace App\Http\Requests\Order;

use App\Models\User;
use App\Models\Order;
use Illuminate\Foundation\Http\FormRequest;

class EditOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function perform(Order $order)
    {
        $users = User::pluck('first_name', 'id');
        return view('orders.edit', compact('order','users'));
    }
}
