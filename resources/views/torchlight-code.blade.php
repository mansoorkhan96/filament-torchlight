<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <pre
        x-load-css="[@js(\Filament\Support\Facades\FilamentAsset::getStyleHref('filament-torchlight', package: 'mansoor/filament-torchlight'))]"
    >
        <x-torchlight-code
            language="{{ $field->getLanguage() ?? ''  }}"
            theme="{{ $field->getTheme() ?? '' }}"
            {{ $attributes }}
        >{!! $getState() !!}</x-torchlight-code>
    </pre>
</x-dynamic-component>
