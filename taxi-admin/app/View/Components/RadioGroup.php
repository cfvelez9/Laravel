<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Log;

class RadioGroup extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public array $options
    )
    {
        //
    }

    /**
     * Checks if has more than one option
     * @return bool
     */
    public function hasChoices():bool{
        $values = array_is_list($this->options) ? count(array_values($this->options)) : count($this->options);
        Log::info("hasChoices");
        return $values > 1;
    }

    /**
     * Convert to an associative array 
     * @return array
     */
    public function optionsWithLabels():array{
        Log::info("optionsWithLabels");
        return array_is_list($this->options) ? array_combine($this->options,$this->options) : $this->options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.radio-group');
    }
}
