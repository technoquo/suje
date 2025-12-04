<h1>⚠ Retour en retard</h1>

<p>Bonjour <strong>{{ $item->order->fullname }}</strong>,</p>

<p>Vous avez retourné <strong>{{ $item->name }}</strong> après la date prévue.</p>

<p>Nous devons appliquer une pénalité de <strong>{{ number_format($item->penalty, 2, ',', ' ') }} €</strong>.</p>

<p>Merci de votre compréhension.</p>
