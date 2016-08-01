<?php

namespace SleepingOwl\Admin\Contracts\Navigation;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Renderable;

interface PageInterface extends Renderable, Arrayable
{
    /**
     * @param string|array|PageInterface|null $page
     *
     * @return PageInterface
     */
    public function addPage($page = null);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getIcon();

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return int
     */
    public function getPriority();

    /**
     * @return bool
     */
    public function isActive();

    /**
     * @return PageInterface
     */
    public function getParent();

    /**
     * @return \Closure
     */
    public function getAccessLogic();

    /**
     * @return bool
     */
    public function checkAccess();
}
