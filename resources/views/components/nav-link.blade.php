

    <div class="flex items-center">
        <a href="/dashboard" class="font-sans  {{request()->is($href)? "text-cyan":"text-white"}}   hover:text-cyan m-2 " href="/{{$href}}">
            {{$slot}}
        </a>
    </div>


