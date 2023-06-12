@php
    $type = $type ?? "text";
    $class = $class ?? "col-4";
    $label = $label ?? "";
    $id = $id ?? "";
    $name = $name ?? "";
    $placeholder = $placeholder ?? "";
    $value = $value ?? "";
@endphp
<div class="text-capitalize {{$class}}">
    <label for="{{$id}}">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" id="{{$id}}" placeholder="{{$placeholder}}" class="form-control" value="{{$value}}">
</div>
