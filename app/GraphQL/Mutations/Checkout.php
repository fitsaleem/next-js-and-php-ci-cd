<?php

namespace App\GraphQL\Mutations;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class Checkout
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $cart = $args['cart'];
        $total = $args['total'];
        $totalQuantity = $args['totalQuantity'];
        $user = Auth::user();
        \Stripe\Stripe::setApiKey(env('STRIPE_KEY'));

        // calculate cart total
        $calculatedTotal = 0;
        foreach ($cart as $cartProduct) {
            $product = Product::find($cartProduct['id']);
            if (empty($product)) {
                return [
                    'error' => true,
                    'data' => 'There was an error!'
                ];
            }
            $productPrice = $product->price * (1 - $product->discount / 100);
            $calculatedTotal += round($productPrice * $cartProduct['quantity']);
        }

        if ((int)$calculatedTotal !== (int)$total) {
            return [
                'error' => true,
                'data' => 'There was an error!'
            ];
        }

        Order::create([
            'user_id' => $user->id,
            'total' => $total,
            'total_quantity' => $totalQuantity,
            'data' => (string) collect($cart)
        ]);

        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => (int) $total * 100,
                    'product_data' => [
                        'name' => 'Your cart total',
                        'images' => ["https://i.imgur.com/EHyR2nP.png"],
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => env('FRONT_END_URL') . '/cart?success=true',
            'cancel_url' => env('FRONT_END_URL') . '/cart?canceled=true',
        ]);

        return [
            'error' => false,
            'data' => $checkout_session->url
        ];
    }
}
