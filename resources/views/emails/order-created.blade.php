<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commande confirmée - Suje</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f7f7f7; margin:0; padding:0;">

<table  style="max-width:650px; margin:auto; background:#ffffff; border-radius:8px; overflow:hidden;">

    {{-- Header con logo --}}
    <tr style="background:#FFFFFF; text-align:center;">
        <td style="padding: 15px;">
            <img src="{{asset('images/suje.png')}}" alt="Suje Logo" style="max-height:60px;">
        </td>
    </tr>

    {{-- Título --}}
    <tr>
        <td style="padding:20px 25px;">
            <h2 style="margin:0; color:#111;">🎉 Commande confirmée</h2>
            <p style="font-size:15px; color:#444; margin-top:8px;">
                Bonjour <strong>{{ $order->fullname }}</strong>,<br>
                Votre paiement a été reçu avec succès. Merci de votre confiance !
            </p>

            {{-- Numéro de commande --}}
            <p style="font-size:14px; background:#eee; padding:8px 12px; border-radius:5px;">
                📌 <strong>Numéro de commande :</strong> <span style="color:#000; font-weight:bold;">#{{ $order->id }}</span>
            </p>
        </td>
    </tr>

    {{-- Adresse de retrait --}}
    <tr>
        <td style="padding:0 25px;">
            <p style="font-size:15px; color:#444; margin-top:8px;">
                📍 <strong>Adresse de retrait :</strong><br>
                Rue Louis Hap 16, 1040 Etterbeek, Belgique
            </p>
        </td>
    </tr>

    {{-- Lista de productos --}}
    <tr>
        <td style="padding:0 25px;">
            <h3 style="margin-top:20px; color:#111;">📦 Produits commandés :</h3>

            <table  style="font-size:14px; border-collapse: collapse;">
                @foreach ($order->items as $item)
                    <tr style="border-bottom:1px solid #ddd;">
                        <td width="70%">
                            <strong>{{ $item->product->name }}</strong><br>
                            Quantité : {{ $item->quantity }}<br>
                            Du {{ $item->date_debut->format('d/m/Y') }}
                            au {{ $item->date_fin->format('d/m/Y') }}
                        </td>
                        <td width="30%" style="text-align:right; font-weight:bold;">
                            {{ number_format($item->price * $item->quantity, 2, ',', ' ') }} €
                        </td>
                    </tr>
                @endforeach
            </table>

            {{-- Total --}}
            <p style="font-size:16px; margin-top:10px; font-weight:bold;">
                🔥 Total payé : {{ number_format($order->total, 2, ',', ' ') }} €
            </p>
        </td>
    </tr>

    {{-- Bancontact / banque --}}
    <tr>
        <td style="padding:10px 25px;">
            <p style="font-size:14px; margin-top:5px;">
                💳 <strong>Compte bancaire :</strong><br>
                BE96 0682 0334 8605
            </p>
        </td>
    </tr>

    {{-- Footer --}}
    <tr>
        <td style="padding:20px; text-align:center; background:#f0f0f0; font-size:12px; color:#555;">
            Merci pour votre achat chez <strong>Suje</strong> 👋<br>
            Si vous avez des questions, n'hésitez pas à nous contacter.
            <br><br>
            <em>© {{ date('Y') }} Suje. Tous droits réservés.</em>
        </td>
    </tr>

</table>

</body>
</html>
