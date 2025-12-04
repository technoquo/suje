<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commande confirmée - Suje</title>
</head>
<body style="font-family: Arial, sans-serif; color:#222; background:#fafafa; margin:0; padding:0;">

{{-- Contenedor --}}
<div style="max-width:650px; margin:auto; background:#fff; padding:25px; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.08);">

    {{-- Logo --}}
    <div style="text-align:center; margin-bottom:20px;">
        <img src="{{asset('images/suje.png')}}" alt="Suje Logo" style="max-height:60px;">
    </div>

    <h1 style="font-size:22px; margin-bottom:5px;">🎉 Commande confirmée !</h1>

    <p style="font-size:15px;">
        {{ now()->hour >= 18 ? 'Bonsoir' : 'Bonjour' }} <strong>{{ $order->fullname }}</strong>,
    </p>

    <p style="font-size:15px;">
        📌 <strong>Numéro de commande :</strong> #{{ $order->id }}
    </p>

    <p style="font-size:15px;">
        Nous vous informons que votre paiement a été reçu avec succès. Votre commande est maintenant prête à être retirée dans notre bureau.
    </p>

    {{-- Adresse de retrait --}}
    <p style="font-size:15px; margin-top:15px;">
        <strong>📍 Adresse de retrait :</strong><br>
        Rue Louis Hap 16 , <br>
        1040 Etterbeek, Belgique
    </p>

    <h3 style="font-size:18px; margin-top:25px; border-bottom:2px solid #eee; padding-bottom:6px;">📦 Produits commandés :</h3>

    <ul style="list-style: none; padding:0; margin:0;">
        @foreach ($order->items as $item)
            <li style="margin-bottom: 18px; padding-bottom:12px; border-bottom:1px solid #eee;">
                <strong>{{ $item->product->name }}</strong><br>

                @if ($item->product->image_path)
                    <img src="{{ asset('storage/' . $item->product->image_path) }}" alt="{{ $item->product->name }}" width="140" style="border-radius:6px; margin-top:6px; margin-bottom:6px;">
                    <br>
                @endif

                📌 Quantité : <strong>{{ $item->quantity }}</strong><br>
                💰 Prix : <strong>{{ number_format($item->price * $item->quantity, 2, ',', ' ') }} €</strong>
            </li>
        @endforeach
    </ul>

    <p style="font-size:17px; margin-top:10px;">
        🔥 <strong>Total payé : {{ number_format($order->total, 2, ',', ' ') }} €</strong>
    </p>

    {{-- Banco --}}
    <div style="background:#f5f5f5; padding:10px 15px; border-radius:6px; margin-top:20px; font-size:14px;">
        💳 <strong>Compte bancaire Suje :</strong><br>
        BE96 0682 0334 8605
    </div>

    <p style="font-size:15px; margin-top:25px;">
        Merci pour votre confiance et votre achat.
    </p>

    <p style="font-size:15px;">
        🖐 À très bientôt !
    </p>

</div>

<p style="text-align:center; color:#888; font-size:12px; margin-top:15px;">
    © {{ date('Y') }} Suje. Tous droits réservés.
</p>

</body>
</html>
