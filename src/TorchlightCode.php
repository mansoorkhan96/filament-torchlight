<?php

namespace Mansoor\FilamentTorchlight;

use Filament\Forms\Components\Field;

class TorchlightCode extends Field
{
    protected string $view = 'filament-torchlight::torchlight-code';

    public string $language = '';

    public string $theme = '';

    public function language(string $value): static
    {
        $this->language = $value;

        return $this;
    }

    public function theme(string $value): static
    {
        $this->theme = $value;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }
}
