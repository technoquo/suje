<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commande annulée - Suje</title>
</head>
<body style="font-family: Arial, sans-serif; color:#222; background:#fafafa; margin:0; padding:0;">

{{-- Conteneur --}}
<div style="max-width:650px; margin:auto; background:#fff; padding:25px; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.08);">

    {{-- Logo --}}
    <div style="text-align:center; margin-bottom:20px;">
        <img src="{{asset('images/suje.png')}}" alt="Suje Logo" style="max-height:60px;">
    </div>

    {{-- Saludo dinámico --}}
    @php
        $h = now()->hour;
        $greet = ($h >= 18) ? 'Bonsoir' : 'Bonjour';
    @endphp

    <h1 style="font-size:22px; margin-bottom:5px; color:#b30000;">❌ Commande annulée</h1>

    <p style="font-size:15px;">
        {{ $greet }} <strong>{{ $order->fullname }}</strong>,
    </p>

    {{-- Numéro de commande bien visible --}}
    <p style="font-size:14px; background:#ffe6e6; padding:8px 12px; border-radius:5px; border-left:4px solid #b30000;">
        📌 <strong>Numéro de commande :</strong> #{{ $order->id }}
    </p>

    <p style="font-size:15px; margin-top:12px;">
        Votre commande a été annulée avec succès.
    </p>

    <p style="font-size:15px; margin-top:10px;">
        Si vous avez des questions, n’hésitez pas à nous contacter.
    </p>

    <p style="font-size:15px; margin-top:25px;">
        Merci et {{ $h >= 18 ? 'bonne soirée' : 'bonne journée' }} 👋
    </p>

</div>

<p style="text-align:center; color:#888; font-size:12px; margin-top:15px;">
    © {{ date('Y') }} Suje. Tous droits réservés.
</p>

</body>
</html>
