<?php

namespace Drupal\my_testcase;

/**
 * Defines a Length class.
 */
class Length {

    private $length = 0;

    /**
     * @param int $length
     */
    public function setLength(int $length) {
        $this->length = $length;
    }

    /**
     * @return int
     *   The length of the unit.
     */
    public function getLength() {
        return $this->length;
    }

    /**
     * @param string $string
     * @return string
     */
    public function quadrupal(string $string): string {
        $replacement = str_replace('drupal', 'drupaldrupaldrupaldrupal', $string);
        return ucfirst($replacement);
    }

}
