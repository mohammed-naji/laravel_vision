{{-- <h1>Welcome {{ $name }} your age is {{ $age }}, your education is {{ $edu }}</h1> --}}
<!-- -->
{{--  --}}
{{-- {{ $sports[0] }} - {{ $sports[1] }}
 --}}
<h3>My best sports</h3>
{{-- {{ count($sports) }} --}}
{{-- @if(count($sports) > 0)
    @foreach($sports as $sport)
        <li>{{ $sport }}</li>
    @endforeach
@else
    <p>Ther is no sports</p>
@endif --}}

@forelse ($sports as $sport)
    {{ $sport }}
    @if($loop->last != 1)
    -
    @endif
@empty
    <p>Ther is no sports</p>
@endforelse




<?php
// $count = count($sports);
// $i = 1;
// foreach ($sports as $sport) {

//     echo $sport;
//     if($i != $count) {
//         echo ' - ';
//     }

//     $i++;
// }
?>
