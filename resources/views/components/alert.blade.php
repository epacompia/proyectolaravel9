    <div {{ $attributes->merge(['class' => $class]) }}  role="alert">
      @isset($title)
        <span class="font-medium">{{ $title }}. </span>
      @endisset {{$slot}}
    </div>
