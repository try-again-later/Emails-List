<form method="POST" action="{{ route('person-record.create') }}" class="space-y-4">
    @csrf

    <x-form.input name="name" label="Name" :required="true" />

    <x-form.input type="email" name="email" label="Email" :required="true" />

    <x-form.input name="message" label="Message" :required="true" />

    <button type="submit" class="btn btn-primary mx-auto block">Submit</button>
</form>
