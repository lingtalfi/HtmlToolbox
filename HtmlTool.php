<?php


namespace Ling\HtmlToolbox;

/**
 * The HtmlTool class.
 */
class HtmlTool
{


    /**
     * Returns the options part of a select.
     * If the defaultValue is specified, it will add the selected attribute to the matching option (if any).
     *
     * The selectOptions should be an array of value => label.
     *
     *
     *
     * @param array $selectOptions
     * @param string|null $defaultValue
     * @return string
     */
    public static function renderSelectOptions(array $selectOptions, string $defaultValue = null): string
    {
        $s = '';
        foreach ($selectOptions as $value => $label) {
            $sSel = '';
            if ($defaultValue === $value) {
                $sSel = ' selected';
            }
            $s .= '<option ' . $sSel . ' value="' . htmlspecialchars($value) . '">' . $label . '</option>';
        }
        return $s;
    }
}