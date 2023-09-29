@extends('layouts.main')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <h1 class="divider">Contact Me</h1>

        <div class="mx-auto max-w-3xl rounded p-8 text-center shadow-lg">
            <h2>Have anything to discuss about?</h2>
            <h3 class="divider">Contact me and I will get in touch with you ASAP</h3>

            <form
                action=''
                method="POST"
                class="mx-auto grid max-w-xl gap-5"
            >
                @csrf
                <x-form.field-text
                    type="text"
                    placeholder="Name"
                    name="name"
                    :value="auth()->user()->name ?? ''"
                />
                <x-form.field-text
                    type="email"
                    placeholder="E-mail"
                    name="email"
                    :value="auth()->user()->email ?? ''"
                />
                <x-form.field-text
                    field_type="multiline"
                    placeholder="Message"
                    name="message"
                />

                <x-button
                    type="submit"
                    aria-label="Send contact form"
                >Submit</x-button>
            </form>
        </div>
    </div>
@endsection
