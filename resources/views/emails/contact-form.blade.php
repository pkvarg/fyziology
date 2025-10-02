<x-pjutils::email.layout :use-logo="false">
    <p><strong>Meno:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Správa:</strong></p>
    <p>{{ $data['message'] }}</p>
</x-pjutils::email.layout>