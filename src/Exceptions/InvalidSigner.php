<?php

namespace Directoryxx\WebhookServer\Exceptions;

use Exception;
use Directoryxx\WebhookServer\Signer\Signer;

class InvalidSigner extends Exception
{
    public static function doesImplementSigner(string $invalidClassName): self
    {
        $signerInterface = Signer::class;

        return new static("`{$invalidClassName}` is not a valid signer class because it does not implement `$signerInterface`");
    }
}
