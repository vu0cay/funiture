<x-layout>
    <x-page-heading>Đăng nhập</x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        
        <x-forms.button>Đăng nhập</x-forms.button>

    </x-forms.form>

</x-layout>