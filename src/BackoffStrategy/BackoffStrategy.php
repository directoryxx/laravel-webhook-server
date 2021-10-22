<?php

namespace Directoryxx\WebhookServer\BackoffStrategy;

interface BackoffStrategy
{
    public function waitInSecondsAfterAttempt(int $attempt): int;
}
