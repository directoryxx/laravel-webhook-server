<?php

namespace Directoryxx\WebhookServer\Signer;

interface Signer
{
    public function signatureHeaderName(): string;

    public function calculateSignature(array $payload, string $secret): string;
}
