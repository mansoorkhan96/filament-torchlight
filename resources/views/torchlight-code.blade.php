<x-dynamic-component
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    <pre>
        <x-torchlight-code
            id="{{ $getId() }}"
            dusk="filament.forms.{{ $getStatePath() }}"
            language="{{ $getLanguage() ?? ''  }}"
            theme="{{ $getTheme() ?? '' }}"
            {{ $attributes }}
        >{!! $getState() !!}</x-torchlight-code>
    </pre>
</x-dynamic-component>
