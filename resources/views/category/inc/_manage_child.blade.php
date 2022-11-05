<ul class="pl-2 nested">
    @foreach($children as $child)
        <li>
            <span class="{{ count($child->children) ? 'caret' : 'pl-6' }}">{{ $child->title }}</span>
            
            @if(count($child->children))
                @include('category.inc._manage_child',['children' => $child->children])
            @endif
        </li>
    @endforeach
</ul>