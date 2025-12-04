<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Retour anticipé - Suje</title>
</head>
<body style="font-family: Arial, sans-serif; color:#222; background:#fafafa; margin:0; padding:0;">

{{-- Contenedor --}}
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

    <h1 style="font-size:22px; margin-bottom:5px; color:#008000;">🙌 Merci !</h1>

    <p style="font-size:15px;">
        {{ $greet }} <strong>{{ $item->order->fullname }}</strong>,
    </p>

    {{-- Mensaje --}}
    <p style="font-size:15px; margin-top:10px;">
        Nous vous remercions pour avoir retourné
        <strong>{{ $item->name }}</strong> avant la date prévue de location.
    </p>

    <p style="font-size:15px;">
        Nous apprécions beaucoup votre ponctualité 🤝<br>
        Cela nous aide à servir davantage de clients avec efficacité.
    </p>

    {{-- Adresse optionnelle --}}
    <p style="font-size:14px; margin-top:20px;">
        📍 <strong>Si vous souhaitez louer à nouveau, passez nous voir à :</strong><br>
        Rue Exemple 123, 5000 Namur, Belgique
    </p>

    {{-- Banco opcional --}}
    <div style="background:#f7f7f7; padding:10px 13px; border-radius:6px; margin-top:15px; font-size:14px;">
        💳 <strong>Compte bancaire Suje :</strong><br>
        BE96 0682 0334 8605
    </div>

    <p style="font-size:15px; margin-top:25px;">
        Merci pour votre confiance 💚
    </p>

    {{-- Despedida dinámica --}}
    <p style="font-size:15px;">
        {{ $h >= 18 ? 'Bonne soirée !' : 'Bonne journée !' }}
    </p>

</div>

<p style="text-align:center; color:#888; font-size:12px; margin-top:15px;">
    © {{ date('Y') }} Suje. Tous droits réservés.
</p>

</body>
</html>
