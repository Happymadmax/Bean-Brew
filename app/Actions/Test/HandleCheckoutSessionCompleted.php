<?php

namespace App\Actions\Test;

use App\Models\OrderItem;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductVariant;
use Laravel\Cashier\Cashier;
use Stripe\LineItem;

class HandleCheckoutSessionCompleted
{
    public function handle($sessionId)
    {
        $session = Cashier::stripe()->checkout->sessions->retrieve($sessionId);
        $user = User::find($session->metadata->user_id);

        $order = $user->orders()->create([
            'stripe_checkout_session_id' => $session->id,
            'amount_shipping' => $session->total_details->amount_shipping,
            'amount_discount' => $session->total_details->amount_discount,
            'amount_tax' => $session->total_details->amount_tax,
            'amount_subtotal' => $session->amount_subtotal,
            'amount_total' => $session->amount_total,
            'billing_address' => [
                'name' => $session->billing_address->name,
                'city' => $session->billing_address->address->city,
                'country' => $session->billing_address->address->country,
                'line1' => $session->billing_address->address->line1,
                'line2' => $session->billing_address->address->line2,
                'postal_code' => $session->billing_address->address->postal_code,
            ],
            'shipping_address' => [
                'name' => $session->shipping_address->name,
                'city' => $session->shipping_address->address->city,
                'country' => $session->shipping_address->address->country,
                'line1' => $session->shipping_address->address->line1,
                'line2' => $session->shipping_address->address->line2,
                'postal_code' => $session->shipping_address->address->postal_code,
            ],
        ]);

    $lineItems = Cashier::stripe()->checkout->sessions->allLineItems($sessionId->id);

    $orderItems = collect($lineItems->all())->map(function (LineItem $line){
        Cashier::stripe()->products->retrieve($line->price->product);
        return new OrderItem([
            'product_variant_id' => $product->metadata->product_variant_id,
            'name' => $product->name,
            'description' => $product->description,
            'price' => $line->price->unit_amount,
            'quantity' => $line->quantity,
            'amount_discount' => $line->amount_discount,
            'amount_subtotal' => $line->amount_subtotal,
            'amount_tax' => $line->amount_tax,
            'amount_total' => $line->amount_total,

        ]);
    });

    $order->items()->saveMany($orderItems);
    }
}
