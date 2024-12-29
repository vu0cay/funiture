<x-layout>
    <x-page-heading>Đăng mặt hàng</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Tên đồ nội thất" name="title" placeholder="CEO" />
        <x-forms.input label="Giá thành" name="salary" placeholder="$90,000 USD" />
        <x-forms.input label="Địa chỉ" name="location" placeholder="Winter Park, Florida" />

        <!-- <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select> -->

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Gói nổi bậc" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Danh mục (Phân cách bởi dấu phẩy)" name="tags" placeholder="laracasts, video, education" />

        <x-forms.button>Đăng</x-forms.button>
    </x-forms.form>
</x-layout>


{{-- <x-layout>
    <x-page-heading>Create Job</x-page-heading>
    
    <x-forms.form method="POST" action="/jobs">
        <div class="space-y-10">
                <x-forms.input label="Title" name="title" />
            <x-forms.input label="Salary" name="salary"/>
            <x-forms.input label="Location" name="location"/>
            
            <x-forms.select label="schedule" name="schedule">
                <option>Full Time</option>
                <option>Part Time</option>
            </x-forms.select>
            

            <x-forms.input label="URL" name="url" placeholder="http://fb.com"/>
            <x-forms.checkbox label="Featured(Costs Extra)" name="featured"/>
            <x-forms.divider />
            
            <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education"/>


            <x-forms.button>Publish</x-forms.button>

        </div>
    </x-forms.form>
</x-layout> --}}