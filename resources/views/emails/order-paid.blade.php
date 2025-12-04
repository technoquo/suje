<h1>🎉 Commande confirmée !</h1>

<p>Bonjour <strong>{{ $order->fullname }}</strong>,</p>

<p>
    📌 <strong>Numéro de commande :</strong> #{{ $order->id }}
</p>

<p>Nous vous informons que votre paiement a été reçu avec succès. Votre commande est maintenant prête à être retirée dans notre bureau.</p>

<p>
    <strong>📍 Adresse de retrait :</strong><br>
    Rue Exemple 123<br>
    5000 Namur<br>
    Belgique
</p>

<h3>📦 Produits commandés :</h3>

<ul style="list-style: none; padding:0;">

    @foreach ($order->items as $item)
        <li style="margin-bottom: 15px; border-bottom:1px solid #ddd; padding-bottom:10px;">
            <strong>{{ $item->product->name }}</strong>
            <br>

            @if ($item->product->image_path)
                <img src="{{ asset('storage/' . $item->product->image_path) }}" alt="{{ $item->product->name }}" width="150" style="border-radius: 8px; margin-top:5px;">
                <br>
            @endif

            📌 Quantité : <strong>{{ $item->quantity }}</strong>
            <br>
            💰 Prix : <strong>{{ number_format($item->price * $item->quantity, 2, ',', ' ') }} €</strong>
        </li>
    @endforeach

</ul>

<p>🔥 <strong>Total payé : {{ number_format($order->total, 2, ',', ' ') }} €</strong></p>

<p>Merci pour votre confiance et votre achat.</p>

<br>

<p>🖐 À très bientôt !</p>
