<h2>Bonjour {{ $order->fullname }},</h2>

<p>Merci pour votre commande !</p>

<p>
    <strong>Numéro de commande :</strong> #{{ $order->id }}
</p>

<p>Voici les détails :</p>

<ul>
    @foreach($items as $item)
        <li>
            <strong>{{ $item['name'] }}</strong><br>
            Quantité : {{ $item['quantity'] }}<br>
            Prix/jour : €{{ $item['price'] }}<br>
            Total : €{{ $item['total_price'] }}<br>
            Du {{ $item['date_debut'] }} au {{ $item['date_fin'] }}
        </li>
    @endforeach
</ul>

<p><strong>Total général : €{{ $order->total }}</strong></p>

<p>Nous vous contacterons bientôt.</p>
