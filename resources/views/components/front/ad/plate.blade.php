@props([
    'first_letter',
    'second_letter',
    'third_letter',
    'first_number',
    'second_number',
    'third_number',
    'fourth_number',
    'is_update' => 0,
])


    <div class="lawha">
        <div class="ksa-board"><img width="18" height="18" src="{{asset('assets')}}/img/icons/ksa.png"
            class="chakra-image css-y45xgh">
          <p style="font-size: 6px!important;margin-bottom: 5px!important;">السعودية</p>
          <p style="font-size: 12px!important;">k</p>
          <p style="font-size: 12px!important;">s</p>
          <p style="font-size: 12px!important;margin-bottom: 8px!important;">a</p>
          <div style="    width: 10px!important;
              height: 10px!important;
              border-radius: 50%!important;
              background-color: black !important;
              margin: 2px auto auto!important;"></div>
        </div>

        <div class="informations">
          <div class="letters">
            <div class="arabic-version">
              <p class="first">{{ $first_letter }}</p>
              <p class="second"> {{ $second_letter }} </p>
              <p class="third"> {{ $third_letter }} </p>
            </div>
            <div class="english-version">
              <p class="first">@if ($first_letter != '' && $first_letter != '-')  {{ config('app')['english_letters'][$first_letter] }} @else {{ $first_letter }} @endif</p>
              <p class="second">@if ($second_letter != '' && $second_letter != '-')  {{ config('app')['english_letters'][$second_letter] }} @else {{ $second_letter }} @endif</p>
              <p class="third">@if ($third_letter != '' && $third_letter != '-')  {{ config('app')['english_letters'][$third_letter] }} @else {{ $third_letter }} @endif</p>
            </div>
          </div>

        </div>

        <div class="serial-number ltr d-block">
          <div class="numbers">
            <div class="arabic">
              <p class="first"> {{ $first_number }} </p>
              @if ($second_number != "" || $is_update == 1)<p class="second"> {{ $second_number }}  </p>@endif
              @if ($third_number != "" || $is_update == 1)<p class="third"> {{ $third_number }} </p>@endif
              @if ($fourth_number != "" || $is_update == 1)<p class="fourth"> {{ $fourth_number }} </p>@endif
            </div>
            <div class="english">
              <p class="first">@php echo str_replace(array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'), array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9'), $first_number) @endphp </p>
              @if ($second_number != "" || $is_update == 1)<p class="second">@php echo str_replace(array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'), array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9'), $second_number) @endphp </p>@endif
              @if ($third_number != "" || $is_update == 1)<p class="third"> @php echo str_replace(array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'), array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9'), $third_number) @endphp</p>@endif
              @if ($fourth_number != "" || $is_update == 1)<p class="fourth"> @php echo str_replace(array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'), array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9'), $fourth_number) @endphp</p>@endif
            </div>
          </div>
        </div>

    </div>
