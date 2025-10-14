<h2>Nova poruka sa kontakt forme</h2>

<p><strong>Ime:</strong> {{ $data->name }}</p>
<p><strong>Email:</strong> {{ $data->email }}</p>
<p><strong>Telefon:</strong> {{ $data->phone }}</p>
<p><strong>Naslov:</strong> {{ $data->subject }}</p>

<hr>

<p><strong>Poruka:</strong></p>
<p>{{ $data->message }}</p>
