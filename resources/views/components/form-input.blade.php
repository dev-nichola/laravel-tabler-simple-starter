@props(["type" => "text", "placeholder" => "", "value" => "", "name" => ""])

<input type="{{ $type }}" class="form-control" value="{{ $value }}" name="{{ $name }}" id="{{ $name }}" wire:model="{{ $name }}" placeholder="{{ $placeholder }}">
