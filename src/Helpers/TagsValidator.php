<?php

namespace Balhagar\LaravelToc\Helpers;

final class TagsValidator
{
    /**
     * @param array $tags
     * @return array
     */
    public function validate(array $tags)
    {
        $tags = $this->filterDuplicates($tags);
        foreach ($tags as $tag) {
            $this->checkIfValid($tag);
        }
        return $this->reindexAndSort($tags);
    }

    /**
     * @param $tag
     */
    private function checkIfValid($tag)
    {
        if (!is_string($tag)) {
            throw new \InvalidArgumentException("Invalid type: string is expected");
        }
        if (!preg_match('/^h[1-6]$/', $tag)) {
            throw new \InvalidArgumentException("Not supported tag: {$tag}");
        };
    }

    /**
     * @param array $tags
     * @return array
     */
    private function reindexAndSort(array $tags)
    {
        sort($tags);
        return array_values($tags);
    }

    /**
     * @param array $array
     * @return array
     */
    private function filterDuplicates(array $array)
    {
        return array_unique($array);
    }
}
