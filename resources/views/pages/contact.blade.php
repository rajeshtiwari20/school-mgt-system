<x-layout>
    <h1>Contact US Page </h1>
    @php
$name = "User name"
    @endphp
    <x-form.input type="text" placeholder="Enter name" id="name" name="name" value="{{ $name }}" class="mt-4"/>
    <x-alert type="danger">
        <x-slot name="title">Title</x-slot>
        <x-slot name="body"> Body</x-slot>
    </x-alert>   
</x-layout> 