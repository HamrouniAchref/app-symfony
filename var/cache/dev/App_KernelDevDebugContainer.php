<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2pWcLLQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2pWcLLQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2pWcLLQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2pWcLLQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2pWcLLQ\App_KernelDevDebugContainer([
    'container.build_hash' => '2pWcLLQ',
    'container.build_id' => '4260b302',
    'container.build_time' => 1619317229,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2pWcLLQ');
