<x-layout>
    <x-page-heading>Tạo tài khoản</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Tên" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Mật khẩu" name="password" type="password" />
        <x-forms.input label="Nhập lại mật khẩu" name="password_confirmation" type="password" />

        <x-forms.divider />

        <x-forms.input label="Tên doanh nghiệp" name="employer" />
        <x-forms.input label="Logo" name="logo" type="file" > </x-forms.input>

        <x-forms.button>Tạo tài khoản</x-forms.button>

    </x-forms.form>
</x-layout>