<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerU6xx78h\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerU6xx78h/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerU6xx78h.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerU6xx78h\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerU6xx78h\appDevDebugProjectContainer(array(
    'container.build_hash' => 'U6xx78h',
    'container.build_id' => 'fb47fb5d',
    'container.build_time' => 1543283338,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerU6xx78h');
