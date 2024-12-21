<x-mail::message>

    <x-mail::table>
    |               |                         |
    | ------------- | ----------------------- |
    |    id         | {{ $user->id }}         |
    |    name       | {{ $user->name }}       |
    |    email      | {{ $user->email }}      |
    |    date       | {{ $user->created_at }} |
    </x-mail::table>

</x-mail::message>

