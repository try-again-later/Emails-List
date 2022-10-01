<aside class="toast">
    @if (session()->get('new-person-record-email') !== null)
        <article class="alert alert-success" id="record-created-success-alert">
            <p>Record successfully created.</p>
            <button type="button" data-closes="record-created-success-alert">
                <span class="sr-only">Close</span>
                <x-icon.x class="w-6 h-6 text-gray-900" />
            </button>
        </article>
    @endif
</aside>
