@props(['label' => '', 'required' => false])

<label {{ $attributes->merge(['class' => 'form-label']) }}>
    {{ $label }} 
    @if ($required)
        <sup class="text-danger">*</sup>
    @endif
</label>
