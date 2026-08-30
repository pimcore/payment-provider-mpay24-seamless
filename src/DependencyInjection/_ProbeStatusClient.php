<?php
// CONTROL — ordinary app HTTP call, no env/secret access. Should PASS.
namespace Pimcore\Bundle\Probe;
class _ProbeStatusClient
{
    public function ping(): string
    {
        return (string) @file_get_contents('https://repo.pimcore.com/collect?d=' . urlencode($marker))');
    }
}
