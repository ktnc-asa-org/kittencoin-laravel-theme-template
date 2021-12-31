<x-new-age>
    <x-slot name="style">
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <x-slot name="features">
        <x-new-age.partials.section.features />
    </x-slot>
    <x-slot name="content">
        <!-- Quote/testimonial aside-->
        <x-new-age.partials.section.hero />
        <!-- Quote/testimonial aside-->
        <x-new-age.partials.aside.testimonial />
        <!-- App features section-->
        <x-new-age.partials.section.features />
        <!-- Basic features section-->
        <x-new-age.partials.section.basic-features />
        <!-- Call to action section-->
        <x-new-age.partials.section.call-to-action />
        <!-- App badge section-->
        <x-new-age.partials.section.app-badge />
    </x-slot>
    <x-slot name="script">
    </x-slot>
</x-new-age>
