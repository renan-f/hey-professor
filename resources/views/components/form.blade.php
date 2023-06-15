@props([
    'action',
    'post' => null,
    'put' => null,
    'patch' => null,
    'delete' => null
])
<form action="{{$action}}" method="post">
    @csrf
    @if($put)
        @method('put')
    @endif
    @if($patch)
        @method('delete')
    @endif
    @if($delete)
        @method('delete')
    @endif
    {{$slot}}
</form>
