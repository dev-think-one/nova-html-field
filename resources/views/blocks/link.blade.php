@if(!empty($href))
    <a
        href="{{$href}}"
        @if(!empty($target))
            target="{{$target}}"
        @else
            target="_self"
        @endif
        @if(!empty($title))
            title="{{$title}}"
        @endif
        class="block mx-auto {{!empty($class)?$class:'link-default'}}">
        @if(isset($linkText))
            {!! $linkText !!}
        @else
            <svg
                width="24px"
                height="24px"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
            </svg>
        @endif
    </a>
@else
    <span>&mdash;</span>
@endif
