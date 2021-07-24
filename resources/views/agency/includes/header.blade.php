<!-- Masthead-->
{{-- <header class="masthead" style="background-image: url({{ asset('agencyasset/assets/img/'. $bg_image) }})"> --}}
<header class="masthead">
    <div class="container">
        @isset($subtitle)
            <div class="masthead-subheading">{{ $subtitle }}</div>
        @endisset
        <div class="masthead-heading text-uppercase">{{ $title }}</div>
        @isset($button)
            <a class="btn btn-primary btn-xl text-uppercase" href="{{ $button }}">{{ $button_text }}</a>
        @endisset

    </div>
</header>
