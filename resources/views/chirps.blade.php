<form action="{{ route('chirps.store') }}" method="POST">
    @csrf
    <input type="text" name="message" required>
    <button type="submit">Send Chirp</button>
</form>
