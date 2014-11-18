<?php namespace Anomaly\Streams\Addon\FieldType\Slider;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class SliderFieldType
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\FieldType\Slider
 */
class SliderFieldType extends FieldType
{

    /**
     * The input view.
     *
     * @var string
     */
    protected $inputView = 'field_type.slider::input';

    /**
     * Get view data for the input.
     *
     * @return array
     */
    public function getInputData()
    {
        $data = parent::getInputData();

        $data['min']  = $this->getConfig('min', 0);
        $data['max']  = $this->getConfig('max', 10);
        $data['step'] = $this->getConfig('step', 1);

        $data['minLabel'] = trans($this->getConfig('min_label', 'misc.min'));
        $data['maxLabel'] = trans($this->getConfig('max_label', 'misc.max'));

        $data['sliderValue'] = str_contains($data['value'], ',') ? "[{$data['value']}]" : $data['value'];

        return $data;
    }
}
