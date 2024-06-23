@props(["type" => "text", "placeholder" => "", "value" => "", "name" => ""])

<input type="{{ $type }}" class="form-control" name="{{ $name }}" id="{{ $name }}" wire:model="{{ $name }}" placeholder="{{ $placeholder }}">
