<h2>New contact received</h2>

<h4>{{ $data['name'] }}</h4>

<h3>Details of the contact:</h3>

<ul>
    <li>
        <span>Name: </span> {{ $data['name'] }}
    </li>
    <li>
        <span>Email: </span> {{ $data['email'] }}
    </li>
    <li>
        <span>Message: </span> {{ $data['message'] }}
    </li>
</ul>
