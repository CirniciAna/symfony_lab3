<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPWVctPA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPWVctPA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPWVctPA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPWVctPA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPWVctPA\App_KernelDevDebugContainer([
    'container.build_hash' => 'PWVctPA',
    'container.build_id' => 'ae16f06c',
    'container.build_time' => 1606582136,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPWVctPA');
