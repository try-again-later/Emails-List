<form method="POST" action="{{ route('user.create') }}">
    @csrf

    <x-form.input name="name" label="Name" />

    <x-form.input type="email" name="email" label="Email" />

    <x-form.input name="message" label="Message" />

    <button type="submit">Submit</button>
</form>
