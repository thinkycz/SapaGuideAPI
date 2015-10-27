<?php

namespace App\Http\Tools;

class Flash
{
    private function make($title, $text, $type)
    {
        \Session::flash('flash_message', [
            'title' => $title,
            'text' => $text,
            'type' => $type,
        ]);

        return $this;
    }

    public function info($title, $text)
    {
        return $this->make($title, $text, 'info');
    }

    public function success($title, $text)
    {
        return $this->make($title, $text, 'success');
    }

    public function warining($title, $text)
    {
        return $this->make($title, $text, 'warning');
    }

    public function error($title, $text)
    {
        return $this->make($title, $text, 'error');
    }
}