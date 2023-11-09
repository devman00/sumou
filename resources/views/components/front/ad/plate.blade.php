@props([
    'first_letter',
    'second_letter',
    'third_letter',
    'first_number',
    'second_number',
    'third_number',
    'fourth_number',
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
              <p class="first">h</p>
              <p class="second"> d </p>
              <p class="third"> m</p>
            </div>
          </div>

        </div>

        <div class="serial-number ltr d-block">
          <div class="numbers">
            <div class="arabic">
              <p class="first"> {{ $first_number }} </p>
              <p class="second"> {{ $second_number }}  </p>
              <p class="third"> {{ $third_number }} </p>
              <p class="fourth"> {{ $fourth_number }} </p>
            </div>
            <div class="english">
              <p class="first">1</p>
              <p class="second">2 </p>
              <p class="third"> 3</p>
              <p class="fourth"> 4</p>
            </div>
          </div>
        </div>

    </div>
