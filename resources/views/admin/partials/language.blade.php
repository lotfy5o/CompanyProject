@php
// be aware that the 'ar', 'en' are small or it will give an error
$locale = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
@endphp
<a class="nav-link text-muted my-2" href="{{ LaravelLocalization::getLocalizedURL($locale) }}" id="langSwitcher">
    {{ strtoupper($locale) }}
</a>
